@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah data latihan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data latihan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<form style="width:730px;margin-left:35px;" action="quiz/storequiz" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="materi">Materi :</label>
    <select type="text" class="form-control" placeholder="Materi" required="required" name="materi">
        <option>-- Pilihan Materi Belajar --</option>
        <option>Sholat Subuh</option>
        <option>Sholat Dhuhur</option>
        <option>Sholat Ashar</option>
        <option>Sholat Maghrib</option>
        <option>Sholat Isya</option>
        <option>Berwudhu</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Pertanyaan">Pertanyaan :</label>
    <input type="text" class="form-control" placeholder="Masukkan pertanyaan " required="required" name="pertanyaan">
  </div>
  <div class="form-group">
    <label for="pilihan_a">Pilihan A :</label>
    <input type="text" class="form-control" placeholder="Pilihan_a" required="required" name="pilihan_a">
  </div>
  <div class="form-group">
    <label for="pilihan_b">Pilihan B :</label>
    <input type="text" class="form-control" placeholder="Pilihan_b" required="required" name="pilihan_b">
  </div>
  <div class="form-group">
    <label for="pilihan_c">Pilihan C :</label>
    <input type="text" class="form-control" placeholder="Pilihan_c" required="required" name="pilihan_c">
  </div>
  <div class="form-group">
    <label for="pilihan_c">Pilihan D :</label>
    <input type="text" class="form-control" placeholder="Pilihan_c" required="required" name="pilihan_d">
  </div>

<!--bagian button-->
<div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-700px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
    <a href="quiz"><button  title="Edit" type="button"  class="btn btn-primary">Kembali</button></a>
  </div>

</form></div>

@endsection
