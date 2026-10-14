(function () {
    function init() {
        var nav = document.getElementById('navbar');
        if (!nav || !nav.classList.contains('gfe-nav')) return;
        var burger = nav.querySelector('.gfe-nav__burger');
        var drawer = nav.querySelector('.gfe-drawer');
        var mega = nav.querySelector('.has-mega');
        var megaBtn = mega && mega.querySelector('button');

        if (burger && drawer) {
            burger.addEventListener('click', function () {
                var open = drawer.classList.toggle('open');
                burger.setAttribute('aria-expanded', open);
                burger.querySelector('i').className = open ? 'fas fa-times' : 'fas fa-bars';
            });
            drawer.querySelectorAll('a').forEach(function (a) {
                a.addEventListener('click', function () { drawer.classList.remove('open'); burger.setAttribute('aria-expanded', 'false'); burger.querySelector('i').className = 'fas fa-bars'; });
            });
        }
        if (megaBtn) {
            megaBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                var open = mega.classList.toggle('open');
                megaBtn.setAttribute('aria-expanded', open);
            });
            document.addEventListener('click', function (e) { if (!mega.contains(e.target)) { mega.classList.remove('open'); megaBtn.setAttribute('aria-expanded', 'false'); } });
            document.addEventListener('keydown', function (e) { if (e.key === 'Escape') { mega.classList.remove('open'); megaBtn.setAttribute('aria-expanded', 'false'); } });
        }
        // Lien actif
        var page = (location.pathname.split('/').pop() || 'index.html');
        var zonePage = /^(etancheite-|etancheur-)/.test(page);
        nav.querySelectorAll('.gfe-nav__links > li > a').forEach(function (a) {
            var f = a.getAttribute('href').split('#')[0];
            if (f === page && a.getAttribute('href').indexOf('#') === -1) a.setAttribute('aria-current', 'page');
        });
        if (zonePage && megaBtn) megaBtn.setAttribute('aria-current', 'page');
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init); else init();
})();
