
<!doctype html>
<html lang="en">

  <body>
    <p style="text-align:center;">
    <img src="{{ asset('storage/albums/'.$photo->album_id.'/'.$photo->photo) }}"width="800" height="500">
<h3 style="text-align:center;">{{$photo->title}}</h3>
  </p>
  </body>
</html>
