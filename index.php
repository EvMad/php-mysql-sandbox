<?php 

session_start();

include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Registration Form</title>
</head>


<body>
<h1>Sign Up</h1>
    <div><h2>Registration Form</h2></div>
    <form action='connect.php' method="POST">
        <label for="user">Name:</label><br>
        <input type='text' name='name' id="full_name" required/> <br> <br>
        <label for="email">Email:</label><br>
        <input type='text' name='email' id="email" required/> <br> <br>
    </form>

    <script></script>
</body>