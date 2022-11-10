<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href= "{{ asset ('adminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('template.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.partials.sidebar')


    <!-- Content Header (Page header) -->
    @include('template.partials.judul')

    <!-- Main content -->
   @include('template.partials.content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Template Footer -->
    @include('template.partials.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('adminLTE/plugins/jquery/jquery.min.js') }}"> </script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"> </script>
<!-- AdminLTE App -->
<script src="{{ asset ('adminLTE/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('adminLTE/dist/js/demo.js') }}"> </script>

</body>
</html>
