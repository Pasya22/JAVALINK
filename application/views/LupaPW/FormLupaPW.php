<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="<?=base_Url();?>css/style-lp.css" />
    <link rel="stylesheet" href="<?=base_url()?>TOAST/dist/css/iziToast.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
            <p>Lupa <span>Password</span></p>
          </div>
          <div class="alert <?php echo $this->session->flashdata('alert-class'); ?>">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
          <div class="alert-danger <?php echo $this->session->flashdata('alert-class-danger'); ?>">
            <?php echo $this->session->flashdata('message'); ?>
        </div>

        <form method="GET" action="<?=site_url('Login/resetpassword');?>" class="form" id="formLupaPW">
    <div class="user-box">
        <label for="">Email/No Telfon</label>
        <div class="container-input">
            <input type="text" id="email" name="email" placeholder="Email/No Telfon">
            <?=form_error('email')?>
            <button type="button" onclick="toggleItem();" class="kotak-verifikasi">Verifikasi</button>
            <div class="container2" id="hiddenItem">
                <div class="con">
                    <input type="text" class="input-2" id="textInput2" name ="otp"oninput="limitCharacters()" placeholder="xxxxxx">
                    <button type="submit" class="kotak-verifikasi" id="">Lanjutkan</button>
                </div>
            </div>
            <a href="<?=site_url('Login');?>" class="back">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg>
                Back
            </a>
        </div>
    </div>
</form>

      </div>
</body>
</html>
<script>
function toggleItem() {
    var item = document.getElementById('hiddenItem');
    if (item.style.display === 'none') {
        item.style.display = 'block';
    } else {
        item.style.display = 'none';
        FormLupaPW();
    }
}

    function limitCharacters() {
        var input = document.getElementById('textInput2');
        var text = input.value.trim();
        var maxLength = 6;

        if (text.length > maxLength) {
            input.value = text.slice(0, maxLength);
        }
    }

    function FormLupaPW() {
    var data = $('#formLupaPW').serialize();
    $.ajax({
        method: 'POST',
        url: '<?=site_url('Login/FormLupaPW');?>',
        data: data,
        success: function(response) {
            var result = JSON.parse(response);
            if (result.status) {
                iziToast.success({
                    title: 'Success',
                    message: result.pesan,
                    position: 'topRight'
                });
                // setTimeout(function() {
                //     window.location.href = "<?=site_url('Login/FormLupaPW/');?>" + result.token;
                // }, 1700);
            } else {
                iziToast.error({
                    title: 'Error',
                    message: result.pesan2,
                    position: 'topRight'
                });
            }
        },
        error: function(xhr, status, error) {
            iziToast.error({
                title: 'Error',
                message: 'Terjadi kesalahan saat memproses permintaan.',
                position: 'topRight'
            });
        }
    });
}


</script>

</body>
</html>
<script src="<?=base_url();?>TOAST/dist/js/iziToast.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
