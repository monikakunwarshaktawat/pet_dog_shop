@extends('user/app')
@section('header')
 <header class="masthead" style="background-image: url('{{ Storage::url($post->image) }}');">
    <div class="overlay" style="opacity: 0"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>@yield('title')</h1>
            <span class="subheading">@yield('subheading')</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  @endsection
@section('main-content')
 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created at {{$post->created_at->diffForHumans()}}</small>
         <br>
        <small> <b>Category:-</b></small>
          @foreach($post->categories as $category)
          <small class="mr-3">
            <a href="{{route('category',$category->slug)}}"> {{$category->name}}</a>
          </small>

          @endforeach
          {!!htmlspecialchars_decode($post->body)!!}
          <b>Tags:-</b>
          @foreach($post->tags as $tag)
          <small class="mr-3">
            <b> <a href="{{route('tag',$tag->slug)}}"> #{{$tag->name}}</a></b>
          </small>

          @endforeach
            <hr />
                    <h4>Display Comments</h4>
  
                    @include('user.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
   
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('comments.store'   ) }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>
        </div>
      </div>
    </div>
  </article>

  <hr>

@endsection 