<?php 

session_start();

//VERIFY USER & PASSWORD

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "iloveyou"){

//SESSION MAKE
        $_SESSION["login"] = true;

        header("Location: index.php");
        exit;
    }
$error = true;
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        form{
            width: 350px;
            position: relative;
        }
        form .form-field::before{
            font-size: 20px;
            position: absolute;
            left: 15px;
            top: 17px;
            color: #888888;
            content: "";
            display: block;
            background-size: cover;
            background-repeat: no-repeat;
        }
        form .form-field:nth-child(1)::before{
            width: 16px;
            height: 16px;
            top: 15px;
        }
        form .form-field:nth-child(2)::before{
            width: 16px;
            height: 16px;
        }
        form .form-field{
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            align-items: center;
            margin-bottom: 1rem;
            position: relative;
        }
        form input{
            font-family: inherit;
            width: 100%;
            outline: none;
            background-color: #fff;
            border-radius: 4px;
            border: none;
            display: block;
            padding: 0.9rem 0.7rem;
            font-size: 17px;
            color: #4A4A4A;
            text-indent: 40px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        }
        form .btn{
            outline: none;
            border: none;
            cursor: pointer;
            display: inline-block;
            margin: 0 auto;
            padding: 0.9rem 2.5rem;
            text-align: center;
            background-color: #ba0202;
            color: #fff;
            border-radius: 4px;
            font-size: 17px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
        }


    </style>
</head>
<body>


<div class="container" style="border: 1px ridge #ba0202; padding: 20px">
    <form action="" method="post">
        
    <?php if(isset($error)) : ?>
        <p style="text-align: center">Login failed</p>
    <?php endif; ?>

    <!-- username column -->

        <div class="form-field">
                <input name="username" type="text" id="username" placeholder="Username">
        </div>

    <!-- password column     -->

        <div class="form-field">
                <input name="password" type="password" id="password" placeholder="Password">
        </div>

    <!-- submit button -->

        <div class="form-field">
            <button name="login" type="submit" class="btn">login</button>
        </div>
    </form>

</div>

</body>
</html>





