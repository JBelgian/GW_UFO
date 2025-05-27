let imageInput = document.getElementById('imageInput');
let previewImg = document.getElementById('previewImg');
let imagePreview = document.getElementById('imagePreview');

imageInput.addEventListener('change', function(event) {
    const file = event.target.files[0];
            
    if (file) {
        const reader = new FileReader();
                
        reader.onload = function(e) {
            // Display the image
            previewImg.src = e.target.result;
            imagePreview.style.display = 'block';
        };
                
        reader.readAsDataURL(file);
    } else {
        return;
    }
});
