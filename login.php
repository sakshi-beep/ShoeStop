<html>
    <head>
        <link rel="stylesheet" href="./css/login.css"/>
        <script>
            function validateForm (){
            let emailfield = document.getElementById("emailfield").value;
            let passwordfield = document.getElementById("passwordfield").value; 
        
            if(emailfield.length<1){
                document.getElementById("emailvalidate").innerHTML = "*email is required";
                event.preventDefault();
                return false;
            }
            
                if(passwordfield.length<1){
                    document.getElementById("passwordvalidate").innerHTML = "*password is required";
                event.preventDefault();
                return false;   
                }
            
        
        }
        </script>
    </head>
    <body>
        <div class="formcontainer">
            <div class="imagediv">
                <img src="./images/loginlogo.svg"/>
                <h1 style="align-self:center; font-family: monospace;">ShoeStop</h1></div>
            <div class="loginformdiv">
                <h2 style="font-family:monospace; font-size: 2em;">Login</h2>
            <form class="loginform" action="./helpers/customerLogin.php" method="POST">
                <label for="email" class="inputlabels" > Email</label>
                <input class="forminputs" name="email" placeholder="Enter your email" id="emailfield"/>
                <span id="emailvalidate" style="color:red"></span>
                <label for="email" class="inputlabels"> Password</label>
                <input class="forminputs" type="password"  name="password" placeholder="Enter your password" id="passwordfield"/>
                <span id="passwordvalidate" style="color:red"></span>

                <button class="loginbutton" onclick="validateForm()">Login</button>
                <a style="align-self:flex-end; padding:0.7rem; font-size: 1.2em;" href="./index.php">Forgot Password?</a>
                <p class="create-account">Don't have an account ? <a style="color:#5b5454; cursor: pointer; list-style: none;" href="./signup.php">Sign up</a></p>
            </form></div>
        </div>


    </body>
</html>