let slideIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            if (index >= slides.length) {
                slideIndex = 0;
            } else if (index < 0) {
                slideIndex = slides.length - 1;
            }
            const offset = -slideIndex * 100;
            document.querySelector('.slider').style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            slideIndex++;
            showSlide(slideIndex);
        }

        function prevSlide() {
            slideIndex--;
            showSlide(slideIndex);
        }

        // Automatic slide change every 5 seconds
        setInterval(() => {
            nextSlide();
        }, 5000);

        // Initial slide display
        showSlide(slideIndex);