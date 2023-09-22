<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$title;?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?=base_url()?>TOAST/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="<?=base_Url();?>css/style-telp.css">
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
        <p>Masuk ke akun <span>JavaWebster</span> anda</p>
    </div>
    <form method="POST" action="<?=site_url('notelp/sendOTPWhatsApp');?>" class="form" id="form">
        <div class="user-box">
            <label for="">Your Phone Number</label>
            <div class="container-input">
                <p>+62</p><input type="text" id="textInput" name="no_what" oninput="limitCharacters()" placeholder="Your Phone Number">
                <a href="#" onclick="sendOTP(); return false;" class="kotak-verifikasi">Verifikasi</a>
                <!-- <input type="submit" name="submit" value="verifikasi" class="kotak-verifikasi" id="submit" /> -->
            </div>
        </div>
        <div class="container2" id="otpContainer" style="display:none;">
            <input type="text" class="input-2" id="otpInput" name="otp" oninput="limitCharacterss()" placeholder="xxx-xxx">
            <input type="submit" name="submit" value="Login" class="kotak-login" id="submit" />
        </div>
        <a href="<?=site_url('Login');?>" class="back">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg>
                Back
            </a>
    </form>
</div>

<script>
    function limitCharacters() {
        var input = document.getElementById('textInput');
        var text = input.value.trim();
        var maxLength = 13;

        if (text.length > maxLength) {
            input.value = text.slice(0, maxLength);
        }
    }

    function sendOTP() {
      var formData = $('#form').serialize();
      console.log(formData);
    $.ajax({
        method: 'POST',
        url: '<?=site_url('notelp/LoginWhatsApp');?>',
        data: formData,
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
                document.getElementById('otpContainer').style.display = 'block';
            }
        },

    });
        // Setelah itu, tampilkan input OTP
        // document.getElementById('otpContainer').style.display = 'block';
    }

    function limitCharacterss() {
        var input = document.getElementById('otpInput');
        var text = input.value.trim();
        var maxLength = 6;

        if (text.length > maxLength) {
            input.value = text.slice(0, maxLength);
        }
    }

                  // rest api verifikasi data via whatsApp //
                  function LoginWA() {
                   var $data = $('.form').serialize();
                    console.log($data);
                    // $.ajax({
                    //   // url : '<?=site_url('notelp/Verify');?>',
                    //   method: 'POST',
                    //   data:data,
                    //   success:function(response){
                    //     var result = JSON.parse(response);
                    //     console.log(result);
                    //     if (result.status) {
                    //       iziToast.success({
                    //           title: 'Success',
                    //           message: result.pesan,
                    //           position: 'topRight'
                    //       });
                    //     } else {
                    //       iziToast.error({
                    //           title: 'Error',
                    //           message: result.pesan2,
                    //           position: 'topRight'
                    //       });
                    //   }
                    //   }
                    // });
                  }
                </script>
  </body>
</html>
<script src="<?=base_url();?>TOAST/dist/js/iziToast.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Restu2209$*$@*@^^%## -->