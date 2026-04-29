/**
 * components.js
 * Shared header & footer loader for SIDIA website.
 *
 * Usage — add to every page's <head> (adjust depth of path as needed):
 *   <script src="../shared/components.js" data-page="home"></script>
 *
 * The data-page attribute marks which nav link is active.
 * Valid values: home | berita | satuan-kerja | statistik | diklat | infrastruktur | login | pendaftaran
 */

(function () {
  /* ── Route map (relative to each page folder) ─────────────────────────── */
  const ROUTES = {
    'home':          '../home_sidia_new_style/code.html',
    'berita':        '../berita_sidia_new_style/code.html',
    'satuan-kerja':  '../satuan_kerja_sidia_new_style/code.html',
    'statistik':     '../statistik_sidia_new_style/code.html',
    'diklat':        '../diklat_sidia_new_style/code.html',
    'infrastruktur': '../infrastruktur_kompetensi_new_style/code.html',
    'login':         '../login_sidia_new_style/code.html',
    'pendaftaran':   '../pendaftaran_peserta_diklat_new_style/code.html',
  };

  /* ── Determine which page is current ─────────────────────────────────── */
  const scriptTag   = document.currentScript;
  const currentPage = (scriptTag && scriptTag.getAttribute('data-page')) || 'home';

  /* ── Fetch helper (falls back to XHR for file:// protocol) ───────────── */
  function loadFragment(url, callback) {
    if (typeof fetch !== 'undefined') {
      fetch(url)
        .then(r => { if (!r.ok) throw new Error(r.status); return r.text(); })
        .then(callback)
        .catch(err => console.warn('[components.js] Could not load', url, err));
    } else {
      const xhr = new XMLHttpRequest();
      xhr.open('GET', url, true);
      xhr.onload = function () { if (xhr.status === 200 || xhr.status === 0) callback(xhr.responseText); };
      xhr.send();
    }
  }

  /* ── Resolve path to shared/ relative to THIS script's location ──────── */
  function sharedPath(file) {
    const src = (scriptTag && scriptTag.src) || '';
    // e.g. src = "…/shared/components.js"  → base = "…/shared/"
    const base = src.substring(0, src.lastIndexOf('/') + 1);
    return base + file;
  }

  /* ── Inject header ────────────────────────────────────────────────────── */
  function injectHeader(html) {
    // Insert before <body>'s first child
    const placeholder = document.getElementById('sidia-header') || null;
    const wrapper = document.createElement('div');
    wrapper.innerHTML = html;

    if (placeholder) {
      placeholder.replaceWith(...wrapper.childNodes);
    } else {
      // Prepend to body
      document.body.insertBefore(wrapper, document.body.firstChild);
    }

    applyNavState();
    wireNavigation();
  }

  /* ── Inject footer ────────────────────────────────────────────────────── */
  function injectFooter(html) {
    const placeholder = document.getElementById('sidia-footer') || null;
    const wrapper = document.createElement('div');
    wrapper.innerHTML = html;

    if (placeholder) {
      placeholder.replaceWith(...wrapper.childNodes);
    } else {
      document.body.appendChild(wrapper);
    }
  }

  /* ── Highlight active nav link ────────────────────────────────────────── */
  function applyNavState() {
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => {
      const page = link.getAttribute('data-page');
      if (page === currentPage) {
        link.classList.add('text-blue-600', 'border-b-2', 'border-blue-600', 'pb-1');
        link.classList.remove('text-gray-600', 'dark:text-gray-400');
      } else {
        link.classList.add('text-gray-600', 'dark:text-gray-400', 'hover:text-blue-600', 'transition-colors');
        link.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600', 'pb-1');
      }
      // Set href
      if (ROUTES[page]) link.href = ROUTES[page];
    });

    // Logo → home
    const logo = document.getElementById('logo-sidia');
    if (logo) logo.addEventListener('click', () => { window.location.href = ROUTES['home']; });

    // Pendaftaran button
    const btnP = document.getElementById('btn-pendaftaran');
    if (btnP) btnP.addEventListener('click', () => { window.location.href = ROUTES['pendaftaran']; });

    // Login button
    const btnL = document.getElementById('btn-login');
    if (btnL) btnL.addEventListener('click', () => { window.location.href = ROUTES['login']; });
  }

  /* ── Generic click-based navigation (legacy fallback) ────────────────── */
  function wireNavigation() {
    document.addEventListener('click', function (e) {
      const target = e.target.closest('a[data-page], button[data-page]');
      if (!target) return;
      
      const page = target.getAttribute('data-page');
      const sub  = target.getAttribute('data-sub');
      
      if (page && ROUTES[page]) {
        e.preventDefault();
        let targetUrl = ROUTES[page];
        if (sub) {
          targetUrl += '#' + sub;
        }
        window.location.href = targetUrl;
      }
    });
  }

  /* ── Bootstrap ────────────────────────────────────────────────────────── */
  function init() {
    loadFragment(sharedPath('header.html'), injectHeader);
    loadFragment(sharedPath('footer.html'), injectFooter);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
