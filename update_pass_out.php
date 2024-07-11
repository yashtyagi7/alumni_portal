<html>

<head>
    <?php include 'link.php'; ?>
    <title></title>
</head>
<?php
include 'conn.php';


$id=$_POST['id'];
$first=$_POST['f_name'];
$last=$_POST['l_name'];
$email=$_POST['email'];
$status=$_POST['status'];
$field=$_POST['field'];
$result=mysqli_query($conn,"UPDATE pass_out SET First_name='$first',Last_name='$last',Email='$email',Current_status='$status',Field_of_Expertise='$field' WHERE Id='$id'");
echo "Successfully Updated !!";


?>
&nbsp;&nbsp;<a href=admin_home.php class="btn btn-success">Go Back</a>