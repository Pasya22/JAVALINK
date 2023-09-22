function openclick() {
  document.getElementById("sidebarchatjs").style.display = "block";
}

function closeclick() {
  document.getElementById("sidebarchatjs").style.display = "none";
}

function asideFunction(){
  var x = document.getElementById("sidebarchatjs")
  x.classList.toggle("show");
  if (x.style.display === "none" || x.style.display === "") {
    x.style.opacity = 1;
    x.style.display = "block";
    setTimeout(function () {
      x.style.height = "500px";
    }, 10);
  } else {
    x.style.height = "0";
    setTimeout(function () {
      x.style.opacity = 0;
      x.style.display = "none";
    }, 500);
  }
  }

  var menuToggle = document.querySelector('.menu-toggle input');
  var sidebarNav = document.querySelector('#sidebar-nav');

  menuToggle.addEventListener('click', function() {
    if (this.checked) {
      sidebarNav.classList.add('show');
    } else {
      sidebarNav.classList.remove('show');
    }
  });
