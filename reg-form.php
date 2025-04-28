<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengguna</title>
</head>
<body>
    <h1>Registrasi Pengguna</h1>
    <form action="reg-proses.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="full_name">Nama Lengkap:</label>
        <input type="text" name="full_name" id="full_name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="1">Admin</option>
            <option value="2">Mahasiswa</option>
        </select><br>

        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>