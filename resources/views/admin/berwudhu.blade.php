@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data berwudhu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="quiz">Home</a></li>
              <li class="breadcrumb-item active">Berwudhu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

   <!-- <div style="margin-left:10px;" class="col-sm-4">
       <a href="/input_wudhu"><button type="button" class="btn btn-success">Tambah Data</button></a>
       Search form 
       <input style="margin-top:-40px;margin-left:830px;width:250px" class="form-control" type="text" placeholder="Search" aria-label="Search"> 
    </div> -->

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
        <td>{{ $li->judul_wudhu }}</td>
        <td style="text-align:justify;">{{ $li->deskripsi_wudhu }}</td>
       

        <td>
            <a href="/edit_wudhu/{{ $li->id }}"><button style="width:68px;" title="Edit" type="button"  class="btn btn-warning">Edit</button></a>

            <!-- <a href="/sholat_wudhu/hapus/{{ $li->id_wudhu }}"><button style="margin-top:5px;" onclick="return confirm('Apakah anda yakin hapus data?')" title="Hapus" type="button" class="btn btn-danger">Hapus</button></a> -->
        </td>
    </tr>
    @endforeach
  </tbody>
  </table>
  <br>

 </div>

@endsection
