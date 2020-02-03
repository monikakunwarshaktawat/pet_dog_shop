 @extends('admin/layouts/app')
 @section('headsection')
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
 @endsection
@section('main-content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>
               @include('includes/message')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Post title" name="title">
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Post SubTitle</label>
                    <input type="text" class="form-control" id="subtitle" placeholder="Enter Post subtitle" name="subtitle">
                  </div>
                   <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="Enter Post slug" name="slug">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                   <div class="row">
          <!-- left column -->
          <div class="col-md-6">
                <div class="form-group" data-select2-id="29">
                  <label>Select category</label>
                  <select  class="select2 select2-hidden-accessible"  multiple="" data-placeholder="Select a Category" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="categories[]">
                     @foreach($categories as $category)
                    <option  value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                 <div class="form-group" data-select2-id="30">
                  <label>Select Tags</label>
                  <select  class="select2 select2-hidden-accessible"  multiple="" data-placeholder="Select a Tag" style="width: 100%;" data-select2-id="8" tabindex="-1" aria-hidden="true" name="tags[]">
                     @foreach($tags as $tag)
                    <option  value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                  </select>
                </div>
                <!-- /.card-body -->
                 </div>
                 </div> 
                
                <!-- /.card-body -->
                        <div class="row">

        <div class="col-md-12">
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">
                Write Post body here.
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
               
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
              <div class="mb-3">
                <textarea  name="body"  id="editor"
                          style="width: 100%; height: 700px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
            
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
       <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" value="1">
                    <label class="form-check-label" >Publish</label>
                  </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{route('post.index')}}">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
 
      <!-- ./row -->
    </section>
    <!-- /.content -->


  @endsection
   @section('footersection')
   <script src="{{asset('admin/dist/js/demo.js')}}"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
  $(document).ready(function(){
    $(".select2").select2();
  });
</script>
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endsection