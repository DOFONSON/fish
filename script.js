// JavaScript для бургер-меню с выпадающими подменю
document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector('.nav__toggle');
    const navMenu = document.querySelector('.nav__menu');
    const navLinks = document.querySelectorAll('.nav__link');
    const dropdownToggles = document.querySelectorAll('.nav__dropdown-toggle');

    // Переключение мобильного меню
    if (navToggle && navMenu) {
    navToggle.addEventListener('click', function() {
        navMenu.classList.toggle('nav__menu--active');
        navToggle.classList.toggle('nav__toggle--active');
        });
    }

    // Обработка выпадающих подменю
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const submenu = this.nextElementSibling;
            // Закрываем все другие подменю
            dropdownToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    const otherSubmenu = otherToggle.nextElementSibling;
                    otherSubmenu.classList.remove('nav__submenu--active');
                    otherToggle.classList.remove('nav__dropdown-toggle--active');
                }
            });
            
            // Переключаем текущее подменю
            submenu.classList.toggle('nav__submenu--active');
            this.classList.toggle('nav__dropdown-toggle--active');
        });
    });

    // Закрытие меню при клике на ссылку
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navMenu && navToggle) {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
            }
        });
    });

    // Закрытие подменю при клике на ссылку подменю
    const submenuLinks = document.querySelectorAll('.nav__submenu-link');
    submenuLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navMenu && navToggle) {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
            }
        });
    });

    // Закрытие меню при клике вне его
    document.addEventListener('click', function(event) {
        if (navMenu && navToggle && !event.target.closest('.nav')) {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
            
            // Закрываем все подменю
            dropdownToggles.forEach(toggle => {
                const submenu = toggle.nextElementSibling;
                submenu.classList.remove('nav__submenu--active');
                toggle.classList.remove('nav__dropdown-toggle--active');
            });
        }
    });
});