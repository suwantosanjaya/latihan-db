<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login-form.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
</head>

<body>
    <h1>Menu Utama</h1>
    <nav>
        <ul>
            <li><a href="logout-proses.php">Logout</a></li>
        </ul>
    </nav>
    <p>Selamat datang di menu utama!</p>
</body>

</html>