<style>
    /* WhatsApp Button */
    .whatsapp-button {
        position: fixed;
        bottom: 20px; /* Lower position */
        right: 20px;
        width: 50px; /* Smaller size */
        height: 50px;
        background-color: #25D366;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .whatsapp-button:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* Scroll-to-Top Button */
    .scroll-top-button {
        position: fixed;
        bottom: 80px; /* Positioned above the WhatsApp button */
        right: 20px;
        width: 50px; /* Smaller size */
        height: 50px;
        background-color: #007bff;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
    }

    .scroll-top-button.show {
        opacity: 1;
        visibility: visible;
    }

    .scroll-top-button:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }
</style>


<!-- Scroll-to-Top Button -->
<div class="scroll-top-button" id="scrollTopButton" onclick="scrollToTop()">
<!-- Arrow-up Icon -->
<i class="bi bi-arrow-up-short text-white" style="font-size: 24px;"></i>
</div>

<!-- WhatsApp Button -->
<div class="whatsapp-button" onclick="redirectToWhatsApp('6282134749670')">
<!-- WhatsApp Icon -->
<i class="bi bi-whatsapp text-white" style="font-size: 24px;"></i>
</div>

<script>
// Redirect to WhatsApp chat
function redirectToWhatsApp(number) {
    var url = 'https://wa.me/' + number;
    window.open(url, '_blank');
}

// Show the scroll-to-top button when the user scrolls down 100px from the top
window.onscroll = function() {
    var scrollTopButton = document.getElementById('scrollTopButton');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollTopButton.classList.add('show');
    } else {
        scrollTopButton.classList.remove('show');
    }
};

// Smooth scroll to the top of the page
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
</script>