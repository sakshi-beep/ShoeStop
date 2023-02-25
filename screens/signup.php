<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="../css/signup.css?v=<?php echo time();?>">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/signup.js?v=2"></script>
</head>

<body>
    <div class="container">
        <img src="../images/main-logo.svg" class="mainlogo">
        <div class="form-container">
            <p class="signup-title">signup</p>
            <form class="signup-form" method="POST">
                <div class="inputs-div">
                    <label class="input-labels" for="fullname-input">Full Name</label>
                    <input type="text" placeholder="Enter your fullname" class="form-inputs" name="fullname"
                        id="fullname-input" />
                    <span id="required-fullname" class="required-field"></span>
                </div>
                <div class="inputs-div">
                    <label class="input-labels" for="email-input">Email</label>
                    <input type="email" placeholder="Enter your email" class="form-inputs" name="email"
                        id="email-input" />
                    <span id="required-email" class="required-field"></span>
                </div>
                <div class="inputs-div">
                    <label class="input-labels" for="password-input">Password</label>
                    <div id="password-field">
                        <input type="password" placeholder="Enter your password" name="password" id="password-input"
                            class="form-inputs" onfocus="toggleVisibility()" />
                        <button id="btn-eye" onclick="togglePassword()">Show</button>
                    </div>
                    <span id="required-password" class="required-field"></span>

                </div>
                <button class="btn-signup" onclick="userSignup()">Sign Up</button>
                <span id="errormessage" class="signup-status"></span>
                <span id="successmessage" class="signup-status"></span>
            </form>
            <p class="action-container">Have an account? <a class="action-txt" href="../screens/login.php">Login</a></p>
        </div>
    </div>
</body>

</html>