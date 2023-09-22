document.addEventListener("DOMContentLoaded", function () {
  var userLink = document.getElementById('user-link');
  var linknyaLink = document.getElementById("linknya-link");
  var tampilanLink = document.getElementById('tampilan-link');
  var pengaturanLink = document.getElementById('pengaturan-link');
  var transaksiLink = document.getElementById('transaksi-link');
  var analitikLink = document.getElementById('analitik-link');
  var hasilkanLink = document.getElementById('hasilkan-link');
  var tokoLink = document.getElementById('toko-link');
  var pendaftaranLink = document.getElementById('pendaftaran-link');
  var pesanLink = document.getElementById('pesan-link');
  var integrationsLink = document.getElementById("integrations-link");
  var userContent = document.getElementById('user-content');
  var linkContent = document.getElementById("link-content");
  var tampilanContent = document.getElementById('tampilan-content');
  var pengaturanContent = document.getElementById('pengaturan-content');
  var transaksiContent = document.getElementById('transaksi-content');
  var analitikContent = document.getElementById('analitik-content');
  var hasilkanContent = document.getElementById('hasilkan-content');
  var tokoContent = document.getElementById('toko-content');
  var pendaftaranContent = document.getElementById('pendaftaran-content');
  var pesanContent = document.getElementById('pesan-content');
  var integrationsContent = document.getElementById("integrations-content");

  userLink.addEventListener("click", function () {
    userContent.style.display = "block";
    linkContent.style.display = "none";
    tampilanContent.style.display = "none";
    integrationsContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  linknyaLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "block";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  tampilanLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "block";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  pengaturanLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "block";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  transaksiLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "block";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  analitikLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "block";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  hasilkanLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "block";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  tokoLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "block";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
  });

  pendaftaranLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "block";
    pesanContent.style.display = "none";
  });

  pesanLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    integrationsContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "block";
  });

  integrationsLink.addEventListener("click", function () {
    userContent.style.display = "none";
    linkContent.style.display = "none";
    tampilanContent.style.display = "none";
    pengaturanContent.style.display = "none";
    transaksiContent.style.display = "none";
    analitikContent.style.display = "none";
    hasilkanContent.style.display = "none";
    tokoContent.style.display = "none";
    pendaftaranContent.style.display = "none";
    pesanContent.style.display = "none";
    integrationsContent.style.display = "block";
  });

});


function shiftContent() {
  var content = document.getElementById("content-container");
  content.style.marginLeft = "0";
}

function shiftContent2() {
  var content = document.getElementById("content-container");
  content.style.marginLeft = "250px";
}

function shiftSearch() {
  var content = document.getElementById("content-nav");
  content.style.marginLeft = "180px";
}

function shiftSearch2() {
  var content = document.getElementById("content-nav");
  content.style.marginLeft = "0";
}

function removeContent() {
  var content222 = document.getElementById("content222");
  content222.remove();
}

function mod() {
  var content = document.getElementById("modal");
  content.style.display = "block";
}

function mod2() {
  var content = document.getElementById("modal");
  content.style.display = "none";
}

function clickedit() {
  var content = document.getElementById("clickedi");
  content.style.display = "block";
}

function clickedit2() {
  var content = document.getElementById("clickedi");
  content.style.display = "none";
}

function clickdelete() {
  var content = document.getElementById("clickdel");
  content.style.display = "block";
}

function clickdelete2() {
  var content = document.getElementById("clickdel");
  content.style.display = "none";
}

function moduser() {
  var content = document.getElementById("user");
  content.style.display = "block";
}

function moduser2() {
  var content = document.getElementById("user");
  content.style.display = "none";
}

function clickedituser(id) {
  var content = document.getElementById("clickediuser" + id);
  console.log("data:",content);
  content.style.display = "block";
}

function clickedituser2(id) {
  var content = document.getElementById("clickediuser" + id);
  content.style.display = "none";
}

// function clickdeleteuser(id) {
//   var content = document.getElementById("clickdeluser")+id;
//   console.log("data:", content);
//   content.style.display = "block";
// }

// function clickdeleteuser2(id) {
//   var content = document.getElementById("clickdeluser")+id;
//   console.log("data:",content);
//   content.style.display = "none";
// }
function clickdeleteuser(id) {
 var datas =  $('#clickdeluser' + id).show(); // Tampilkan konfirmasi penghapusan sesuai dengan id
 console.log("data:",datas);
}

function clickdeleteuser2(id) {
  $('#clickdeluser' + id).hide(); // Sembunyikan konfirmasi penghapusan sesuai dengan id
}

function clickedittransaksi() {
  var content = document.getElementById("clickeditransaksi");
  content.style.display = "block";
}

function clickedittransaksi2() {
  var content = document.getElementById("clickeditransaksi");
  content.style.display = "none";
}

function clickdeletetransaksi() {
  var content = document.getElementById("clickdeltransaksi");
  content.style.display = "block";
}

function clickdeletetransaksi2() {
  var content = document.getElementById("clickdeltransaksi");
  content.style.display = "none";
}


function modtransaksi() {
  var content = document.getElementById("transaksi");
  content.style.display = "block";
}

function modtransaksi2() {
  var content = document.getElementById("transaksi");
  content.style.display = "none";
}

var listItems = document.querySelectorAll('.container-tema1 ul li');

listItems.forEach(function (item) {
  item.addEventListener('click', function () {
    listItems.forEach(function (li) {
      li.classList.remove('activ');
    });

    item.classList.add('activ');
  });
});

window.onload = function () {
  var kotakall = document.getElementById("tema-all");
  kotakall.click();
}

function showContent(tema) {
  var kontenTema = document.getElementsByClassName('content-container-tema')[0].children;

  for (var i = 0; i < kontenTema.length; i++) {
    kontenTema[i].style.display = 'none';
  }

  var konten = document.getElementById(tema + '-content');
  konten.style.display = 'block';
}

var containerItems = document.querySelectorAll('.container-tema-custom, .desain-tema1');

containerItems.forEach(function (item) {
  item.addEventListener('click', function () {
    containerItems.forEach(function (li) {
      li.classList.remove('activv', 'activvv');
    });

    item.classList.add('activv', 'activvv');
  });
});

var containerItemss = document.querySelectorAll('.tata-teks-header1, .tata-teks-header2, .tata-teks-header3');

containerItemss.forEach(function (item) {
  item.addEventListener('click', function () {
    containerItemss.forEach(function (li) {
      li.classList.remove('activee');
    });

    item.classList.add('activee');
  });
});

var containerItemsss = document.querySelectorAll('.penyesuaian-teks-link1, .penyesuaian-teks-link2, .penyesuaian-teks-link3');

containerItemsss.forEach(function (item) {
  item.addEventListener('click', function () {
    containerItemsss.forEach(function (li) {
      li.classList.remove('activeee');
    });

    item.classList.add('activeee');
  });
});

function clicksvghp() {
  var hpshare = document.querySelector(".tampilan2-share");
  hpshare.style.display = "block";
}

function clicksvghp2() {
  var hpshare = document.querySelector(".tampilan2-share");
  hpshare.style.display = "none";
}

  // window.onload = function() {
  //   var cancel = document.getElementById("content-nav");
  //   cancel.click();
  // }
