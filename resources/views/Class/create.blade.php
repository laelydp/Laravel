@extends('template.master')

@section('judul')
<h1>MANAJEMEN KELAS</h1>
@endsection

@section('content')
<div class="row">
          <!-- left column -->
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Class</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/class" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nama Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="inputKelas" placeholder="Masukkan Nama Kelas">
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputJurusan" placeholder="Masukkan Jurusan">
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection