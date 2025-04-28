<?php

    if(!isset($_POST['submit'])) {
        header("Location: login-form.php");
        exit;
    }

    try{
        include "connect-db.php";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM pengguna WHERE uname = ? AND pwd = ?";
        $stmt = $conn->prepare($sql);
        $data = [$username, md5($password)];
        $stmt->execute($data);

        if($stmt->rowCount() > 0) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: menuutama.php");
        } else {
            echo "Login gagal! Username atau password salah.";
            exit;
        }
    } catch(PDOException $e) {
        echo "Login gagal! ";
        exit;
    }