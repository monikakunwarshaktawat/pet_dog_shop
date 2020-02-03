<!DOCTYPE html>
<html>
@include('admin/layouts/head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
	@include('admin/layouts/header')
	@include('admin/layouts/sidebar')
	 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @section('main-content')
      @show
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
	@include('admin/layouts/footer')
</div>
</body>

</html>
