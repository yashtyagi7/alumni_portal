<!DOCTYPE html>
<html>

<head>
    <?php include 'link.php'; ?>
    <title>About Us</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #FAF0E6;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1100px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .info {
        flex: 1;
        margin-right: 30px;
        line-height: 1.6;
        font-size: 1.1rem;
        color: #333;
    }

    .item {
        text-align: center;
        margin-bottom: 20px;
        flex: 1;
    }

    .item img {
        width: 450px;
        height: 300px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .item img:hover {
        transform: scale(1.1);
    }

    .contact-info {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid #ccc;
        font-size: 1.1rem;
        color: #555;
    }

    .contact-info p {
        margin: 5px 0;
    }

    .contact-info .email {
        color: #007bff;
        font-weight: bold;
    }

    .contact-form-wrapper {
        flex: 1;
        display: flex;
        flex-direction: column;
        margin-top: 20px;
    }

    .contact-form {
        flex: 1;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-right: 20px;
    }

    .contact-form h2 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #333;
    }

    .contact-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .contact-form input,
    .contact-form textarea {
        width: calc(100% - 22px);
        /* Adjusted to account for border */
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
    }

    .contact-form textarea {
        resize: vertical;
        min-height: 100px;
    }

    .contact-form button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
    }

    .contact-form button:hover {
        background-color: #0056b3;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeIn 1s ease-out;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .contact-form-wrapper {
            margin-top: 20px;
        }

        .contact-form {
            margin-right: 0;
            margin-bottom: 20px;
        }
    }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="info fade-in">
            <h1>About Us</h1>
            <p>Welcome to our platform dedicated to fostering connections among alumni of diverse institutions and
                organizations.</p>
            <p>Our platform facilitates alumni networking, enabling individuals to share knowledge, experiences, and
                opportunities. Students benefit by learning from esteemed predecessors, expanding their horizons beyond
                academic realms.</p>
            <p>While users can view profiles, only institution/organization administrators possess editing privileges to
                maintain data accuracy.</p>
            <p>Our alumni network serves as a unified hub, promoting communication among alumni and enhancing university
                and corporate life through active engagement.</p>
            <div class="contact-info">
                <p>Contact Us: <span class="phone">99XXXXXXXX</span></p>
                <p>Email: <span class="email">errornotfound@gmail.com</span></p>
            </div>
        </div>

        <div class="item fade-in">
            <img src="images/img3.jpg" width="450" height="300" alt="About Us Image">
        </div>

        <div class="info fade-in contact-form-wrapper">
            <h2 style="text-align: center;">For More Queries</h2>
            <div class="contact-form fade-in">
                <form action="https://formspree.io/f/xleyyrdw" method="POST">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    // Fade-in animation for elements
    document.addEventListener('DOMContentLoaded', function() {
        var elementsToAnimate = document.querySelectorAll('.fade-in');
        elementsToAnimate.forEach(function(element) {
            element.style.opacity = 0;
            element.style.transform = 'translateY(20px)';
            setTimeout(function() {
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
            }, 200);
        });
    });
    </script>

</body>

</html>