<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Product Gallery</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            text-align: center;
            padding: 100px 20px;
            background-image: url('images/gallery img/art 2.jpg'); /* Add your hero image here */
            background-size: cover;
            background-position: center;
            color: #fff;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Overlay for better text visibility */
        }

        .hero-section h1 {
            position: relative;
            font-size: 4rem;
            margin-bottom: 10px;
            animation: fadeIn 2s ease-in-out;
        }

        .hero-section p {
            position: relative;
            font-size: 1.5rem;
            animation: fadeIn 3s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Gallery Section */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            padding: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff; /* Background color for frames */
            display: flex;
            justify-content: center;
            align-items: center;
            aspect-ratio: 1 / 1; /* Ensures square frames */
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the image covers the frame */
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        /* Different Sizes for Gallery Items */
        .gallery-item.large {
            grid-column: span 2;
            grid-row: span 2;
            aspect-ratio: 2 / 1; /* Adjust aspect ratio for large items */
        }

        .gallery-item.medium {
            grid-column: span 2;
            aspect-ratio: 2 / 1; /* Adjust aspect ratio for medium items */
        }

        /* Custom Width for Product 6 */
        .gallery-item.product-6 {
            grid-column: span 2; /* Adjust this value to make it wider */
        }

        /* Hover Effect */
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .gallery-item:hover img {
            transform: rotate(5deg) scale(1.1);
        }

        /* Click Animation */
        .gallery-item:active img {
            transform: rotate(5deg) scale(0.9);
            transition: transform 0.1s ease;
        }

        

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1.2rem;
            }

            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }

            .gallery-item.product-6 {
                grid-column: span 1; /* Adjust for smaller screens */
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to Our Online Store</h1>
        <p>Explore our unique collection of products</p>
    </section>

    <!-- Gallery Section -->
    <section class="gallery">
        <div class="gallery-item large" style="height:100%; width:100%;">
            <img src="images/gallery img/beautypro.jpg" alt="Product 1">
        </div>
        <div class="gallery-item medium">
            <img src="images/gallery img/camera222.jpg" alt="Product 2">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/doll3.webp" alt="Product 3">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/watch3.jpg" alt="Product 4">
        </div>
        <div class="gallery-item medium"  style="height:100%; width:100%;">
            <img src="images/gallery img/handbags3.webp" alt="Product 5">
        </div>
        <div class="gallery-item product-6"> <!-- Added custom class for Product 6 -->
            <img src="images/gallery img/camerapro.jpg" alt="Product 6">
        </div>
        <div class="gallery-item large"  style="height:100%; width:100%;">
            <img src="images/gallery img/perfume 2.webp" alt="Product 7">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/paint 4.jpg" alt="Product 8">
        </div>
        <div class="gallery-item medium">
            <img src="images/gallery img/stationarty 3.jpg" alt="Product 9">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/beauty.jpg" alt="Product 10">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/watch1111.jpg" alt="Product 11">
        </div>
        <div class="gallery-item medium">
            <img src="images/gallery img/files222.avif" alt="Product 12">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/dolls1111.jpg" alt="Product 13">
        </div>
        <div class="gallery-item medium">
            <img src="images/gallery img/handbags4.jpg" alt="Product 14">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/menwallet2.jpeg" alt="Product 15">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/pexels-lara-stratiychuk-1606923648-29821871.jpg" alt="Product 16">
        </div>
        <div class="gallery-item medium">
            <img src="images/gallery img/wallart2.webp" alt="Product 17">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/perfume3.webp" alt="Product 18">
        </div>
        <div class="gallery-item large"  style="height:100%; width:100%;">
            <img src="images/greeting card2.jpg" alt="Product 19">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/beauty kits 3.jpg" alt="Product 20">
        </div>
        <div class="gallery-item medium">
            <img src="images/gallery img/camera222.jpg" alt="Product 21">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/perfume.jpg" alt="Product 22">
        </div>
        <div class="gallery-item">
            <img src="images/gallery img/wallart3.jpg" alt="Product 23">
        </div>
        <div class="gallery-item medium">
            <img src="images/gallery img/pexels-june-149994-1735092.jpg" alt="Product 24">
        </div>
    </section>

    <script>
        // Optional: Add any interactive functionality if needed
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', () => {
                alert(`You clicked on ${item.querySelector('img').alt}`);
            });
        });
    </script>
</body>
</html>