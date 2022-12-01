@extends('template.master')

@section('judul')
    <h1>judul</h1>
@endsection

@section('content')

<!-- {{ var_dump ($dataSiswa); }} -->
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
          <th>NISN</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
          @forelse ($dataSiswa as $item=>$value)
         <tr>
            <td>{{ $item + 1 }}</td>
            <td>{{ $value->nomor_induk_siswa }}</td>
            <td>{{ $value->nama }}</td>
            <td>
                {{$value->jenis_kelamin}}
            </td>
            <td>
            <form action="/student/{{ $value->id }}" method="POST">

            <a class="btn btn-sm btn-info mr-3" href="student/{{$value->id}} ">Detail</a>
            <a class="btn  btn-sm btn-warning mr-3" href="student/{{$value->id}}/edit ">Edit</a>
                @csrf
                @method('DELETE')
              <input type="submit" class="btn btn-sm btn-danger mr-3" value="delete">
            </form>
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