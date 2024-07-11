<?php
// Include the database connection file
include 'conn.php';

// Get form data
$college_id = $_POST['college_id'];
$password = $_POST['password'];

// SQL query to fetch the user data based on college_id
$sql = "SELECT * FROM pass_out WHERE Id = '$college_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the user data
    $row = $result->fetch_assoc();

    // Verify the password
    if (password_verify($password, $row['Password'])) {
        // Start session and set session variables
        session_start();
        $_SESSION['college_id'] = $row['Id'];
        $_SESSION['first_name'] = $row['First_name'];
        $_SESSION['last_name'] = $row['Last_name'];
        $_SESSION['email'] = $row['Email'];

        // Redirect to the user dashboard or homepage
        header("front.php");
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid College ID.";
}

$conn->close();
?>