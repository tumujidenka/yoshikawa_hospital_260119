document.addEventListener('DOMContentLoaded', function () {
  // Hamburger Menu
  const hamburger = document.querySelector('.js-hamburger');
  const drawer = document.querySelector('.js-drawer');
  const overlay = document.querySelector('.js-overlay');
  const body = document.body;

  function toggleMenu() {
    hamburger.classList.toggle('is-active');
    drawer.classList.toggle('is-active');
    overlay.classList.toggle('is-active');
    body.classList.toggle('is-menu-open');
  }

  function closeMenu() {
    hamburger.classList.remove('is-active');
    drawer.classList.remove('is-active');
    overlay.classList.remove('is-active');
    body.classList.remove('is-menu-open');
  }

  if (hamburger) {
    hamburger.addEventListener('click', toggleMenu);
  }

  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }

  // Close menu on window resize (PC)
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 768) {
      closeMenu();
    }
  });
});
