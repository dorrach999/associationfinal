<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
    form{
    position: absolute;
    color: #fff;
  	width:500px;
    height: auto;
    background-color: #3d3d3d;
    border-radius: 40px;
    box-shadow: 0px 0px 15px #000;
    align-content: center;
    margin-top: 5px;
    padding: 10px;
    margin-left:6em;
    }
  </style>
  <body>
    @include("admin.nav")
    <div class="container-scroller">

    @include("admin.navbar")
    <div style="position: relative; top: 60px; right: -140px;text-align:center;">
    <form action="{{url('/updatexevent',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div>
        <label style="color:#fff ;font-family: Lucida Console;margin-left:-120px;">Event Name :</label>
        <input style="color: blue" type="text" name="name" value="{{$data->name}}">
        
      </div><br>
      <div>
        <label style="color:#fff ;font-family: Lucida Console;margin-left:-60px;">Event Description :</label>
        <input style="color: blue" type="text" name="name" value="{{$data->description}}">
        
      </div><br>

      <div>
        <label style="color:#fff ;font-family: Lucida Console;margin-left:-150px;">Old Image :</label>
        <input height="200" width="200" src="/eventimage/{{$data->image}}">
        
      </div><br> 

      <div>
        <label style="color:#fff ;font-family: Lucida Console;">New Image :</label>
        <input type="file" name="image">
        
      </div><br>

      <div>
        
        <input  class="btn btn-dark" style="color:white;" type="submit" value="Update Event" required="">
        
      </div><br>

    </form>
  </div>

    </div>
    @include("admin.adminscript")

  </body>
</html>