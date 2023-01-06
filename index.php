<?php 

session_start();


    if( !isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
        <style>
        div {
            align-items: center; /* vertically center the div element */
            justify-content: center; /* horizontally center the div element */
            width: 100%; 
            height: 100%; 
            text-align: center;
            margin: 0 auto; /* center the div element horizontally */
        }
    </style>
 </head>
 <body>
    <div>
        <h1>Easyyy been chilling....</h1>
        <br>
        <p>NEVTIK{bRutef0rc3_M4st3R_I5_r34L}</p>
        <img src="img/john.png" alt="picture">
    </div>
 </body>
 </html>