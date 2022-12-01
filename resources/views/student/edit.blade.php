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
              <form action="/student/{{ $showSiswaById->id }}" method="POST">
                @csrf
                @method('PUT');
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Masukkan NIS" value="{{ $showSiswaById->nomor_induk_siswa}}" >
                    @error('nis')  
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Masukkan Nama" value="{{ $showSiswaById->nama }}" >
                    @error('nama')  
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Masukkan alamat" value="{{ $showSiswaById->alamat }}" >
                    @error('alamat')  
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                  <div class="form-group">
                  <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" >
                  <option value="L" {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option value="P" {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                 </select>
                   </div>
           </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
              </form>
            </div>
@endsection