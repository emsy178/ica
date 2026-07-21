

        // ========== ORIGINAL SCRIPTS ==========
        // Header scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle - FIXÉ
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const nav = document.getElementById('nav');
        
        mobileMenuToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
            });
        });

        // Fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe existing fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Fallback: ensure fade-in elements become visible if IntersectionObserver doesn't trigger
        function checkFadeIns() {
            document.querySelectorAll('.fade-in:not(.visible)').forEach(el => {
                const rect = el.getBoundingClientRect();
                const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
                // Consider element visible if it comes within 50px of viewport bottom
                if (rect.top < viewportHeight - 50) {
                    el.classList.add('visible');
                }
            });
        }

        // Run fallback initially and on common events
        checkFadeIns();
        window.addEventListener('scroll', checkFadeIns, { passive: true });
        window.addEventListener('resize', checkFadeIns);

        // Run periodically for a short time to catch dynamic content
        (function transientFadeCheck(){
            let attempts = 0;
            const id = setInterval(() => {
                checkFadeIns();
                attempts++;
                if (attempts > 20) clearInterval(id);
            }, 250);
        })();

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();
            
            const form = e.target;
            const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
            let valid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.style.borderColor = '#ef4444';
                } else {
                    input.style.borderColor = '';
                }
            });
            
            if (valid) {
                alert('Merci pour votre message ! Nous vous contacterons bientôt.');
                form.reset();
            } else {
                alert('Veuillez remplir tous les champs obligatoires.');
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

// ========== DROPDOWN MENU MOBILE ==========
document.querySelectorAll('.nav-links li.has-dropdown > .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            const parent = this.parentElement;
            parent.classList.toggle('active');
        }
    });
});
