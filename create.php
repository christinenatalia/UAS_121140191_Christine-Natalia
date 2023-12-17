<?php
session_start();

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $type = $_POST["type"];
    $series = $_POST["series"];
    $price = $_POST["price"];
    $email = $_POST["email"];

    $_SESSION['form_data'] = compact('name', 'type', 'series', 'price', 'email');

    $inputSales = new InputSales();
    $resultSales = $inputSales->inputSales($name, $type, $series, $price, $email);

    if ($resultSales === -1) {
        $message = "Email sudah terdaftar.";
    } elseif ($resultSales === 1) {
        $message = "Data penjualan berhasil ditambahkan.";
        header("Location: index.php");
        exit();
    } else {
        $message = "Gagal menambahkan data penjualan.";
    }

    echo $message;
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script defer src="./assets/handle.js"></script>
</head>
<body>
    <div class="container">
        <form id="form" action="create.php" method="POST">
            <h1>Tambah data</h1>
            <div class="input-control">
                <label for="name">Product Name</label>
                <input id="name" name="name" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="type">Product Type</label>
                <select id="type" name="type">
                    <option value="smartphone">Smartphone</option>
                    <option value="laptop">Laptop</option>
                    <option value="tablet">Tablet</option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="series">Product Series</label>
                <input id="series" name="series" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="email">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="price">price</label>
                <input id="price"name="price" type="number">
                <div class="error"></div>
            </div>
            <button type="submit">Create Sale</button>
        </form>
    </div>
    <script src="./assets/localstorage.js"></script>
</body>
</html>
