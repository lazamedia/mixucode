<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
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
            font-size: 2rem;
            color: #00f0d0;
        }
        p {
            font-size: 1rem;
            color: #ffffff;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            margin-top: 50px;
            font-size: 11pt;
            color: #797979;
            cursor: pointer;
        }
        .img-404{
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/404.png') }}" lazy='loader' class="img-404" alt="">
        <h1>404 - Page Not Found</h1>
        <p>Oops! The page you are looking for does not exist.</p>
        <!-- Gunakan history.back() untuk kembali ke halaman sebelumnya -->
        <a onclick="history.back()">Kembali</a>
    </div>
</body>
</html>
