<?php

session_start(); 

$userInfo = [
    'username' => 'admin',
    'email' => 'admin@admin.com',
];

$_SESSION['user'] = $userInfo;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gadget</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1 class="title">Data Gadget</h1>
    <a class="add-button" href="create.php">Tambah Data</a>

    <?php
    include 'config.php';
    $inputSales = new SelectSales();
    $resultSales = $inputSales->getAllSales();
    $no = 1;
    echo "<table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Series</th>
            <th>Price</th>
            <th>Email</th>
            <th>Action</th>
        </tr>";

    foreach ($resultSales as $row) {
        echo "<tr>
            <td>" . $no++ . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["type"] . "</td>
            <td>" . $row["series"] . "</td>
            <td>" . $row["price"] . "</td>
            <td>" . $row["email"] . "</td>
            <td class='action-buttons'>
                <a class='edit-button' href='edit.php?id=" . $row["id"] . "'>Edit</a>
                <a class='delete-button' href='delete.php?id=" . $row["id"] . "'>Delete</a>
            </td>
          </tr>";
    }

    echo "</table>";
    ?>
    <div id="cookie-notice">
        <p>We use cookies to enhance your experience on this website. By continuing, you agree to our cookie policy.</p>
        <button onclick="acceptCookies()">Accept</button>
    </div>

    <script>
        function acceptCookies() {
            setCookie("cookieAccepted", "true", 365);
            document.getElementById("cookie-notice").style.display = "none";
        }

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        var cookieAccepted = getCookie("cookieAccepted");
        if (cookieAccepted === "true") {
            document.getElementById("cookie-notice").style.display = "none";
        }
    </script>
</body>

</html>