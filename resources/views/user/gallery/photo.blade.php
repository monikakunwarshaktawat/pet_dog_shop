@extends('user/app')
@section('header')

 <header class="masthead" style="background-image: url('{{ Storage::url('album_covers/'.$Album->cover_image) }}')">
    <div class="overlay" style="opacity: 0"></div>
    <div class="container">
      <div class="row"> 
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
          
          </div>
        </div>
      </div>
    </div>
 </header>
 @endsection
@section('main-content')
 <div class="card">
  
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
                  
                </div>
                    <div class="card-footer"> <a href="{{route('getphoto',$photo->id)}}"><i class="fa fa-eye" aria-hidden="true"> View photos</i></a></div>
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