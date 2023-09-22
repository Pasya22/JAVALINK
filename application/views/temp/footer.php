</body>

</html>
<script src="<?= base_url(); ?>js/localhost.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-------------------------------------------------    GET DATA USER -------------------------------------------------------->
<script>
    $(document).ready(function() {
        var tableHead = $('.thead-user');
        var tableBody = $('.tbody-user');

        var headerRow = '<tr>' +
            '<th>No</th>' +
            '<th>Email</th>' +
            '<th>Images</th>' +
            '<th>Password</th>' +
            '<th>Role</th>' +
            '<th>Active</th>' +
            '<th>Date Create</th>' +
            '<th>Action</th>' +
            '</tr>';

        tableHead.append(headerRow);

        <?php
        $i = 1;
        foreach ($show as $ras) {
        ?>
            var dataRow = '<tr>' +
                '<td><div><?= $i++ ?></div></td>' +
                '<td><div><?= $ras->email ?></div></td>' +
                '<td><img src="<?= base_url('picture/' . $ras->images) ?>" class="images" alt="Image"></td>' +
                '<td><div><?= $ras->password ?></div></td>' +
                '<td><div><?php if ($ras->role_id == 1) {
                                echo "admin";
                            } elseif ($ras->role_id == 2) {
                                echo "member";
                            } ?></div></td>' +
                '<td><div><?php if ($ras->is_active == 0) {
                                echo "Non Active";
                            } elseif ($ras->is_active == 1) {
                                echo "Active";
                            } ?></div></td>' +
                '<td><div><?= $ras->date_created ?></div></td>' +
                '<td>' +
                '<div>' +
                '<div class="con-tabel-user">' +
                '<a class="edit-tabeluser" href="#" onclick="clickedituser('+  <?= $ras->id_pengguna ?> + ')">Edit</a>' +
                '<a class="delete-tabeluser" href="#" onclick="clickdeleteuser(\'' + <?= $ras->id_pengguna ?> + '\')">Delete</a>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '</tr>';

            tableBody.append(dataRow);
        <?php
            
        }
        ?>
    });
</script>
<!--------------------------------------------------    END GET DATA USER    --------------------------------------------------->
<script>
    function addUser() {
    var data = $('#formAddUser').serialize();
    $.ajax({
        method: 'POST',
        url: 'http://localhost/HProject/login/Welcome/addUser',
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
                    window.location.href = "<?=site_url('Welcome/DataUser');?>";
                }, 1000);
                $('#moduser').hide(); // Menyembunyikan modal setelah sukses
                
            }
        }
    });
}
// =============================== edit user ====================================//
function UbahUser() {
    var data = $('#formEditUser' + <?= $ras->id_pengguna?>).serializeArray();
    console.log(data);
    $.ajax({
        type: 'POST',
        url: 'http://localhost/HProject/login/Welcome/EditUser/'+<?= $ras->id_pengguna?>,
        data: data ,
       success: function (data) {
    var datas = JSON.parse(data);
    console.log(datas);
    if (datas.status) {
        // Success case
        iziToast.success({
            title: 'Alhamdulilah',
            message: datas.message,
            position: 'topRight'
        });
        setTimeout(function () {
            window.location.href = "<?=site_url('Welcome/DataUser')?>";
        }, 2000);
        $('#clickediuser' + id).hide();
    } else {
        // Error case
        iziToast.error({
            title: 'Masyaallah',
            message: 'Data User Gagal DiUbah',
            position: 'topRight'
        });
    }
}
    });
}
// =============================== delete user ====================================//
function DeleteUser(id) {
    var deleteButton = $("#clickdeluser" + id).find(".tombol-del-yuser");

    $.ajax({
        method: 'DELETE',
        url: 'http://localhost/HProject/login/Welcome/DeleteUser/' + id,
        success: function(response) {
            var result = JSON.parse(response);
            console.log('data:', result);
            if (result.status === true) {
                iziToast.success({
                    title: 'Success',
                    message: result.message,
                    position: 'topRight'
                });
                setTimeout(function() {
                     window.location.href = "<?=site_url('Welcome/DataUser').$this->uri->segment(3);?>";
                }, 1000);
                $("#clickdeluser" + id).hide(); // Menyembunyikan modal dengan ID yang sesuai

            } else {
                iziToast.error({
                    title: 'Error',
                    message: 'Data Gagal Dihapus!',
                    position: 'topRight'
                });
            }
        }
    });
   

//    function addUser() {
//     var data = $('#formAddUser').serialize();
//     $.ajax({
//         method: 'POST',
//         url: 'http://localhost/HProject/login/Welcome/addUser',
//         data: data,
//         success: function(response) {
//             var result = JSON.parse(response);
//             if (result.status === false) {
//                 var errors = result.error;
//                 $.each(errors, function(key, value) {
//                     iziToast.error({
//                         title: 'Error',
//                         message: value,
//                         position: 'topRight'
//                     });
//                 });
//             } else {
//                 iziToast.success({
//                     title: 'Success',
//                     message: result.message,
//                     position: 'topRight'
//                 });
//                 $('#moduser').hide(); // Menyembunyikan modal setelah sukses
//             }
//         }
//     });
// }

// function moduser2() {
//     $('#moduser').hide(); // Menyembunyikan modal saat ikon "x" diklik
// }


}


</script>



<script>
  tinymce.init({
    selector: '#myTextarea',
    plugins: 'advlist autolink lists link image charmap print preview',
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
  });
</script>

<script src="<?=base_url();?>TOAST/dist/js/iziToast.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
