<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    footer {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-top: 30px;
        background-color: black;
        padding: 30px 0px;
    }

    .footer-container {
        display: flex;
        gap: 40px;
        justify-content: center;
        background-color: inherit;
        max-width: 1400px;
    }

    .copyright {
        background-color: inherit;
        color: white;
        margin: 0;
    }

    .personal-touch {
        font-size: 18px;
        color: white;
        margin: 0;
        margin-top: 5px;
    }

    .line {
        font-size: 28px;
        color: white;
        margin: 0;
    }

    @media (max-width:768px) {
        .footer-container {
            width: 100%;
            flex-direction: column;
            gap: 10px;
            align-items: center;
        }

        .copyright {
            font-size: 16px;
        }

        .personal-touch {
            font-size: 14px;
            border-top: 1px solid white;
        }
    }
    </style>
</head>

<footer>
    <div class="footer-container">
        <h3 class="copyright">Copyright © Step Up.</h3>
        <!-- <p class="line"> |</p> -->
        <p class="personal-touch"></p>
    </div>
</footer>

</html>