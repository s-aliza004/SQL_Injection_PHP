<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize the login message
$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL injection vulnerable query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Check if user exists
    if ($result->num_rows > 0) {
        // User found, login successful
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: faculty-main.php?login=success");
        exit();
    } else {
        // No user found, login failed
        header("Location: login.php?login=failed");
        exit();
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Attack</title>
    <link rel="icon" type="image/x-icon" href="./images/ico.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/img.jpg') no-repeat center center/cover;
    }

    .container {
        position: relative;
        width: 256px;
        height: 256px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container span {
        position: absolute;
        left: 0;
        width: 32px;
        height: 6px;
        background: #115bad;
        border-radius: 8px;
        transform-origin: 128px;
        transform: scale(2.2) rotate(calc(var(--i) * (360deg / 50)));
        animation: animateBlink 3s linear infinite;
        animation-delay: calc(var(--i) * (3s / 50));
    }

    @keyframes animateBlink {
        0% {
            background: #fff;
        }

        25% {
            background: #2c4766;
        }
    }

    .login-box {
        position: absolute;
        width: 400px;
        /* background: red; */
    }

    .login-box form {
        width: 100%;
        padding: 0 50px;
    }

    h2 {
        font-size: 2em;
        color: #f1f1f1;
        text-align: center;
    }

    .input-box {
        position: relative;
        margin: 25px 0;
    }

    .input-box input {
        width: 100%;
        height: 50px;
        background: transparent;
        border: 2px solid #2c4766;
        outline: none;
        border-radius: 40px;
        font-size: 1em;
        color: #fff;
        padding: 0 20px;
        transition: 0.5s ease;
    }

    .input-box input:focus,
    .input-box input:valid {
        border-color: rgb(255, 255, 255);
    }

    .input-box label {
        position: absolute;
        top: 50%;
        left: 20px;
        transform: translateY(-50%);
        font-size: 1em;
        color: #fff;
        pointer-events: none;
        transition: 0.5s ease;
    }

    .input-box input:focus~label,
    .input-box input:valid~label {
        top: 1px;
        font-size: 0.8em;
        background: #1f293a;
        padding: 0 6px;
        color: rgb(255, 255, 255);
    }

    .forgot-pass {
        margin: -15px 0 10px;
        text-align: center;
    }

    .forgot-pass a {
        font-size: 0.75em;
        color: #fff;
        text-decoration: none;
    }

    .forgot-pass a:hover {
        text-decoration: underline;
    }

    .btn {
        width: 100%;
        height: 45px;
        background: #115bad;
        border: none;
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-size: 1em;
        color: #ffffff;
        font-weight: 600;
    }

    .signup-link {
        margin: 20px 0 10px;
        text-align: center;
    }

    .signup-link a {
        font-size: 1em;
        color: #0ef;
        text-decoration: none;
        font-weight: 600;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }

    p {
        color: #fff;
        font-size: 0.75rem;
    }
</style>

<body>

    <div class="container">
        <div class="login-box">
            <h2>SQL INJECTION</h2>
            <?php if ($loginMessage) echo $loginMessage; ?>
            <form action="login.php" method="post">
                <div class="input-box">
                    <input type="text" name="username" >
                    <label>Username</label>    
                </div>
                <div class="input-box">
                    <input type="password" name="password" >
                    <label>Password</label>
                </div>
                <button type="submit" class="btn">Sign in</button>
            </form>
        </div>

        <span style="--i:0;"></span>
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <span style="--i:4;"></span>
        <span style="--i:5;"></span>
        <span style="--i:6;"></span>
        <span style="--i:7;"></span>
        <span style="--i:8;"></span>
        <span style="--i:9;"></span>
        <span style="--i:10;"></span>
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:13;"></span>
        <span style="--i:14;"></span>
        <span style="--i:15;"></span>
        <span style="--i:16;"></span>
        <span style="--i:17;"></span>
        <span style="--i:18;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:21;"></span>
        <span style="--i:22;"></span>
        <span style="--i:23;"></span>
        <span style="--i:24;"></span>
        <span style="--i:25;"></span>
        <span style="--i:26;"></span>
        <span style="--i:27;"></span>
        <span style="--i:28;"></span>
        <span style="--i:29;"></span>
        <span style="--i:30;"></span>
        <span style="--i:31;"></span>
        <span style="--i:32;"></span>
        <span style="--i:33;"></span>
        <span style="--i:34;"></span>
        <span style="--i:35;"></span>
        <span style="--i:36;"></span>
        <span style="--i:37;"></span>
        <span style="--i:38;"></span>
        <span style="--i:39;"></span>
        <span style="--i:40;"></span>
        <span style="--i:41;"></span>
        <span style="--i:42;"></span>
        <span style="--i:43;"></span>
        <span style="--i:44;"></span>
        <span style="--i:45;"></span>
        <span style="--i:46;"></span>
        <span style="--i:47;"></span>
        <span style="--i:48;"></span>
        <span style="--i:49;"></span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        // Check if login was failed
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('login') === 'failed') {
            toastr.error('Login Failed. Invalid email or password.');
        }
    </script>
</body>
</html>

