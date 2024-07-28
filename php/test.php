<pre>
    <?php

        include('../php/connect.php');
        $hash = $_COOKIE['loged'];
        $userinfo = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `hash`= '$hash'");
        $user = mysqli_fetch_all($userinfo);

        print_r($user);
    
    ?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="penis">
        <div class="pizda">
            
        </div>

        
    </div>
</body>
</html>