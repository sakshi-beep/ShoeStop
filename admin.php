<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="   css/login.css?v=<?php echo time();?>">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../js/login.js?v=2"></script>
</head>

<body>
    <div class="container">
        <img src="images/main-logo.svg" class="mainlogo">
         <!-- <h1>Step Up</h1> -->
        <div class="form-container">
            <p class="login-title">Login</p>
            <form class="login-form" method="POST" >
                <div class="inputs-div">
                    <label class="input-labels" for="email-input">Username</label>
                    <input type="text" placeholder="Enter your username" class="form-inputs" name="username"
                        id="email-input" />
                    <span id="required-email" class="required-field"></span>
                </div>
                <div class="inputs-div">
                    <label class="input-labels" for="password-input">Password</label>
                    <div id="password-field">
                        <input type="password" placeholder="Enter your password" name="password" id="password-input"
                            class="form-inputs" onfocus="toggleVisibility()" />
                       
                    </div>
                    <span id="required-password" class="required-field"></span>

                </div>
                <button class="btn-login" name="submit" type="submit">Login</button>
<span id="errormessage" class="login-status"></span>
<span id="successmessage" class="login-status"></span>
</form>
<?php 
include "includes/dbconfig.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result)) {
        header("Location: admin/index.php");
        exit();
    }
}
?>

        </div>
    </div>
</body>

</html>