<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>học IT để đi làm | Forgot Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<?php 
include "../../../models/ClientModel/taikhoan.php";
include "../../../../config.php";
require '../../../../public/mail/PHPMailer/src/Exception.php';
require '../../../../public/mail/PHPMailer/src/PHPMailer.php';
require '../../../../public/mail/PHPMailer/src/SMTP.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['quenmk'])){
//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();        
    $mail -> CharSet = 'utf-8';                                    //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hieulqph36904@fpt.edu.vn';                     //SMTP username
    $mail->Password   = 'nhbbmncmwypfljhd';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hieulqph36904@fpt.edu.vn', 'ban-khoa-hoc');
    $mail->addAddress($_POST['email']);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $email = $_POST['email'];
    $pass = quenmk($email);
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Xác nhận mật khẩu";
    $mail->Body    = "Mật khẩu tài khoản của bạn là : nhbbmncmwypfljhd" ;

    $mail->send();
    echo 'Message has been sent';
    updatePass($email);
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <b>Quên mật khẩu</b>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Nhập email của bạn để nhận được mật khẩu.</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="quenmk" class="btn btn-primary btn-block">Lấy mật khẩu</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3 mb-1">
        <a href="login.php">Đăng nhập</a>
        <?php echo '<h1 class="text-danger">'. $quenmk.' </h1>'?>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.min.js"></script>
</body>
</html>
