<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/guest.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title><?=$title;?></title>
</head>
<body>
    <div class="bungkus">
    <header>
        <div class="container-header">
            <div class="logo-header">
                 <img src="https://javawebster.com/img/web/logo/javawebster.svg" alt="Logo Javawebster SVG" width="30" height="30">
                 <p>Javawebster.LINK</p>
            </div>
            <div class="searching-header">
                <input type="search" placeholder="JavaWebster/<?=$this->session->userdata('nama_pengguna')?>" name="" id="" class="search-konten">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                </svg>
            </div>
            <div class="logo-kotak">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
            </svg>
            </div>
            <div class="pro-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                     <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                </svg>
                <p>Berlangganan</p>
            </div>
            <div class="profil-header">
            <div class="dropdown-profil">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                </svg>
                <ul class="dropdown-menu">
                        <span class="user-data"><b><?=$this->session->userdata('nama_pengguna')?> </b> </span>
                        <span class="user-data"> <?=$this->session->userdata('email')?></span>
                            <hr>
                        <li><a href="#">Profil</a></li>
                    <li><a href="<?=site_url('Login/Logout')?>">Logout</a></li>
                </ul>
            </div>
            </div>
        </div>

    </header>

    <nav>
        <div class="container-nav">
            <ul class="flex-nav">
                <li>
                    <a href="#" class="tab-link active" data-tab="tab1">Link</a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab2">
                        View
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab3">
                        Setting
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab4">
                        Pro
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab5">
                        Analytics
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab6">
                       Earn
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab7">
                        Store
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab8">
                        Signups
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab9">
                        Messages
                    </a>
                </li>
                <li>
                    <a href="#" class="tab-link" data-tab="tab10">
                        Integrations
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-content">
    <div class="tab-content" id="tab1">Tab 1 Content</div>
    <div class="tab-content" id="tab2">Tab 2 Content</div>
    <div class="tab-content" id="tab3">Tab 3 Content</div>
    <div class="tab-content" id="tab4">Tab 4 Content</div>
    <div class="tab-content" id="tab5">Tab 5 Content</div>
    <div class="tab-content" id="tab6">Tab 6 Content</div>
    <div class="tab-content" id="tab7">Tab 7 Content</div>
    <div class="tab-content" id="tab8">Tab 8 Content</div>
    <div class="tab-content" id="tab9">Tab 9 Content</div>
    <div class="tab-content" id="tab10">Tab 10 Content</div>
    </div>
    </div>
</body>
</html>
<script>
// Mendapatkan semua elemen tab-link
const tabLinks = document.querySelectorAll('.tab-link');

// Menggunakan event listener untuk menangani klik pada tab-link
tabLinks.forEach(tabLink => {
  tabLink.addEventListener('click', (e) => {
    e.preventDefault();

    // Menghapus kelas active dari semua tab-link
    tabLinks.forEach(link => link.classList.remove('active'));

    // Menambahkan kelas active pada tab-link yang diklik
    tabLink.classList.add('active');

    // Mendapatkan nilai data-tab dari tab-link yang diklik
    const tabId = tabLink.dataset.tab;

    // Mendapatkan semua elemen tab-content
    const tabContents = document.querySelectorAll('.tab-content');

    // Menyembunyikan semua tab-content
    tabContents.forEach(content => content.classList.remove('active'));

    // Menampilkan tab-content yang sesuai dengan data-tab yang diklik
    const selectedTab = document.getElementById(tabId);
    selectedTab.classList.add('active');
  });
});

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

