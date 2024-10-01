<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_homepage.css">
    <title>Music App</title>
</head>
<body>
   
    <section style="background-image: url(Aset/background.jpg)">
        <header>
            <h2 class="logo">Music</h2>
            <div class="navigation">
                <a href="#">HOME</a>
                <a href="#">SONGS</a>
                <a href="#">PLAYLIST</a>
            </div>
            <div class="navigasi">
            <?php if (isset($_SESSION['email'])): ?>
                <form action="login_system/logout.php" method="POST">
                    <button type="submit">Log Out</button>
                </form>
            <?php else: ?>
                <a href="login_system/login.php"><button>Login</button></a>
            <?php endif; ?>
            </div>
        </header>
         <div class="box"> </div>
        <div class="content">
            <div class="info">
                <div class="piring"><img src="Aset/piring hitam.png">
                <h2>Listen to<br><span>Music</span></h2>
                <p>Express Your Feelings</p>
                <a href="#" class="info-button">SONGS</a>
            </div>
            </div>
        </div>
        <div class="media-icons">
            <a href="#"></a>
        </div>
   
    </section>
</body>
</html>