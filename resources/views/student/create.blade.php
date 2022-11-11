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
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Masukkan NIS">
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="inputAlamat" rows="3" placeholder="Masukkan alamat"></textarea>
                  </div>
                  <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin">
                        <option disabled selected>-- Pilih Salah Satu --</option>
                          <option value=P>Perempuan</option>
                          <option value=L>Laki-Laki</option>
                        </select>
                   </div>
           </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection