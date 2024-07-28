<?php

session_start();
include('../php/connect.php');

$hash = $_COOKIE['loged'];
$userinfo = mysqli_query($connect, "SELECT * FROM `accounts` WHERE `hash`= '$hash'");
$user = mysqli_fetch_all($userinfo);
$userid = $user[0][0];
$userlogin = $user[0][1];
$userbalance = $user[0][6];
$useravatar = $user[0][5];

$item_id = $_GET['id'];

$iteminfo = mysqli_query($connect, "SELECT * FROM `programs` WHERE `id`= '$item_id'");
$item = mysqli_fetch_all($iteminfo);

$basketinfo = mysqli_query($connect, "SELECT * FROM `basket` WHERE `userid`= '$userid' AND `itemid` = '$item_id'");
$basket = mysqli_fetch_all($basketinfo);

$libinfo = mysqli_query($connect, "SELECT * FROM `library` WHERE `userid`= '$userid' AND `itemid` = '$item_id'");
$lib = mysqli_fetch_all($libinfo);

$name = $item[0][1];
$price = $item[0][2];
$genre = $item[0][3];
$developer = $item[0][4];
$version = $item[0][5];
$system = $item[0][6];
$arch = $item[0][7];
$date = $item[0][8];
$about = $item[0][9];

$mincpu = $item[0][11];
$minram = $item[0][12];
$mingpu = $item[0][13];
$minsize = $item[0][14];
$link = $item[0][15];

$icon = $item[0][16];
$download = $item[0][17];

$screenone = $item[0][18];
$screentwo = $item[0][19];
$screenthree = $item[0][20];
$screenfour = $item[0][21];

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
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/item.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>
<body>
    

    <div id="content" class="content">

        <div class="navigation">

            <div class="logo">
                <div class="red"></div>
                <a href="/index.php">
                    <h1 class="logotype"><span style="background: #F24747; color: #EFEFEF;">Blue</span>Print.</h1>
                    <img src="/image/icon.png" alt="">
                </a>
            </div>

            <div class="menu">

            <a class="nolink" href="/php/programs.php">
                <div class="mbtn">
                    
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 13H4C3.73478 13 3.48043 13.1054 3.29289 13.2929C3.10536 13.4804 3 13.7348 3 14V20C3 20.2652 3.10536 20.5196 3.29289 20.7071C3.48043 20.8946 3.73478 21 4 21H10C10.2652 21 10.5196 20.8946 10.7071 20.7071C10.8946 20.5196 11 20.2652 11 20V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13ZM9 19H5V15H9V19ZM20 3H14C13.7348 3 13.4804 3.10536 13.2929 3.29289C13.1054 3.48043 13 3.73478 13 4V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11H20C20.2652 11 20.5196 10.8946 20.7071 10.7071C20.8946 10.5196 21 10.2652 21 10V4C21 3.73478 20.8946 3.48043 20.7071 3.29289C20.5196 3.10536 20.2652 3 20 3ZM19 9H15V5H19V9ZM20 16H18V14C18 13.7348 17.8946 13.4804 17.7071 13.2929C17.5196 13.1054 17.2652 13 17 13C16.7348 13 16.4804 13.1054 16.2929 13.2929C16.1054 13.4804 16 13.7348 16 14V16H14C13.7348 16 13.4804 16.1054 13.2929 16.2929C13.1054 16.4804 13 16.7348 13 17C13 17.2652 13.1054 17.5196 13.2929 17.7071C13.4804 17.8946 13.7348 18 14 18H16V20C16 20.2652 16.1054 20.5196 16.2929 20.7071C16.4804 20.8946 16.7348 21 17 21C17.2652 21 17.5196 20.8946 17.7071 20.7071C17.8946 20.5196 18 20.2652 18 20V18H20C20.2652 18 20.5196 17.8946 20.7071 17.7071C20.8946 17.5196 21 17.2652 21 17C21 16.7348 20.8946 16.4804 20.7071 16.2929C20.5196 16.1054 20.2652 16 20 16ZM10 3H4C3.73478 3 3.48043 3.10536 3.29289 3.29289C3.10536 3.48043 3 3.73478 3 4V10C3 10.2652 3.10536 10.5196 3.29289 10.7071C3.48043 10.8946 3.73478 11 4 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V4C11 3.73478 10.8946 3.48043 10.7071 3.29289C10.5196 3.10536 10.2652 3 10 3ZM9 9H5V5H9V9Z" fill="#2C2C2C" stroke="#2C2C2C" stroke-width="0.4"/>
                    </svg> 
                        
                    <p>Программы</p>

                </div>
            </a>

            <a href="/php/games.php">
                <div class="mbtn">
                    
                    <svg style="margin-top: 11px;" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.84072 12.4332C10.2964 12.4332 10.6658 12.7999 10.6658 13.2522V14.3284H11.7594C12.0736 14.2946 12.3797 14.442 12.5474 14.7079C12.7152 14.9738 12.7152 15.3115 12.5474 15.5775C12.3797 15.8434 12.0736 15.9908 11.7594 15.957H10.6658V17.0427C10.6606 17.4929 10.2942 17.8566 9.84072 17.8617C9.37923 17.8565 9.01566 17.4913 9.01569 17.0427V15.957H7.92204C7.60782 15.9908 7.30177 15.8434 7.134 15.5775C6.96624 15.3115 6.96624 14.9738 7.134 14.7079C7.30177 14.442 7.60782 14.2946 7.92204 14.3284H9.01569V13.2522L9.02322 13.1411C9.07785 12.7413 9.42304 12.4332 9.84072 12.4332ZM17.5154 16.4522C17.7493 16.2197 18.1006 16.1484 18.4076 16.2713C18.5062 16.3171 18.5969 16.3781 18.6762 16.4522C18.9916 16.7694 18.9893 17.2801 18.6712 17.5945C18.353 17.909 17.8387 17.909 17.5205 17.5945C17.2023 17.2801 17.2001 16.7694 17.5154 16.4522ZM15.9421 12.6427C16.1388 12.5623 16.3594 12.5623 16.5561 12.6427C16.6587 12.6865 16.7529 12.7477 16.8343 12.8236C16.9865 12.9756 17.0726 13.1808 17.0741 13.3951C17.0754 13.5025 17.0559 13.6092 17.0166 13.7094C16.9787 13.8117 16.9161 13.9033 16.8343 13.976C16.512 14.2808 16.0054 14.2808 15.6831 13.976C15.5228 13.8266 15.432 13.6181 15.432 13.3998C15.432 13.1816 15.5228 12.9731 15.6831 12.8236C15.7552 12.7454 15.8436 12.6837 15.9421 12.6427ZM23.8277 12.4755C23.6825 9.13992 20.8572 6.5865 17.4522 6.61034C17.0352 6.61684 16.7015 6.95809 16.7069 7.37625C16.7123 7.79225 17.0525 8.13459 17.4717 8.12159C20.1227 8.0685 22.2048 9.986 22.3164 12.5394C22.3218 12.6391 22.3229 12.7398 22.3197 12.859V17.5596C22.3478 18.7957 21.8917 19.9668 21.0381 20.8583C20.1844 21.7521 19.0339 22.258 17.7967 22.2851C17.696 22.2873 17.5942 22.2851 17.449 22.2808C14.4427 22.3317 11.4495 22.3317 8.50499 22.2818C5.93424 22.3923 3.79358 20.4109 3.68199 17.8651C3.67766 17.7633 3.67657 17.6614 3.67874 17.5433V12.8417C3.62349 10.2915 5.65257 8.1725 8.20491 8.11834C8.30457 8.11509 8.40641 8.11834 8.53858 8.12159H13.6162C14.0332 8.12159 14.3723 7.78359 14.3723 7.36542V6.3525C14.3507 4.78384 13.0647 3.51742 11.5058 3.51742H11.4842H10.4117H10.4052C10.2459 3.51742 10.0953 3.45567 9.98049 3.343C9.86349 3.23034 9.79849 3.07759 9.79741 2.91509C9.79308 2.50017 9.45508 2.1665 9.04233 2.1665H9.03366C8.61658 2.17084 8.28183 2.51317 8.28616 2.93025C8.29266 3.49575 8.51799 4.02659 8.92208 4.422C9.32724 4.82067 9.86024 5.00592 10.4203 5.02975H11.4896H11.5004C12.2414 5.02975 12.8513 5.62992 12.86 6.36117V6.61034L8.57108 6.61142C8.43566 6.606 8.30132 6.60384 8.16916 6.606C4.78699 6.67967 2.09382 9.492 2.16749 12.859V17.5282C2.16532 17.6614 2.16641 17.7947 2.17182 17.929C2.32024 21.309 5.18349 23.9578 8.52557 23.792C9.97833 23.818 11.4571 23.8299 12.9423 23.8299C14.4362 23.8299 15.9367 23.818 17.4295 23.7909C17.5649 23.7963 17.6992 23.7985 17.8325 23.7953C19.4705 23.7595 20.9969 23.0889 22.1301 21.9038C23.2632 20.7197 23.8677 19.1651 23.8309 17.5433V12.8774C23.8342 12.7442 23.8331 12.6098 23.8277 12.4755Z" fill="#2C2C2C" stroke="#2C2C2C"/>
                    </svg>
                           
                    <p>Игры</p>

                </div>
            </a>

            <a href="/php/plugins.php">
                <div class="mbtn">
                    
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 22.0002H5C4.20435 22.0002 3.44129 21.6841 2.87868 21.1215C2.31607 20.5589 2 19.7959 2 19.0002V9.00021C2 8.20456 2.31607 7.4415 2.87868 6.87889C3.44129 6.31628 4.20435 6.00021 5 6.00021H6C6.01682 5.15285 6.30235 4.33273 6.81541 3.65814C7.32848 2.98355 8.04255 2.48936 8.85464 2.24684C9.66673 2.00433 10.5349 2.02603 11.3338 2.30881C12.1328 2.59159 12.8213 3.12083 13.3 3.82021C13.7484 4.45936 13.9925 5.21947 14 6.00021H17C17.2652 6.00021 17.5196 6.10557 17.7071 6.2931C17.8946 6.48064 18 6.73499 18 7.00021V10.0002C18.8474 10.017 19.6675 10.3026 20.3421 10.8156C21.0167 11.3287 21.5109 12.0428 21.7534 12.8548C21.9959 13.6669 21.9742 14.5351 21.6914 15.334C21.4086 16.133 20.8794 16.8215 20.18 17.3002C19.5409 17.7487 18.7807 17.9927 18 18.0002V21.0002C18 21.2654 17.8946 21.5198 17.7071 21.7073C17.5196 21.8949 17.2652 22.0002 17 22.0002ZM5 8.00021C4.73478 8.00021 4.48043 8.10557 4.29289 8.2931C4.10536 8.48064 4 8.73499 4 9.00021V19.0002C4 19.2654 4.10536 19.5198 4.29289 19.7073C4.48043 19.8949 4.73478 20.0002 5 20.0002H16V16.8202C15.9991 16.6599 16.0368 16.5017 16.1099 16.359C16.183 16.2162 16.2894 16.0932 16.42 16.0002C16.5502 15.9073 16.7008 15.8471 16.8592 15.8245C17.0175 15.8018 17.179 15.8175 17.33 15.8702C17.615 15.9865 17.9254 16.0264 18.2305 15.9861C18.5357 15.9457 18.825 15.8265 19.07 15.6402C19.3139 15.4915 19.523 15.2923 19.6834 15.056C19.8439 14.8197 19.9518 14.5517 20 14.2702C20.0386 13.9863 20.0157 13.6974 19.9329 13.423C19.85 13.1487 19.7092 12.8954 19.52 12.6802C19.2641 12.3693 18.9155 12.1483 18.5252 12.0494C18.1349 11.9504 17.7231 11.9788 17.35 12.1302C17.199 12.1829 17.0375 12.1986 16.8792 12.176C16.7208 12.1533 16.5702 12.0931 16.44 12.0002C16.3094 11.9072 16.203 11.7842 16.1299 11.6415C16.0568 11.4987 16.0191 11.3406 16.02 11.1802V8.00021H12.82C12.6557 8.00952 12.4915 7.97812 12.3422 7.90879C12.1929 7.83946 12.0631 7.73434 11.9641 7.60277C11.8652 7.4712 11.8003 7.31724 11.7752 7.15456C11.75 6.99188 11.7654 6.82551 11.82 6.67021C11.9363 6.38522 11.9762 6.07483 11.9359 5.76969C11.8955 5.46455 11.7763 5.17521 11.59 4.93021C11.4424 4.67938 11.2402 4.46498 10.9984 4.3029C10.7566 4.14083 10.4815 4.03523 10.1934 3.99393C9.90527 3.95264 9.61155 3.9767 9.33399 4.06434C9.05644 4.15198 8.80216 4.30095 8.59 4.50021C8.39298 4.69562 8.23877 4.9299 8.1372 5.18814C8.03562 5.44638 7.9889 5.72293 8 6.00021C8.00232 6.22958 8.04637 6.45662 8.13 6.67021C8.18287 6.82143 8.19863 6.98313 8.17597 7.14171C8.1533 7.3003 8.09287 7.45111 7.99976 7.58147C7.90665 7.71182 7.78358 7.8179 7.64093 7.89077C7.49827 7.96364 7.34019 8.00117 7.18 8.00021H5Z" fill="#2C2C2C" stroke="#2C2C2C" stroke-width="0.4"/>
                    </svg>
                                
                    <p>Плагины</p>

                </div>
            </a>

            <a href="/php/articles.php">
                <div class="mbtn">
                    
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_226_365)">
                        <path d="M2.29102 5.5C2.29102 6.33 2.90518 7 3.66602 7H6.87435V17.5C6.87435 18.33 7.48852 19 8.24935 19C9.01018 19 9.62435 18.33 9.62435 17.5V7H12.8327C13.5935 7 14.2077 6.33 14.2077 5.5C14.2077 4.67 13.5935 4 12.8327 4H3.66602C2.90518 4 2.29102 4.67 2.29102 5.5ZM18.3327 9H12.8327C12.0718 9 11.4577 9.67 11.4577 10.5C11.4577 11.33 12.0718 12 12.8327 12H14.2077V17.5C14.2077 18.33 14.8218 19 15.5827 19C16.3435 19 16.9577 18.33 16.9577 17.5V12H18.3327C19.0935 12 19.7077 11.33 19.7077 10.5C19.7077 9.67 19.0935 9 18.3327 9Z" fill="#2C2C2C"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_226_365">
                        <rect width="22" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        
                        
                        
                        
                    <p>Статьи</p>

                </div>
            </a>

            <a href="/php/forum.php">
                <div class="mbtn">
                    
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_226_368)">
                        <path d="M16.666 4.99984H15.8327V11.6665C15.8327 12.1248 15.4577 12.4998 14.9993 12.4998H4.99935V13.3332C4.99935 14.2498 5.74935 14.9998 6.66602 14.9998H14.9993L18.3327 18.3332V6.6665C18.3327 5.74984 17.5827 4.99984 16.666 4.99984ZM14.166 9.1665V3.33317C14.166 2.4165 13.416 1.6665 12.4993 1.6665H3.33268C2.41602 1.6665 1.66602 2.4165 1.66602 3.33317V14.1665L4.99935 10.8332H12.4993C13.416 10.8332 14.166 10.0832 14.166 9.1665Z" fill="#2C2C2C"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_226_368">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        
                        
                        
                        
                    <p>Форум</p>

                </div>
            </a>

            <a href="/php/library.php">
                <div class="mbtn">
                    
                <svg style="padding-top: 4px" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_280_259)">
                <path d="M0 11.4286L9 13.7143L18 11.4286V13.7143L9 16L0 13.7143V11.4286ZM0 6.85714L9 9.14286L18 6.85714V9.14286L9 11.4286L0 9.14286V6.85714ZM0 2.28571L9 0L18 2.28571V4.57143L9 6.85714L0 4.57143V2.28571Z" fill="#2C2C2C"/>
                </g>
                <defs>
                <clipPath id="clip0_280_259">
                <rect width="18" height="16" fill="white"/>
                </clipPath>
                </defs>
                </svg>
                <p>Библиотека</p>

                </div>
            </a>

            </div>

            <p class="faaav" style="margin-top: 50px; font-size: 14px; color: #2C2C2C; font-weight: 500;">Избранное</p>

            <div class="fav">

                <a href="">
                    <div class="fitem">
                        <img src="blender.png" alt="">
                        <p>Blender</p>
                    </div>
                </a>

                
                
            </div>
            

        </div>

        <div class="main">

            <div class="header">

                <div class="search">

                    <form action="">
                        <input type="text" placeholder="Поиск">
                        <button><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.7043 16.2848L14.3054 12.8958C15.402 11.4988 15.9971 9.77351 15.9948 7.99743C15.9948 6.41569 15.5258 4.86947 14.647 3.5543C13.7683 2.23913 12.5192 1.21408 11.0579 0.608771C9.59657 0.00346513 7.98855 -0.15491 6.43721 0.153672C4.88586 0.462254 3.46085 1.22393 2.34239 2.34239C1.22393 3.46085 0.462254 4.88586 0.153672 6.43721C-0.15491 7.98855 0.00346513 9.59657 0.608771 11.0579C1.21408 12.5192 2.23913 13.7683 3.5543 14.647C4.86947 15.5258 6.41569 15.9948 7.99743 15.9948C9.77351 15.9971 11.4988 15.402 12.8958 14.3054L16.2848 17.7043C16.3777 17.798 16.4883 17.8724 16.6101 17.9231C16.7319 17.9739 16.8626 18 16.9945 18C17.1265 18 17.2572 17.9739 17.379 17.9231C17.5008 17.8724 17.6114 17.798 17.7043 17.7043C17.798 17.6114 17.8724 17.5008 17.9231 17.379C17.9739 17.2572 18 17.1265 18 16.9945C18 16.8626 17.9739 16.7319 17.9231 16.6101C17.8724 16.4883 17.798 16.3777 17.7043 16.2848ZM1.99936 7.99743C1.99936 6.81112 2.35114 5.65146 3.01022 4.66508C3.66929 3.6787 4.60606 2.90991 5.70207 2.45593C6.79807 2.00196 8.00408 1.88317 9.16759 2.11461C10.3311 2.34605 11.3999 2.91731 12.2387 3.75615C13.0775 4.595 13.6488 5.66375 13.8802 6.82726C14.1117 7.99077 13.9929 9.19678 13.5389 10.2928C13.0849 11.3888 12.3162 12.3256 11.3298 12.9846C10.3434 13.6437 9.18373 13.9955 7.99743 13.9955C6.40664 13.9955 4.88101 13.3636 3.75615 12.2387C2.6313 11.1138 1.99936 9.58821 1.99936 7.99743Z" fill="#2C2C2C"/>
                            </svg>
                        </button>
                    </form>

                </div>

                <div class="hbtns">

                    <a href="/php/notifications.php">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9147 22.8312C16.2384 22.5423 16.7351 22.5244 17.0807 22.8079C17.4608 23.1197 17.5141 23.6781 17.1997 24.0552C16.4246 25.0604 15.2255 25.655 13.9496 25.6668L13.6963 25.6562C12.5199 25.5708 11.4312 24.9907 10.7098 24.0552L10.6332 23.9482C10.4078 23.5786 10.4833 23.0914 10.8289 22.8079C11.209 22.4961 11.7721 22.5489 12.0865 22.926C12.2246 23.109 12.3884 23.2715 12.573 23.4084C13.0663 23.7727 13.6859 23.9266 14.2941 23.8361C14.9024 23.7455 15.449 23.4179 15.8127 22.926H15.8231L15.9147 22.8312ZM13.96 2.3335C17.5413 2.3335 21.5574 4.85879 22.0128 8.91364V11.0283C22.1683 11.7916 22.5255 12.5001 23.0479 13.0814C23.0788 13.1165 23.1065 13.1543 23.1307 13.1943C23.6043 13.9073 23.876 14.7334 23.9173 15.5862L23.8863 15.8017C23.9219 16.9688 23.5324 18.1095 22.7891 19.0148C21.8398 20.0391 20.5421 20.679 19.1457 20.8113C15.7059 21.1889 12.2347 21.1889 8.79497 20.8113C7.41895 20.67 6.14381 20.0304 5.21363 19.0148C4.45804 18.1224 4.05686 16.9872 4.08541 15.8223V15.6786C4.14232 14.8002 4.43539 13.9531 4.93417 13.2251L5.01697 13.1225C5.53569 12.5387 5.89239 11.8312 6.05204 11.0694V8.9547L6.10928 8.83657C6.2833 8.53665 6.62222 8.36124 6.97719 8.39965C7.37653 8.44285 7.69721 8.74596 7.7599 9.13948V11.2542C7.76393 11.2917 7.76393 11.3295 7.7599 11.3671C7.54438 12.4261 7.05177 13.4103 6.33151 14.2209C6.05413 14.6591 5.89713 15.1616 5.87608 15.6786V15.9044C5.8531 16.6315 6.0957 17.3424 6.55922 17.9062C7.20186 18.5645 8.06123 18.9724 8.98128 19.0559C12.3113 19.4152 15.6707 19.4152 19.0007 19.0559C19.9459 18.9699 20.8263 18.5424 21.4746 17.8548C21.9153 17.3043 22.1462 16.6173 22.1266 15.9147V15.6786C22.1054 15.1599 21.9523 14.6549 21.6816 14.2106C20.9313 13.4093 20.4097 12.4243 20.1704 11.3568C20.1663 11.3193 20.1663 11.2814 20.1704 11.2439V9.11895C19.8702 6.01879 16.7546 4.09915 14.0428 4.09915C12.8898 4.09652 11.7558 4.39006 10.7512 4.95118L10.6282 5.01226C10.3753 5.1144 10.0859 5.09646 9.84535 4.95783C9.56474 4.7961 9.39513 4.49571 9.40271 4.17392C9.41029 3.85212 9.59387 3.55993 9.88179 3.41137C11.1266 2.71391 12.5303 2.34293 13.96 2.3335Z" fill="#2C2C2C" stroke="#2C2C2C"/>
                        </svg>       
                    </a>

                    <a href="/php/basket.php">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.5213 22.6276L24.6164 4.32873C24.3579 2.70303 22.9758 1.52295 21.33 1.52295H6.67002C5.02423 1.52295 3.64206 2.70303 3.38357 4.32873L0.478666 22.6281C0.326136 23.5911 0.601717 24.5691 1.23491 25.3104C1.8681 26.0521 2.79055 26.4772 3.76554 26.4772H24.2345C25.2095 26.4772 26.1319 26.0521 26.7651 25.3104C27.3983 24.5691 27.6739 23.5911 27.5213 22.6276ZM24.769 23.6056C24.6903 23.6979 24.5164 23.8521 24.2345 23.8521H3.76553C3.48355 23.8521 3.30965 23.6979 3.23104 23.6056C3.15242 23.5138 3.02723 23.3176 3.07125 23.0395L5.97615 4.7406C6.03084 4.39709 6.32265 4.148 6.67001 4.148H21.33C21.6773 4.148 21.9691 4.39709 22.0238 4.7406L24.9287 23.0391C24.9728 23.3176 24.8476 23.5138 24.769 23.6056Z" fill="#2C2C2C"/>
                            <path d="M18.6152 5.61621C17.8902 5.61621 17.3027 6.20369 17.3027 6.92874V10.5724C17.3027 12.3933 15.821 13.8746 14 13.8746C12.179 13.8746 10.6973 12.3933 10.6973 10.5724V6.92874C10.6973 6.20369 10.1098 5.61621 9.38479 5.61621C8.65974 5.61621 8.07227 6.20369 8.07227 6.92874V10.5724C8.07227 13.8409 10.7315 16.4997 14 16.4997C17.2685 16.4997 19.9277 13.8409 19.9277 10.5724V6.92874C19.9277 6.20369 19.3403 5.61621 18.6152 5.61621Z" fill="#2C2C2C"/>
                        </svg>            
                    </a>

                    

                </div>

                <?php
                if($_COOKIE['loged'] == ''):
                ?>

                <a href="/php/auth.php">
                    <div class="gotoauth">
                        <p>Вход</p>
                    </div>
                </a>
                
                <?php
                else:
                ?>

                <div class="acc">

                    <div id="av" class="avatar" style="background: url(<?=$useravatar?>); background-size: 100%;">
                        <div id="avmenu" class="avatarmenu">
                            
                            <a href="/php/profile.php">
                                <div class="aitem">
                                    <p>Профиль</p>
                                </div>
                            </a>

                            <a href="/php/balance.php">
                                <div class="aitem">
                                    <p>Пополнить баланс</p>
                                </div>
                            </a>

                            <a href="/php/favorite.php">
                                <div class="aitem">
                                    <p>Избанное</p>
                                </div>
                            </a>

                            <a href="/php/exit.php">
                                <div class="aitem">
                                    <p>Выход</p>
                                </div>
                            </a>

                        </div>
                    </div>


                    <div class="info">
                        <p style="font-size: 18px; color: #2C2C2C; font-weight: 600;"><?=$userlogin?></p>
                        <p style="font-size: 12px; color: #666666; font-weight: 500;"><?=$userbalance?> RUB</p>
                    </div>
                            
                </div>
            
            <?php
                endif;
                ?>
            </div>

            <div class="iteminfo">

                <div class="logoitem">
                    <img src="<?=$icon?>" alt="">
                </div>

                <div class="itemname">
                    <h3><?=$name?></h3>
                    <p><?php
                    if ($price == 0) {
                        echo "Бесплатно";
                    } else {
                        echo $price . " RUB";
                    };
                    ?></p>
                </div>

            </div>

            <div class="gallerycont">

                    <div class="bannerselector">

                        <div class="select" id="select1">

                        </div>
                        <div class="space">

                        </div>
                        <div class="select" id="select2">

                        </div>
                        <div class="space">

                        </div>
                        <div class="select" id="select3">

                        </div>
                        <div class="space">

                        </div>
                        <div class="select" id="select4">

                        </div>


                    </div>

                    <img id="screenone" src="<?=$screenone?>" alt="">
                    <img id="screentwo" src="<?=$screentwo?>" alt="">
                    <img id="screenthree" src="<?=$screenthree?>" alt="">
                    <img id="screenfour" src="<?=$screenfour?>" alt="">

            </div>

            <div class="aboutitem">
                <div class="selectinfo">
                    <h4 id="aboutbtn" class="activesel" style="color: #2C2C2C">Описание</h4>
                    <h4 id="minbtn">Мин. Требования</h4>
                </div>
                <p id="about"><?=$about?></p>

                    <div id="min" class="minspec">

                        <div class="spec">
                            <h4>Процессор:</h4>
                            <h5 class="specp"><?=$mincpu?></h5>
                        </div>

                        <div class="spec">
                            <h4>ОЗУ:</h4>
                            <h5 class="specp"><?=$minram?> GB</h5>
                        </div>

                        <div class="spec">
                            <h4>Видеокарта:</h4>
                            <h5 class="specp"><?=$mingpu?></h5>
                        </div>

                        <div class="spec">
                            <h4>Место на диске:</h4>
                            <h5 class="specp"><?=$minsize?> GB</h5>
                        </div>
                    </div>

            </div>

            <div class="itemright">

            
                <div class="itemstats">

                    <p>Версия</p>
                    <h3><?=$version?></h3>

                    <p>Разработчик</p>
                    <h3><?=$developer?></h3>

                    <p>Совместимость</p>
                    <h3><?=$system?></h3>

                    <p>Архитектура</p>
                    <h3><?=$arch?></h3>

                    <p>Дата выхода</p>
                    <h3><?=$date?></h3>
                    
                    <?php
                    if($_COOKIE['loged'] == ''):

                    else:


                            if ($lib[0][0] > 1) {
                                echo '<button>В библиотеке</button>';
                            }   else {
                            if ($basket[0][0] > 1) {
                                echo '<button>В корзине</button>';
                            }   else {
                            if($price > 0){
                            echo '<form action="/code/addtobasket.php" method="post">
                                <input name="item" type="hidden" value="'.$item_id.'.">
                                <input name="user" type="hidden" value="'.$userid.'">
                                <input name="icon" type="hidden" value="'.$icon.'">
                                <input name="size" type="hidden" value="'.$minsize.'">
                                <input name="name" type="hidden" value="'.$name.'">
                                <input name="price" type="hidden" value="'.$price.'">
                                <button>Добавить в корзину</button>
                                </form>';
                            }   else {
                                echo '<form action="/code/free.php" method="post">
                                    <input name="item" type="hidden" value="'.$item_id.'.">
                                    <button>Добавить в библиотеку</button>
                                    </form>';
                            };
                            }
                            };

                            
                        

                            

                        

                        


                    ?>

                    
                    <?php
                    endif;
                    ?>
                </div>

                <?php
                if($_COOKIE['loged'] == ''):

                else:
                ?>

                <div class="favbtn">

                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.3327 2H7.66602C6.90353 2 6.17226 2.31607 5.63309 2.87868C5.09392 3.44129 4.79102 4.20435 4.79102 5V21C4.79035 21.1762 4.83432 21.3495 4.91846 21.5023C5.00261 21.655 5.12394 21.7819 5.27019 21.87C5.41587 21.9578 5.58113 22.004 5.74936 22.004C5.91758 22.004 6.08284 21.9578 6.22852 21.87L11.4994 18.69L16.7702 21.87C16.9162 21.9564 17.0815 22.0012 17.2494 22C17.4172 22.0012 17.5825 21.9564 17.7285 21.87C17.8748 21.7819 17.9961 21.655 18.0803 21.5023C18.1644 21.3495 18.2084 21.1762 18.2077 21V5C18.2077 4.20435 17.9048 3.44129 17.3656 2.87868C16.8265 2.31607 16.0952 2 15.3327 2ZM16.291 19.27L11.9785 16.67C11.8328 16.5822 11.6676 16.536 11.4994 16.536C11.3311 16.536 11.1659 16.5822 11.0202 16.67L6.70769 19.27V5C6.70769 4.73478 6.80866 4.48043 6.98838 4.29289C7.1681 4.10536 7.41186 4 7.66602 4H15.3327C15.5869 4 15.8306 4.10536 16.0103 4.29289C16.1901 4.48043 16.291 4.73478 16.291 5V19.27Z" fill="#2C2C2C"/>
                    </svg>

                    <h4>В избранное</h4>

                </div>

                <?php
                endif;
                ?>

                <p class="genremorep">Ещё из этой категории</p>

                <div class="genremore">

                    <?php

                    $itemgenre = mysqli_query($connect, "SELECT * FROM `programs` WHERE `genre`= '$genre' AND id != $item_id LIMIT 4");
                    $samegenres = mysqli_fetch_all($itemgenre);

                    foreach ($samegenres as $samegenre) {
                        echo '<a style="color: #2C2C2C" href="/php/itempageGames.php?id='.$samegenre[0].'">
                                <div class="genreitem">
                                    <img src="'.$samegenre[16].'" alt="">
                                    <h4>'.$samegenre[1].'</h4>
                                </div>
                            </a>';
                    }
                        
                    ?>
                    
                    
                    

                </div>

            </div>
            <h2>Комментарии</h2>

            <?php
            if($_COOKIE['loged'] == ''):
            else:
            ?>

            <div class="write">

                <form action="/code/writecom.php" method="post">
                    <textarea name="text" id="" placeholder="Ваш комментарий" maxlength="250"></textarea>
                    <input name="userid" type="hidden" value="<?=$userid?>">
                    <input name="itemname" type="hidden" value="<?=$name?>">
                    <input name="name" type="hidden" value="<?=$userlogin?>">
                    <input name="avatar" type="hidden" value="<?=$useravatar?>">
                    <button type="submit">Отправить</button>
                </form>

            </div>

            <?php
            endif;
            ?>

            <?php

            $commentsinfo = mysqli_query($connect, "SELECT * FROM `comments` WHERE `itemname`= '$name' ORDER BY `comments`.`id` DESC");
            $comments = mysqli_fetch_all($commentsinfo);

            foreach ($comments as $comment) {
                $requestavatar = mysqli_query($connect, "SELECT `avatar` FROM `accounts` WHERE `id`= '$comment[6]'");
                $requestavatar = mysqli_fetch_all($requestavatar);
                echo '<div class="comment">

                <div class="comprofile">

                    <div class="avatarcom">
                        <img src="'.$requestavatar[0][0].'" alt="">
                    </div>

                    <div class="profinfo">
                        <h3>'.$comment[2].'</h3>
                        <p>'.$comment[1].'</p>
                    </div>

                    <div class="likes">

                        <svg id="likebtn" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.8536 6.08298L14.4996 6.43598L14.1456 6.08198C12.9228 4.88149 11.2755 4.21241 9.56193 4.22028C7.84839 4.22816 6.20727 4.91235 4.9956 6.12402C3.78393 7.33569 3.09974 8.97681 3.09187 10.6903C3.08399 12.4039 3.75308 14.0512 4.95356 15.274L5.30756 15.628L14.4996 24.82L23.6916 15.628L24.0456 15.274C25.2365 14.0493 25.8975 12.4051 25.8855 10.6968C25.8735 8.98862 25.1896 7.35378 23.9816 6.14593C22.7736 4.93807 21.1387 4.25431 19.4305 4.24253C17.7223 4.23074 16.0781 4.8919 14.8536 6.08298Z" fill="#2C2C2C"/>
                        <path d="M14.8536 6.08298L14.4996 6.43598L14.1456 6.08198C12.9228 4.88149 11.2755 4.21241 9.56193 4.22028C7.84839 4.22816 6.20727 4.91235 4.9956 6.12402C3.78393 7.33569 3.09974 8.97681 3.09187 10.6903C3.08399 12.4039 3.75308 14.0512 4.95356 15.274L5.30756 15.628L14.4996 24.82L23.6916 15.628L24.0456 15.274C25.2365 14.0493 25.8975 12.4051 25.8855 10.6968C25.8735 8.98862 25.1896 7.35378 23.9816 6.14593C22.7736 4.93807 21.1387 4.25431 19.4305 4.24253C17.7223 4.23074 16.0781 4.8919 14.8536 6.08298Z" fill="#2C2C2C"/>
                        </svg>
                        
                        <p>'.$comment[5].'</p>

                    </div>

                    <div id="repbtn" class="moreprof">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_288_87)">
                        <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="#2C2C2C"/>
                        <path d="M12 7C13.1046 7 14 6.10457 14 5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5C10 6.10457 10.8954 7 12 7Z" fill="#2C2C2C"/>
                        <path d="M12 21C13.1046 21 14 20.1046 14 19C14 17.8954 13.1046 17 12 17C10.8954 17 10 17.8954 10 19C10 20.1046 10.8954 21 12 21Z" fill="#2C2C2C"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_288_87">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>

                        <div id="rep" class="report">
                            <p>Отправить жалобу</p>
                        </div>

                    </div>

                </div>

                <p class="comp">'.$comment[3].'</p>

            </div>';
            }

            ?>
            



            <div class="footer">

                <a href="/index.php">
                    <img src="/image/logo.png" alt="">
                </a>
                <div class="links">

                    <a href="/php/registration.php">
                        <div class="circ"></div>
                        <p>Регистрация</p>
                    </a>

                    <a href="/php/auth.php">
                        <div class="circ"></div>
                        <p>Авторизация</p>
                    </a>

                    <a href="/php/forgot.php">
                        <div class="circ"></div>
                        <p>Восстановление пароля</p>
                    </a>

                </div>

                <div class="links">

                    <a href="/php/goback.php">
                        <div class="circ"></div>
                        <p>Возврат магазина</p>
                    </a>

                    <a href="/php/politic.php">
                        <div class="circ"></div>
                        <p>Политика конфеденциальности</p>
                    </a>

                </div>


            </div>
            

        </div>

    </div>




</body>


    <script>
        let av = document.getElementById("av");
        let avmenu = document.getElementById("avmenu");
        

        av.onclick = function() {
            avmenu.style.display = "block";
            avmenu.style.opacity = 1;
            
        }

        
            document.onclick = function(e) {

                if (e.target != avmenu) {
                    if (e.target != av) {
                        avmenu.style.display = "none";
                    }
                }
            }
    </script>

    <script>
        let like = document.getElementById("likebtn");
        let flag = 0;
        like.onclick = function() {

            if(flag == 1) {
                like.classList.remove("liked");
                flag = 0;
            }   else {
                like.classList.add("liked");
                flag = 1;
            }

                   
        }
    </script>

    <script>
        let about = document.getElementById("about");
        let min = document.getElementById("min");
        let aboutbtn = document.getElementById("aboutbtn");
        let minbtn = document.getElementById("minbtn");

        minbtn.onclick = function() {
            about.style.display = "none";
            min.style.display = "block";
            minbtn.classList.add("activesel");
            aboutbtn.classList.remove("activesel");
            minbtn.style.color = "#2C2C2C";
            aboutbtn.style.color = "#666666";
        }
        aboutbtn.onclick = function() {
            about.style.display = "block";
            min.style.display = "none";
            minbtn.classList.remove("activesel");
            aboutbtn.classList.add("activesel");
            minbtn.style.color = "#666666";
            aboutbtn.style.color = "#2C2C2C";
        }


    </script>


    <script>

    let selector1 = document.getElementById("select1");
    let selector2 = document.getElementById("select2");
    let selector3 = document.getElementById("select3");
    let selector4 = document.getElementById("select4");

    let screenone = document.getElementById("screenone");
    let screentwo = document.getElementById("screentwo");
    let screenthree = document.getElementById("screenthree");
    let screenfour = document.getElementById("screenfour");


    selector1.onclick = function () {
        screenone.style.display = "block"
        screentwo.style.display = "none"
        screenthree.style.display = "none"
        screenfour.style.display = "none"


        selector1.style.background = "white"
        selector2.style.background = "rgba(255, 255, 255, 0.3)"
        selector3.style.background = "rgba(255, 255, 255, 0.3)"
        selector4.style.background = "rgba(255, 255, 255, 0.3)"

    }

    selector2.onclick = function () {
        screentwo.style.display = "block"
        screenone.style.display = "none"
        screenthree.style.display = "none"
        screenfour.style.display = "none"


        selector2.style.background = "white"
        selector1.style.background = "rgba(255, 255, 255, 0.3)"
        selector3.style.background = "rgba(255, 255, 255, 0.3)"
        selector4.style.background = "rgba(255, 255, 255, 0.3)"

    }

    selector3.onclick = function () {
        screenthree.style.display = "block"
        screenone.style.display = "none"
        screentwo.style.display = "none"
        screenfour.style.display = "none"


        selector3.style.background = "white"
        selector1.style.background = "rgba(255, 255, 255, 0.3)"
        selector2.style.background = "rgba(255, 255, 255, 0.3)"
        selector4.style.background = "rgba(255, 255, 255, 0.3)"

    }

    selector4.onclick = function () {
        screenfour.style.display = "block"
        screenone.style.display = "none"
        screentwo.style.display = "none"
        screenthree.style.display = "none"


        selector4.style.background = "white"
        selector1.style.background = "rgba(255, 255, 255, 0.3)"
        selector2.style.background = "rgba(255, 255, 255, 0.3)"
        selector3.style.background = "rgba(255, 255, 255, 0.3)"

    }



    </script>


</html>

