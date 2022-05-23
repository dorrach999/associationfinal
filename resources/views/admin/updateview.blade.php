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
    <div style="position: relative; top: 60px; right: 20px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:20px;">Title :</label>
                <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required>
            </div><br>
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:20px;">Price :</label>
                <input style="color:blue;" type="num" name="price" value="{{$data->price}}" required>
            </div><br>
            
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:20px;">Description :</label>
                <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
            </div><br>
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:20px;">OldImage :</label>
                <img width="200" height="200" src="/productimage/{{$data->image}}">
            </div><br>
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:20px;">New Image :</label>
                <input type="file" name="image" required>
            </div><br>
            <div>
                <input class="btn btn-dark" style="color: white;margin-left:200px;" type="submit" value="Save">
            </div><br>
        </form>

    </div>





    </div>
    @include("admin.adminscript")

  </body>
</html>