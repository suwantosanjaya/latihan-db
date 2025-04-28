<?php

if (!isset($_POST['submit'])) {
    echo "Form not submitted!";
    exit;
}

try {
    include "connect-db.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $sql = "INSERT INTO pengguna VALUES(?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $data = [$username, md5($password), $full_name, $email, $role];
    $stmt->execute($data);

    echo "Register berhasil!";
    // header("Location: login.php");
} catch (PDOException $e) {
    echo "Registrasi gagal!";
    exit;
}
