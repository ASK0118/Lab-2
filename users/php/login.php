<?php

    if(isset($_POST['submit'])){
        include 'dbconnect.php';

        $email = $_POST['email'];
        $pass = ($_POST['password']);
        $sqllogin = "SELECT * FROM tbl_users WHERE user_email = '$email' AND user_pass = '$pass'";
        $stmt = $conn->prepare($sqllogin);
        $stmt->execute();
        $number_of_rows = $stmt->fetchColumn();

        if ($number_of_rows > 0) {
            echo "<script>alert('Login Success');</script>";
        }   else {
            echo "<script>alert('Login Failed');</script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<header class="w3-header w3-aqua w3-center w3-padding-32">
    <h3>MyTutor User Login Page</h3>
    <p>Login Page</p>
</header>

<div style="display:flex; justify-content: center">

    <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">

    <form action="login.php" method="post">
        <p>
            <label><b>Email</b></label>
            <input class="w3-input w3-round w3-border" type="email" name="email" id="idemail" placeholder="Email" required>
        </p>
        <p>
            <label><b>Password</b></label>
            <input class="w3-input w3-round w3-border" type="password" name="password" id="idpass" placeholder="Password" required>
        </p>   
        <p>
            <input class= "w3-check" type="checkbox" name="rememberme" id="idremember">
            <label>Remember Me</label>
        </p>
        <p>
            <input class="w3-button w3-round w3-border w3-aqua" type="submit" name="submit" id="idsubmit">
        </p> 
    </form>

    </div>

</div>
<footer class="w3-footer w3-aqua w3-center"><p>MyTutor</p></footer>
</body>
</html>