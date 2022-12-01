@extends('template.master')

@section('judul')
    <h1>INI HALAMAN INDEX CLASS</h1>
@endsection

@section('content')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="data-table" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>NO</th>
          <th>Nama Kelas</th>
          <th>Jurusan</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
          @forelse ($datakelas as $item=>$value)
         <tr>
            <td>{{ $item + 1 }}</td>
            <td>{{ $value->nama_kelas }}</td>
            <td>{{ $value->jurusan }}</td>
            <td>
            <a class="btn btn-info mr-3" href="class/{{$value->id}} ">Detail</a>
            <a class="btn btn-warning mr-3" href="class/{{$value->id}}/edit ">Edit</a>
            <button class="btn btn-danger">Delete</button>
            </td>
         </tr>
        @empty       
        <tr>
            <td>Data Masih Kosong</td>
        </tr>
        @endforelse
        </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@push('scripts')
<script src="{{ asset ('adminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
      $("#data-table").DataTable();
      
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endpush