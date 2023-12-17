<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $select = new SelectSales();

    $userData = $select->selectSalesById($id);

    if (!$userData) {
        echo "User not found.";
        exit();
    }
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission for editing data
    if (isset($_POST["_method"]) && strtoupper($_POST["_method"]) === "PUT") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $type = $_POST["type"];
        $series = $_POST["series"];
        $price = $_POST["price"];
        $email = $_POST["email"];

        $inputSales = new InputSales();
        $resultEdit = $inputSales->editSales($id, $name, $type, $series, $price, $email);

        if ($resultEdit === 1) {
            header("Location: index.php");
            exit();
        } else {
            $messageEdit = "Gagal mengedit data penjualan.";
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sales Data</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script defer src="./assets/handle.js"></script>
</head>

<body>
    <div class="container">
        <form id="form" action="edit.php" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?php echo $userData['id']; ?>">
            <h1>Edit Sales Data</h1>
            <div class="input-control">
                <label for="name">Product Name</label>
                <input id="name" name="name" type="text" value="<?php echo $userData['name']; ?>">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="type">Product Type</label>
                <select id="type" name="type">
                    <option value="smartphone" <?php echo ($userData['type'] == 'smartphone') ? 'selected' : ''; ?>>
                        Smartphone</option>
                    <option value="laptop" <?php echo ($userData['type'] == 'laptop') ? 'selected' : ''; ?>>Laptop
                    </option>
                    <option value="tablet" <?php echo ($userData['type'] == 'tablet') ? 'selected' : ''; ?>>Tablet
                    </option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="series">Product Series</label>
                <input id="series" name="series" type="text" value="<?php echo $userData['series']; ?>">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="price">Product Price</label>
                <input id="price" name="price" type="number" value="<?php echo $userData['price']; ?>">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" value="<?php echo $userData['email']; ?>">
                <div class="error"></div>
            </div>
            <button type="submit">Update Sale</button>
        </form>
    </div>
</body>

</html>
