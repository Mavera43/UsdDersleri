<?php
include_once "urunler.php";
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .header {

            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f8f8;
        }

        .brand {
            font-size: 24px;
            font-weight: bold;
        }

        .menu ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .menu ul li a {
            text-decoration: none;
            color: #333;
        }

        .login {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <div class="brand"> Benim Firmam </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="login">
                <?php
                
                if ($isLoggedIn): ?>
                    <div class="greating">Welcome, <?php echo $_SESSION['username']; ?>!</div>
                    <a href="logout.php">LogOut</a>
                <?php else: ?>
                    <div class="form">
                        <form>
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                            <button type="submit">Login</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="content">
            <?php
            if ($isLoggedIn) : { ?>
                    <h2>Ürünler</h2>
                    <ul>
                        <?php foreach ($urunler as $urun): ?>
                            <li><?php echo $urun['urun_adi'] . " - $" . $urun['fiyat'] . " (Stok: " . $urun['stok'] . ")"; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php }
            else : ?>
                echo "<h1>Kontrol paneline erişmek için lütfen giriş yapın.</h1>";
            <?php endif;
            ?>


        </div>
        <div class="footer">
            <p>&copy; 2023 E-Ticaret. Tüm hakları saklıdır.</p>
        </div>
    </div>
</body>

</html>