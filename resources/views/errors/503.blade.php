<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Maintenance</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0c1824;
        }
        .container{
            width: 100%;
            height: 100%;
            min-height: 600px;
            align-items: center;
            text-align: center;
            justify-content: center;  
            align-content: center;
        }
        h1 {
            font-size: 1.8rem;
            color: #00f0d0;
            margin-bottom: -5px;
        }
        p {
            font-size: 0.9rem;
            color: #ffffff;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            margin-top: 50px;
            font-size: 11pt;
            color: #797979;
        }
        .img-404{
            width: 350px;
            height: auto;
        }

        .mtn-icons {
        list-style-type: none;
        margin-top: -30px;
        padding-left: 0;
        display: flex;
        gap: 25px;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .mtn-icons li {
        display: inline-block;
    }

    .mtn-icons li a {
    color: #27779c;
    font-size: 1.4rem;
    display: inline-block; /* Pastikan elemen dapat ditransformasi */
    transition: color 0.3s ease, transform 0.3s ease;
    }

    .mtn-icons li a:hover {
        color: #00db9a;
        transform: translateY(-5px); /* Menggerakkan elemen ke atas */
    }
    .box {
        padding: 20px;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <img src="img/mt.png" lazy='loader' class="img-404" alt="">
            <h1>Website sedang dalam maintenance</h1>
            <p>Kami akan kembali secepatnya. Terima kasih atas kesabaran Anda!</p>
            <ul class="mtn-icons">
            <li><a href="https://wa.me/6282134749670" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/lazz_mxt/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="mailto:lazamediamxt@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a></li>
        </ul>
        </div>
    </div>
</body>
</html>
