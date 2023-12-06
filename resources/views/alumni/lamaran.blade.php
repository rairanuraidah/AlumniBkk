<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dokument</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-600"></h1>
    </div>
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-bold text-primary"></h6>
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">Nis</label>
                            <input type="text" name="nis" id="nis" class="form-control" value="{{ $lamaran->nis }}" placeholder="Masukan Nis ">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Lowongan Pekerjaan</label>
                            <input type="text" name="id_loker" id="id_loker" class="form-control" value="{{ $lamaran->id_loker }}" placeholder="Masukan Loker ">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Surat Lamaran</label>
                            <input type="File" name="surat_lamaran" id="surat_lamaran"  class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">CV</label>
                            <input type="File" name="cv" id="cv"  class="form-control">
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
@endsection