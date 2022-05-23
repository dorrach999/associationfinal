<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
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
        <form action="{{url('/uploadevent')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div>
            <label style="color:#fff ;font-family: Lucida Console;margin-left:-150px;">Name:</label>
            <input style="color: blue;" type="text" name="name" placeholder="enter event name">

          </div><br>
          <div>
            <label style="color:#fff ;font-family: Lucida Console;margin-left:-150px;">Description :</label>
            <input style="color: blue;" type="text" name="name" placeholder="enter event description">

          </div><br>
          <div>
            
            <label style="color:#fff ;font-family: Lucida Console;">Image :</label>

            <input type="file" name="image">

          </div><br>

          <div>
            
            <input class="btn btn-dark" style="color:white;"  type="submit" value="Save">

          </div>
        </form>
      </div>

      <div class="maout" style="position: relative; margin-top: 25em; margin-left:10em">
        <table class="table table-bordered" style="margin-top:60px ;">
           <thead class="table-dark">
          <tr>
            <th style="padding:30px;">Event Name</th>
            <th style="padding:30px;">Description</th>
            <th style="padding:30px;">Image</th>
            <th style="padding:30px;">action1</th>
            <th style="padding:30px;">action2</th>
          </tr>
          @foreach($data as $data)
          <tbody>
          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td><img height="200" width="200" src="/eventimage/{{$data->image}}"></td>
            <td><a class="btn btn-dark" href="{{url('/updateevent',$data->id)}}">Update</td>
            <td><a class="btn btn-dark" href="{{url('/deleteevent',$data->id)}}">Delete</td>
          </tr>
         </tbody>
          @endforeach

        </table>


    </div>
    @include("admin.adminscript")

  </body>
</html>