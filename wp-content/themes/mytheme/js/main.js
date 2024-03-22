document.addEventListener('DOMContentLoaded', function () {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const menuContainer = document.querySelector('.menu-primary-container');

  function toggleMenu() {
    hamburgerMenu.classList.toggle('open');
    menuContainer.classList.toggle('open');
  }

  hamburgerMenu.addEventListener('click', function () {
    toggleMenu();
  });

  window.addEventListener('resize', function (e) {
    if ((e.target.innerWidth >= 769) && hamburgerMenu.classList.contains('open')) {
      toggleMenu();
    }
  });
});