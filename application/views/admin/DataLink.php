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
<!------------------------------------ end navbar ------------------------------------>
<div id="content-container" class="content">
  
  <div id="<?= $abc->tipe_konten ?>" class="<?= $abc->tipe_konten ?>">
        
        <div class="container-link">
            <a href="#" onclick="mod()" class="link-add">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg> Add New Link
            </a>
          </div>
              <table class="tabel-link">
                <thead class="thead-link">
                  <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Icon</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="tbody-link">
                <?php 
                    $i = 1;
                    foreach ($menu as $key) :
                ?>
                  <tr>
                    <td><div><?= $i++ ?></div></td>
                    <td><div><?= $key->nama_menu?></div></td>
                    <td><div>
                     <?= $key->icon ?>
                  </div></td>
                    <td><div><?= $key->url ?></div></td>
                    <td><div>
                        <?php if ($key->status == 0) {
                            echo "Non Active";
                          }elseif($key->status == 1) {
                            echo "Active";
                        } 
                        ?>
                    </div></td>
                    <td><div>
                      <div class="con-tabel">
                        <div class="edit-tabel" onclick="clickedit(<?= $key->menu_id?>)">Edit</div>
                        <div class="delete-tabel" onclick="clickdelete(<?= $key->menu_id?>)">Delete</div>
                      </div>
                    </div></td>
                  </tr>

                    <?php endforeach;?>
                </tbody>
              </table>
        </div>
</div>

       <!-- ---------------------------------alert modal link---------------------------------->
    <div class="modal" id="mod">
      <div class="container-modal" style="display: none;" id="modal">
        <div class="con-mod">
            <svg onclick="mod2()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
            <form id="form" method="POST">
              <div class="input1">
                <p>Nama Menu</p>
                <input class="in1" type="text" name="nama_menu">
              </div>
              <div class="input2">
                <label for="formFile">Pilih Icon</label>
                <input name="icon" type="file" id="formFile" required>
              </div>
              <div class="input3">
                <p>Url</p>
                <input type="text"name="url">
              </div>
              <div class="input4">
                <p>role</p>
                <select name="role_id" id="role_id">
                    <option value="">-- Select Role --</option>
                    <option value="1">Admin</option>
                    <option value="2">Member</option>
                </select>
              </div>
              <div class="input5">
                <p>status</p>
                <select name="status" id="status">
                    <option value="">-- Select Status --</option>
                    <option value="0">Non Active</option>
                    <option value="1">Active</option>
                </select>
              </div>
              <div class="button-link">
                <button type="submit" class="but-link">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------------------------end alert modal link--------------------------------         -->

    <!-- ----------------------------------alert edit link-------------------------------------- -->

    <div class="clickedit" id="clicke">
      <div class="container-clickedit" style="display: none;" id="clickedi">
        <div class="con-clickedit">
            <svg onclick="clickedit2()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
            <h2 class="edd">Edit</h2>
            <div class="input1-clickedit">
              <p>Nama Menu</p>
              <input class="in1-clickedit" type="text">
            </div>
            <div class="input2-clickedit">
              <label for="formFile">Pilih Icon</label>
              <input name="username" type="file" id="formFile" required>
            </div>
            <div class="input3-clickedit">
              <p>Url</p>
              <input type="text">
            </div>
            <div class="button-link-clickedit">
              <button type="submit" class="but-link-clickedit">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- ----------------------------------end alert edit link-------------------------------------- -->
    
    <!-- ----------------------------------alert delet link-------------------------------------- -->
    
    <div class="clickdelete" id="clickd">
      <div class="container-clickdelete" style="display: none;" id="clickdel">
        <div class="con-clickdelete">
            <svg onclick="clickdelete2()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
            <h2 class="dell">Delete This Data</h2>
            <div class="con-dell">
              <div class="tombol-del-y">Yes</div>
              <div class="tombol-del-n">No</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ----------------------------------end alert delete link-------------------------------------- -->
