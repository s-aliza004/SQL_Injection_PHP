<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: faculty-main.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACULTY - PAGE</title>
    <link rel="icon" type="image/x-icon" href="./images/ico.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            background: linear-gradient(135deg, #489cf9 0%, #000000 100%);
            font-family: "Lato", sans-serif, "Open Sans";
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            width: 300px;
            height: 400px;
            gap: 2rem;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            text-align: center;
            text-decoration: none;
            color: inherit;
        }

        .card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            transform: translateY(-10px);
        }

        .card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card p {
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-size: 1.1rem;
            color: #555;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="faculty.php" class="card">
            <img src="./images/user.png" alt="User Image">
            <p>Sir Naveed</p>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        const card = document.querySelector(".card");

        card.addEventListener("mouseover", () => {
            card.style.transition = "all 0.3s ease-in-out";
            card.style.boxShadow = "0 20px 40px rgba(0, 0, 0, 0.2)";
            card.style.transform = "translateY(-10px)";
        });

        card.addEventListener("mouseleave", () => {
            card.style.transition = "all 0.3s ease-in-out";
            card.style.boxShadow = "0 10px 20px rgba(0, 0, 0, 0.1)";
            card.style.transform = "translateY(0)";
        });

        // Check if login was successful
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('login') === 'success') {
            toastr.success('Login Successful!');
        }
    </script>
</body>

</html>
