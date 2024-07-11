<?php
$title = "Alumni Portal";
?>
<!DOCTYPE html>
<html>

<head>
    <style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #ece9e6, #ffffff);
        margin: 0;
        padding: 0;
        color: #333;
    }

    .font-custom-class {
        font-size: 22px;
        font-weight: bold;
    }

    .font-custom-body-class {
        font-size: 16px;
    }

    .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: lightgray;
        color: black;
        text-align: center;
        padding: 10px 0;
        /* position: fixed; */
    }

    .carousel-inner .item img {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-inner .item:hover img {
        transform: scale(1.05);
    }

    .panel {
        cursor: pointer;
        transition: box-shadow 0.3s, transform 0.3s;
        margin-bottom: 20px;
    }

    .panel:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transform: translateY(-10px);
    }

    .container {
        margin-top: 20px;
    }

    .carousel-caption h1 {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    @media (max-width: 768px) {
        .font-custom-class {
            font-size: 18px;
        }

        .font-custom-body-class {
            font-size: 14px;
        }

        .carousel-inner .item img {
            height: auto;
        }
    }

    .intro-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 100vh;
        padding: 0 20px;
        background-size: cover;
    }

    .intro-content {
        flex: 1;
        text-align: left;
        color: black;
        padding-right: 20px;
        animation: fadeIn 2s ease-out;
    }

    .intro-content h1 {
        font-size: 3em;
        margin-bottom: 20px;
        text-align: center;
    }

    .intro-content p {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .intro-content .highlight {
        color: #ff4081;
    }

    .intro-gif {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-left: 20px;
    }

    .intro-gif img {
        max-width: 100%;
        height: auto;
    }

    .carousel-wrapper {
        max-width: 1100px;
        /* Adjust the maximum width as per your requirement */
        margin: 0 auto;
        /* Center align the carousel */
    }

    .news-events-section {
        display: flex;
        justify-content: space-between;
        margin: 40px 80px;
    }

    .newsroom,
    .events {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 45%;
    }

    .newsroom h2,
    .events h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .newsroom ul,
    .events ul {
        list-style-type: none;
        padding: 0;
    }

    .newsroom li,
    .events li {
        margin-bottom: 10px;
    }

    .newsroom li a,
    .events li a {
        color: #007bff;
        text-decoration: none;
    }

    .newsroom li a:hover,
    .events li a:hover {
        text-decoration: underline;
    }

    .events .upcoming,
    .events .past {
        margin-bottom: 20px;
    }

    .events .upcoming h3,
    .events .past h3 {
        font-size: 1.2em;
        margin-bottom: 5px;
    }

    .events .event {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .events .event .date-box {
        background-color: #007bff;
        color: white;
        padding: 10px;
        border-radius: 5px;
        margin-right: 10px;
        text-align: center;
        width: 50px;
    }

    .events .event .date-box .month {
        font-size: 12px;
    }

    .events .event .date-box .day {
        font-size: 16px;
        font-weight: bold;
    }

    .events .event .details {
        flex: 1;
    }

    .events .event .details .title {
        font-weight: bold;
        color: #333;
    }

    .events .event .details .location {
        font-size: 14px;
        color: #555;
    }

    .newsroom {
        background-image: url('images/back2.jpg');
    }

    .events {
        background-image: url('images/back.jpg');
    }

    .icon {
        margin-right: 8px;
    }

    .newsroom {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 60%;
        /* Adjusted width for newsroom */
    }

    .events {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 35%;
        /* Adjusted width for events */
    }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title><?php echo $title; ?></title>
    <?php include 'link.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Intro Section -->
    <div class="intro-section">
        <div class="intro-content">
            <h1>Welcome to <br><span class="highlight">Alumni Network Portal</span></h1>
        </div>
        <div class="intro-gif">
            <img src="images/grad2.gif" alt="Animation">
        </div>
    </div>

    <!-- Newsroom and Events Section -->
    <div class="news-events-section">
        <div class="newsroom">
            <h2><i class="fas fa-bullhorn icon"></i><b>NEWSROOM</b></h2>
            <ul>
                <li><a href="#">Minutes of Sreenidhi Alumni Executive committee meeting held on 31-03-2024</a> <span>10
                        Apr 2024</span></li>
                <li><a href="#">Project Expo-Charge2024-A National level Techfest-The Electronix Club and D...</a>
                    <span>10 Apr 2024</span>
                </li>
                <li><a href="#">Invited to deliver Guest Lectures- Expert talks- Reg</a> <span>18 Mar 2024</span></li>
                <li><a href="#">Formation of New Managing Team- Nominations invited-Reg</a> <span>18 Mar 2024</span>
                </li>
                <li><a href="#">Khelo Sreenidhi- from 18-20, April-2024</a> <span>18 Mar 2024</span></li>
            </ul>
        </div>
        <div class="events">
            <h2><i class="fas fa-calendar-alt icon"></i><b>EVENTS</b></h2>
            <div class="upcoming">
                <h3>Upcoming</h3>
                <ul>
                    <li class="event">
                        <div class="date-box">
                            <div class="month">JUN</div>
                            <div class="day">30</div>
                        </div>
                        <div class="details">
                            <div class="title"><a href="#">SNSIT Alumni Association Executive Committee Meeting</a>
                            </div>
                            <div class="location">Stone valley apartment</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="past">
                <h3>Past</h3>
                <ul>
                    <li class="event">
                        <div class="date-box">
                            <div class="month">MAY</div>
                            <div class="day">02</div>
                        </div>
                        <div class="details">
                            <div class="title"><a href="#">Rigolade'24</a></div>
                            <div class="location">Sreenidhi Institute of Science & Technology - SNIST</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="carousel-wrapper">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide"
                        src="images/img.jpg" style="height: 450px;">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>JIIT Noida</h1>
                            <p><a class="btn btn-lg btn-primary" href="https://www.jiit.ac.in/" role="button">Learn
                                    more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide"
                        src="images/img2.jpg" style="height: 450px;">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>JIIT Solan</h1>
                            <p><a class="btn btn-lg btn-primary" href="https://www.juit.ac.in/" role="button">Learn
                                    more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide"
                        src="images/img4.jpg" style="height: 450px;">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Amity University Noida</h1>
                            <p><a class="btn btn-lg btn-primary" href="https://www.amity.edu/" role="button">Learn
                                    more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span
                    class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>

    <br><br><br>
    <div class="footer">
        <p>&copy; Copyright &nbsp;All Rights Reserved</p>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>