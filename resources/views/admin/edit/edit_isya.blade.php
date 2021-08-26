@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit data sholat isya</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Sholat isya</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

@foreach($liat as $li)
<form style="width:730px;margin-left:35px;" action="/sholat_isya/update/{{ $li->id }}" method="post">
{{ csrf_field() }}
<br>
  <div class="form-group">
    <label for="judul">Judul :</label>
    <input type="text" class="form-control" placeholder="Masukkan judul" required="required" name="judul_isya" value="{{ $li->judul_isya }}"/>
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi :</label>
    <textarea style="text-align:justify;" rows="15" type="text" class="form-control" placeholder="Masukkan deskripsi" required="required" name="deskripsi_isya" value="">{{ $li->deskripsi_isya }}</textarea> 
  </div>
  

  <div style="margin-top:105px;width:930px;margin-left:-35px;" class="card-header info-color white-text text-center py-4">
    
    <button style="margin-left:-780px;" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
  
  </div>
</form>
@endforeach

</div>

@endsection
