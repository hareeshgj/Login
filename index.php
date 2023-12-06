<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h1>Welcome</h1>
            <form class="form" id="form-login">
                <input type="text" placeholder="Username or Mob No or Email" id="user-log">
                <input type="password" placeholder="Password" id="pass-log">
                <div class="text-danger pb-2 d-none" id="in-user">Incorrect Username</div>
                <div class="text-danger pb-2 d-none" id="in-pass">Incorrect Password</div>
                <button type="submit" id="login-button">LOGIN</button>
                <!-- <button type="submit" Signup</button> -->
                <div>New Here! <a class="signup" id="signup-link">Sign up here</a></div>
            </form>
            <form class="form" style="display
            : none;" id="form-signup">
                <input type="text" placeholder="Name" id="user-name" required>
                <input type="email" placeholder="Email" id="user-email" required>

                <input type="number" placeholder="Phone Number" id="user-phone" required>
                <input type="text" placeholder="Username" id="user-sign" required>
                <div class="spinner d-none" id="loader-user">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <div class="text-danger pb-2 d-none" id="user-unav">Username Unavailable</div>
                <div class="text-success pb-2 d-none" id="user-ava">Username Available</div>
                <input type="password" placeholder="Password" id="pass-sign" required>


                <input type="password" placeholder="Retype Password" id="re-pass" required>
                <div class="text-danger pb-2 d-none" id="pass-fail">Passwords Dont Match or too Small</div>
                <div class="text-danger pb-2 d-none" id="field-check">Enter all the fields Correctly</div>

                <!-- <button type="submit" id="login-button">Login</button> -->
                <button type="submit" id="signup-button">SIGNUP</button>
                <div class="text-danger pb-2 d-none" id="sign-unav">Server Error or Profile Exists</div>
                <div>Already a User? <a class="signup" id="login-link">Log in</a></div>

            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="login.js"></script>

</body>

</html>