<?php
    include "connect-db.php";

    if(isset($_POST["simpan"])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];

        $sql = "INSERT INTO mahasiswa(nim, nama, tempat_lahir, tgl_lahir, jk) VALUES(?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);  
        $data = [$nim, $nama, $tempat_lahir, $tgl_lahir, $jk];
        $stmt->execute($data);

        header("Location: mhs.php");
    }else{
        header("Location: mhs-form.php");
    }
    
?>