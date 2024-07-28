<?php
session_start();
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
    <link rel="stylesheet" href="/css/addprog.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


</head>

<body>




    <div class="infoform">

        <div class="logot">

            <a href="/php/contentmanager.php">
                <div class="backk">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.2908 12.0002L14.8308 8.46019C15.017 8.27283 15.1216 8.01938 15.1216 7.75519C15.1216 7.49101 15.017 7.23756 14.8308 7.05019C14.7378 6.95646 14.6272 6.88207 14.5054 6.8313C14.3835 6.78053 14.2528 6.75439 14.1208 6.75439C13.9888 6.75439 13.8581 6.78053 13.7362 6.8313C13.6144 6.88207 13.5038 6.95646 13.4108 7.05019L9.1708 11.2902C9.07707 11.3832 9.00268 11.4938 8.95191 11.6156C8.90114 11.7375 8.875 11.8682 8.875 12.0002C8.875 12.1322 8.90114 12.2629 8.95191 12.3848C9.00268 12.5066 9.07707 12.6172 9.1708 12.7102L13.4108 17.0002C13.5042 17.0929 13.6151 17.1662 13.7369 17.216C13.8587 17.2657 13.9892 17.291 14.1208 17.2902C14.2524 17.291 14.3829 17.2657 14.5047 17.216C14.6265 17.1662 14.7374 17.0929 14.8308 17.0002C15.017 16.8128 15.1216 16.5594 15.1216 16.2952C15.1216 16.031 15.017 15.7776 14.8308 15.5902L11.2908 12.0002Z"
                            fill="#2C2C2C" />
                    </svg>
                    <p style="padding-top:5px">Назад</p>

                </div>
            </a>

            <a href="/index.php">
                <img src="/image/logo.png" alt="">
            </a>

        </div>

        <div class="selectauth">

            <h3 style="color: #2C2C2C;">Добавляем приложение</h3>

        </div>

        

        <?php

        if (!isset($_GET['category'])) {
            echo '<form action="" method="get">

            <select name="category">
                <option value="">Категория</option>
                <option value="2">Приложение</option>
                <option value="1">Игра</option>
                <option value="3">Плагин</option>
            </select>

            <button>Далее</button>

        </form>';
        }   else {
            echo '<form action="/code/programs.php" method="post" enctype="multipart/form-data">

            <input name="name" style="margin-top: 40px" type="text" placeholder="Название">
            <input name="price" type="text" placeholder="Цена (RUB)">';

            if ($_GET['category'] == 1) {
                echo '<select name="genre" id="" placeholder="Жанр">
                <option value="Жанр">Жанр</option>
                <option value="Экшен">Экшен</option>
                <option value="Гонки">Гонки</option>
                <option value="Шутер">Шутер</option>
                <option value="MOBA">MOBA</option>
                </select>';
            }

            if ($_GET['category'] == 2) {
                echo '<select name="genre" id="" placeholder="Жанр">
                <option value="">Жанр</option>
                <option value="Фото-редактор">Фото-редактор</option>
                <option value="Видео-редактор">Видео-редактор</option>
                <option value="Музыка">Музыка</option>
                <option value="3D-Графика">3D-Графика</option>
                <option value="Социальные-сети">Социальные-сети</option>
                <option value="Утилиты">Утилиты</option>
                <option value="Бизнес">Бизнес</option>
                <option value="Производительность">Производительность</option>
                </select>';
            }

            if ($_GET['category'] == 3) {
                echo '<select name="genre" id="" placeholder="Жанр">
                <option value="">Жанр</option>
                <option value="Музыка">Музыка</option>
                <option value="3D-Графика">3D-Графика</option>
                <option value="Монтаж">Монтаж</option>
                <option value="Бизнес">Бизнес</option>
                </select>';
            }

            echo '

            <input name="developer" type="text" placeholder="Разработчик">
            <input name="version" type="text" placeholder="Версия">
            <input name="system" type="text" placeholder="Система">
            <input name="architecture" type="text" placeholder="Архетиктура">
            <input name="date" type="text" placeholder="Дата выхода">

            <textarea name="about" id="" placeholder="О товаре"></textarea>

            <input name="mincpu" type="text" placeholder="Мин. ЦП">
            <input name="minram" type="text" placeholder="Мин. ОЗУ">
            <input name="mingpu" type="text" placeholder="Мин. Видеокарта">
            <input name="minsize" type="text" placeholder="Мин. памяти (GB)">

            <input name="link" type="text" placeholder="Официальный сайт">

            <p>Иконка</p>
            <input style="margin-top:5px; padding-top: 10px; height: 40px" name="icon" type="file">

            <p>Файл загрузки</p>
            <input style="margin-top:5px; padding-top: 10px; height: 40px" name="download" type="file">

            <p>Скриншот №1</p>
            <input style="margin-top:5px; padding-top: 10px; height: 40px" name="screenone" type="file">

            <p>Скриншот №2</p>
            <input style="margin-top:5px; padding-top: 10px; height: 40px" name="screentwo" type="file">

            <p>Скриншот №3</p>
            <input style="margin-top:5px; padding-top: 10px; height: 40px" name="screenthree" type="file">

            <p>Скриншот №4</p>
            <input style="margin-top:5px; padding-top: 10px; height: 40px" name="screenfour" type="file">
            
            <input name="category" type="hidden" value="'.$_GET['category'].'">
            ';

            

            if ($_SESSION['alert']) {

                echo '
                <div class="alert">
                    <p>' . $_SESSION['alert'] . '</p>
                </div>
                ';
            }

            unset($_SESSION['alert']);

            echo '

            <button>Добавить</button>

            </form>';
        }

        ?>

        

    </div>






</body>

</html>