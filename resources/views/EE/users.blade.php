
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
    <div style="position: relative; margin-top: 60px; right: -150px ">
        <table class="table table-bordered" style="margin-top:60px ;"  >
            
              <thead class="table-dark">
                <tr>
                  <th style="text-align: center ;font-size:20px;">Name</th>
                  <th style="text-align: center;font-size:20px;">Email</th>
                  <th style="text-align: center;font-size:20px;">Action</th>
                </tr>
              </thead>
              

            @foreach($data as $data)
          <tbody>
            <tr align="center">
                <td style="font-size:20px;">{{$data->name}}</td>
                <td style="font-size:20px;">{{$data->email}}</td>
                @if ($data->usertype=="0")
                    <td style="font-size:20px;" ><a class="btn btn-dark" href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                @else
                <td style="font-size:20px;"><a>Not Allowed</a></td>
                @endif
    
            </tr>
          </tbody>

            @endforeach
        </table>
    </div>
    </div>
    @include("admin.adminscript")

  </body>
</html>