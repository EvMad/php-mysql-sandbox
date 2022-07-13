<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn= mysqli_connect('localhost', 'root', DB_PASSWORD, 'test1') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['full_name']) && isset($_POST['email'])) {
            $full_name= $_POST['full_name'];
            $email= $_POST['email'];

            $sql= "INSERT INTO 'users' ('full_name', 'email') VALUES ('$full_name', '$email')";

            $query = mysql_query($conn, $sql);
            if($query) {
                echo 'Entry Successful';
            }
            else {
                echo 'Error Occurred';
            }
        }
    }
   ?> 

    