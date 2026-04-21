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
            padding: 10px 0;
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
            <div class="brand">My Brand </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="login">
                <?php
                session_start();
                if (isset($_SESSION['username'])): ?>
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

    </div>
</body>

</html>