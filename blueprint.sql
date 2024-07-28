-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2023 at 07:55 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blueprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `avatar` varchar(200) NOT NULL DEFAULT '/image/avatar.png',
  `balance` int(20) NOT NULL DEFAULT '0',
  `hash` varchar(100) NOT NULL,
  `role` int(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `login`, `mail`, `password`, `name`, `avatar`, `balance`, `hash`, `role`) VALUES
(18, 'd1shov', 'svenchik1337@gmail.com', '', 'МАРКЕР', '../uploads/168304706620230423_161038.jpg', 58699, '16833968182610318cefc0eb33d00d9c8a28d7d711', 1),
(23, 'yashinlf', 'den2003142017@mail.ru', '', '', '/image/avatar.png', 15000, '16806393740c91610b013f7d5cc255ae58ecbf0181', 0),
(24, 'maxim_2009', 'max@gmail.com', '', '', '../uploads/1683396900ability4.jpg', 250, '168339685756f974d8fbf68958e257a9782fdf6c1f', 0),
(25, 'bebrakiller', 'bebrik@mail.ru', '', '', '../uploads/1683396754E9TL3gnTRWY.jpg', 0, '1683396733463c5d5b0e969d0c3f02203be0b12347', 0),
(26, 'admin', 'admin@gmail.com', '', 'Марк', '../uploads/1683397060job_125232_1.jpg', 13980, '168339694522ea25e49c5bd158ca5c3f9540f685b7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `text`, `date`, `photo`) VALUES
(9, 'WARP - бесплатный VPN от Cloudflare', 'Это не реклама, а скорее помощь в решении проблем с загрузкой приложений, где заблокированы ВКонтакте, MediaFire, 1fichier и прочие сайты (файлообменники).\n<br>\nБез ограничений по трафику и скорости скачивания.\n<br>\nВажно понимать следующее\n<br>\n<br>\n- WARP не создан для доступа к заблокированным ресурсам (но, тем не менее, позволяет это сделать), он не скрывает ваш реальный IP-адрес.\n<br>\n- WARP создан для защиты вашей информации во время передачи данных по сети. Он защищает от утечки в публичных сетях, снифферов, отслеживания провайдером или рекламными сетями.\n<br>\n- В приложении нельзя самостоятельно выбирать сервер для подключения.', '06.05.23', '../articles/1683386939lid_image8743.jpg'),
(10, 'Инструкция по применению Adobe Zii', 'Adobe Zii Patcher - лучший инструмент от TNT team для активации любого продукта Adobe. К сожалению, патчер перестал обновляться в начале 2022 года.\r\n<br><br>\r\nСуществует два варианта для активации продуктов с помощью Adobe Zii. \r\n<br>\r\nДанный вариант служит для выборочной активации путём перетаскивания продукта в окно патчера. Рекомендуется использовать при наличии подписки на часть продуктов Adobe, а так-же при автономной установке, или установке продуктов с интервалами по дате обновления.\r\n<br>\r\nДанный вариант автоматически находит и активирует все продукты установленные в директорию по умолчанию. Рекомендуется использовать при наличии одного и более продуктов установленных одновременно, с полной совместимостью продукта / патчера.', '06.05.23', '../articles/1683387568adobe products padding right.png'),
(11, 'Как сбросить Mac до заводских настроек', 'Чтобы выполнить запуск из раздела восстановления macOS, сразу после включения компьютера Mac нажмите и удерживайте одно из следующих сочетаний клавиш.\r\n<br>\r\n Cmd (⌘) + R – Установка последней версии macOS, которая была установлена на данном компьютере Mac.\r\n<br>\r\n Cmd + Option (Alt) + R – Обновление до последней версии macOS, совместимой с данным компьютером Mac.\r\n<br>\r\nОбычный вариант переустановки сохранит на месте все пользовательские данные, обновив только ОС. Выбрав «Дисковую утилиту», вы можете полностью стереть загрузочный том. Если второй системой установлена Windows, раздел Boot Camp можно оставить без изменений.\r\n<br>\r\nВыберите загрузочный диск (обычно это Macintosh HD, который находится в самом верху слева) и нажмите на кнопку \"Стереть\" в верхней части экрана.', '06.05.23', '../articles/1683387756macos-big-sur-apple-layers-fluidic-colorful-wwdc-stock-2880x1800-1455.jpg'),
(12, 'Почему компьютер нужно перезагружать после установки обновлений', 'Программное обеспечение компьютера состоит из большого количества различных программ и файлов. Все они при этом взаимодействуют друг с другом. Но почему же после обновления ноутбук или настольный компьютер всегда надо перезагружать?\r\n<br>\r\nКогда на компьютере запущено программное обеспечение (ПО), то большая его часть загружается в память устройства. И если мы обновим программное обеспечение на жёстком диске или SSD, то из-за внесённых изменений ПО не сможет уже найти в памяти файлы, которые находились там минуту назад. Связано это с тем, что версия ПО в памяти будет несовместима с версией на жёстком диске или SSD. В результате компьютер даже может выйти из строя.\r\n<br>\r\nЧтобы этого не произошло, операционные системы обычно предлагают после установки больших обновлений ПО перезагружать компьютер. Так можно избежать появления ошибок при работе после обновления.', '06.05.23', '../articles/1683388010best_gaming_pc_primary.webp'),
(13, 'В какой системе игры работают лучше', 'В игре Call of Duty: Modern Warfare 2 (DX12) с ультра-пресетом в 1080p удалось в среднем получить 105 к/с (на Windows 10) и 104 к/с (на Windows 11), в очень редких событиях - 57 к/с в обоих случаях.\r\n<br>\r\nCyberpunk 2077 (DX12) шла на высоких настройках графики тоже в 1080p. Средняя производительность в этой игре находилась на уровне 100 к/с (W10) и 102 к/с (W11). В крайне редких событиях средняя частота кадров уже находилась на уровне 66 в обоих случаях.\r\n<br>\r\nRed Dead Redemption 2 (Vulkan) запускалась в Full HD с ультра-текстурами и высокими настройками графики. В среднем в игре удалось получить 115 к/с (с Windows 10) и 114 к/с (с Windows 11), а в очень редких событиях - 74 к/с и 49 к/с.\r\n<br>\r\n<br>\r\nВывод\r\n<br>\r\nКак видно из результатов тестирования, Windows 11 зачастую вовсе не помогает улучшить игровую производительность компьютера. По средней частоте кадров разница между W10 и W11 в пользу 10-версии равнялась 2% (192 к/с и 189 к/с соответственно).', '06.05.23', '../articles/1683388102istockphoto-1334436084-612x612.jpg'),
(14, 'MouthPad — компьютерная мышь у вас во рту', 'MouthPad предназначен для людей, которые не могут пользоваться руками, а также может быть использован «мультизадачными» людьми, которые хотят управлять устройством, используя руки для другой задачи.\r\n<br>\r\nMouthPad изготавливается по индивидуальному заказу в соответствии с ротовой полостью пользователя, используя 3D-сканирование внутренней части его рта. Устройство состоит из микропроцессора, батареи, модуля Bluetooth и гибкой печатной платы со встроенными датчиками давления, помещенных в 3D-печатный водонепроницаемый корпус из стоматологической смолы.\r\n<br>\r\nУстройство определяет положение и давление языка пользователя, преобразует данные в команды с помощью алгоритма машинного обучения и отправляет их на устройство, связанное с Bluetooth.\r\n<br>\r\nMouthPad совместим с операционными системами iOS, Android, Windows, Mac и Linux, а одной двухчасовой зарядки, как утверждается, хватит более чем на пять часов работы.\r\n<br>\r\nИнформация о цене и доступности пока не объявлена.', '06.05.23', '../articles/168338829002.jpg'),
(15, 'Как в Windows сделать невидимую папку', 'Первым делом вам нужно создать на рабочем столе компьютера с Windows новую папку. Далее нужно её переименовать и в процессе ввода нажать комбинацию ALT+255. В поле ввода после этого не должно быть никакого текста.\r\n<br>\r\nКликните правой кнопкой мыши по папке и перейдите в «Свойства». Затем во вкладке «Настройка» нажмите на «Сменить значок». Выбрать можно любой пустой значок (значок без значка).\r\n<br>\r\nПосле этого папку видно больше не будет. Правда, при выделении пространства на рабочем столе, где она расположена, она тоже будет выделяться. Кроме того, вашу папку всё-таки сможет обнаружить любой файловый менеджер.', '06.05.23', '../articles/16833883701738622204_0 5 1786 1010_1920x0_80_0_0_822911df1404f5b22ae7253d00085bc8.jpg'),
(16, 'Apple выпустит новый компьютер', 'Обозреватели гадают, что это могут быть или новая модификация компьютера Mac Pro, или устройство смешанной реальности Apple Reality Pro. При этом в коде iOS обнаружено упоминание двух версий ComputeModule — 13,1 и 13,3.\r\n<br>\r\nЕсли речь идёт об Apple Reality Pro, — это новое устройство для компании, но всё же предполагаемое. Если о компьютере Mac Pro, то вряд ли это будет привычная конфигурация. Скорее всего, в нём не будет ЦП Intel, а основана машина будет на платформе Apple Silicon.\r\n<br>\r\nПри этом речь может идти о принципиально новом устройстве от Apple, которое никогда не анонсировалось и о котором не было даже слухов.', '06.05.23', '../articles/16833884281200x800.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `userid`, `itemid`) VALUES
(9, 20, 11),
(10, 20, 9),
(11, 23, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Игры'),
(2, 'Программы'),
(3, 'Плагины');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `text` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `userid` int(11) NOT NULL,
  `itemname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `text`, `avatar`, `likes`, `userid`, `itemname`) VALUES
(17, '04.04.2023', 'yashinlf', 'fdsafdsafdsa', '/image/avatar.png', 0, 23, 'Forza Horizon 5'),
(18, '04.04.2023', 'yashinlf', 'авыфавыфавы', '/image/avatar.png', 0, 23, 'FLEXY'),
(19, '04.04.2023', 'yashinlf', 'чиво\r\n', '/image/avatar.png', 0, 23, 'Adobe Photoshop 2023'),
(20, '02.05.2023', 'd1shov', 'Очень хорошее приложение', '../uploads/168304706620230423_161038.jpg', 0, 18, 'Sony Vegas 18'),
(21, '02.05.2023', 'd1shov', 'Вчера шел за пивом, осталась сдача. Решил купить данную программу на последние деньги. По итогу зачал работать на фрилансе и стал миллионером. кайф', '../uploads/168304706620230423_161038.jpg', 0, 18, 'Adobe Illustrator 2023'),
(22, '02.05.2023', 'd1shov', 'Поиграл, кайфнул\r\n', '../uploads/168304706620230423_161038.jpg', 0, 18, 'GTA V');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `userid`, `item_id`) VALUES
(8, 18, 3),
(10, 18, 6),
(12, 18, 10),
(15, 26, 21);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `userlogin` varchar(11) NOT NULL,
  `header` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `answers` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `userid`, `userlogin`, `header`, `text`, `date`, `answers`) VALUES
(1, 26, 'admin', 'Не получается установить GTA V', 'Добрый день, такая проблема, не получается установить игру, выдает ошибку error_234. Кто нибудь знает способы решения данной ошибки?', '07.05.2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_answers`
--

CREATE TABLE `forum_answers` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `userid` int(11) NOT NULL,
  `answerid` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_answers`
--

INSERT INTO `forum_answers` (`id`, `text`, `userid`, `answerid`, `date`) VALUES
(1, 'Это ошибка поврежденного файла. Попробуйте по новой скачать игру и установить.', 18, 1, '2023-05-07 19:45:17'),
(2, 'Помогло, спасибо', 26, 1, '2023-05-07 22:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `itemid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `userid`, `itemid`) VALUES
(14, '18', 2),
(33, '18', 11),
(39, '21', 13),
(40, '21', 9),
(43, '18', 6),
(44, '22', 9),
(45, '22', 3),
(49, '18', 5),
(50, '18', 9),
(51, '18', 15),
(52, '18', 16),
(53, '18', 3),
(54, '18', 10),
(55, '18', 13),
(56, '25', 3),
(57, '26', 22);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `text`, `date`) VALUES
(1, 'Adobe стал дешевле!', 'Цена на все товары разработчика Adobe снижена до 30%. Акция будет действовать до 29 мая 2023. Приятных покупок!', '07.05.23');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `developer` varchar(20) NOT NULL,
  `version` varchar(20) NOT NULL,
  `system` varchar(40) NOT NULL,
  `architecture` varchar(20) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `date` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `minsystem` varchar(150) NOT NULL,
  `mincpu` varchar(150) NOT NULL,
  `minram` varchar(150) NOT NULL,
  `mingpu` varchar(150) NOT NULL,
  `minsize` varchar(150) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `icon` varchar(250) NOT NULL,
  `download` varchar(250) DEFAULT NULL,
  `screenshot1` varchar(250) NOT NULL,
  `screenshot2` varchar(250) NOT NULL,
  `screenshot3` varchar(250) NOT NULL,
  `screenshot4` varchar(250) NOT NULL,
  `rating` int(50) NOT NULL DEFAULT '0',
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `price`, `genre`, `developer`, `version`, `system`, `architecture`, `date`, `about`, `minsystem`, `mincpu`, `minram`, `mingpu`, `minsize`, `link`, `icon`, `download`, `screenshot1`, `screenshot2`, `screenshot3`, `screenshot4`, `rating`, `category`) VALUES
(2, 'Adobe Photoshop 2024', 3700, 'Фото-редактор', 'Adobe', '12.3.1', 'Windows 10, 11', 'x64, x86', '12 января 2023', 'Это новейшая версия фотошоп', '', 'Core i3 5300', '4', 'GTX 730', '9', 'adobe.photoshop', '../programs/Adobe Photoshop 2023/1677019750Adobe_Photoshop_CC_icon.svg.png', '../programs/Adobe Photoshop 2023/1677019750Форма титульного листа ВКР (ПКС, ОИБАС).docx', '../programs/Adobe Photoshop 2023/1677019750create-digital-painting_8.jpg.img.jpg', '../programs/Adobe Photoshop 2023/1677019750maxresdefault.jpg', '../programs/Adobe Photoshop 2023/1677019750try again.png', '../programs/Adobe Photoshop 2023/1677019750563192-adobe-photoshop.jpg', 4, 2),
(3, 'Sony Vegas 18', 0, 'Видео-редактор', 'MAGIX', '18.1.4', 'Windows 10, 11', 'x64, x86', '5 февраля 2023', 'Vegas — семейство профессиональных программ для многодорожечной записи, редактирования и монтажа видео- и аудиопотоков от компаний MAGIX и Sony.', '', 'Core i5 6500', '4', 'GTX 770', '12', 'https://www.vegascreativesoftware.com/ru/vegas-pro/', '../programs/Sony Vegas 18/1677046178Vegas_Pr.png', '../programs/Sony Vegas 18/1677046178achievements.xlsx', '../programs/Sony Vegas 18/1677046178sony-vegas-pro-big-2.jpg', '../programs/Sony Vegas 18/1677046178vegas-pro-edit-audio-int.webp', '../programs/Sony Vegas 18/1677046178sony-vegas-1280-5.jpg', '../programs/Sony Vegas 18/167704617820127556.png', 9, 2),
(6, 'Adobe Illustrator 2023', 3200, 'Фото-редактор', 'Adobe', '27.0.0', 'Windows 10, 11', 'x64, x86', '22 января 2023', 'Создавайте векторную графику в программе, которую используют профессионалы. Оцените все возможности: от веб- и мобильной графики до логотипов, значков, иллюстраций, дизайна упаковки и рекламных щитов. Наслаждайтесь свободой творчества с Illustrator.', '', 'Core i3 3100', '2', 'GTX 730', '13', 'adobe', '../programs/Adobe Illustrator 2023/1677151398Adobe_Illustrator_CC_icon.svg.png', '../programs/Adobe Illustrator 2023/1677151398Itogovye otmetki 3ISIP-419 Ivanov Mark Denisovich.xlsx', '../programs/Adobe Illustrator 2023/1677151398que-es-adobe-illustrator.gif', '../programs/Adobe Illustrator 2023/1677151398maxresdefault (2).jpg', '../programs/Adobe Illustrator 2023/1677151398Adobe_Illustrator_cours_cover_1920-935x590.jpg', '../programs/Adobe Illustrator 2023/1677151398maxresdefault (1).jpg', 1, 2),
(8, 'Capture One 23 Pro', 800, 'Фото-редактор', 'Phase One', '16.1.0.126', 'Windows 10, 11', 'x64, x86', '12 ноября 2022', 'Capture One, спроектированный с самыми взыскательными фотографами мира, является выбором профессионалов в области программного обеспечения для обработки изображений с поддержкой более 500 камер.', '', 'Core i3 3200', '2', 'GTX 730', '8', 'none', '../programs/Capture One 23 Pro/1677183592gdfgdf.png', '../programs/Capture One 23 Pro/1677183592gdfgfd.docx', '../programs/Capture One 23 Pro/1677183592gdfgdf.jpg', '../programs/Capture One 23 Pro/1677183592gdfgfd.jpg', '../programs/Capture One 23 Pro/1677183592gdfgd.png', '../programs/Capture One 23 Pro/1677183592scren1.webp', 1, 2),
(9, 'FL Studio 20', 4100, 'Музыка', 'Image Line', '20.8.3', 'Windows 7, 8, 10, 11', 'x64, x86', '12 апреля 2020', 'Image Line FL Studio 20 Producer Edition – это полнофункциональный DAW для создания музыки, наполненный VST-плагинами и инструментами, чтобы пробудить в вас творческий потенциал.', '', 'Core i3 2100', '2', 'GTX 730', '3', 'none', '../programs/FL Studio 20/1677183833unnamed.png', '../programs/FL Studio 20/1677183833gdfgfd.docx', '../programs/FL Studio 20/16771838336f741af3-937d-44cc-8b4c-3c93b5061e9e.avif', '../programs/FL Studio 20/16771838331549055138.png', '../programs/FL Studio 20/1677183833ImageLineFLStudio_01-7UzI.5_oP3D6.40iUCHMfKkFrP8_BNfp.jpg', '../programs/FL Studio 20/1677183833screenshot-fl-studio-15211.webp', 4, 2),
(10, 'Adobe Premiere Pro 2022', 3200, 'Видео-редактор', 'Adobe', '22.6.2', 'Windows 10, 11', 'x64, x86', '13 декабря 2022', 'Является ведущим в отрасли приложением для редактирования видео с надежной поддержкой формата, эффективными технологическими процессами и звуковыми инструментами для творчества.', '', 'Core i5 4600', '4', 'GTX 960', '8', 'none', '../programs/Adobe Premiere Pro 2022/1677230887Adobe_Premiere_Pro_CC_icon.svg.png', '../programs/Adobe Premiere Pro 2022/16772308871677183833gdfgfd.docx', '../programs/Adobe Premiere Pro 2022/167723088775cb07d50eb4e6239f59110dbaa98256.png', '../programs/Adobe Premiere Pro 2022/1677230887AdobePremierePro230.jpg', '../programs/Adobe Premiere Pro 2022/1677230887ngGZazrbjsMZ8WYHaVCJmY.jpg', '../programs/Adobe Premiere Pro 2022/1677230887Pr_Essentials-workspace.jpg.img.jpg', 2, 2),
(11, 'Adobe After Effects 2022', 2700, 'Видео-редактор', 'Adobe', '22.6', 'Windows 10, 11', 'x64, x86', '25 апреля 2022', 'Отраслевой стандарт анимированной графики и визуальных эффектов. Используется моушн-дизайнерами, графическими дизайнерами и видеоредакторами для создания сложной анимированной графики и визуально привлекательных видео.', '', 'Core i5 5500', '4', 'GTX 970', '14', 'none', '../programs/Adobe After Effects 2022/1677231065Adobe_After_Effects_CC_icon.svg.png', '../programs/Adobe After Effects 2022/1677231065gdfgfd.docx', '../programs/Adobe After Effects 2022/1677231065after-effects-interface.jpg', '../programs/Adobe After Effects 2022/1677231065maxresdefault-10.webp', '../programs/Adobe After Effects 2022/1677231065328455745532654298984579382.jpg', '../programs/Adobe After Effects 2022/1677231065C5UkjdbEH69RvMHznMwnfH.jpg', 0, 2),
(12, 'Ableton Live 11', 4300, 'Музыка', 'Ableton', '11.2.10', 'Windows 10, 11', 'x64, x86', '14 ноября 2018', 'Ableton Live позволяет вам легко создавать, производить и исполнять музыку в одном интуитивно понятном интерфейсе.', '', 'Core i5 2100', '4', 'GTX 730', '23', 'none', '../programs/Ableton Live 11/16772314631614053846_ableton-live-11.png', '../programs/Ableton Live 11/1677231463', '../programs/Ableton Live 11/1677231463ableton-live-11-suite-shop-6.jpg', '../programs/Ableton Live 11/1677231463ableton-live-11-1.jpg', '../programs/Ableton Live 11/1677231463op4E6AdXrPxAfCfiH8c8E6-1200-80.jpg', '../programs/Ableton Live 11/1677231463ableton-live-11-suite-shop-8.jpg', 1, 2),
(13, 'PCDJ DEX PRO', 1200, 'Музыка', 'Digital 1 Audio', '3.20.0', 'Windows 10, 11', 'x64, x86', '12 мая 2016', 'DEX 3 - это профессиональное программное обеспечение для ди-джеев для MAC и Windows, которое позволяет вам выйти далеко за рамки простого диджеинга. ', '', 'Core i3 5300', '2', 'GTX 730', '15', 'none', '../programs/PCDJ DEX PRO/1677231650DEXlogo-300x300.png', '../programs/PCDJ DEX PRO/1677231650achievements.xlsx', '../programs/PCDJ DEX PRO/1677231650dex3-1920x1080-video-mainimage-dex3page-1030x579.jpg', '../programs/PCDJ DEX PRO/1677231650pcdj-dex-pro-dj-software.jpg', '../programs/PCDJ DEX PRO/16772316501628078573_3.jpg', '../programs/PCDJ DEX PRO/1677231650PCDJ-DEX-2.0-DJ-and-Karaoke-Software.webp', 3, 3),
(14, 'Forza Horizon 5', 4499, 'Гонки', 'Playground Games', '5', 'Windows, Xbox One, Xbox Series X/S', 'x64, x86', '9 ноября 2021 года', 'Forza Horizon 5 — компьютерная игра 2021 года в жанре аркадного гоночного симулятора, разработанная Playground Games и изданная Xbox Game Studios. Игра была анонсирована в июне 2021 года на мероприятии E3 2021.', 'Windows 10\r\n', ' Intel Core i5-4460 или AMD Ryzen 3 1200', ' 8 ', 'NVIDIA GeForce GTX 970 или AMD Radeon RX 470', '110 ', 'none', '\\games\\Forza Horizon 5\\icon.png\"', '\\games\\Forza Horizon 5\\пр работа.docx\"', '\\games\\Forza Horizon 5\\screenshot2.jpg\"', '\\games\\Forza Horizon 5\\screenshot1.webp\"', '\\games\\Forza Horizon 5\\screenshot3.jpg\"', '\\games\\Forza Horizon 5\\screenshot4.jpg\"', 5, 1),
(15, 'GTA V', 1600, 'Экшен', ' Rockstar Games', '5', 'Windows', 'x64, x86', '14 апреля 2015', 'Действие игры происходит в вымышленном штате Сан-Андреас, прообразом которого послужила Южная Калифорния. Сюжет в однопользовательском режиме строится вокруг приключений троих грабителей, устраивающих всё более дерзкие ограбления и противостоящих как организованной преступности, так и правоохранительным ведомствам. В процессе игры игрок управляет выбранным персонажем в режиме от первого или от третьего лица; персонаж может свободно передвигаться по обширному миру игры как пешком, так и на автомобилях и других видах транспорта.Особенностью Grand Theft Auto V по сравнению с другими играми серии является возможность переключаться между персонажами в любой момент, как во время выполнения заданий, так и вне их.', 'Windows Vista', 'Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 ядра) / AMD Phenom 9850 Quad-Core Processor (4 ядра) @ 2.5GHz', '4 ', 'NVIDIA 9800 GT 1GB / AMD HD 4870 1GB DirectX 10/10.1/11', '72', 'none', '\\games\\GTA V\\icon.jpeg\"', '\\games\\GTA V\\пр работа.docx\"', '\\games\\GTA V\\gtav02272015_3.jpg\"', '\\games\\GTA V\\i.webp\"', '\\games\\GTA V\\screenshot2.jpg\"', '\\games\\GTA V\\grand-theft-auto-v-mods-cars-c6-2560x1700.jpg\"', 6, 1),
(16, 'Far Cry 5', 2000, 'Шутер', ' Ubisoft', '5', 'Windows', 'x64 x86', '27 марта 2018 года', 'Far Cry 5 — компьютерная игра в жанре шутера от первого лица и action-adventure, разработанная студией Ubisoft Montreal и изданная компанией Ubisoft. Является пятой основной игрой из одноимённой серии игр. Действие игры происходит в округе Хоуп, штат Монтана, и повествует о противостоянии помощника шерифа и культа Судного дня под названием «Врата Эдема».', 'Windows 7 SP1, Windows 8.1, Windows 10 (только 64-бит);', 'Intel Core i5-2400 3,1 ГГц или AMD FX-6300 3,5 ГГц;', '8', 'NVIDIA GeForce GTX 670 или AMD R9 270', '40', 'none', '\\games\\Far Cry 5\\icon.png\"', '\\games\\Far Cry 5\\пр работа.docx\"', '\\games\\Far Cry 5\\_PFeUMZluMx-VbaCZcbNrg.jpeg\"', '\\games\\Far Cry 5\\94e49064313911.5ace3a3224513.jpg\"', '\\games\\Far Cry 5\\ss_d578dc6a657d7aa5530e59e88705794696e92102.1920x1080.jpg\"', '\\games\\Far Cry 5\\cd8dbf-13.webp\"', 5, 1),
(17, 'Need for Speed Payback', 3500, 'Гонки', ' EA', 'Payback', 'Windows', 'x64 x86', '0 ноября 2017', 'Need for Speed: Payback представляет собой аркадную гоночную игру, выполненную в трёхмерной графике и сосредоточенную на уличных гонках. Действие происходит в городе Фортуна-Вэлли, по которому предоставлена свобода передвижения, а также имеется смена времени суток. В игре действует система трофеев и достижений[4].\r\n\r\nКатаясь по городу, можно найти пиктограммы соревнований разных типов, таких как обычная гонка, гонка внедорожников, дрифтинг, дрэг, криминальные задания и другие. В гонках можно выиграть наличные деньги и новые машины. В игре присутствует десять уличных лиг, в каждой из которых предоставлены свои гонки, задания и участники. После прохождения всех гонок и заданий в каждой лиге открывается соревнование с боссом, который является главарём лиги. Во время некоторых гонок, заданий или при попадании на приманки в виде запчастей для автомобилей и прочих вещей в городе за игроком пускается в погоню полиция. По мере прохождения игры все более быстрые и мощные автомобили будут использовать полицейские, включая фургоны-«носороги», которые сбивают с пути машину нарушителя с помощью лобового столкновения, и вертолёт, следящий за ходом погони и использующий дистанционное устройство, останавливающее двигатель нарушителя. Для ухода от погони необходимо проехать заранее определенный маршрут, по окончании которого копы отстают сами. В городе присутствуют и «события» для лихачей — промчавшись через обозначенный на карте старт, игрок должен проезжать контрольные точки, чтобы установить как можно более высокую среднюю скорость. Помимо этого, по всему городу расположены радары, мимо которых предлагается проехать с как можно более высокой скоростью.', '64-разрядная система Windows версии 7 или выше', 'ntel i3 6300 3,8 ГГц или AMD FX 8150 3,6 ГГц с 4 аппаратными потоками', '6', 'NVIDIA GeForce® GTX 750 Ti или AMD Radeon™ HD 7850 ', '30', 'none', '\\games\\Need For Speed\\icon.png\"', '\\games\\Need For Speed\\пр работа.docx\"', '\\games\\Need For Speed\\00813796c2247a2b58606aeb907451d7.jpg\"', '\\games\\Need For Speed\\image (1).jpg\"', '\\games\\Need For Speed\\image.jpg\"', '\\games\\Need For Speed\\086.jpg\"', 0, 1),
(18, 'Dota 2', 0, 'MOBA', 'Valve', '2', 'Windows, Linux, MacOS', 'x64, x86', '2013', 'Многопользовательская командная компьютерная игра в жанре MOBA, разработанная и изданная корпорацией Valve. Игра является продолжением DotA - пользовательской карты-модификации для игры Warcraft III: Reign of Chaos и дополнения к ней Warcraft III: The Frozen Throne. Игра изображает сражение на карте особого вида; в каждом матче участвуют две команды по пять игроков, управляющих разными «героями» - персонажами с различными наборами способностей и характеристиками. Для победы в матче команда должна уничтожить особый объект - «крепость», принадлежащий вражеской стороне, и защитить от уничтожения собственную «крепость». Dota 2 работает по модели free-to-play с элементами микроплатежей. ', 'Windows 7', 'Intel Pentium Dual-core, AMD 2.8 ГГц', '4', 'nVidia GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600', '15', '-', '\\games\\Dota2\\YbpYLgsoscMg15GxOK8TkPF4L2fQzzHcNHiDLpiou9YjXDWSTBBOYm2O2epHS3qtkv28LMds-tO8AkSJiXXnU2zR.jpg\"', '\\games\\Dota2\\пр работа.docx\"', '\\games\\Dota2\\a5e10917fdbda732208e19f6cdf0c7d0.jpeg\"', '\\games\\Dota2\\766fa16f0c1037d1b6643d813327da0d.jpg\"', '\\games\\Dota2\\dota-2-desktop-95lx18ugilnfw3vz.jpg\"', '\\games\\Dota2\\bfa01ce4fda0f10070b45622311419aa.jpg\"', 5, 1),
(19, 'League of Legends', 0, 'MOBA', 'Riot Games', '-', 'Windows, Android, IOS, MacOS', 'x64, x86', '2009', 'Многопользовательская компьютерная игра в жанре MOBA, разработанная и выпущенная американской компанией Riot Games в 2009 году для платформ Microsoft Windows и macOS. Игра была разработана по образу и подобию DotA - пользовательской карты для Warcraft III. Она распространяется бесплатно, по модели free-to-play; создатели игры получают доход за счёт продажи косметических предметов для персонажей.', 'Windows 7', 'процессор с частотой 3 ГГц (процессор SSE2 и выше)', '2', 'видеокарта с поддержкой шейдеров версии 2.0b', '12', '-', '\\games\\League of Legends\\BEFoeOcsfombCDWQ7YqqT18xoWbon29ML2KP1PlA5eR0UXr03hd6Ngi4bd3F1aDUGKUDcIZm.jpg\"', '\\games\\Dota2\\пр работа.docx\"', '\\games\\League of Legends\\cybere940219c6ad.jpg\"', '\\games\\Dota2\\766fa16f0c1037d1b6643d813327da0d.jpg\"', '\\games\\League of Legends\\fb4aca11-1b91-11ec-a919-02da6d1ffc43_screenshot.jpg\"', '\\games\\League of Legends\\85-851450_lunar-revel-2019-login-screen-league-of-legends.jpg\"', 5, 1),
(21, 'Cyberpunk 2077', 5800, 'Экшен', 'CD Projekt', '12.0.4', 'Windows 10, 11', 'x64, x86', '12.04.2022', 'Cyberpunk 2077 — компьютерная игра в жанре action-adventure в открытом мире, разработанная и изданная польской студией CD Projekt. Действие игры происходит в 2077 году в Найт-Сити, вымышленном североамериканском городе из вселенной Cyberpunk.', '', 'Core i5 7400', '8gb', 'gtx 1050Ti', '72', '', '../programs/Cyberpunk 2077/16833998607-1607541762-1961921767-lg_modland.webp', '../programs/Cyberpunk 2077/1683399860cyberpunk.txt', '../programs/Cyberpunk 2077/1683399860EGS_Cyberpunk2077_CDPROJEKTRED_S1_03_2560x1440-359e77d3cd0a40aebf3bbc130d14c5c7.jpg', '../programs/Cyberpunk 2077/1683399860screen-image-mercenary-e79283ec.jpg', '../programs/Cyberpunk 2077/1683399860cyberpunk-2077-data-reliza-i-vyhoda-predzakaz_16072904951866433154.jpg', '../programs/Cyberpunk 2077/1683399860cyberpunk-2077-confirmed-for-pc-ps4-and-xbox-one-optimization-from-the-start-2.jpg', 0, 1),
(22, 'Blender', 0, '3D-Графика', 'Тон Розендаль', ' 3.5.0-alpha', 'Windows 10, 11', 'x64, x86', '13 апреля 2012', 'Blender — профессиональное свободное и открытое программное обеспечение для создания трёхмерной компьютерной графики, включающее в себя средства моделирования, скульптинга, анимации, симуляции, рендеринга, постобработки и монтажа видео со звуком, компоновки с помощью «узлов», а также создания 2D-анимаций.', '', 'Core i3 4200', '4', 'GTX 730', '3', '', '../programs/Blender/1683486174Blender-icon.png', '../programs/Blender/1683486174blender.txt', '../programs/Blender/1683486174blender_render-1280x720.jpg', '../programs/Blender/1683486174Blender-обзор-3D-анимация.png', '../programs/Blender/1683486174Image-1024x593.jpg', '../programs/Blender/1683486174ss_bb251db2a92e1f05a01e0711df03034f9c39807c.1920x1080.jpg', 1, 2),
(23, 'NVIDIA RTX Voice', 900, 'Музыка', 'Nvidia', '1.0.5', 'Widnows 10, 11', 'x64, x86', '12 февраля 2023', 'NVIDIA RTX Voice – новый фирменный плагин от компании NVIDIA, который использует графические процессоры NVIDIA RTX и их возможности ИИ для удаления отвлекающего фонового шума из ваших трансляций, голосовых чатов и видеоконференций. Это позволяет пользователям “выходить в прямой эфир” или присоединяться к встрече, не беспокоясь о нежелательных звуках, таких как громкий набор текста на клавиатуре или другие окружающие шумы в шумной обстановке.', '', '', '', '', '', '', '../programs/NVIDIA RTX Voice/1683489179rtxvoice-icon.webp', '../programs/NVIDIA RTX Voice/1683489179maxrаываыesdefault.jpg', '../programs/NVIDIA RTX Voice/1683489179Slide3.jpg', '../programs/NVIDIA RTX Voice/1683489179Slide3.jpg', '../programs/NVIDIA RTX Voice/1683489179nvidia-rtx-voice-setup-ms-teams-002.jpg', '../programs/NVIDIA RTX Voice/1683489179Slide2.jpg', 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_answers`
--
ALTER TABLE `forum_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `innodb` (`userid`),
  ADD KEY `answerid` (`answerid`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_ibfk_8` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum_answers`
--
ALTER TABLE `forum_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_answers`
--
ALTER TABLE `forum_answers`
  ADD CONSTRAINT `forum_answers_ibfk_1` FOREIGN KEY (`answerid`) REFERENCES `forum` (`id`),
  ADD CONSTRAINT `innodb` FOREIGN KEY (`userid`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `result_ibfk_8` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
