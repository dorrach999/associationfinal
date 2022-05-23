<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
    .form{
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
        <form class="form" action="{{url('/uploadproduct')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:-150px;">Title :</label>
                <input style="color:blue;" type="text" name="title" placeholder="write a title" required>
            </div><br>
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:-170px;">Price :</label>
                <input style="color:blue;" type="num" name="price" placeholder="write a price" required>
            </div><br>
            <div>
                <label style="color:#fff ;font-family: Lucida Console">Image :</label>
                <input style="text-align:center;" type="file" name="image" required >
            </div><br>
            <div>
                <label style="color:#fff ;font-family: Lucida Console;margin-left:-95px;">Description :</label>
                <input style="color:blue;" type="text" name="description" placeholder="Description" required>
            </div><br>
            <div text-align:center;>
                <input class="btn btn-dark" style="color:white ;font-family: Lucida Console" type="submit" value="Save">
            </div>
        </form>

    </div>
    <div class="maout" style="position: relative; margin-top: 25em; margin-left:5em">
            <table class="table table-bordered" style="margin-top:60px ;">
              <thead class="table-dark">

                <tr>
                    <th style="padding: 30px">Product Name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Action2</th>
                </tr>
                </thead>
                @foreach($data as $data)
                <tbody>
                <tr align="center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/productimage/{{$data->image}}"</td>
                    <td><a class="btn btn-dark" href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a class="btn btn-dark"href="{{url('/updateview',$data->id)}}">Update</a></td>

                </tr>
                </tbody>
                @endforeach

            </div>
            </table>
        </div>




    </div>


    </div>
    @include("admin.adminscript")

  </body>
</html>