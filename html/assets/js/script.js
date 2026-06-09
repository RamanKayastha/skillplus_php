
document.addEventListener("DOMContentLoaded", () => {
  // --- Lenis Smooth Scroll ---
  if (typeof Lenis !== 'undefined') {
    const lenis = new Lenis();
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => { lenis.raf(time * 1000); });
    gsap.ticker.lagSmoothing(0);
    
    // Internal links smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const element = document.getElementById(targetId);
        if (element) {
          lenis.scrollTo(element);
        }
      });
    });
  }

  // --- Header Scroll Logic ---
  const header = document.querySelector('header');
  if (header) {
    // Reset initial hidden state from framer-motion if still present
    header.style.transform = 'translateY(0)';
    header.style.opacity = '1';

    const updateHeader = () => {
      if (window.scrollY > 50) {
        header.classList.add('bg-background/60', 'backdrop-blur-sm', 'shadow-xs');
        header.classList.remove('bg-transparent');
      } else {
        header.classList.remove('bg-background/60', 'backdrop-blur-sm', 'shadow-xs');
        header.classList.add('bg-transparent');
      }
    };
    window.addEventListener('scroll', updateHeader);
    updateHeader();
  }

  // --- Animations with GSAP ---
  gsap.registerPlugin(ScrollTrigger);

  // General Fade-In Up for sections
  gsap.utils.toArray('section').forEach(section => {
    const elements = section.querySelectorAll('.container > div > *');
    if (elements.length > 0) {
      gsap.fromTo(elements, 
        { y: 30, opacity: 0 }, 
        { 
          y: 0, 
          opacity: 1, 
          duration: 0.8, 
          stagger: 0.1, 
          ease: 'power2.out',
          scrollTrigger: {
            trigger: section,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        }
      );
    }
  });

  // Hero Word Rotate Emulator
  const words = ["Growth", "Scale", "Impact"];
  const rotatingH1 = document.querySelector('h1 .bg-linear-to-r.from-blue-600');
  if (rotatingH1) {
    let currentIndex = 0;
    setInterval(() => {
      currentIndex = (currentIndex + 1) % words.length;
      gsap.to(rotatingH1, {
        y: -20,
        opacity: 0,
        duration: 0.4,
        onComplete: () => {
          rotatingH1.textContent = words[currentIndex];
          gsap.fromTo(rotatingH1, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.4 });
        }
      });
    }, 3000);
  }

  // Mobile Menu Layout & Logic
  const mobileTrigger = document.querySelector('#mobile-menu-trigger');
  const mobileClose = document.querySelector('#mobile-menu-close');
  const mobileMenu = document.querySelector('#mobile-menu');

  if (mobileTrigger && mobileMenu) {
    mobileTrigger.addEventListener('click', () => {
      mobileMenu.classList.remove('translate-x-full', 'pointer-events-none', 'opacity-0');
      mobileMenu.classList.add('translate-x-0', 'pointer-events-auto', 'opacity-100');
      document.body.style.overflow = 'hidden';
    });

    const closeMenu = () => {
      mobileMenu.classList.add('translate-x-full', 'pointer-events-none', 'opacity-0');
      mobileMenu.classList.remove('translate-x-0', 'pointer-events-auto', 'opacity-100');
      document.body.style.overflow = '';
    };

    if (mobileClose) mobileClose.addEventListener('click', closeMenu);
    
    mobileMenu.querySelectorAll('button, a').forEach(el => {
      el.addEventListener('click', closeMenu);
    });
  }
});
