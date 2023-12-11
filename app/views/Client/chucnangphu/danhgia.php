<div class="stars">Đánh giá  
    <form method="post" action="index.php?redirect=adddanhgia">
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo '<i class="fa fa-star" name="danh_gia" data-value="' . $i . '"></i>';
            }
        ?>
        <input type="hidden" name="ngay_binh_luan" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <input type="hidden" name="id_khoa_hoc" value="<?=$id_khoa_hoc ?>">
        <input type="hidden" name="id_tai_khoan" value="<?php echo $_SESSION['id_tai_khoan'];?>">
        <input type="hidden" id="ratingInput" name="danh_gia">
        <input type="submit" class="btn btn-primary" value="Đánh giá" name="adddanhgia">
    </form>
</div>

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