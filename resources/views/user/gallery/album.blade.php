@extends('user/app')

@section('main-content')
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
                  
                </div>
                <div class="card-footer"> <a href="{{route('photos',$album->id)}}"><i class="fa fa-eye" aria-hidden="true"> View photos</i></a></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
@endsection