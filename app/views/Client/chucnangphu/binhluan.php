<?php 
$id_khoa_hoc = $_GET['id_khoa_hoc']?>
      <form action="index.php?redirect=addbinhluan" method="post">
        <div class="input-group mb-2">
          <input type="text" class="form-control" required name="noi_dung_binh_luan" placeholder="Nhập bình luận của bạn">
          <div class="input-group-append">
          </div>
        </div>
        <input type="hidden" name="ngay_binh_luan" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <input type="hidden" name="id_khoa_hoc" value="<?=$id_khoa_hoc ?>">
        <?php if(isset($_SESSION['id_tai_khoan'])):?>
          <input type="hidden" name="id_tai_khoan" value="<?php echo $_SESSION['id_tai_khoan'];?>">
          <?php endif ?>
          <div class="stars">Đánh giá  
            <?php
              for ($i = 1; $i <= 5; $i++) {
                  echo '<i class="fa fa-star" name="danh_gia" data-value="' . $i . '"></i>';
              }
            ?>
          </div>
          <input type="hidden" id="ratingInput" name="danh_gia">
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="addbinhluan" class="btn btn-primary btn-block">Bình luận</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.stars i');
        const ratingInput = document.getElementById('ratingInput');

        stars.forEach(star => {
            star.addEventListener('click', function () {
                const value = this.getAttribute('data-value');
                ratingInput.value = value;

                // Xóa class 'active' từ tất cả các ngôi sao
                stars.forEach(s => s.classList.remove('active'));

                // Thêm class 'active' cho các ngôi sao đến vị trí được nhấn
                for (let i = 0; i < value; i++) {
                    stars[i].classList.add('active');
                }
            });
        });
    });
</script>
<style>
        .stars i.active,
        .stars i:hover {
            color: gold;
        }
    </style>