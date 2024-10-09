<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: main.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSES</title>
    <link rel="icon" type="image/x-icon" href="./images/ico.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap');

    * {
        margin: 0;
        padding: 0;
    }

    a:link {
        text-decoration: none;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100vw;
        height: 100vh;
        background: #fff;
        font-family: 'Lato', sans-serif, open-sans;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 80%;
        gap: 1rem;
    }

    .card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        padding: 2rem;
        width: 100%;
        gap: 3rem;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.06);
        transition: all ease-in-out 0.7s;

        &:hover {
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
        }
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .card p {
        text-transform: uppercase;
        letter-spacing: 0.15em;
        font-size: 12px;
        color: #989090;
        font-weight: 500;
    }

    .book {
        --witdh: 200px;
        --height: 300px;
        --thick: 40px;
        --inner: 6px;
        --pages-bg: white;
        --cover-bg: rgba(33, 32, 30, 255);
        --cover-radius: 6px;
        position: relative;
        width: var(--witdh);
        height: var(--height);
        transform: rotateY(-30deg) rotateX(30deg);
        transition: 0.5s transform;
    }

    .book:hover {
        transform: rotateY(-20deg) rotateX(20deg);
    }

    .book,
    .book__cover,
    .book__pages {
        transform-style: preserve-3d;
    }

    .book__cover,
    .book__cover::before,
    .book__cover-img {
        border-top-right-radius: var(--cover-radius);
        border-bottom-right-radius: var(--cover-radius);
        user-select: none;
    }

    .book__cover::before,
    .book__cover::after,
    .book__pages::before,
    .book__pages::after {
        position: absolute;
        content: '';
        left: 0;
        top: 0;
        height: 100%;
    }

    .book__cover,
    .book__cover::before,
    .book__cover::after {
        background-color: var(--cover-bg);
    }

    .book__cover {
        width: 100%;
        height: 100%;
    }

    .book__cover::before {
        width: 100%;
        transform: translateZ(calc(var(--thick)*-1));
        box-shadow: 0 0 16px 1px rgba(0, 0, 0, 1);
    }

    .book__cover::after {
        width: var(--thick);
        transform-origin: left center;
        transform: rotateY(90deg);
    }

    .book__cover-img {
        width: 100%;
        height: 100%;
    }

    .book__pages,
    .book__pages::before,
    .book__pages::after {
        background: var(--pages-bg);
    }

    .book__pages {
        position: absolute;
        right: var(--inner);
        top: var(--inner);
        width: var(--thick);
        height: calc(100% - var(--inner)*2);
        transform-origin: right center;
        transform: rotateY(-90deg);
    }

    .book__pages::before,
    .book__pages::after {
        width: var(--thick);
        height: calc(var(--witdh) - var(--inner));
    }

    .book__pages::before {
        transform-origin: center top;
        transform: rotateX(90deg);
    }

    .book__pages::after {
        top: unset;
        bottom: 0;
        transform-origin: center bottom;
        transform: rotateX(-90deg);
    }

    .book-div {
        margin: 27px 0px;
    }

    .main-heading {
        text-transform: uppercase;
        letter-spacing: 0.15em;
        font-size: 28px;
        color: #767676;
        font-weight: 500;
    }
    #logout{
    position: absolute;
    top: 33rem;
    left: 81rem;
    }
</style>

<body>
    <div style="position: absolute; top: 3rem;">
        <h1 class="main-heading">COURSES</h1>
    </div>
    <div class="container">
        <div class="card">
            <a href="software-lec.html">
                <div class="book">
                    <div class="book__cover">
                        <img class="book__cover-img" src="./images/spm.webp">
                    </div>
                    <div class="book__pages"></div>
                </div>
                <div class="book-div">
                    <p>Software Project Management</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="information-lec.html">
                <div class="book">
                    <div class="book__cover">
                        <img class="book__cover-img" src="./images/is.jpg">
                    </div>
                    <div class="book__pages"></div>
                </div>
                <div class="book-div">
                    <p>Information security</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="parallel-lec.html">
                <div class="book">
                    <div class="book__cover">
                        <img class="book__cover-img" src="./images/pdc.webp">
                    </div>
                    <div class="book__pages"></div>
                </div>
                <div class="book-div">
                    <p>Parallel and Distributed computing</p>
                </div>

            </a>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    // Check if login was successful
    const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('login') === 'success') {
            toastr.success('Login Successful!');
        }
    </script>

        <!-- Logout Button -->
        <a id="logout" href="logout.php">
    <svg class="logouticon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
        <g id="SVGRepo_iconCarrier">
            <polyline points="23 17 16 24 23 31" style="fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"></polyline>
            <line x1="16" y1="24" x2="44" y2="24" style="fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"></line>
            <path d="M34,43.999C33.999,46.619,30,47,30,47c0,0-22,0-22-23 s22-23,22-23s3.999,0.426,4,3" style="fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"></path>
            <polyline points="41 39 48 32 41 25" style="fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"></polyline>
            <line x1="48" y1="32" x2="20" y2="32" style="fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"></line>
        </g>
    </svg>
</a>

</body>

</html>