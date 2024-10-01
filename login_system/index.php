<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/Login.css">
    </head>
    <body>
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <div class="col-md-6 rounded-5 d-flex justify-content-center align-items-center flex-column left-box" style="background: #29a9bd;">
                    <div class="featured-image mb-3">
                        <img src="../Aset/Music Ilustration.png" class="img-fluid" style="width: 250px;">
                    </div>
                    <p class="text-white fs-1" style="font-family: 'Plus Jakarta Sans'; font-weight: 800;">SevenHundredSongs</p>
                    <small class="text-white text-warp text-center mb-3" style="width: 17rem;">Just Experience Music for this platform</small>
                </div>
                <div class="col-md-6 right-box mt-4">
                    <div class="row align-items-center">
                        <div class="header-text mb-4 d- justify-content-center">
                        <p class="fs-1 d-flex align-items-center justify-content-center" style="font-weight: 800;">Hello Again</p>
                        <p class="mt-1 d-flex align-items-center justify-content-center">We Are Happy to have you back</p>
                        </div>
                        <form action="login.php" method="POST">
                            <div class="input-group mb-1">
                                <input type="text" class="form-control form-control-lg bg-light fs-6" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="input-group mb-1">
                                <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password" required>
                            </div>
                            <div class="input-group mb-5 d-flex justify-content-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formCheck">
                                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                                </div>
                            </div>
                            <div class="input-group mb-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-lg btn-primary w-50 fs-6">Login</button>
                            </div>
                            <div class="Register d-flex justify-content-center">
                                <p class="me-2 fs-6">Belum Punya Akun?</p>
                                <small><a href="register.php" class="fs-6">Register</a></small>
                            </div>
                        </form>
                        <?php if (isset($error)) { ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>
