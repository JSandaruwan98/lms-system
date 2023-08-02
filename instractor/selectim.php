<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <link rel="stylesheet" href="style.css">

<style>
    body {
    margin: 0;
    padding: 0;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 10px;
}

.gallery img {
    width: 100%;
    height: auto;
    cursor: pointer;
}
/* Add this to your style.css */


.gallery img.selected {
    border: 2px solid red; /* Add your preferred style for the selected image */
}


</style>    
</head>
<body>
    <div class="gallery">
        <!-- Images will be dynamically added here -->
    </div>
    <script src="script.js"></script> <!-- Include this line if you have a script.js file -->
<script>
    // In script.js
// In script.js

document.addEventListener("DOMContentLoaded", function () {
    const galleryContainer = document.querySelector(".gallery");
    const imageUrls = [
        "images/images (1).jpeg",
        "images/images (1).jpeg",
        "images/images (1).jpeg",
        "images/images (1).jpeg",
        "images/images (1).jpeg",
        "images/images (1).jpeg",
        // Add more image URLs here
    ];

    imageUrls.forEach((url) => {
        const img = document.createElement("img");
        img.src = url;
        galleryContainer.appendChild(img);

        // Add click event listener to each image
        img.addEventListener("click", function () {
            // Remove "selected" class from any previously selected image
            const previouslySelectedImage = document.querySelector(".selected");
            if (previouslySelectedImage) {
                previouslySelectedImage.classList.remove("selected");
            }

            // Add "selected" class to the clicked image
            img.classList.add("selected");
        });
    });
});


</script>
</body>
</html>
