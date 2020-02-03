@extends('admin/layouts/app')
@section('headsection')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('main-content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tag</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
         <div class="card">
            <div class="card-header">
              <h3 class="card-title"> <a href="{{route('tag.create')}}" class="col-md-offset-15 btn btn-info" >Add new Tag</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($tags as $tag)
                  <tr>
                  <td>{{$loop->index +1}}</td>
                  <td> {{$tag->name}}</td>
                  <td>{{$tag->slug}}</td>
                  <td><a href="{{route('tag.edit',$tag->id)}}"> Edit</a></td>
                  
                    <form id="delete-form-{{$tag->id}}" action="{{route('tag.destroy',$tag->id)}}" method="post" >
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                    </form>
                    <td>
                 <a href="" onclick="
                 if(confirm('Are you sure want to delete it?'))
                 {
                    event.preventDefault();
                  document.getElementById('delete-form-{{$tag->id}}').submit();
                }
                else{
                  event.preventDefault();
                }
                ">Delete</a> 
                </td>
                </tr>
                  @endforeach
               
               
              
                </tbody>
                <tfoot>
                <tr>
                 <th>S.No.</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
@endsection
@section('footersection')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection