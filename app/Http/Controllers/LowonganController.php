<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use DB;

class LowonganController extends Controller
{
    function show(){
        $data['lowongan'] = DB::table('lowongan')
        ->leftJoin('perusahaan', 'lowongan.id_perusahaan', '=', 'perusahaan.id_perusahaan')
        ->get();
  
        return view('admin.lowongan', $data);
      }

    function add(){
        $perusahaan = DB::table('perusahaan')->get();
        $data =[
            'action'=>url('lowongan/create'),
            'tombol'=>'simpan',
            'lowongan'=>(object)[
                'id_perusahaan'=>'',
                'judul'=>'',
                'deskripsi'=>'',
                'tanggal'=>'',
            ]
            ];
            return view('admin.form_lowongan',[ 'perusahaan'=>$perusahaan],$data);
    }

    function create(Request $request){
        Lowongan::create([
            'id_perusahaan'=> $request->id_perusahaan,
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'tanggal'=> $request->tanggal,
        ]);
        return redirect('lowongan');
    }
    
    function delete($id){
        Lowongan::where('id_loker',$id)->delete();
        return redirect('lowongan');
    }

    function edit($id){ 
        $data['perusahaan']  = DB::table('perusahaan')->get();
        $data['lowongan'] = Lowongan::where('id_loker', $id)->first();
        $data['action'] = url('lowongan/update').'/'.$data['lowongan']->id_loker;
        $data['tombol'] = "Update";

        return view('admin.form_lowongan',$data);
    }

    function update(Request $request){
        Lowongan::where('id_loker', $request->id_loker)->update([
            'id_perusahaan'=> $request->id_perusahaan,
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi,
            'tanggal'=> $request->tanggal,
        ]);
        return redirect('lowongan');
    }

    function lowongan(){
        $perusahaan = DB::table('perusahaan')->get();
        $data =[
            'action'=>url('lowongan/create'),
            'tombol'=>'simpan',
            'lowongan'=>(object)[
                'id_perusahaan'=>'',
                'judul'=>'',
                'deskripsi'=>'',
                'tanggal'=>'',
            ]
            ];
            return view('alumni.lowongan',['perusahaan'=>$perusahaan],$data);
    }
}
