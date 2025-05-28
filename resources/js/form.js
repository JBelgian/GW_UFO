// Allow only valid city name characters
window.filterCityNameIntl = function(input) {
    // Allow letters (including accented), spaces, hyphens, apostrophes, and periods
    input.value = input.value.replace(/[^\p{L}\s\-\.']/gu, '');
};

// Reset the form and clear the image preview
window.resetForm = function () {
    const form = document.querySelector('form');
    if (form) {
        form.reset(); // resets the form

        // resets the image preview
        const imagePreview = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');
        if (imagePreview) imagePreview.style.display = 'none';
        if (previewImg) previewImg.src = '';
    }
};

// Automatically hide error messages after 5 seconds
window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(el => {
            el.style.transition = 'opacity 1s';
            el.style.opacity = '0';
            setTimeout(() => el.remove(), 1000);
        });
    }, 5000); // wait 5 seconds before fading out
});
