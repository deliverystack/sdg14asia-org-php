// Language selector toggle
document.querySelectorAll('.lang-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  });
});

// Hamburger / mobile menu toggle
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');

hamburger.addEventListener('click', () => {
  const isOpen = mobileMenu.classList.toggle('open');
  hamburger.classList.toggle('open', isOpen);
  hamburger.setAttribute('aria-expanded', isOpen);
});

// Close mobile menu when a link is tapped
mobileMenu.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    hamburger.classList.remove('open');
    hamburger.setAttribute('aria-expanded', false);
  });
});

// Mobile lang buttons — sync active state with desktop ones
document.querySelectorAll('.mobile-lang-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    // update all lang buttons (desktop + mobile)
    document.querySelectorAll('.lang-btn, .mobile-lang-btn').forEach(b => b.classList.remove('active'));
    const lang = btn.dataset.lang;
    document.querySelectorAll(`[data-lang="${lang}"]`).forEach(b => b.classList.add('active'));
  });
});

// Cookie bar buttons
function dismissCookieBar() {
  document.getElementById('cookieBar').style.display = 'none';
}
