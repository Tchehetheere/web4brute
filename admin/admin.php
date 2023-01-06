<?php
session_start();

if(isset($_POST["logout"])){
	session_destroy();
	header("Location: ../login.php");
	exit;
}
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
        <style>
        .btn {
            align-items: center; /* vertically center the div element */
            justify-content: center; /* horizontally center the div element */
            width: 10%; 
            height: 100%; 
            text-align: center;
            margin: auto;
            display: flex;
	
        }
    </style>
 </head>
 <body>
	<form action="" method="post">
	<h2 align="center">Admin panel</h2>
	<h3 align="center">this site is still under construction</h3>
<br><br><br><br>
	<button name="logout" type="submit" class="btn">logout</button>
	</form>
 </body>
