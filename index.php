<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Хворь - бренд одежды</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Хворь</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'Scarf',
            'desc' => 'Теплый двусторонний шарф. Длина - 2 метра. Ширина - 30 сантиметров. Сделано в СГСА. ',
            'img' => '/images/goods/Kasiw.jpg',
            'price' => '40 $'
        ],
        [
            'id' => 2,
            'name' => 'Chain',
            'desc' => 'Серебрянная цепь, с логотипом. Масса = 40 гр',
            'img' => '/images/goods/psix.jpg',
            'price' => '25 $'
        ],
        [
            'id' => 3,
            'name' => 'Sporran',
            'desc' => 'Поясной рюкзак длиной 38 см, высотой 13 см и шириной 6-8 см.',
            'img' => '/images/goods/typeBag.jpg',
            'price' => '45 $'
        ],

    ];

    $page = $_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) { 
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
    }
?>

</div>

</head>
<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="check.php" method="post">
                    <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
                    <button class="btn btn-success">Зарегистрироваться</button><br>
                </form> 
            </div>
            
            <div class="col">
                <h1>Форма Авторегистрации</h1>
                <form action="auth.php" method="post">
                    <input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
                    <button class="btn btn-success">Авторизоваться</button><br>
                </form> 
            </div>

        </div>
    </div>
    
</body>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                xvor@yandex.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, Стромынка, д.20, кб 446
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Xvor</div>
    </div>
</footer>

    </body>

  
</html>