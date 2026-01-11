/*
 * Aetheria JS Core v3.0 (Final Clean)
 * Features: Theme, UI, Island, HTP, Staff, Piston
 */

// 1. SAFETY LOADER
(function() {
    function killLoader() { document.body.classList.add('loaded'); }
    if (document.readyState === 'complete' || document.readyState === 'interactive') {
        setTimeout(killLoader, 200);
    } else {
        window.addEventListener('load', killLoader);
        window.addEventListener('DOMContentLoaded', killLoader);
    }
    setTimeout(killLoader, 3500);
})();

const Aetheria = {
    
    // 2. THEME MANAGER
    theme: {
        apply: function() {
            const saved = localStorage.getItem('aetheria_theme');
            if (saved === 'dark') document.documentElement.setAttribute('data-theme', 'dark');
            else document.documentElement.removeAttribute('data-theme');
        },
        bind: function() {
            const btn = document.getElementById('theme-switch-toggle');
            if (btn) {
                btn.checked = (localStorage.getItem('aetheria_theme') === 'dark');
                btn.addEventListener('change', () => Aetheria.theme.toggle());
            }
        },
        toggle: function() {
            if (document.documentElement.getAttribute('data-theme') === 'dark') {
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('aetheria_theme', 'light');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('aetheria_theme', 'dark');
            }
        }
    },

    // 3. UI HELPERS
    ui: {
        toggleUserDropdown: function() {
            const menu = document.getElementById('user-dropdown-menu');
            if (menu) menu.classList.toggle('show');
        },

        setupOutsideClicks: function() {
            window.onclick = function(e) {
                if (!e.target.closest('.user-dropdown-wrapper')) {
                    const menu = document.getElementById('user-dropdown-menu');
                    if (menu) menu.classList.remove('show');
                }
            }
        },
        
        copyIP: function(el, ip) {
            if (!navigator.clipboard) return;
            navigator.clipboard.writeText(ip).then(() => {
                Aetheria.island.show('IP Copiato: ' + ip, 'success');
            }).catch(err => console.error(err));
        },

        nextStep: function() {
            const active = document.querySelector('.htp-step.active');
            if (!active) {
                const first = document.querySelector('.htp-step[data-step="1"]');
                if(first) first.classList.add('active');
                return;
            }
            
            let next = parseInt(active.getAttribute('data-step')) + 1;
            const total = document.querySelectorAll('.htp-step').length;
            if (next > total) next = 1;

            document.querySelectorAll('.htp-step').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.htp-dot').forEach(el => el.classList.remove('active'));

            const nextEl = document.querySelector(`.htp-step[data-step="${next}"]`);
            if (nextEl) nextEl.classList.add('active');
            
            const dots = document.querySelectorAll('.htp-dot');
            if (dots[next-1]) dots[next-1].classList.add('active');
        },

        initStaffCarousel: function() {
            const heads = document.querySelectorAll('.staff-nav-head');
            const bar = document.querySelector('.staff-progress-bar');
            if(heads.length === 0) return;

            let timer;

            const startRotation = () => {
                if (bar) {
                    bar.classList.remove('animating');
                    void bar.offsetWidth; 
                    bar.classList.add('animating');
                }
                clearTimeout(timer);
                timer = setTimeout(() => { rotateNext(); }, 20000); 
            };

            const rotateNext = () => {
                const current = document.querySelector('.staff-nav-head.active');
                let next = current.nextElementSibling;
                if (!next) next = heads[0]; 
                next.click(); 
            };

            heads.forEach(head => {
                head.addEventListener('click', function() {
                    document.querySelectorAll('.staff-nav-head').forEach(h => h.classList.remove('active'));
                    document.querySelectorAll('.staff-slide').forEach(s => s.classList.remove('active'));
                    
                    this.classList.add('active');
                    const targetId = this.getAttribute('data-target');
                    const targetSlide = document.getElementById(targetId);
                    if(targetSlide) targetSlide.classList.add('active');

                    startRotation();
                });
            });

            startRotation();
        }
    },

    // 4. DYNAMIC ISLAND
    island: {
        show: function(msg, type = 'success') {
            const isl = document.getElementById('dynamic-island');
            if (!isl) return;
            
            const ico = isl.querySelector('.island-icon');
            const txt = isl.querySelector('.island-content');
            
            ico.className = 'island-icon fa';
            if (type === 'error') ico.classList.add('fa-times-circle', 'error');
            else if (type === 'info') ico.classList.add('fa-info-circle', 'info');
            else ico.classList.add('fa-check-circle');
            
            txt.innerText = msg;
            isl.classList.add('active');
            setTimeout(() => isl.classList.remove('active'), 4000);
        },
        checkMessages: function() {
            const h = document.getElementById('hidden-session-flash');
            if (h && h.innerText.trim()) {
                const type = h.getAttribute('data-type') === 'error' ? 'error' : 'success';
                setTimeout(() => this.show(h.innerText, type), 800);
            }
        }
    },

    // 5. INIT
    init: function() {
        console.log('Aetheria v3.0 Init');
        try {
            this.theme.bind();
            this.ui.setupOutsideClicks();
            this.island.checkMessages();
            this.ui.initStaffCarousel();
        } catch (e) { console.error('Aetheria Init Error:', e); }
    }
};

// Start
Aetheria.theme.apply();

window.copyIP = Aetheria.ui.copyIP;
window.nextStep = Aetheria.ui.nextStep;
window.toggleUserDropdown = Aetheria.ui.toggleUserDropdown;

$(document).ready(function() {
    Aetheria.init();
});