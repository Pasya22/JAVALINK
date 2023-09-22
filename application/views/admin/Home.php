<!-- -------------------------------side bar---------------------------------- -->
<input type="checkbox" name="" id="check">
<label for="check">
  <svg xmlns="http://www.w3.org/2000/svg" id="btn" onclick="shiftSearch(); shiftContent2(); " width="16" height="16" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
    <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z" />
  </svg>
  <div class="search-nav" id="content-nav">
    <div class="search-box">
      <div class="search-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </div>
      <div class="search-input">
        <input type="search" class="input" placeholder="java.Link" name="CariData" id="CariData" />
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" id="cancel" onclick="shiftSearch2(); shiftContent()" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
  </svg>
</label>

<div class="sidebar" id="sidebar">

    <header><a href="<?= site_url('Welcome'); ?>">
        <img src="<?= base_url(); ?>img/javawebster.png" alt="">JavaWebster
      </a></header>
    <ul>
      <?php foreach ($tampil as $abc) { ?>
        <li>
          <a id="<?= $abc->tipe_menu ?>" href="<?= "Welcome/". $abc->url ?>" onclick="<?= $abc->aksi ?>"><?= $abc->icon ?><?= $abc->menus ?></a>
        </li>
      <?php } ?>
    </ul>
  </div>

<!-- -------------------------------end side bar---------------------------------- -->
<nav>
  <div class="nav-container">
    <div class="hidden">
      <p>s</p>
    </div>
    <div class="nav-content">
      <div class="nav-box">
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
<!--------------------------------- end nav ------------------------------------>


