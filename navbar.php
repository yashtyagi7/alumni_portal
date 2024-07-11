<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #ece9e6, #ffffff);
        margin: 0;
        padding: 0;
        color: #333;
        padding-top: 60px;
        /* Add padding to account for the fixed navbar */
    }

    .navbar {
        background-color: #333;
        border: none;
        border-radius: 0;
        margin-bottom: 0;
    }

    .navbar-brand {
        color: white !important;
        font-size: 24px;
    }

    .navbar-toggle {
        background-color: #333;
        border: none;
    }

    .navbar-toggle .icon-bar {
        background-color: white;
    }

    .navv ul {
        text-align: right;
    }

    .navv ul a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        padding: 15px 20px;
    }

    .navv ul a:hover {
        color: #f59b23;
        background-color: #555;
        transition: all 0.3s ease-out;
    }

    .navbar-nav .glyphicon {
        color: white;
        margin-right: 5px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fas fa-graduation-cap"></i> Alumni Portal</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="front.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="about.php"><i class="fas fa-info-circle"></i> About Us</a></li>
                    <li><a href="gallery.php"><i class="fas fa-images"></i> Gallery</a></li>
                    <li><a href="events.php"><i class="far fa-calendar-alt"></i> Events</a></li>
                    <li><a href="admin.php"><i class="fas fa-user-shield"></i> Admin</a></li>
                    <li><a href="user.php"><i class="fas fa-user"></i> User</a></li>
                    <!-- <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li> -->
                    <li><a href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>