<!DOCTYPE html>
<html>
    <head>
    <title>registration pg</title>
    <style>

        body{
            background-color: rgb(240, 233, 177);
            justify-content: center;
            display: flex;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family:sans-serif;
        }
        .form-box{
            background-color: #fffdf0;
            padding: 20px 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            width: 320px;
        }
        h2{
            font-size: 30px;
            font-family:  Arial, sans-serif;
            text-align:center;
            color: #2e2e2e;
            font-weight: bold;
            letter-spacing: 1px;

           
        }
        label{
            margin-top: 10px;
            font-size: 16px;
            color: #5a5a5a;
            display: block;
        }
        input{
            width: 95%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #c8c3a0;
            background-color: #fdfcea;
            margin-top: 4px;
            margin-bottom: 8px;
            font-size: 14px;  


        }
        input[type="submit"] {
            background-color: #8a7e4f;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 12px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #6e623e;
        }

        .error {
            background-color: #f8d7da;
            color: #842029;
            border: 1px solid #f5c2c7;
            font-size: 25px;
        }
        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
            text-align: center;
        }

    </style>
    </head>
<body>


<div class="form-box">
<h2>REGISTRATION</h2>
<form method="POST">
<label >Name</label><input type="text" name="name" ><br>

<label >Email</label><input type="email" name="email"><br>

<label >Phno</label><input type="tel" name="phno" ><br>

<label >Password</label><input type="password" name="password" ><br>

<input type="submit" value="Register">

</form>


<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = htmlspecialchars($_POST["name"]?? '');
    $email = htmlspecialchars($_POST["email"]?? '');
    $phno = htmlspecialchars($_POST["phno"] ?? '');
    $pass = htmlspecialchars($_POST["password"] ?? '');

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    }
      
    if (empty($pass)) {
        $errors[] = "Password is required";
    } elseif (strlen($pass) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }

    if (empty($errors)) {
        echo "<div class='message'>Welcome, $name! Your registration is successful.</div>";
    } else {
        foreach ($errors as $err) {
            echo "<div class='message error'>$err</div>";
        }
    }
}

?>
</div>
</body>
</html>