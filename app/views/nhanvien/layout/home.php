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
              <a href="#" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
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

              <a href="#" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                
                <h3>44 $</h3>

                <p>Tổng Thu Ngày</p>
              </div>
              <div class="icon">
                  <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Thêm thông tin <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <a href="../.../../../../index.php"><h1>Quay lại trang người dùng</h1></a>