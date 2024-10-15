<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="dashboard-container">

        <aside class="sidebar">
            <div class="logo">
                <img src="../images/django girls 1.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Dashboard</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>


        <main class="main-content">
            <header>
                <h1>Welcome <br> <span class="username">
                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></span></h1>

            </header>
            <section class="info">
                <h3>Welcome to Django Girls</h3>
            </section>
            <footer>
                <p>@Alpha Yazid Tajuideen BSEM SEM-5/Yrs-3 905003502</p>
            </footer>
        </main>
    </div>



</body>

</html>