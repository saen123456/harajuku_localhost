<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('rider_css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('rider_css/style.css')}}">
    <title>Rider</title>


</head>
<body>
    <div class="col-sm">
        <nav class="navbar navbar-light bg-danger ">
            <a class="navbar-brand text-white" href="#">
              <img src="{{asset(session()->get('Dr_Image'))}}" width="35" height="35" class="d-inline-block align-top img1" alt="">
          {{session()->get('Dr_Rider_Name')}}
            </a>
            <div class="pppp">
              สถานะรับงาน
            <label class="switch ppp">
              <input type="checkbox" checked>
              <span class="slider round"></span>
            </label>
            <div class="right_content_db">
              <form action="{{url('/rider/logout')}}" method="post">
                  @csrf
                  <button type="submit" class="insert btn btn-success">ออกจากระบบ</button>
              </form>
            </div>
          </div>
          </nav>
          <div class="btn-group col-12" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-danger text01" onclick="location.href = '{{url('rider/delivery')}}'">รับออเดอร์<span class="badge rounded-pill bg-danger" >{{$level1}}</span></button>
            <button type="button" class="btn btn-outline-danger text01" onclick="location.href = '{{url('rider/details')}}'">รายการส่ง <span class="badge rounded-pill bg-danger" >{{$level2}}</span></button>
            <button type="button" class="btn btn-outline-danger active text01" onclick="location.href = '{{url('rider/sent')}}'">รายการส่ง <span class="badge rounded-pill bg-danger">{{$level3}}</span></button>
            <button type="button" class="btn btn-outline-danger text01" onclick="location.href = '{{url('rider/report')}}'">รายการสำเร็จ<span class="badge rounded-pill bg-danger">{{$level4}}</span></button>
          </div></div></div>
        <div id= "onTop" class="container">
          <ul class="nav nav-tabs col-12" id="myTab" role="tablist">
            <li class="nav-item col-6">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">รายการ 1</a>
            </li>
            <li class="nav-item col-6">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">รายการ 2</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <figure class="figure">
                <img src="{{asset('rider_assets/img/map1.png')}}" class="figure-img img-fluid rounded" alt="...">          
              </figure>
              @foreach($data as $row)
                <div class="card">
                  <div id= "onTop" class="container">
                    <table class="table">
                      <thead class="bg-danger text-white">
                        <tr>
                          <th scope="col">ออเดอร์ที่</th>
                          <th scope="col">สถานะ</th>
                          <th scope="col">รายละเอียด</th>
                          <th></th>
                        </tr>                
                      </thead>
                      <tbody>
                        <tr>
                          <td>#{{$row->Or_ID}}</td>
                          <td class="text-success">กำลังส่ง</td>
                          <td><a href="#"><img src="{{asset('rider_assets/icon/employee.png')}}" width="30" height="30"></td>
                          <td></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="btn-group col-12" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-danger " onclick="location.href = '#';">โทรหาลูกค้า</button>
                    <button type="button" class="btn btn-outline-danger " onclick="location.href = '{{url('rider/success_order',$row->Or_ID)}}';">ยืนยันจัดส่ง</button>
                  </div>
                  </div>
                @endforeach
          </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <figure class="figure">
                <img src="{{asset('rider_assets/img/map1.png')}}" class="figure-img img-fluid rounded" alt="...">          
              </figure>
              <div class="card">
                <div id= "onTop" class="container">
                  <table class="table">
                    <thead class="bg-danger text-white">
                      <tr>
                        <th scope="col">ออเดอร์ที่</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">รายละเอียด</th>
                        <th></th>
                      </tr>                
                    </thead>
                    <tbody>
                      <tr>
                        <td>#196</td>
                        <td class="text-success">กำลังส่ง</td>
                        <td><a href="#"><img src="{{asset('rider_assets/icon/employee.png')}}" width="30" height="30"></td>
                        <td></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="btn-group col-12" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-outline-danger " onclick="location.href = '#';">โทรหาลูกค้า</button>
                  <button type="button" class="btn btn-outline-danger " onclick="location.href = '#';">ยืนยันจัดส่ง</button>
                </div>
                </div>
          </div>






        
<!--loop-->
</body>
</html>
<script src="{{asset('rider_js/bootstrap.js')}}"></script> 
<script>

</script>
<script>
    $('.hamber').on('click', function () {
        $(".sidenav-db").css("display", "none");
    });
 
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

