<html>
<?php
	include ("files/dbconfig.php");
?>
<head>

    <link rel="stylesheet" href="./css/index.css"/>
<script>
    const runthis = ()=>{
        let values = document.getElementById("search").value;
        alert(values);
    }
</script>
</head>
<body>
    <header>
            <img src="./images/logo.svg"/><span><p style="font-family: monospace; font-size:2em">ShoeStop</p></span>
                <input id="search" placeholder="Search the store"/>
                <button class="btn-action-search" onclick="runthis()"><img src="./images/search.svg"></button>

                
                <div class="dropdown">
                    <img src="./images/userlogo.svg" class="usericon"/>                    

                  <div class="dropdown-content">

                      <button class="dropdown-items"> <a href="./login.php" style="text-decoration:none;">Login</a></button>
                    <button class="dropdown-items">Signup</buton>
                  </div>
                    
                </div>
                  
                <img src="./images/cart.svg" class="carticon"/>
                    
                
                
           
       
    </header>
    <div class="first-section">
        <div class="desccontainer">
        <p class="heading">WALK THE TALK</p>
        <p class="minidesc">Get your favorite pair in exclusive price only at ShoeStop</p>
            <button class="btn-action">Shop Now</button>
        </div>
    </div>
    <h2 style="margin-top: 113px; text-align:center; font-size:2.2em; font-family:monospace "> Categories</h2>
    <div class="categories-container">
        <div id="casual" class="categories-items">
         <p class="categorydesc">Casual</p>
        </div>
        <div id="sports" class="categories-items">
            <p class="categorydesc">Sports</p>
           </div>
           <div id="formal" class="categories-items">
            <p class="categorydesc">formal</p>
           </div>
    </div>
</body>

</html>