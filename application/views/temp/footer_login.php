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


    function login() {
    var email = $('.email').val();
    var password = $('.password').val();

    if (email === '' || password === '') {
        iziToast.error({
            title: 'Opps...',
            message: 'Harap isi email dan password!',
            position: 'topRight'
        });
    } else {
        var data = $('#formLogin').serialize();
        console.log(data);
        $.ajax({
            method: 'POST',
            url: "http://localhost/HProject/login/index.php/Login/goLogin",
            data: data,
            success: function(response) {
                var dataObj = JSON.parse(response);
                console.log(dataObj);

                if (dataObj.status === 'success') {
                    if (dataObj.is_active === 0) {
                        iziToast.warning({
                            title: 'Perhatian',
                            message: dataObj.pesan,
                            position: 'topRight'
                        });
                    } else {
                        if (dataObj.role_id === 'admin') {
                            iziToast.success({
                                title: 'Selamat Datang',
                                message: dataObj.message,
                                position: 'topRight'
                            });
                            setTimeout(function(){
                                window.location.href = "<?=site_url('Welcome')?>";
                            },1700);
                        } else if (dataObj.role_id === 'member') {
                            iziToast.success({
                                title: 'Selamat Datang',
                                message: dataObj.message,
                                position: 'topRight'
                            });
                            setTimeout(function(){
                                window.location.href = "<?=site_url('guest');?>";
                            },1700);
                        } else {
                            // Unknown role, handle accordingly
                            window.location.href = "unknown.html";
                        }
                    }
                } else {
                    iziToast.error({
                        title: 'Opps...',
                        message: dataObj.pesan,
                        position: 'topRight'
                    });
                }
            }
        });
    }
}

    // function login() {
    //     var data = $('#formLogin').serialize();
    //     console.log(data);
    //     $.ajax({
    //         method: 'POST',
    //         url: "http://localhost/HProject/login/index.php/Login/goLogin",
    //         data: data,
    //         success: function(data) {
    //             const datas = JSON.parse(data);
    //             console.log(datas);
    //             $.each(datas,function(key,val){
    //                 if (val == 'success') {
    //                     alert('selamat datang di - <?=$this->session->flashdata('message');?> ');
    //                     setTimeout(function() {
    //                         window.location.href = "<?=site_url('Welcome');?>";
    //                     }, 1700);
    //                 } else {
    //                     alert('Masyaallah - <?=$this->session->flashdata('pesan');?>');
    //                 }
    //             });
    //         }
        // });
    // }
</script>

</script>

<script src="<?=base_url();?>TOAST/dist/js/iziToast.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>