@extends('admin/layouts/app')
@section('main-content')

<div class="card card-primary">
 <div class="card-header">
  <h4>Add Photo</h4>
</div>
<div class="card-body">
  <form role="form" action="{{route('photo.store')}}" method="post" enctype="multipart/form-data">
   {{csrf_field()}}
   <input type="hidden" name="albumId" value="{{$albumId}}">
   <div class="form-group">
    <label for="name">Photo Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Photo name">
    
  </div>
  <div class="form-group">
    <label for="description">Photo Description</label>
    <input type="text" class="form-control" name="description"  placeholder="Enter Photo Description">
  </div>
  <div class="form-group">
    <label for="cover_image">Photo Image</label>
    <input type="file" name="cover_image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-danger" href="{{route('album.index')}}">Back</a>
</form>
</div>
</div>
@endsection