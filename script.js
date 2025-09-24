document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector('.nav__toggle');
    const navMenu = document.querySelector('.nav__menu');
    const navLinks = document.querySelectorAll('.nav__link');
    const dropdownToggles = document.querySelectorAll('.nav__dropdown-toggle');

    if (navToggle && navMenu) {
    navToggle.addEventListener('click', function() {
        navMenu.classList.toggle('nav__menu--active');
        navToggle.classList.toggle('nav__toggle--active');
        });
    }

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const submenu = this.nextElementSibling;
            dropdownToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    const otherSubmenu = otherToggle.nextElementSibling;
                    otherSubmenu.classList.remove('nav__submenu--active');
                    otherToggle.classList.remove('nav__dropdown-toggle--active');
                }
            });
            
            submenu.classList.toggle('nav__submenu--active');
            this.classList.toggle('nav__dropdown-toggle--active');
        });
    });

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navMenu && navToggle) {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
            }
        });
    });

    const submenuLinks = document.querySelectorAll('.nav__submenu-link');
    submenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navMenu && navToggle) {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
            }
        });
    });

    document.addEventListener('click', function(event) {
        if (navMenu && navToggle && !event.target.closest('.nav')) {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
            
            dropdownToggles.forEach(toggle => {
                const submenu = toggle.nextElementSibling;
                submenu.classList.remove('nav__submenu--active');
                toggle.classList.remove('nav__dropdown-toggle--active');
            });
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('genpassSlider');
    if (!slider) return;

    const track = slider.querySelector('.slider__track');
    const slides = Array.from(slider.querySelectorAll('.slider__slide'));
    const btnPrev = slider.querySelector('.slider__btn--prev');
    const btnNext = slider.querySelector('.slider__btn--next');
    const dotsContainer = slider.querySelector('.slider__dots');

    let current = 0;
    const viewport = slider.querySelector('.slider__viewport');
    const getItemsPerView = () => 1; 
    let itemsPerView = getItemsPerView();
    let slideWidth = () => Math.floor(viewport.clientWidth / itemsPerView);

    function layout() {
        itemsPerView = getItemsPerView();
        const w = slideWidth();
        slides.forEach(s => { s.style.width = w + 'px'; });
        track.style.width = (w * slides.length) + 'px';
        const maxIndex = Math.max(0, slides.length - itemsPerView);
        if (current > maxIndex) current = maxIndex;
        track.style.transform = `translateX(-${current * w}px)`;
        rebuildDots();
    }

    function rebuildDots() {
        if (!dotsContainer) return;
        dotsContainer.innerHTML = '';
        const pages = Math.max(1, slides.length - itemsPerView + 1);
        for (let i = 0; i < pages; i++) {
            const dot = document.createElement('button');
            dot.className = 'slider__dot' + (i === current ? ' slider__dot--active' : '');
            dot.type = 'button';
            dot.addEventListener('click', () => goTo(i));
            dotsContainer.appendChild(dot);
        }
    }

    function updateDots() {
        const dots = dotsContainer.querySelectorAll('.slider__dot');
        dots.forEach((d, i) => d.classList.toggle('slider__dot--active', i === current));
    }

    function goTo(index) {
        const maxIndex = Math.max(0, slides.length - itemsPerView);
        current = Math.max(0, Math.min(index, maxIndex));
        track.style.transform = `translateX(-${current * slideWidth()}px)`;
        updateDots();
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    btnNext.addEventListener('click', (e) => { e.preventDefault(); next(); });
    btnPrev.addEventListener('click', (e) => { e.preventDefault(); prev(); });

    window.addEventListener('resize', () => layout());

    let isDragging = false;
    let startX = 0;
    let deltaX = 0;
    let startOffset = 0;

    function currentOffsetPx() {
        const m = /translateX\(-?(\d+)px\)/.exec(track.style.transform || '');
        return m ? parseInt(m[1], 10) : current * slideWidth();
    }

    function onPointerDown(e) {
        if (!e.target.closest('.slider__viewport')) return;
        isDragging = true;
        startX = e.clientX;
        deltaX = 0;
        startOffset = currentOffsetPx();
        track.style.transition = 'none';
        viewport.style.cursor = 'grabbing';
        e.preventDefault();
        e.stopPropagation();
    }

    function onPointerMove(e) {
        if (!isDragging) return;
        deltaX = e.clientX - startX;
        const w = slideWidth();
        const maxOffset = Math.max(0, (slides.length - itemsPerView) * w);
        let next = startOffset - deltaX;
        next = Math.max(0, Math.min(next, maxOffset));
        track.style.transform = `translateX(-${next}px)`;
        e.preventDefault();
    }

    function onPointerUp() {
        if (!isDragging) return;
        isDragging = false;
        viewport.style.cursor = '';
        track.style.transition = '';
        const thresh = Math.max(40, Math.floor(slideWidth() * 0.2));
        if (Math.abs(deltaX) > thresh) {
            if (deltaX > 0) prev(); else next();
        } else {
            goTo(current);
        }
        deltaX = 0;
    }

    viewport.addEventListener('pointerdown', onPointerDown);
    window.addEventListener('pointermove', onPointerMove);
    window.addEventListener('pointerup', onPointerUp);
    window.addEventListener('pointercancel', onPointerUp);
    window.addEventListener('blur', onPointerUp);

    let timer = setInterval(() => {
        const maxIndex = Math.max(0, slides.length - itemsPerView);
        if (current >= maxIndex) goTo(0); else next();
    }, 5000);
    slider.addEventListener('pointerdown', () => clearInterval(timer));

    layout();
});

document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.genpass-slider__image');
    if (!images.length) return;

    let overlay = null;
    let modalImg = null;

    function ensureLightbox() {
        if (overlay) return;
        overlay = document.createElement('div');
        overlay.className = 'lightbox-overlay';
        overlay.style.position = 'fixed';
        overlay.style.inset = '0';
        overlay.style.background = 'rgba(0,0,0,0.85)';
        overlay.style.display = 'flex';
        overlay.style.alignItems = 'center';
        overlay.style.justifyContent = 'center';
        overlay.style.zIndex = '9999';
        overlay.style.cursor = 'zoom-out';
        overlay.style.padding = '0';

        modalImg = document.createElement('img');
        modalImg.style.width = '100vw';
        modalImg.style.height = '100vh';
        modalImg.style.maxWidth = '100vw';
        modalImg.style.maxHeight = '100vh';
        modalImg.style.objectFit = 'contain';
        modalImg.style.boxShadow = '';
        modalImg.style.borderRadius = '';
        modalImg.alt = '';

        overlay.appendChild(modalImg);
        overlay.addEventListener('click', closeLightbox);
        document.addEventListener('keydown', onKeyDown);
        document.body.appendChild(overlay);
    }

    function openLightbox(src, alt) {
        ensureLightbox();
        modalImg.src = src;
        modalImg.alt = alt || '';
        overlay.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        if (!overlay) return;
        overlay.style.display = 'none';
        document.body.style.overflow = '';
    }

    function onKeyDown(e) {
        if (e.key === 'Escape') closeLightbox();
    }

    images.forEach(img => {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', (e) => {
            e.preventDefault();
            openLightbox(img.src, img.alt);
        });
    });
});