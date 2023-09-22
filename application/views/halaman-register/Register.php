<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="<?=base_url();?>css/style-register.css">
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
      <div class="register-login">
        <div class="container-login">
          <p>Sudah memiliki akun?</p>
          <a href="" class="kotak-daftar">Login</a>
        </div>
      </div>
    </div>
    <div class="form-login">
      <div class="container-form">
        <div class="header-form">
          <p>Daftar ke akun <span>JavaWebster</span> anda</p>
        </div>
        <form method="post" class="form" id="formRegister">
          <div class="user-box">
            <label for="">Full Name</label>
            <input type="text" name="nama_pengguna" />
          </div>
          <div class="user-box">
            <label for="">Alamat Email</label>
            <input type="text" name="email" />
          </div>
          <div class="user-box">
            <label for="">Password</label>
            <input type="password" name="password1" id="passwordField" />
            <a href="#" class="but" onclick="togglePassword()" id="toggleBut">
              <svg id="hideIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
              </svg>
              <svg id="showIcon" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
              </svg>
            </a>
          </div>
          <div class="user-box">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="password2" id="passwordField2" />
            <a href="#" class="but" onclick="togglePassword1()" id="toggleBut2">
              <svg id="hideIcon2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
              </svg>
              <svg id="showIcon2" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
              </svg>
            </a>
          </div>
          <input
            type="button"
            name="submit"
            value="Daftar"
            class="kotak-login"
            id="submit"
            onclick="register()"
          />
          <p class="text">Atau daftar dengan email Google anda</p>
          <a href="<?= site_url('google_register/register_google'); ?>" class="kotak-google">
            <div class="google-con">
              <img class="img-google" src="<?=base_Url();?>img/google.png" alt="" />
              <p class="p-google">Daftar dengan Google</p>
            </div>
          </a>
          <a href="" class="kotak-no">
            <div class="no-con">
              <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-telephone-fill"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
              />
            </svg>
            <p>Daftar dengan No Telepon</p>
            </div>
          </a>
          <p class="login-bottom">Sudah memliki akun? <a href="<?=site_url('Login');?>">Login</a></p>
        </form>
      </div>
    </div>
</body>
</html>
<script>

function togglePassword() {
      var passwordField = document.getElementById("passwordField");
      var toggleButton = document.getElementById("toggleBut");
      var showIcon = document.getElementById("showIcon");
      var hideIcon = document.getElementById("hideIcon");

      if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleButton.setAttribute("aria-label", "Hide");
        showIcon.style.display = "initial";
        hideIcon.style.display = "none";
      } else {
        passwordField.type = "password";
        toggleButton.setAttribute("aria-label", "Show");
        showIcon.style.display = "none";
        hideIcon.style.display = "initial";
      }
    }
    function togglePassword1() {
    var passwordField = document.getElementById("passwordField2");
    var toggleButton = document.getElementById("toggleBut2");
    var showIcon = document.getElementById("showIcon2");
    var hideIcon = document.getElementById("hideIcon2");

    if (passwordField.type === "password") {
      passwordField.type = "text";
      toggleButton.setAttribute("aria-label", "Hide");
      showIcon.style.display = "initial";
      hideIcon.style.display = "none";
    } else {
      passwordField.type = "password";
      toggleButton.setAttribute("aria-label", "Show");
      showIcon.style.display = "none";
      hideIcon.style.display = "initial";
    }
  }

function register() {
    var data = $('#formRegister').serialize();
    $.ajax({
        method: 'POST',
        url: 'http://localhost/HProject/login/Login/addData',
        data: data,
        success: function(response) {
            var result = JSON.parse(response);
            if (result.status === false) {
                var errors = result.error;
                $.each(errors, function(key, value) {
                    iziToast.error({
                        title: 'Error',
                        message: value,
                        position: 'topRight'
                    });
                });
            } else {
                iziToast.success({
                    title: 'Success',
                    message: result.message,
                    position: 'topRight'
                });
                setTimeout(function() {
                        window.location.href = "<?=site_url('Login');?>";
                    }, 1000);
            }
        }
    });
}

</script>
<script src="<?=base_url();?>TOAST/dist/js/iziToast.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
