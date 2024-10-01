<?php
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencegah serangan SQL Injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Masukkan data ke database
    $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal mendaftar: " . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href=".../css/register.css"> 
</head>
<body>
    <div class="container">
        <div class="row border rounded-5 p-3 bg-white shadow-lg box-area mt-5">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="login.php" class="btn btn-secondary">Punya Akun?</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
