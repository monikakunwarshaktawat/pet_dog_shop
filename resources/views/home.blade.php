@extends('user/app')
@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title',"Welcome")
@section('subheading',)
@section('main-content')
 <article>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
  </article>

  <hr>

@endsection 
