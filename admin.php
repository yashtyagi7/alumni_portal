<!DOCTYPE html>
<html>

<head>
    <?php include 'link.php'; ?>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #2980b9, #2c3e50);
        background-size: 400% 400%;
        animation: gradientBG 15s ease infinite;
        overflow: hidden;
        height: 100vh;
        position: relative;
    }

    @keyframes gradientBG {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .container {
        margin-top: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        text-align: center;
        color: #000;
    }

    h1 {
        color: #000;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .form-group {
        margin-bottom: 20px;
        text-align: left;
        /* Align form elements to the left */
    }

    .btn-primary {
        background-color: #3498db;
        border-color: #2980b9;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #2980b9;
        border-color: #2980b9;
    }

    .glyphicon {
        font-size: 20px;
    }

    .animation-target {
        animation: fadeInUp 0.5s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
    <script>
    function validate() {
        var id = document.getElementById("id").value;
        var pwd = document.getElementById("pass").value;

        // if (id.length !== 6) {
        //     alert("ID should contain exactly 6 characters");
        //     return false;
        // }
        if (isNaN(id)) {
            alert("Only numbers are allowed in ID");
            return false;
        }

        if (pwd.length > 10) {
            alert("Password can contain a maximum of 10 characters");
            return false;
        }
        if (!(/^\d{3}/.test(pwd))) {
            alert("First 3 characters of the password should be numeric");
            return false;
        }

        return true;
    }
    </script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row animation-target">
            <div class="col-sm-12">
                <h1><span class="glyphicon glyphicon-user"></span>&nbsp;Admin Login</h1>
                <hr>
            </div>
        </div>
        <div class="row animation-target">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="admin_check.php" method="post" onsubmit="return validate()">
                    <div class="form-group">
                        <label for="id"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;ID:</label><br>
                        <input type="text" name="ID" class="form-control" id="id" required><br>
                        <label for="pass"><i class="glyphicon glyphicon-lock"></i>&nbsp;Password:</label><br>
                        <input type="password" name="Password" class="form-control" id="pass" required><br>
                        <button type="submit" name="submit" class="btn btn-primary">Next
                            <i class="glyphicon glyphicon-log-in"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>