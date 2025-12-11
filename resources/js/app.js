import './bootstrap';
import Alpine from 'alpinejs';

// Make Alpine available globally
window.Alpine = Alpine;

// Initialize Alpine
Alpine.start();

// Smooth scrolling navigation with offset
document.addEventListener('DOMContentLoaded', function() {
    // Handle smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === '') return;

            e.preventDefault();
            const target = document.querySelector(href);

            if (target) {
                const navHeight = document.querySelector('nav')?.offsetHeight || 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar scroll effect
    const navbar = document.querySelector('nav');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // ===== PARALLAX SCROLLING EFFECTS =====
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    function updateParallax() {
        const scrollY = window.pageYOffset;

        parallaxElements.forEach(element => {
            const speed = parseFloat(element.dataset.parallax) || 0.5;
            const rect = element.getBoundingClientRect();
            const elementTop = rect.top + scrollY;
            const elementHeight = element.offsetHeight;
            const windowHeight = window.innerHeight;

            // Only apply parallax if element is in viewport
            if (scrollY + windowHeight > elementTop && scrollY < elementTop + elementHeight) {
                const yPos = (scrollY - elementTop) * speed;
                element.style.transform = `translateY(${yPos}px)`;
            }
        });
    }

    // Throttle parallax for performance
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateParallax();
                ticking = false;
            });
            ticking = true;
        }
    });

    // ===== SCALE ON SCROLL ANIMATIONS =====
    // Scale from small to big for all sections
    const scaleInElements = document.querySelectorAll('[data-scale-in]');
    if (scaleInElements.length > 0) {
        const scaleObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const scrollProgress = Math.min(1, Math.max(0, entry.intersectionRatio));
                const scale = 0.5 + (scrollProgress * 0.5); // Scale from 0.5 to 1
                const opacity = scrollProgress;

                if (entry.isIntersecting) {
                    entry.target.style.transform = `scale(${scale})`;
                    entry.target.style.opacity = opacity;
                } else if (entry.boundingClientRect.top > 0) {
                    entry.target.style.transform = 'scale(0.5)';
                    entry.target.style.opacity = '0';
                } else {
                    entry.target.style.transform = 'scale(1)';
                    entry.target.style.opacity = '1';
                }
            });
        }, {
            threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1],
            rootMargin: '-50px'
        });

        // Observe all elements with data-scale-in across all sections
        scaleInElements.forEach(el => scaleObserver.observe(el));
    }

    // ===== CARDS SCROLL ANIMATION FROM BOTTOM =====
    // Service cards, About value cards, and Focus program cards appear from bottom when scrolled into view
    const setupBottomCardAnimations = () => {
        const bottomAnimatedCards = document.querySelectorAll('.service-card, .about-value-card, .focus-program-card');
        if (bottomAnimatedCards.length > 0) {
            // Set initial state
            bottomAnimatedCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px)';
                card.style.transition = 'opacity 1s cubic-bezier(0.16, 1, 0.3, 1), transform 1s cubic-bezier(0.16, 1, 0.3, 1)';
            });

            const bottomCardObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate card in from bottom
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';

                        // Stop observing after animation
                        bottomCardObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2, // Trigger when 20% of card is visible
                rootMargin: '0px'
            });

            // Observe each card individually
            bottomAnimatedCards.forEach(card => {
                bottomCardObserver.observe(card);
            });
        }
    };

    // Initial setup
    setupBottomCardAnimations();

    // Re-run after a short delay to catch Alpine-rendered elements
    setTimeout(() => {
        setupBottomCardAnimations();
    }, 100);

    // Re-run again after 500ms for slower-loading content
    setTimeout(() => {
        setupBottomCardAnimations();
    }, 500);

    // ===== PARTICIPANT CARDS SCROLL ANIMATION =====
    // Cards appear from right when 50% visible
    const participantCards = document.querySelectorAll('.participant-card');
    if (participantCards.length > 0) {
        // Set initial state
        participantCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateX(100px)';
            card.style.transition = 'opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1), transform 1.2s cubic-bezier(0.16, 1, 0.3, 1)';
        });

        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Animate card in from right
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateX(0)';

                    // Stop observing after animation
                    cardObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5, // Trigger when 50% of card is visible
            rootMargin: '0px'
        });

        // Observe each card individually
        participantCards.forEach(card => {
            cardObserver.observe(card);
        });
    }

    // Simple and reliable Intersection Observer for animations - FASTER RESPONSE
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');

                // Remove will-change after animation completes (performance optimization)
                setTimeout(() => {
                    entry.target.style.willChange = 'auto';
                }, 600);

                // Handle stagger animations - FASTER
                if (entry.target.dataset.animate === 'stagger') {
                    const children = entry.target.children;
                    Array.from(children).forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('is-visible');
                            // Remove will-change from child after animation
                            setTimeout(() => {
                                child.style.willChange = 'auto';
                            }, 600);
                        }, index * 60); // Reduced from 100ms to 60ms
                    });
                }


                // Stop observing after animation (reduce observer overhead)
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.05, // Reduced from 0.1 for faster trigger
        rootMargin: '100px' // Increased from 50px - trigger earlier
    });

    // Observe all animated elements
    const animatedElements = document.querySelectorAll('[data-animate]');
    animatedElements.forEach((el) => {
        observer.observe(el);
    });

    // Make navbar and hero visible immediately
    setTimeout(() => {
        const navbarElement = document.querySelector('nav');
        if (navbarElement) {
            navbarElement.classList.add('is-visible');
        }

        const heroElements = document.querySelectorAll('#home [data-animate]');
        heroElements.forEach((el, index) => {
            setTimeout(() => {
                el.classList.add('is-visible');
            }, index * 100);
        });
    }, 100);

    // Safety fallback: make all elements visible after 2 seconds if observer fails
    setTimeout(() => {
        document.querySelectorAll('[data-animate]').forEach(el => {
            if (!el.classList.contains('is-visible')) {
                el.classList.add('is-visible');
            }
        });
    }, 2000);

    // Removed body opacity animation for better performance

    // Phone number formatting for contact form
    const phoneInput = document.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');

            if (value.startsWith('998')) {
                value = value.substring(3);
            }

            if (value.length > 9) {
                value = value.substring(0, 9);
            }

            let formatted = '+998 ';
            if (value.length > 0) formatted += value.substring(0, 2);
            if (value.length > 2) formatted += ' ' + value.substring(2, 5);
            if (value.length > 5) formatted += ' ' + value.substring(5, 7);
            if (value.length > 7) formatted += ' ' + value.substring(7, 9);

            e.target.value = formatted.trim();
        });
    }
});
