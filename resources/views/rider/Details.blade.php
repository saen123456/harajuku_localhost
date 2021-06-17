<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <button type="button" class="btn btn-outline-danger active text01" onclick="location.href = '{{url('rider/details')}}'">รายการส่ง <span class="badge rounded-pill bg-danger" >{{$level2}}</span></button>
            <button type="button" class="btn btn-outline-danger text01" onclick="location.href = '{{url('rider/sent')}}'">รายการส่ง <span class="badge rounded-pill bg-danger">{{$level3}}</span></button>
            <button type="button" class="btn btn-outline-danger text01" onclick="location.href = '{{url('rider/report')}}'">รายการสำเร็จ<span class="badge rounded-pill bg-danger">{{$level4}}</span></button>
          </div></div></div>
            
            @foreach($data as $row)
              <div class="card a01">
                <table class="table">
                  <thead class="bg-danger text-white">
                    <tr>
                      <th scope="col">ออเดอร์ที่</th>
                      <th scope="col">ชื่อร้าน</th>
                      <th scope="col">สถานะ</th>
                      <th scope="col"></th>
                    </tr>                
                  </thead>
                  <tbody>
                    <tr>
                      <td>#{{$row->Or_ID}}</td>
                      <td>{{$row->St_Name}}</td>
                      <td class="text-success">พร้อม</td>
                      <td></td>
                    </tr>
                    <tr class="bg-danger text-white">
                      <th>รายการ</th>
                      <th>จำนวน</th>
                      <th>ราคา</th>
                      <th></th>
                    </tr>
                    <tr>
                      <td>{{$row->Fm_Name}}</td>
                      <td>2</td>
                      <td>{{$row->Fm_Price}}</td>
                      <td></td>
                    </tr>
                    <tr class="text-danger">
                      <th class="bg-danger text-white">ราคารวม</th>
                      <td>{{$row->Fm_Price * 2}}</td>
                      <td>บาท</td>
                      <td></td>
                    </tr>
                    </tbody>
                </table>
                <a id="aap" href="{{url('rider/sent_order',$row->Or_ID)}}" class="btn btn-success">ยืนยันรับสินค้า</a>

              </div>
              <br>
            @endforeach
            </div>
              




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

