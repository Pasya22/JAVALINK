<!-- -------------------------------side bar---------------------------------- -->
<input type="checkbox" name="" id="PageCheck">
<label for="check">
    <svg xmlns="http://www.w3.org/2000/svg" id="Pagebtn" onclick="shiftSearch(); shiftContent2(); " width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
        <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z" />
    </svg>
    <div class="Page-search-nav" id="content-nav">
        <div class="Page-search-box">
            <div class="Page-search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </div>
            <div class="Page-search-input">
                <input type="search" class="PageInput" placeholder="java.Link" name="CariData" id="CariData" />
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" id="PageCancel" onclick="shiftSearch2(); shiftContent()" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
    </svg>
</label>


<div class="PageSidebar" id="sidebar">

    <header><a href="<?= site_url('Welcome'); ?>">
            <img src="<?= base_url(); ?>img/javawebster.png" alt="">JavaWebster
        </a></header>
    <ul>

        <?php foreach ($tampil as $abc) { ?>
           
            <li>
            <a id="<?= $abc->tipe_menu ?>" href="<?= $abc->url ?>" onclick="<?= $abc->aksi ?>"><?= $abc->icon ?><?= $abc->menus ?></a>
            </li>
        <?php } ?>

    </ul>

</div>

<!-- -------------------------------end side bar---------------------------------- -->
<nav>
    <div class="Page-nav-container">
        <div class="hidden">
            <p>s</p>
        </div>
        <div class="Page-nav-content">
            <div class="Page-nav-box">
                <?php
                if ($this->session->userdata('role_id') == 1) {
                ?>
                    <p><?= 'ADMIN'; ?></p>
                <?php } ?>
                <div class="dropdown-profil">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>
                    <ul class="dropdown-menu">
                        <span class="user-data"><b><?= $this->session->userdata('nama_pengguna') ?> </b> </span>
                        <span class="user-data"> <?= $this->session->userdata('email') ?></span>
                        <hr>
                        <li><a href="<?= site_url('guest/Profil'); ?>">Profil</a></li>
                        <li><a href="<?= site_url('Login/Logout'); ?>">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--------------------------------- tampilan data user  ------------------------------>
<!-- Tampilkan data user -->
<div id="content-container" class="content">
    <div>
        <?= $this->session->flashdata('add-sukses'); ?>
        <?= $this->session->flashdata('add-gagal'); ?>
        
        <?= $this->session->flashdata('delete-sukses'); ?>
   
        <?= $this->session->flashdata('edit-sukses'); ?>
        <?= $this->session->flashdata('edit-gagal'); ?>
    </div>
    <div id="<?= $abc->tipe_konten ?>" class="<?= $abc->tipe_konten ?>">

        <?php foreach ($tampil as $Duser) { ?>
            <div class="<?= $Duser->tipe_form ?>">
                <a href="#" onclick="<?= $Duser->tombol_form ?>" class="<?= $Duser->tipe_style_form ?>">
                    <?= $Duser->tipe_nama_tombol_add ?>
                </a>
            </div>
            <table class="<?= $Duser->table_tipe ?>">
                <thead class="<?= $Duser->thead_tipe ?>">

                </thead>
                <tbody class="<?= $Duser->tbody_tipe ?>">

                </tbody>
            </table>
        <?php } ?>
    </div>
</div>


<!-- ---------------------------------alert modal user--------------------------------->
<div class="user" id="moduser">
    <div class="container-user" style="display: none;" id="user">
        <div class="con-moduser">
            <svg onclick="moduser2()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
            </svg>
            <form method="POST" id="formAddUser" enctype="multipart/form-data">
                <div class="input1user">
                    <p>Nama Pengguna</p>
                    <input class="in1user" name="nama_pengguna" type="text">
                </div>
                <div class="input2user">
                    <label for="formFile">Image</label>
                    <input name="images" type="file" id="formFile" >
                </div>
                <div class="input3user">
                    <p>Email</p>
                    <input type="text" name="email">
                </div>
                <div class="input4user">
                    <p>Password</p>
                    <input type="password" name="password">
                </div>
                <div class="input5user">
                    <p>Role</p>
                    <select name="role_id" id="role_id">
                        <option value="">-- Select Role --</option>
                        <?php foreach ($level as $abc) :?>
                            <?php if ($abc->role_id == 1) {
                                echo '<option value="'.$abc->role_id.'">admin</option>';
                            }elseif ($abc->role_id == 2) {
                                echo '<option value="'.$abc->role_id.'">member</option>';
                            }
                            ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input6user">
                    <p>Active</p>
                    <input type="text" name="is_active" id="is_active">
                </div>
                <!-- <div class="input7user">
                    <p>Date Create</p>
                    <input type="datetime-local" name="date_created" id="date_created">
                </div> -->
                <div class="button-linkuser">
                    <button type="button" onclick="addUser()" class="but-linkuser">Save</button>
                    <!-- <button type="submit" class="but-linkuser">Submit</button> -->
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- ---------------------------------end alert modal user---------------------------------->


<!-- ----------------------------------alert edit user-------------------------------------- -->
<?php foreach ($show as $key) :?>
<div class="clickedituser" id="clickeuser">
    <div class="container-clickedituser" style="display: none;" id="clickediuser<?=$key->id_pengguna ?>">
        <div class="con-clickedituser" >
            <svg onclick="clickedituser2(<?= $key->id_pengguna ?>)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
            </svg>
            <form action="<?=  site_url('Welcome/EditUser/'.$key->id_pengguna);?>" method="post" id="formEditUser<?= $key->id_pengguna ?>">
                <div class="input1-clickedituser">
                    <p>Nama Pengguna</p>
                    <input class="in1-clickedituser" type="text" name="nama_pengguna" value="<?= $key->nama_pengguna ?>">
                </div>
                <div class="input2-clickedituser">
                    <label for="formFile">Image</label>
                    <input name="images" type="text" id="formFile" value="<?= $key->images ?>">
                </div>
                <div class="input3-clickedituser">
                    <p>Email</p>
                    <input type="text" name="email" value="<?= $key->email ?>">
                </div>
                <div class="input4-clickedituser">
                    <p>Password</p>
                    <input type="text" name="password" value="<?= $key->password ?>">
                </div>
                <div class="input5-clickedituser">
                    <p>Role</p>
                    <select name="role_id" id="role_id" >
                     <?php foreach ($level as $abc) :?>
                            <?php if ($abc->role_id == 1) {
                                echo '<option value="'.$abc->role_id.'">admin</option>';
                            }elseif ($abc->role_id == 2) {
                                echo '<option value="'.$abc->role_id.'">member</option>';
                            }else {
                                echo '<option value="">-- Select Role --</option>';
                            }
                            ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input6-clickedituser">
                    <p>Active</p>
                    <input type="text" name="is_active" value="<?= $key->is_active ?>">
                </div>
                <div class="input7-clickedituser">
                    <p>Date Create</p>
                      <input type="datetime-local" name="date_created" id="" value="<?= $key->date_created ?>">
                    </div>
                <div class="button-link-clickedituser">
                    <button type="button" onclick="UbahUser()" class="but-link-clickedituser">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>

<!-- ----------------------------------end alert edit user-------------------------------------- -->

<!-- ----------------------------------alert delete user-------------------------------------- -->
<?php 
    foreach ($show as $del) {
?>
<div class="clickdeleteuser" id="clickduser">
    <div class="container-clickdeleteuser" style="display: none;" id="clickdeluser<?= $del->id_pengguna ?>">
        <div class="con-clickdeleteuser">
            <h2 class="delluser">Delete This Data</h2>
            <div class="con-delluser">
                <a class="tombol-del-yuser" href="#" onclick="DeleteUser(<?= $del->id_pengguna?>)">Yes</a>
                <a class="tombol-del-nuser" href="#" onclick="clickdeleteuser2(<?= $del->id_pengguna?>)">No</a>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<!-- ----------------------------------end alert delete user-------------------------------------- -->