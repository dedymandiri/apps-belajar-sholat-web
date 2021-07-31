@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/quiz/update/{{ $li->id_quiz }}" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="materi">Materi :</label>
    <select type="text" class="form-control" placeholder="Materi" required="required" name="materi" value="">
        <option>{{ $li->materi }}</option>
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
    <label for="soal_quiz">Soal Quiz :</label>
    <input type="text" class="form-control" placeholder="soal_quiz " required="required" name="soal_quiz" value="{{ $li->soal_quiz }}"/>
  </div>
  <div class="form-group">
    <label for="pilihan_a">Pilihan A :</label>
    <input type="text" class="form-control" placeholder="Pilihan_a" required="required" name="pilihan_a" value="{{ $li->pilihan_a }}"/>
  </div>
  <div class="form-group">
    <label for="pilihan_b">Pilihan B :</label>
    <input type="text" class="form-control" placeholder="Pilihan_b" required="required" name="pilihan_b" value="{{ $li->pilihan_b }}"/>
  </div>
  <div class="form-group">
    <label for="pilihan_c">Pilihan C :</label>
    <input type="text" class="form-control" placeholder="Pilihan_c" required="required" name="pilihan_c" value="{{ $li->pilihan_c }}"/>
  </div>
  <div class="form-group">
    <label for="pilihan_d">Pilihan D :</label>
    <input type="text" class="form-control" placeholder="Pilihan_d" required="required" name="pilihan_d" value="{{ $li->pilihan_d }}"/>
  </div>

  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-780px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  </div>
</form>
@endforeach

</div>

@endsection