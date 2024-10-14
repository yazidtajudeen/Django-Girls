<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <div class="logo"><a href="index.php">
            <img src="../images/django girls 1.png" alt="" srcset="">
        </a></div>
    <div class="signup-container">
        <div class="signup-box">
            <h2>Login</h2>
            <p>Hey welcome back login to continue exploring Django girls</p>
            <form action="./log.php" method="POST">
                <div class="input-field">
                    <label for="email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="input-field">
                    <label for="password"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>
                <button type="submit" class="btn">Login</button>
                <p class="login-link"> Don`t have an account? <a href="signupConfig.php">SignUp</a></p>
            </form>
</body>

</html>