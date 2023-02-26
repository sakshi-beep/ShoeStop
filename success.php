<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,500;1,600&display=swap");

    * {
        font-family: "Poppins";
    }

    body {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    h1 {
        font-size: 42px;
        margin-top: 65px;
        /* margin: 10px 5px; */
    }

    p {
        font-size: 24px;
        margin: 0;
        text-align: center;
    }

    .modal {
        /* margin: 20% auto; */
        position: relative;
        border-radius: 10px;
        display: flex;
        align-items: center;
        padding: 30px;
        flex-direction: column;
        /* justify-content: center; */
        height: 338px;
        width: 380px;
        background-color: white;
    }

    img {
        height: 120px;
        width: 120px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: -80px;
    }

    button {
        position: absolute;
        bottom: 30px;
        font-size: 24px;
        font-weight: bold;
        width: 80%;
        color: white;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        background-color: #5DE248;
        padding: 0.9rem 1.2rem
    }
    </style>
</head>

<body style="background-color:grey;">


    <?php echo '<div class="modal">
        <img src="./images/green-circle.svg" />
        <h1>Thank You!</h1>
        <p>Your Payment was Successfull thank you for shopping with us.</p>
        <button onclick="redirect()">Ok</button>
    </div>';
    echo '<script>setTimeout(()=>{window.location.href="./index.php"},3000)</script>'
    ?>
    <script>
    function redirect() {
        window.location.href = "./index.php"
    }
    </script>
</body>

</html>