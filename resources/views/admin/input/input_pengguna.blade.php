@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah data user</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data user</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<form style="width:730px;margin-left:35px;" action="pengguna/storepengguna" method="post">
{{ csrf_field() }}
<br>
  
  <div class="form-group">
    <label for="username">Username :</label>
    <input type="username" class="form-control" placeholder="Masukkan username " required="required" name="username">
  </div>
  <div class="form-group">
    <label for="name">Name :</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" required="required" name="name">
  </div>
  <div class="form-group">
    <label for="password">Password :</label>
    <input type="password" class="form-control" placeholder="Masukkan password " required="required" name="password"/>
  </div>

<!--bagian button-->
<div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="pengguna"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form></div>

@endsection
