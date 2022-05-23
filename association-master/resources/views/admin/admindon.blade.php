<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
  <body>
  @include("admin.nav")
    <div class="container-scroller">

    @include("admin.navbar")
    <div  style="position: relative; margin-top: 60px; right: -150px">
        <table class="table table-bordered" style="margin-top:60px ;">
        <thead class="table-dark">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Phone Number</th>
                <th style="padding: 30px">don</th>
            </tr>
            </thead>
            @foreach($data as $data)
            <tbody>
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->emailed}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->don}}</td>
                
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    </div>
    @include("admin.adminscript")

  </body>
</html>