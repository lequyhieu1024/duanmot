<a href="../.../../../../index.php"><h1>Quay lại trang người dùng</h1></a>

<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                
                <?php 
                    $so_luong = dem_khoa_hoc();  
                ?>
                <h3><?=$so_luong  ?> <sup style="font-size: 20px"></sup></h3>
                <p>Số Lượng Khóa Học</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                   $so_luong = dem_tai_khoan();
                ?>
                <h3><?=$so_luong ?></h3>
                <p>Số Lượng Tài Khoản Đăng Ký</p>
              </div>
              <div class="icon">
                 <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php 
                   $tongtien = tinhTongThu();
                ?>
                <h3>$ <?=$tongtien?></h3>

                <p>Tổng Thu</p>
              </div>
              <div class="icon">
                  <i class="ion ion-stats-bars"></i>
              </div>
             
            </div>
          </div>
        </div>
        
        <table class="table border">
          <h1 class="text-center;" style="color:red">Thống kê danh mục</h1>
          <tr>
            <td class="row"><b>Danh mục</b></td>
            <td>Số lượng khóa học</td>
            <td>Tổng tiền</td>
            <td>Khóa học giá min</td>
            <td>Khóa học giá max</td>
          </tr>
          <?php 
          $thongke = thongke_khoahoc();
          foreach($thongke as $row):
          extract($row);
          ?>
          <tr>
            <td><?= $ten_danh_muc?></td>
            <td><?=$so_luong_khoahoc?></td>
            <td><?=number_format($tong_tien_dm,0, ",",".")?> VNĐ</td>
            <td><?=number_format($gia_re_nhat,0, ",",".")?> VNĐ</td>
            <td><?=number_format($gia_dat_nhat,0, ",",".")?> VNĐ</td>
          </tr>
          <?php endforeach?>
        </table>
<hr>
<h2 class="text-center;" style="color:red">Biểu đồ thống kê danh mục</h2>
        <div id="piechart"></div>

          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

          <script type="text/javascript">
          // Load google charts
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          // Draw the chart and set the chart values
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng khóa học'],
            <?php
              $result = thong_ke();
              foreach ($result as $row) {
                echo "['".$row['ten_danh_muc']."', ".$row['so_luong_kh']."]," ;}?> 
          ]);

            // Optional; add a title and set the width and height of the chart
            var options = { 'width':1200, 'height':550};

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }
          </script>
  <h2 class="text-center;" style="color:red">Biểu đồ thống kê danh mục</h2>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="thongKeKhoaHocChart" width="600" height="400"></canvas>

    <script>
        // Bắt đầu script vẽ biểu đồ
        // Gọi hàm thongke_khoahoc để lấy dữ liệu
        var data = <?php echo json_encode(thongke_khoahoc()); ?>;

        // Tạo mảng chứa tên danh mục, số lượng khóa học, tổng tiền, giá rẻ nhất và giá đắt nhất
        var labels = data.map(function(item) {
            return item.ten_danh_muc;
        });

        var soLuongKhoaHoc = data.map(function(item) {
            return item.so_luong_khoahoc;
        });

        var tongTien = data.map(function(item) {
            return item.tong_tien_dm;
        });

        var giaReNhat = data.map(function(item) {
            return item.gia_re_nhat;
        });

        var giaDatNhat = data.map(function(item) {
            return item.gia_dat_nhat;
        });

        // Lấy đối tượng canvas
        var canvas = document.getElementById('thongKeKhoaHocChart').getContext('2d');

        // Vẽ biểu đồ cột
        var myChart = new Chart(canvas, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Số lượng khóa học',
                    data: soLuongKhoaHoc,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Tổng tiền',
                    data: tongTien,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Giá rẻ nhất',
                    data: giaReNhat,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Giá đắt nhất',
                    data: giaDatNhat,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<hr>
<h2 style="color:red">Đăng ký mới</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID Đăng Ký Khóa Học</th>
            <th scope="col">Tên Khóa Học</th>
            <th scope="col">AVT</th>
            <th scope="col">Thành Tiền</th>
            <th scope="col">Người đăng ký</th>
            <th scope="col">Ngày đăng ký</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">email</th>
            <th scope="col">SĐT</th>
            <th scope="col">Ho Tên</th>
            <th scope="col">Lộ trình</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $khoahoc = QLkhdadangkyTop3();
        foreach($khoahoc as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_dang_ky_khoa_hoc ?></th>
            <td><?=$ten_khoa_hoc ?></td>
            <td><img style="width:100px;height:80px" src="../../../public/images/<?=$avt_kh ?>" alt=""></td>
            <td><?=number_format($thanh_tien,0,".") ?></td>
            <td><?=$ten_tai_khoan ?></td>
            <td><?=$ngay_dang_ky_hoc ?></td>
            <td><a href="index.php?act=edit_ql_kh_dadangky&table=dang_ky_khoa_hoc&id=id_dang_ky_khoa_hoc&id_edit=<?=$id_dang_ky_khoa_hoc;?>">
                <?php if($id_trang_thai_kh == 1){ ?> <button class="btn btn-warning"><?=$ten_trang_thai?>
                </button><?php }else if($id_trang_thai_kh == 2){?><button class="btn btn-primary"><?=$ten_trang_thai?>
                </button><?php }else{?><button class="btn btn-success"><?=$ten_trang_thai?></button><?php }?></a>
            </td>
            <td><?=$email_tk ?></td>  
            <td><?=$sdt_tk ?></td>  
            <td><?=$ho_va_ten_tk ?></td>  
            <td><?=$lt?></td>       
            <td>
                <a href="index.php?act=delete&header=qlkhdadangky&table=dang_ky_khoa_hoc&id=id_dang_ky_khoa_hoc&iddl=<?=$id_dang_ky_khoa_hoc;?>"><button style="margin-bottom: 10px;" class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>