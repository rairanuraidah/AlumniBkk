<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Lowongan;

class LandingController extends Controller
{
    function index_per(){
        $data['perusahaan'] = Perusahaan::all();
  
        return view('landing_page.features',$data);
      }
      function index_loker(){
        $data['lowongan'] = Lowongan::all();
        $data['perusahaan'] = Perusahaan::all();
        
        return view('landing_page.blog', $data);

      }
}
