<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <?php
    include "connect-db.php";

    $sql = "SELECT * FROM mahasiswa";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    ?>
    <a href="mhs-form.php">Tambah Data</a>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["nim"] . "</td>";
            echo "<td>" . $row["tempat_lahir"] . "</td>";
            echo "<td>" . $row["tgl_lahir"] . "</td>";
            echo "<td>" . $row["jk"] . "</td>";
            echo "<td><a href='#' onClick=confirmDelete('" . $row["nim"] . "')>Hapus</a></td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
    <script>
        function confirmDelete(nim) {
            $tanya = confirm("Anda yakin ingin menghapus data ini?");
            if ($tanya == true) {
                window.location.href = "mhs-hapus.php?nim=" + nim;
            }
        }
    </script>
</body>

</html>