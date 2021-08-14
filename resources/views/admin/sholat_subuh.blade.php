@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data sholat subuh</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="quiz">Home</a></li>
              <li class="breadcrumb-item active">Sholat subuh</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  <div class="form-group">
    <label for="deskripsi">Deskripsi :</label>
    <textarea style="text-align:justify;" rows="15" type="text" class="form-control" placeholder="Masukkan deskripsi" required="required" name="deskripsi" value="">{{ $li->deskripsi }}</textarea> 
  </div>

  <table style="margin-left:20px;margin-top:10px;width:1065px;" id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
   <thead>
    <tr>
      <th class="th-sm">No</th>
      <th class="th-sm">Judul</th>
      <th class="th-sm">Deskripsi</th>
      
      <th class="th-sm">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <!--Untuk menampilkan tabel berita dari database-->
  <?php $no = 0;?>
  @foreach($liat as $li)
  <?php $no++ ;?>
    <tr>
        <td>{{ $no }}</td>
        <td>{{ $li->judul }}</td>
        <td style="text-align:justify;">{{ $li->deskripsi }}</td>
       

        <td>
            <a href="/edit_subuh/{{ $li->id }}"><button style="width:68px;" title="Edit" type="button"  class="btn btn-warning">Edit</button></a>

            <a href="/sholat_subuh/hapus/{{ $li->id }}"><button style="margin-top:5px;" onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger">Hapus</button></a>
        </td>
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>

 </div>

@endsection
