document.addEventListener("DOMContentLoaded", function () {
  const toggleCheckbox = document.getElementById("toggleCheckbox");
  const menuContents = document.getElementById("menuContents");

  toggleCheckbox.addEventListener("click", function () {
    console.log("clicked");
    if (this.checked) {
      menuContents.classList.remove("hidden");
    } else {
      menuContents.classList.add("hidden");
    }
  });
});

window.addEventListener("load", function () {
  const carousel = document.getElementById("testimonialCarousel");

  function scrollCarousel() {
    if (window.innerWidth <= 768) {
      carousel.scrollLeft += carousel.scrollWidth / 4;
    }
  }

  setInterval(scrollCarousel, 5000); // Change automatically every 5 seconds
});

function openWhatsapp() {
  var phoneNumber = "+919083831824";
  var message = "Hello, I want to book a stay at your place!";
  var apiLink = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);
  window.open(apiLink, "_blank");
};

// Lazy loading images using Intersection Observer
const images = document.querySelectorAll('img[data-src]');

const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5 // Load image when it's 50% visible
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const image = entry.target;
            const src = image.getAttribute('data-src');

            image.src = src;
            observer.unobserve(image);
        }
    });
}, options);

images.forEach(image => {
    observer.observe(image);
});
