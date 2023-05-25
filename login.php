<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="Image/Border.png">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/c40d7b47b3.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <header>
        <div class="container ">
            <h2>The Line</h2>
            <div class="navbar">
                <nav>
                    <ul>
                        <li>
                            <a href="signup.php" class="nav-icon" id="signup">
                                <i class="uil uil-estate"></i>
                                Sign up
                            </a>
                        </li>

                        <li>
                            <a href="login.php" class="nav-icon" id="login">
                                <i class="uil uil-user"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </nav>
                <button class="hamburger">
                    <div class="bar"></div>
                </button>
            </div>
    </header>
    <nav class="mobile-nav">
        <a href="signup.php">Sign up</a>
        <a href="login.php">Login</a>
    </nav>




    <section>
        <div class="form-box">
            <!------------------- login form -------------------------->
            <form action="#" method="post">
                <div class="login-container" id="login">
                    <div class="top">
                        <h1>LOGIN</h1>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Username or Email" name="usernameemail" id="usernameemail" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Password" name="password" id="password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In" id="submit" name="submit">
                    </div>
                    <div class="top">
                        <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!----------------------------------------- ACCOUNT VALIDATION ------------------------------------->

    <?php
    if (isset($_POST['submit'])) {
        require 'db.php';
        $usernameemail = $_POST['usernameemail'];
        $password = $_POST['password'];
        $result = mysqli_query($connect, "SELECT * FROM db WHERE username = '$usernameemail' OR email = '$usernameemail'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if (!empty($row) && $password == $row['password']) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("location: index.html");
            } else {
                echo "<script>alert('Incorrect Password');</script>";
            }
        } else {
            echo "<script>alert('User not Registered');</script>";
        }
    }
    ?>

    <script src="JS/index2.js"></script>
</body>

</html>