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
        <a href="../.../../../../index.php"><h1>Quay lại trang người dùng</h1></a>
        

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
            var options = {'title':'Biểu đồ thống kê', 'width':1200, 'height':550};

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }
          </script>