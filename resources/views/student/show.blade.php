@extends('template.master')

@section('judul')
<h1>MANAJEMEN SISWA</h1>
@endsection

@section('content')
<div class="row">
          <!-- left column -->
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Masukkan NIS" value="{{ $showSiswaById->nomor_induk_siswa}}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Masukkan Nama" value="{{ $showSiswaById->nama }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Masukkan alamat" value="{{ $showSiswaById->alamat }}" disabled></textarea>
                  </div>
                  <div class="form-group">
                  <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="L" disabled {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option value="P" disabled {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                </select>
                   </div>
           </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Back</button>
                </div>
              </form>
            </div>
@endsection