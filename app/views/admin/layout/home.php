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