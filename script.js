// Мобильное меню
document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector('.nav__toggle');
    const navMenu = document.querySelector('.nav__menu');
    const navLinks = document.querySelectorAll('.nav__link');

    // Переключение мобильного меню
    navToggle.addEventListener('click', function() {
        navMenu.classList.toggle('nav__menu--active');
        navToggle.classList.toggle('nav__toggle--active');
    });

    // Закрытие меню при клике на ссылку
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
        });
    });

    // Закрытие меню при клике вне его
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav')) {
            navMenu.classList.remove('nav__menu--active');
            navToggle.classList.remove('nav__toggle--active');
        }
    });

    // Плавная прокрутка для якорных ссылок (только на главной странице)
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            // Если это якорная ссылка на той же странице
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetSection = document.querySelector(href);
                
                if (targetSection) {
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = targetSection.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Анимация появления элементов при скролле
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Наблюдение за элементами для анимации (в зависимости от страницы)
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    
    let animatedElements = [];
    
    if (currentPage === 'index.html' || currentPage === '') {
        animatedElements = document.querySelectorAll('.hero__content, .about__text, .service__card, .feature');
    } else if (currentPage === 'cooperation.html') {
        animatedElements = document.querySelectorAll('.cooperation__text, .cooperation__info, .sturgeon-image');
    } else if (currentPage === 'fishing.html') {
        animatedElements = document.querySelectorAll('.fishing__text, .fishing__info, .fishing-image');
    } else if (currentPage === 'purchase.html') {
        animatedElements = document.querySelectorAll('.purchase__text, .purchase__info, .purchase-image');
    } else if (currentPage === 'products.html') {
        animatedElements = document.querySelectorAll('.products__text, .product__card');
    } else if (currentPage === 'contacts.html') {
        animatedElements = document.querySelectorAll('.contacts__info, .contact__block, .contacts__form');
    }

    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        observer.observe(el);
    });

    // Изменение навигации при скролле
    let lastScrollTop = 0;
    const header = document.querySelector('.header');

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.style.background = 'rgba(10, 10, 10, 0.98)';
            header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.7)';
        } else {
            header.style.background = 'rgba(10, 10, 10, 0.95)';
            header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.5)';
        }

        // Скрытие/показ навигации при скролле
        if (scrollTop > lastScrollTop && scrollTop > 200) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        
        lastScrollTop = scrollTop;
    });

    // Анимация кнопок при наведении
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Параллакс эффект для всех секций
    const parallaxSections = document.querySelectorAll('.hero, .cooperation, .fishing, .purchase, .products, .contacts');
    parallaxSections.forEach(section => {
        if (section) {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.3;
                section.style.transform = `translateY(${rate}px)`;
            });
        }
    });

    // Анимация изображений (в зависимости от страницы)
    const images = document.querySelectorAll('.sturgeon-image, .fishing-image, .purchase-image');
    images.forEach(image => {
        if (image) {
            // Добавляем эффект мерцания
            setInterval(() => {
                image.style.filter = 'drop-shadow(0 0 40px rgba(255, 215, 0, 0.4))';
                setTimeout(() => {
                    image.style.filter = 'drop-shadow(0 0 30px rgba(0, 0, 0, 0.8))';
                }, 200);
            }, 3000);

            // Эффект при наведении
            image.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05) rotate(2deg)';
                this.style.filter = 'drop-shadow(0 0 50px rgba(255, 215, 0, 0.6))';
            });

            image.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
                this.style.filter = 'drop-shadow(0 0 30px rgba(0, 0, 0, 0.8))';
            });
        }
    });

    // Анимация логотипа
    const logoIcon = document.querySelector('.logo-icon');
    if (logoIcon) {
        logoIcon.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(5deg)';
        });

        logoIcon.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    }

    // Анимация заголовков (в зависимости от страницы)
    const titles = document.querySelectorAll('.hero__title, .cooperation__title, .fishing__title, .purchase__title, .products__title, .contacts__title');
    titles.forEach(title => {
        if (title) {
            // Эффект печатной машинки
            const text = title.textContent;
            title.textContent = '';
            
            let i = 0;
            const typeWriter = () => {
                if (i < text.length) {
                    title.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 100);
                }
            };
            
            // Запускаем анимацию после загрузки страницы
            setTimeout(typeWriter, 500);
        }
    });

    // Обработка формы на странице контактов
    const contactForm = document.querySelector('.contact__form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Получение данных формы
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const phone = formData.get('phone');
            const message = formData.get('message');
            
            // Простая валидация
            if (!name || !email || !message) {
                showNotification('Пожалуйста, заполните обязательные поля', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showNotification('Пожалуйста, введите корректный email', 'error');
                return;
            }
            
            // Имитация отправки
            showNotification('Сообщение отправлено! Мы свяжемся с вами в ближайшее время.', 'success');
            this.reset();
        });
    }

    // Функция показа уведомлений
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `notification notification--${type}`;
        notification.textContent = message;
        
        // Стили для уведомления
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 1rem 2rem;
            border-radius: 10px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            max-width: 300px;
            font-family: 'Mustica Pro', sans-serif;
        `;
        
        if (type === 'success') {
            notification.style.background = '#10b981';
        } else {
            notification.style.background = '#ef4444';
        }
        
        document.body.appendChild(notification);
        
        // Анимация появления
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Автоматическое скрытие
        setTimeout(() => {
            notification.style.transform = 'translateX(400px)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    // Функция валидации email
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Плавная загрузка страницы
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.8s ease';
        
        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });

    // Эффект частиц для фона
    function createParticle() {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.cssText = `
            position: fixed;
            width: 2px;
            height: 2px;
            background: rgba(255, 215, 0, 0.6);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            animation: particleFloat 8s linear infinite;
        `;
        
        particle.style.left = Math.random() * window.innerWidth + 'px';
        particle.style.top = window.innerHeight + 'px';
        
        document.body.appendChild(particle);
        
        // Удаляем частицу после анимации
        setTimeout(() => {
            if (particle.parentNode) {
                particle.parentNode.removeChild(particle);
            }
        }, 8000);
    }

    // Создаем частицы каждые 2 секунды
    setInterval(createParticle, 2000);

    // Эффект волн для фона
    function createWave() {
        const wave = document.createElement('div');
        wave.className = 'wave';
        wave.style.cssText = `
            position: fixed;
            bottom: -100px;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(45deg, transparent 30%, rgba(45, 27, 105, 0.1) 50%, transparent 70%);
            animation: waveMove 6s ease-in-out infinite;
            pointer-events: none;
            z-index: 0;
        `;
        
        document.body.appendChild(wave);
        
        setTimeout(() => {
            if (wave.parentNode) {
                wave.parentNode.removeChild(wave);
            }
        }, 6000);
    }

    // Создаем волны каждые 4 секунды
    setInterval(createWave, 4000);

    // Интерактивность для контактной информации
    const contactElements = document.querySelectorAll('.footer__phone a, .footer__email a');
    contactElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.textShadow = '0 0 30px rgba(255, 215, 0, 0.8)';
        });

        element.addEventListener('mouseleave', function() {
            this.style.textShadow = '0 0 20px rgba(255, 215, 0, 0.3)';
        });
    });

    // Эффект свечения для активной навигации
    const activeNavLink = document.querySelector('.nav__link--active');
    if (activeNavLink) {
        setInterval(() => {
            activeNavLink.style.textShadow = '0 0 20px rgba(255, 215, 0, 0.8)';
            setTimeout(() => {
                activeNavLink.style.textShadow = 'none';
            }, 200);
        }, 3000);
    }

    // Анимация карточек услуг и продуктов
    const cards = document.querySelectorAll('.service__card, .product__card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Анимация особенностей на главной странице
    const features = document.querySelectorAll('.feature');
    features.forEach(feature => {
        feature.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.borderColor = 'rgba(255, 215, 0, 0.6)';
        });

        feature.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.borderColor = 'rgba(255, 215, 0, 0.2)';
        });
    });

    // Добавление CSS для анимаций и мобильного меню
    const style = document.createElement('style');
    style.textContent = `
        @keyframes particleFloat {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }
        
        @keyframes waveMove {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            50% {
                opacity: 0.3;
            }
            100% {
                transform: translateX(100%);
                opacity: 0;
            }
        }
        
        .particle {
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.8);
        }
        
        @media (max-width: 768px) {
            .nav__menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(10, 10, 10, 0.98);
                flex-direction: column;
                padding: 2rem;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
                transform: translateY(-100%);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                border-top: 1px solid rgba(255, 215, 0, 0.2);
            }
            
            .nav__menu--active {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .nav__toggle--active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }
            
            .nav__toggle--active span:nth-child(2) {
                opacity: 0;
            }
            
            .nav__toggle--active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -6px);
            }
        }
    `;
    document.head.appendChild(style);
});
