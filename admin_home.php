<?php
    include 'conn.php';
    // $institute_data=mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM institute"),MYSQLI_ASSOC);
    // $year_data= mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM expected_year"),MYSQLI_ASSOC);      
 ?>
<html>

<head>
    <?php include 'link.php'; ?>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <?php 
             $result=mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM pass_out"),MYSQLI_ASSOC); 
             ?>
        <br>
        <br>
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
                    <th>Update Field</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $key) {
            echo "<tr>"; 
                        $id=$key['Id'];
                        $firstname=$key['First_name'];
                        $lastname=$key['Last_name'];
                        $email=$key['Email'];
                        $gender=$key['Gender'];
                        $status=$key['Current_status'];
                        $field=$key['Field_of_Expertise'];
                        echo "<form action='update_pass_out.php' method='post'>";
                        echo "<td><input class=form-control name=id type=text value=".$id." readonly></td>";    
                        echo "<td><input class=form-control name=f_name type=text value=".$firstname."></td>";  
                        echo "<td><input class=form-control name=l_name type=text value=".$lastname."></td>";   
                        echo "<td><input class=form-control name=email type=text value=".$email."></td>";   
                        echo "<td><input class=form-control name=gender type=text value=".$gender."></td>"; 
                        echo "<td><input class=form-control name=status type=text value=".$status."></td>"; 
                        echo "<td><input class=form-control name=field type=text value=".$field."></td>";   
                        echo "<td><input class='btn btn-primary' type=submit value=Update></td>";
                        echo "</form>";
                        
            echo "</tr>";
                    }  ?>
            </tbody>
        </table>
    </div>
</body>

</html>