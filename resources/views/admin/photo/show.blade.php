@extends('admin/layouts/app')
@section('headsection')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('main-content')


<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title" style="flo">Album</h3>
      
        </div>
        <div class="card-body">
        
        @if (count($albums) > 0 )
        <div class="album py-5 bg-light">
          <div class="container">
           <div class="row">
             @foreach ($albums as $album)
             <div class="col-md-4">
              <div class="card mb-4 shadow-sm " style="width: 15 rem">
                <div class="card-header text-center"> 
                  <h4  style='font-family: "Comic Sans MS", cursive, sans-serif;'><b>{{$album->name}}</b></h4>
                <img class="card-img-top "src="{{ asset('storage/album_covers/'.$album->cover_image) }}" width="100%" height="225">
              </div>
                <div class="card-body ">
                  <p class="card-text" style="color:black"><i>{{$album->description}}</i></p>
                  <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                      <button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> </button>
                       &emsp;
                      <button type="button" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i> </button>
                       &emsp;
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                        &emsp;
                      
                        <a href="{{route('photo.create',$album->id)}}"><button type="button" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true">Add new photo</i> </button></a>
                    </div>
                 
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      @else

      <p class="bg-info">No album found yet</p>

      @endif
    </div>
  </div>
  @endsection
