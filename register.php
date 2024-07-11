<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Alumni Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
    body {
        background-image: url('your-background-image-url.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        animation: fadeInBackground 2s ease-in-out;
    }

    .card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        animation: fadeInCard 1s ease-in-out, slideUpCard 1s ease-in-out;
        width: 100%;
        max-width: 500px;
        max-height: 90vh;
        overflow-y: auto;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        animation: fadeInText 1s ease-in-out;
    }

    .form-group {
        position: relative;
        animation: fadeInText 1.5s ease-in-out;
    }


    .form-group i {
        position: absolute;
        top: 35px;
        left: 10px;
        color: #aaa;
    }


    .form-control {
        padding-left: 30px;
    }

    .btn-primary {
        background-color: #fda085;
        border-color: #fda085;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #f6d365;
        border-color: #f6d365;
    }

    @keyframes fadeInBackground {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeInCard {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideUpCard {
        from {
            transform: translateY(20px);
        }

        to {
            transform: translateY(0);
        }
    }

    @keyframes fadeInText {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
    </style>
</head>

<body>
    <div class="card">
        <h2>Register</h2>
        <form action="register_process.php" method="post">
            <div class="form-group">
                <label for="college_id">College ID:</label>
                <i class="fas fa-id-badge"></i>
                <input type="text" class="form-control" id="college_id" name="college_id" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <i class="fas fa-user"></i>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <i class="fas fa-envelope"></i>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <i class="fas fa-venus-mars"></i>
                <select class="form-control" id="gender" name="gender" required>
                    <option selected disabled>Select</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="current_status">Current Status:</label>
                <i class="fas fa-briefcase"></i>
                <input type="text" class="form-control" id="current_status" name="current_status" required>
            </div>
            <div class="form-group">
                <label for="institute">Institute:</label>
                <i class="fas fa-university"></i>
                <input type="text" class="form-control" id="institute" name="institute" required>
            </div>
            <div class="form-group">
                <label for="passing_year">Passing Year:</label>
                <i class="fas fa-calendar"></i>
                <input type="text" class="form-control" id="passing_year" name="passing_year" required>
            </div>
            <div class="form-group">
                <label for="field_of_expertise">Field of Expertise:</label>
                <i class="fas fa-lightbulb"></i>
                <input type="text" class="form-control" id="field_of_expertise" name="field_of_expertise" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>

</html>