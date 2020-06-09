@extends('admin/layouts/app')
@section('main-content')
  <div class="card card-primary">
  	<div class="card-header">
  		<h4>Create Album</h4>
  	</div>
  	<div class="card-body">
<form role="form" action="{{route('album.store')}}" method="post" enctype="multipart/form-data">
               {{csrf_field()}}
  <div class="form-group">
    <label for="name">Album Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Album name">
    
  </div>
  <div class="form-group">
    <label for="description">Album Description</label>
    <input type="text" class="form-control" name="description"  placeholder="Enter Album Description">
  </div>
  <div class="form-group">
    <label for="cover_image">Album Image</label>
    <input type="file" name="cover_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-danger" href="{{route('album.index')}}">Back</a>
</form>
</div>
</div>
@endsection