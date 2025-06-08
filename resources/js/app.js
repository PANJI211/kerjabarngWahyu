import './bootstrap';

let currentIndex = 0;
        const slides = document.getElementById('slides');
        const totalSlides = document.querySelectorAll('.slide').length;
        const dots = document.querySelectorAll('.dot');
        
        // Function to update slider position
        function updateSlider() {
            const translateX = -currentIndex * 100;
            slides.style.transform = `translateX(${translateX}%)`;
            
            // Update dots
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('bg-opacity-100');
                    dot.classList.remove('bg-opacity-50');
                } else {
                    dot.classList.add('bg-opacity-50');
                    dot.classList.remove('bg-opacity-100');
                }
            });
        }
        
        // Next slide function
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        }
        
        // Previous slide function
        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlider();
        }
        
        // Go to specific slide
        function currentSlide(n) {
            currentIndex = n - 1;
            updateSlider();
        }
        
        // Auto slide every 5 seconds
        setInterval(() => {
            nextSlide();
        }, 5000);
        
        // Initialize slider
        updateSlider();
        
        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;
        
        slides.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });
        
        slides.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });