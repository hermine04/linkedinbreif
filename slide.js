document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slider > div");
    let currentSlide = 0;
  
    function showSlide(index) {
      slides.forEach((slide, i) => {
        if (i === index) {
          slide.style.display = "block";
        } else {
          slide.style.display = "none";
        }
      });
    }
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }
  
    // Montrez la première diapositive au chargement de la page
    showSlide(currentSlide);
  
    // Définissez une intervalle pour changer de diapositive automatiquement
    setInterval(nextSlide, 5000); // Change de diapositive toutes les 5 secondes (ajustez selon vos besoins)
  });
  