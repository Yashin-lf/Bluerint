<?php

if($_COOKIE['loged'] == ''):
    header('Location: /php/auth.php');
    else:

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BluePrint.</title>
    
    <link rel="shortcut icon" href="/image/icon.png" type="image/png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/authreg.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>
<body>
    

 

        <div class="infoform">

            <div class="logot">

                <a href="/index.php">
                    <div class="backk">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.2908 12.0002L14.8308 8.46019C15.017 8.27283 15.1216 8.01938 15.1216 7.75519C15.1216 7.49101 15.017 7.23756 14.8308 7.05019C14.7378 6.95646 14.6272 6.88207 14.5054 6.8313C14.3835 6.78053 14.2528 6.75439 14.1208 6.75439C13.9888 6.75439 13.8581 6.78053 13.7362 6.8313C13.6144 6.88207 13.5038 6.95646 13.4108 7.05019L9.1708 11.2902C9.07707 11.3832 9.00268 11.4938 8.95191 11.6156C8.90114 11.7375 8.875 11.8682 8.875 12.0002C8.875 12.1322 8.90114 12.2629 8.95191 12.3848C9.00268 12.5066 9.07707 12.6172 9.1708 12.7102L13.4108 17.0002C13.5042 17.0929 13.6151 17.1662 13.7369 17.216C13.8587 17.2657 13.9892 17.291 14.1208 17.2902C14.2524 17.291 14.3829 17.2657 14.5047 17.216C14.6265 17.1662 14.7374 17.0929 14.8308 17.0002C15.017 16.8128 15.1216 16.5594 15.1216 16.2952C15.1216 16.031 15.017 15.7776 14.8308 15.5902L11.2908 12.0002Z" fill="#2C2C2C"/>
                        </svg>
                        <p>На главную</p>

                    </div>
                </a>

                <a href="/index.php">
                    <img src="/image/logo.png" alt="">
                </a>

            </div>

                    <h2 style="color: #2C2C2C; padding-top: 40px">Пополнение баланса</h2>


            <form action="/code/addbalance.php" method="post">
                <input name="balance" style="margin-top: 40px" type="number" placeholder="Сумма пополнения (RUB)">
                <button>Пополнить</button>
            </form>

        </div>






</body>
</html>


<?php
endif;
?>