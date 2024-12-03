<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Modularisasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
            padding: 10px 0;
            background-color :#4CAF50;
            color: white;
            border-radius: 5px 5px 0 0;
        }
        nav {
            margin-top: 20px;
            text-align: center;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #3a9a40;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1 style="color:white;">Modularisasi Menggunakan Require</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="ubah.php">Tentang Ubah Barang</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </div>
</body>
</html>
