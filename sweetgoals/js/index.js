const slides = document.querySelectorAll('.carrossel .slide');
let currentSlide = 0;
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach(slide => {
        slide.style.opacity = '0';
        slide.style.visibility = 'hidden';
    });
    slides[index].style.opacity = '1';
    slides[index].style.visibility = 'visible';
}

// Mudança automática do slide a cada 3 segundos
setInterval(() => {
    currentSlide = (currentSlide + 1) % totalSlides;
    document.getElementById(`slide${currentSlide + 1}`).checked = true;
    showSlide(currentSlide);
}, 3000);

function mudarSlide(n) {
    currentSlide += n;
    if (currentSlide >= totalSlides) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    }
    document.getElementById(`slide${currentSlide + 1}`).checked = true;
    showSlide(currentSlide);
}
