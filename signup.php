<html>
    <head>
        <link rel="stylesheet" href="./css/login.css"/>
    </head>
    <body>
        <div class="formcontainer">
            <div class="imagediv">
                <img src="./images/loginlogo.svg"/>
                <h1 style="align-self:center; font-family: monospace;">ShoeStop</h1></div>
            <div class="loginformdiv">
                <h2 style="font-family:monospace; font-size: 2em;">Sign Up</h2>
            <form class="loginform" action="./helpers/customerRegistration.php" method="POST">
                <label for="fullname" class="inputlabels">Full Name</label>
                <input class="forminputs" name="fullname" placeholder="Enter your fullname"/>
                <label for="email" class="inputlabels" > Email</label>
                <input class="forminputs" name="email" placeholder="Enter your email"/>
                <label for="email" class="inputlabels"> Password</label>
                <input class="forminputs" type="password"  name="password" placeholder="Enter your password"/>
                <button class="loginbutton">Sign up</button>
                <p class="create-account">Already have an account ? <a style="color:#5b5454; cursor: pointer; list-style: none;" href="./login.php">Login</a></p>
            </form></div>
        </div>
    </body>
</html>