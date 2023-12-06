<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dokument</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    {{-- @extends('admin.sidebar')
    @section('content') --}}
    <body>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-600"></h1>
    </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-bold text-primary"></h6>
                </div>
                <div class="card-body p-5">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_loker" name="id_loker" value="{{ $lamaran->id_loker }}">
                         <div class="mb-2">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $lamaran->nama }}" placeholder="Masukan Nama ">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-select">
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki" {{ $lamaran->jk=='Laki-laki'?'selected':'' }} >Laki-laki</option>
                                <option value="Perempuan" {{ $lamaran->jk=='Perempuan'?'selected':'' }} >Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-select">
                                <option value="">-- Pilih --</option>
                                <option value="RPL" {{ $lamaran->jurusan=='RPL'?'selected':'' }} >RPL</option>
                                <option value="TKJ" {{ $lamaran->jurusan=='TKJ'?'selected':'' }} >TKJ</option>
                                <option value="MM" {{ $lamaran->jurusan=='MM'?'selected':'' }} >MM</option>
                                <option value="DPIB" {{ $lamaran->jurusan=='DPIB'?'selected':'' }} >DPIB</option>
                                <option value="Teklin" {{ $lamaran->jurusan=='Teklin'?'selected':'' }} >Teklin</option>
                                <option value="TBSM" {{ $lamaran->jurusan=='TBSM'?'selected':'' }} >TBSM</option>
                                <option value="TKRO" {{ $lamaran->jurusan=='TKRO'?'selected':'' }} >TKRO</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Tanggal lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $lamaran->tgl_lahir }}" placeholder="Masukan Tanggal Lahir ">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $lamaran->alamat }}" placeholder="Masukan Alamat">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $lamaran->telepon }}" placeholder="Masukan Telepon">
                        </div> 
                        <div class="mb-2">
                            <label for="" class="form-label">Tahun Ajaran</label>
                            <input type="text" name="thn_ajaran" id="thn_ajaran" class="form-control" value="{{ $lamaran->thn_ajaran }}" placeholder="Masukan Tahun Ajaran ">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Foto</label>
                            <input type="File" name="foto" id="foto"  class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Lowongan Pekerjaan</label>
                            <select name="id_perusahaan" id="id_perusahaan" class="form-select" >
                                <option value="">Lowongan Pekerjaan</option>
                                @foreach ($lowongan as $item)
                                <option value="{{ $item->id_loker }}" name="id_loker" {{ $item->id_loker==$lamaran->id_loker?'selected':'' }}> {{ $item->judul }}</option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="mb-2">
                            <td colspan="2" align="center">    
                                <input class="btn btn-primary" type="submit" value="{{ $tombol }}" style="width: 100%">
                            </td>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>
{{-- @endsection --}}