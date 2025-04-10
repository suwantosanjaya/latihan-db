<?php
include "connect-db.php";
$nim = $_GET['nim'];
$sql = "DELETE FROM mahasiswa WHERE nim = ?";
$stmt = $conn->prepare($sql);
$data = [$nim];
$stmt->execute($data);

header("Location: mhs.php");
?>