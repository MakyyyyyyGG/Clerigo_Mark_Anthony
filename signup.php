<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" type="png" href="Image/Border.png">
    <link rel="stylesheet" href="CSS/signup.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/c40d7b47b3.js" crossorigin="anonymous"></script>
    <title>Signup</title>
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


    <!------------------------------------------ Content ------------------------------------------------------------>


    <section>
        <div class="form-box">
            <form action="#" method="post">
                <div class="register-container" id="register">
                    <div class="top">
                        <h1>SIGN UP</h1>
                    </div>
                    <div class="two-forms">
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Firstname" id="fname" name="fname" required>
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Lastname" id="lname" name="lname" required>
                            <i class="bx bx-user"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" placeholder="Username" id="username" name="username" required>
                            <i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="email" class="input-field" placeholder="Email" id="email" name="email" required>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Password" id="password" name="password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Confirm Password" id="cpassword" name="cpassword" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Register" name="submit">
                    </div>
                    <div class="top">
                        <span>Already have an account? <a href="login.php">Login</a></span>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </section>

    <!---------------------------------------------- ADD CREDENTIALS TO DATABASE ------------------------------------------------------------>
    <script src="JS/index2.js"></script></script>
    <?php
    if (isset($_POST['submit'])) {
        require 'db.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $duplicate = mysqli_query($connect, "SELECT * FROM db WHERE username = '$username' OR email = '$email'");

        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script>alert('Username or Email has Already Exist')</script>";
        } else {
            if ($password ==  $cpassword) {
                $query = "INSERT INTO db VALUES('','$fname', '$lname', '$username', '$email', '$password')";
                mysqli_query($connect, $query);
                echo "<script>alert('Account Created!')</script>";
            } else {
                echo "<script>alert('Password does not match!')</script>";
            }
        }
    }
    ?>
</body>

</html>