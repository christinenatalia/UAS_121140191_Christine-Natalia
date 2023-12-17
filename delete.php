<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];


    $inputSales = new InputSales();

    $resultDelete = $inputSales->deleteSales($id);

    if ($resultDelete === 1) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menghapus data penjualan.";
    }
} else {
    echo "Invalid request.";
}
?>
