<?php
include 'conn.php';

// Fetch distinct institutes from pass_out table and sort the list
$institute_data = mysqli_fetch_all(mysqli_query($conn, "SELECT DISTINCT Institute FROM pass_out ORDER BY Institute"), MYSQLI_ASSOC);
// Fetch distinct years from pass_out table and sort the list
$year_data = mysqli_fetch_all(mysqli_query($conn, "SELECT DISTINCT Passing_Year FROM pass_out ORDER BY Passing_Year"), MYSQLI_ASSOC);
?>
<html>

<head>
    <?php include 'link.php'; ?>
    <title>Search For Alumni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            margin-top: 20px;
        }

        h3 {
            color: #337ab7;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #337ab7;
            border-color: #2e6da4;
        }

        .btn-primary:hover {
            background-color: #286090;
            border-color: #204d74;
        }

        .table {
            background-color: #fff;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .glyphicon,
        .fa {
            margin-right: 10px;
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
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row animation-target">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h3><i class="fas fa-search"></i> Search For Alumni</h3>
                <hr>
            </div>
        </div>
        <div class="row animation-target">
            <form method="post" id="form_reg" action="">
                <div class="form-group">
                    <div class="col-sm-4">
                        <label><i class="fas fa-university"></i> Institute:</label>
                        <select class="form-control" name="institute" id="institute">
                            <option selected disabled>Choose Institute</option>
                            <?php foreach ($institute_data as $key) {
                                $institute = $key['Institute'];
                                echo "<option>" . $institute . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label><i class="fas fa-calendar-alt"></i> Passing Year:</label>
                        <select class="form-control" name="year" id="year">
                            <option selected disabled>Choose Year</option>
                            <?php foreach ($year_data as $key) {
                                $year = $key['Passing_Year'];
                                echo "<option>" . $year . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary"><i
                                class="fas fa-arrow-circle-right"></i> Next</button>
                    </div>
                </div>
            </form>
        </div>
        <?php if (isset($_POST['submit'])) {
            $query_ins = $_POST['institute'];
            $query_year = $_POST['year'];
            $result = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM pass_out WHERE Institute LIKE '%$query_ins%' AND Passing_Year LIKE '%$query_year%'"), MYSQLI_ASSOC);
            ?>
            <br><br>
            <div class="row animation-target">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Current Status</th>
                                <th>Field of Expertise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $key) {
                                echo "<tr>";
                                $id = $key['Id'];
                                $firstname = $key['First_name'];
                                $lastname = $key['Last_name'];
                                $email = $key['Email'];
                                $gender = $key['Gender'];
                                $status = $key['Current_status'];
                                $field = $key['Field_of_Expertise'];
                                echo "<td>" . $id . "</td>";
                                echo "<td>" . $firstname . "</td>";
                                echo "<td>" . $lastname . "</td>";
                                echo "<td>" . $email . "</td>";
                                echo "<td>" . $gender . "</td>";
                                echo "<td>" . $status . "</td>";
                                echo "<td>" . $field . "</td>";
                                echo "</tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>