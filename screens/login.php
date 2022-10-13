<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css?v=<?php echo time();?>">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/login.js?v=2"></script>
</head>

<body>
    <div class="container">
        <img src="../images/logo-big.svg" class="mainlogo">
        <div class="form-container">
            <p class="login-title">login</p>
            <form class="login-form" method="POST">
                <div class="inputs-div">
                    <label class="input-labels" for="email-input">Email</label>
                    <input type="email" placeholder="Enter your email" class="form-inputs" name="email" id="email-input"/>
                    <span id="required-email" class="required-field"></span>
                </div>
                <div class="inputs-div">
                    <label class="input-labels" for="password-input">Password</label>
                    <div id="password-field">
                        <input type="password" placeholder="Enter your password" name="password" id="password-input"
                            class="form-inputs" onfocus="toggleVisibility()"/>
                        <button id="btn-eye" onclick="togglePassword()">Show</button>
                    </div>
                    <span id="required-password" class="required-field"></span>

                </div>
                <button class="btn-login" onclick="userLogin()">Login</button>
                <span id="errormessage" class="login-status"></span>
                <span id="successmessage" class="login-status"></span>
                <a class="forgot-txt" href="#">Forgot Password?</a>
            </form>
            <p class="action-container">New Here ? <a class="action-txt" href="../screens/signup.php">Sign up</a></p>
        </div>
    </div>
</body>

</html>