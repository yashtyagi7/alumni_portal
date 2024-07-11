<?php
// Include the database connection file
include 'conn.php';

// Get form data
$college_id = $_POST['college_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$current_status = $_POST['current_status'];
$field_of_expertise = $_POST['field_of_expertise'];
$institute = $_POST['institute'];
$passing_year = $_POST['passing_year'];

// SQL query to insert data into pass_out table
$sql = "INSERT INTO pass_out (Id, First_name, Last_name, Gender, Institute, Passing_Year, Field_of_Expertise, Current_status, Email) 
        VALUES ('$college_id', '$first_name', '$last_name', '$gender', '$institute', '$passing_year', '$field_of_expertise', '$current_status', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('You are being registered as a Alumni Successfully :)');
            window.location.href='front.php';
          </script>";
} else {
    echo "<script>
            alert('Error: " . $sql . "<br>" . $conn->error . "');
            window.history.back();
          </script>";
}

$conn->close();
?>