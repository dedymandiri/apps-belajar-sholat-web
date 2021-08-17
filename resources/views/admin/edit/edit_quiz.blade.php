@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit data latihan</h1>
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

@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/quiz/update/{{ $li->id }}" method="post">
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
    <label for="soal">Soal :</label>
    <input type="text" class="form-control" placeholder="Masukkan soal " required="required" name="soal" value="{{ $li->soal }}"/>
  </div>
  <div class="form-group">
    <label for="pilihan_a">Pilihan A :</label>
    <input type="text" class="form-control" placeholder="Masukkan pilihan a" required="required" name="a" value="{{ $li->a }}"/>
  </div>
  <div class="form-group">
    <label for="pilihan_b">Pilihan B :</label>
    <input type="text" class="form-control" placeholder="Masukkan pilihan b" required="required" name="b" value="{{ $li->b }}"/>
  </div>
  <div class="form-group">
    <label for="pilihan_c">Pilihan C :</label>
    <input type="text" class="form-control" placeholder="Masukkan pilihan c" required="required" name="c" value="{{ $li->c }}"/>
  </div>
  <div class="form-group">
    <label for="jwaban">Jawaban :</label>
    <input type="text" class="form-control" placeholder="Masukkan jwaban" required="required" name="jwaban" value="{{ $li->jwaban }}"/>
  </div>
  
  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    <button style="margin-left:-780px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  </div>
</form>
@endforeach

</div>

@endsection
