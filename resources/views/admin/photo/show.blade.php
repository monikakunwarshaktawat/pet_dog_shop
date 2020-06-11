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
    <h2 class="card-title text-center" style='font-family: "Comic Sans MS", cursive, sans-serif;'><b>{{$Album->name}}</b></h2>
    <div class="card-header">
      
    <img class="card-img-top "src="{{ asset('storage/album_covers/'.$Album->cover_image) }}" width="100%" height="425">
        </div>
        <div class="card-body">
        
        @if (count($Album->photos) > 0 )
        <div class="album py-5 bg-light">
          <div class="container">
           <div class="row">
             @foreach ($Album->photos as $photo)
             <div class="col-md-4">
              <div class="card mb-4 shadow-sm " style="width: 15 rem">
                <div class="card-header text-center"> 
                  <h4  style='font-family: "Comic Sans MS", cursive, sans-serif;'><b>{{$photo->title}}</b></h4>
                <img class="card-img-top "src="{{ asset('storage/albums/'.$Album->id.'/'.$photo->photo) }}" width="100%" height="225">
              </div>
                <div class="card-body ">
                  <p class="card-text" style="color:black"><i>{{$photo->description}}</i></p>
                  <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                      
                      
                      <button type="button" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i> </button>
                       &emsp;
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                        
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
