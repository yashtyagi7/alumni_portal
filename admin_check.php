<?php
include 'conn.php';
include 'link.php';
// include 'navbar.php';

if (isset($_POST['submit'])) {
  $id = $_POST['ID'];
  $password = $_POST['Password'];

  $query = "SELECT * FROM admin_cred WHERE Id='$id' AND Password='$password'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die("Query failed: " . mysqli_error($conn));
  }

  $num_rows = mysqli_num_rows($result);

  if ($num_rows == 1) {
    header("location: admin_home.php");
    exit();
  } else {
    echo "<br><b>Login Failed :(</b><br>Try again....... <br><a href='admin.php'><input class='btn btn-primary' type=submit value=Back></a>";


  }
}
?>