document.addEventListener("DOMContentLoaded", function() {
    
    // 1. Navbar Scroll Effect
    const navbar = document.getElementById('mainNav');
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Show/Hide Back to top button
        if (window.scrollY > 500) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });

    // 2. Custom ScrollSpy (Bulletproof Active Menu highlight)
    const sections = document.querySelectorAll("header[id], section[id]");
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    window.addEventListener("scroll", () => {
        let current = "";
        
        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            // Angka 100 ini disesuaikan dengan tinggi navbar fixed kita
            if (pageYOffset >= (sectionTop - 100)) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });
    });

    // 3. Smooth Scrolling on Click & Auto-close mobile menu
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Tutup mobile menu setelah di klik
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });

    // Back to top click
    backToTop.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // 4. Swiper Initialization: Hero / Banner
    const heroSwiper = new Swiper('.heroSwiper', {
        effect: 'fade',
        fadeEffect: { crossFade: true },
        loop: true,
        speed: 1500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
    });

    // 5. Swiper Initialization: Promo
    const promoSwiper = new Swiper('.promoSwiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: '.promoSwiper .swiper-pagination', clickable: true, dynamicBullets: true },
        breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
    });

    // 6. Swiper Initialization: Ballroom Galeri
    const ballroomSwiper = new Swiper('.ballroomSwiper', {
        loop: true,
        speed: 800,
        autoplay: { delay: 3500, disableOnInteraction: false },
        pagination: { el: '.ballroomSwiper .swiper-pagination', clickable: true }
    });

});
