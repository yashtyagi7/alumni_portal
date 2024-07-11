<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'link.php'; ?>
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Dw8v8eKphX2z1RtkZU5G3Xt7B4NHtjwZs3bfsTlE2tSS1ySUKJUwNpU/5G/qCXFzgXwNDTSG9MjKJ6y1NbBmLQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        margin: 0;
        padding: 0;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 20px;
    }

    .card {
        position: relative;
        width: 250px;
        height: 250px;
        margin: 20px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .card:hover img {
        transform: scale(1.1);
    }

    .icon {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #fff;
        font-size: 1.5rem;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .icon:hover {
        transform: scale(1.2);
    }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="gallery">
        <div class="card">
            <img src="images/1.png" alt="Image 1">
            <i class="icon fas fa-heart"></i>
        </div>

        <div class="card">
            <img src="images/2.webp" alt="Image 2">
            <i class="icon fas fa-heart"></i>
        </div>

        <div class="card">
            <img src="images/4.jpg" alt="Image 3">
            <i class="icon fas fa-heart"></i>
        </div>

        <div class="card">
            <img src="images/5.jpg" alt="Image 4">
            <i class="icon fas fa-heart"></i>
        </div>

        <div class="card">
            <img src="path/to/image5.jpg" alt="Image 5">
            <i class="icon fas fa-heart"></i>
        </div>

        <div class="card">
            <img src="path/to/image6.jpg" alt="Image 6">
            <i class="icon fas fa-heart"></i>
        </div>

        <div class="card">
            <img src="path/to/image7.jpg" alt="Image 7">
            <i class="icon fas fa-heart"></i>
        </div>

        <div class="card">
            <img src="path/to/image8.jpg" alt="Image 8">
            <i class="icon fas fa-heart"></i>
        </div>
    </div>

</body>

</html>