<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="<?=base_url();?>css/style-rp.css">
    <link rel="stylesheet" href="<?=base_url()?>TOAST/dist/css/iziToast.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fff;
            position: relative;
            overflow-x: hidden;
            background-color: grey;
            margin: 30px 20px;
            background-image: url("<?=base_Url();?>img/banner.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="logo-heylink">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-link-45deg"
            viewBox="0 0 16 16"
          >
            <path
              d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"
            />
            <path
              d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"
            />
          </svg>
          <a href="">JavaWebster</a>
        </div>
      </div>
      <div class="form-login">
        <div class="container-form">
          <div class="header-form">
            <hp>Change <span>Password</span>For</hp>
            <p><?=$this->session->userdata('reset_email');?></p>
        <div class="alert-danger <?php echo $this->session->flashdata('alert-class-danger'); ?>">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
          </div>
          <form  method="post" class="form" id="formUpdatePassword" action="<?=site_url('Login/changePassword');?>">
              <div class="user-box">
              <label for="">Password baru</label>
              <div class="container-input">
                  <input type="password" id="password1" name="password1"  placeholder="Password baru">
                  <?=form_error('password1');?>
                  <label for="">Konfirmasi Password baru</label>
                  <input type="password" id="password2"name="password2"  placeholder="Konfirmasi password baru">
                  <?=form_error('password2');?>
                  <button type="submit"  class="kotak-verifikasi" >Change Password</button>
                  <!-- <a href="#" class="kotak-verifikasi">Reset</a> -->
                <!-- <button type="button" name="submit" onclick="ResetPassword()" class="kotak-login" >Reset Password</button> -->
                <!-- <p class="login-bottom">Dengan Cara Lain<a href="<?=site_url('Login');?>"> Back</a></p> -->

              </div>
          </form>
      </div>
</body>
</html>
<script>
    function ResetPassword() {
        var data = $('#formLupaPw').serialize();
        $.ajax({
            method :'POST' ,
            url : '',
            data : data,
        });
    }
</script>

</body>
</html>
<script src="<?=base_url();?>TOAST/dist/js/iziToast.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
