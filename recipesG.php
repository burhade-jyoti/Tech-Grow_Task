<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marquee Style Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleRecipe.css">
</head>
<style type="text/css">
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 18px;
    background-color:whitesmoke;
}

.gallery-container {
    width: 100%;
    overflow: hidden; /* Hide images outside the container */
    position: relative;
    background-color: whitesmoke;
}

.gallery-slide {
    display: flex;
    animation: marquee 20s linear infinite;
}

.gallery-slide img {
    width: 300px; /* Adjust image size as needed */
    height: auto;
    margin-right: 20px; /* Space between images */
    border-radius: 10px;
    object-fit: cover; /* Ensure the image fills the space without distortion */
}
.gallery-slide img:hover 
    {
    transform: scale(1.5); /* Zoom in on the image */
}


@keyframes marquee {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-90%);
    }
}


.gallery-container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin: 20px auto;
    max-width: 80%;
    overflow: hidden;
}

.gallery-card {
    width: 100%;
    max-width: 180px;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Add transition for hover effects */
}

.gallery-card img {
    width: 100%;
    height: auto;
    object-fit: cover;
    transition: transform 0.3s ease-in-out; /* Transition effect for zoom on hover */
}

/* Hover effect for the image */
.gallery-card:hover {
    transform: scale(1.5); /* Slightly scale up the card */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add shadow on hover */
}

/* Hover effect for the image */
.gallery-card:hover img {
    transform: scale(0.8); /* Zoom in on the image */
}


</style>
<body>
       <?php

include'navbarR.html';

    ?>


    <div class="gallery-container p-5">
        <div class="gallery-slide ">
            <img src="img/re11.png" alt="Image 1">
            <img src="img/re1.png" alt="Image 2">
            <img src="img/re3.png" alt="Image 3">
            <img src="img/re1.png" alt="Image 4">
            <img src="img/re2.png" alt="Image 5">
            <img src="img/re1.png" alt="Image 6">
            <img src="img/re11.png" alt="Image 7">
        </div>
    </div>

        <div class="gallery-container p-5">
        <div class="gallery-card ">
            <img src="img/ii1.png" alt="Image 1">
        </div>
        <div class="gallery-card">
            <img src="img/ii2.png" alt="Image 2">
        </div>
        <div class="gallery-card">
            <img src="img/ii3.png" alt="Image 3">
        </div>
        <div class="gallery-card">
            <img src="img/ii4.png" alt="Image 4">
        </div>
        <div class="gallery-card">
            <img src="img/ii5.png" alt="Image 5">
        </div>
    </div>

<footer class="text-center bg-dark text-white py-3">
        <p> All Rights Reserved by&copy; 2024 Recipe Moms Recipes..</p>
    </footer>

</body>
</html>
