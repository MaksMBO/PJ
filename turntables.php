<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turntables</title>
    <link rel="stylesheet" href="bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="logo">
                <a href="#!" class="header__logo-link">
                    <img src="./img/svg/logo.svg" alt="Vinyl shop" class="header__logo-pic">
                </a>
            </div>

            <nav class="nav">
                <a href="lending.php" class="nav__link">Головна</a>
                <a href="turntables.php" class="nav__link active">Програвачі</a>
                <a href="records.php" class="nav__link">Платівки</a>
                <a href="#!" class="nav__link">Контакти</a>
            </nav>

            <div class="basket__logo">
                <img src="./img/svg/icon_basket.svg" alt="Basket" class="basket__logo-pic">

                <div class="price">
                    <a href="#!" class="basket-link">0.00 грн</a>
                    <img src="./img/svg/basket-polygon.svg" alt="Basket polygon" class="basket-polygon-pic">
                </div>
            </div>
        </div>
    </div>
</header>

<header class="header__mobile-head">
    <div class="header__mobile">
        <div class="container__mobile">
            <div class="new__logo">
                <a href="#!" class="new_header__logo-link">
                    <img src="./img/svg/картинки/new__logo.png" alt="Vinyl shop" class="new_header__logo-pic">
                </a>
            </div>

            <div class="all__head">
                <img src="./img/svg/картинки/etd.png" alt="etd" class="all__head-pic">
            </div>
        </div>
    </div>



    <div class="divvv">
        <input type="checkbox" class="etd-checkbox" id="mobile_etd" name="mobile_etd" value="yes">
        <label for="mobile_etd" class="label_etd">
            <img src="./img/svg/картинки/etd.png" alt="etd" class="all__head-pic">
        </label>
        <div class="header_list">
            <div class="a">
                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <a href="lending.php" class="nav__link">Головна</a>

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <a href="turntables.php" class="nav__link active">Програвачі</a>

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <a href="records.php" class="nav__link">Платівки</a>

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <a href="#!" class="nav__link">Контакти</a>

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <div class="basket__logo">
                    <img src="./img/svg/icon_basket.svg" alt="Basket" class="basket__logo-pic">

                    <div class="price">
                        <a href="#!" class="basket-link">0.00 грн</a>
                        <img src="./img/svg/basket-polygon.svg" alt="Basket polygon" class="basket-polygon-pic">
                    </div>
                </div>
                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
            </div>
        </div>
    </div>


</header>

<div class="intro__first_container">
    <div class="container">
        <h1 class="title__first_container">
            Програвачі вінілу
        </h1>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="button__helper">
            <div class="buttons__examination">
                <div class="second__button">
                    <input type="checkbox" class="brend_button-box" id="brend_button" name="brend_button" value="yes">
                    <label for="brend_button" class="label1">
                        Бренд <img src="./img/svg/details/Vector 1.svg" alt="arrow" class="image_arrow">
                    </label>

                    <br>
                    <div class="my__brend">
                        <div class="divs">
                            <input type="checkbox" id="ION">
                            <p>ION</p> <br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Audio-Technica">
                            <p>Audio-Technica</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Pro-Ject">
                            <p>Pro-Ject</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="TEAC">
                            <p>TEAC</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Klipsch">
                            <p>Klipsch</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Jamo">
                            <p>Jamo</p><br>
                        </div>
                    </div>
                </div>

                <div class="third__button">
                    <input type="checkbox" class="amount_button-box" id="amount_button" name="amount_button" value="yes" >
                    <label for="amount_button" class="label2">
                        Кількість <img src="./img/svg/details/Vector 1.svg" alt="arrow" class="image_arrow">
                    </label>

                    <br>
                    <div class="my__amount">
                        <div class="divs">
                            <input type="checkbox" id="1">
                            <p>1</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="2">
                            <p>2</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="3">
                            <p>3</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="4">
                            <p>4</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="5">
                            <p>5</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="10">
                            <p>10</p><br>
                        </div>
                    </div>
                </div>

                <div class="first__button">
                    <input type="checkbox" class="price_button-box" id="price_button" name="price_button" value="yes">
                    <label for="price_button" class="label3">
                        Ціна <img src="./img/svg/details/Vector 1.svg" alt="arrow" class="image_arrow">
                    </label>

                    <br>
                    <div class="my__price">
                        <div class="menu__price">

                            <input type="text" class="start">
                            <img src="./img/svg/details/Line 1.svg" alt="line">
                            <input type="text" class="end">
                            <button class="ok">ОК</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="search">
                <form class="my__search" method="get" action="turntables.php"  id="searchform">
                    <input type="search" name="search__turntables">
                    <img src="./img/svg/details/Search.svg" alt="search">
                </form>
            </div>
        </div>
    </div>





    <div class="button__helper_mobile">
        <div class="container">
            <div class="sub__header">
                <div class="menu">
                    <input type="checkbox" class="filter-checkbox" id="mobile_filter" name="mobile_filter" value="yes">
                    <label for="mobile_filter" class="label_filter">
                        <div class="icon__filter">
                            <div class="label__div">
                                <img src="./img/svg/icon/pngwing.com.png" alt="filter">
                                <p>Фільтри</p>
                            </div>

                            <div class="search">
                                <form class="my__search" method="get" action="turntables.php"  id="searchform">
                                    <input type="search" name="search__turntables">
                                    <img src="./img/svg/details/Search.svg" alt="search">
                                </form>
                            </div>
                        </div>
                    </label>

                    <div class="div">
                        <br>
                        <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>

                        <input type="checkbox" class="mobile_brend-checkbox" id="mobile_brend" name="mobile_brend" value="yes">
                        <label for="mobile_brend" class="label_brend">
                            <div class="clickss">
                                <p>Бренд</p>
                                <img src="./img/jpg/click.png" alt="click">
                                <img src="./img/jpg/click_active.png" alt="click_active">
                            </div>
                        </label>


                        <div class="brend"><br>
                            <div class="divs">
                                <input type="checkbox" id="ION">
                                <p>ION</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Audio-Technica">
                                <p>Audio-Technica</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Pro-Ject">
                                <p>Pro-Ject</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="TEAC">
                                <p>TEAC</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Klipsch">
                                <p>Klipsch</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Jamo">
                                <p>Jamo</p><br>
                            </div>
                        </div>

                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_amount-checkbox" id="mobile_amount" name="mobile_amount" value="yes">
                        <label for="mobile_amount" class="label_amount">
                            <div class="clickss">
                                <p>Кількість</p>
                                <img src="./img/jpg/click.png" alt="click">
                                <img src="./img/jpg/click_active.png" alt="click_active">
                            </div>
                        </label>


                        <div class="amount"><br>
                            <div class="divs">
                                <input type="checkbox" id="1">
                                <p>1</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="2">
                                <p>2</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="3">
                                <p>3</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="4">
                                <p>4</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="5">
                                <p>5</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="10">
                                <p>10</p><br>
                            </div>
                        </div>


                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>

                        <input type="checkbox" class="mobile_price-checkbox" id="mobile_price" name="mobile_price" value="yes">
                        <label for="mobile_price" class="label_price">
                            <div class="clickss">
                                <p>Ціна</p>
                                <img src="./img/jpg/click.png" alt="click">
                                <img src="./img/jpg/click_active.png" alt="click_active">
                            </div>

                        </label>


                        <div class="price"><br>
                            <div class="price_menu-mobile">
                                <input type="text" class="start">
                                <img src="./img/svg/details/Line 1.svg" alt="line">
                                <input type="text" class="end">
                                <button class="ok">ОК</button>
                            </div>
                        </div>

                        <hr width="100%" size="2" color="#AFAFAF" class="lines"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="turntable_section">
    <div class="container">
        <?php
        require "db.php";
        $turntables = get_singles_all();
        ?>
        
        <div class="row row-cols-3">

            <?php
            if(isset($_GET['search__turntables'])) {

                $db = get_db();
                $myGet = $_GET['search__turntables'];
                $ser = $db->query("SELECT * FROM `turntables`  WHERE `brend` LIKE '%$myGet%' OR `subText` LIKE '%$myGet%'");

                foreach ($ser as $turntable):?>
                    <div class="col">
                        <div class="about__item">
                            <div class="about__card-turntable">
                                <div class="images__turntable">
                                    <?php echo '<img src="data:image/png;base64,'
                                        . base64_encode($turntable['mainPhoto']) . '" alt="thorens" class="images " />'; ?>
                                </div>
                                <div class="items">
                                    <h4 class="manufacturer"><?php echo $turntable["brend"] ?></h4>
                                    <p class="information__about"><?php echo $turntable["subText"] ?></p>
                                </div>
                                <div class="section__price">
                                    <p class="price__number"><?php echo $turntable["price"] ?> грн</p>
                                    <div class="button_buy-pic">
                                        <button class="button__buy">
                                            <a href="information_page.php" class="section__purchase">
                                                Купити</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php
            }


            else {
                ?>
                <?php foreach ($turntables as $turntable):?>
                    <div class="col">
                        <div class="about__item">
                            <div class="about__card-turntable">
                                <div class="images__turntable">
                                    <?php echo '<img src="data:image/png;base64,'
                                        . base64_encode($turntable['mainPhoto']) . '" alt="thorens" class="images " />'; ?>
                                </div>
                                <div class="items">
                                    <h4 class="manufacturer"><?php echo $turntable["brend"] ?></h4>
                                    <p class="information__about"><?php echo $turntable["subText"] ?></p>
                                </div>
                                <div class="section__price">
                                    <p class="price__number"><?php echo $turntable["price"] ?> грн</p>
                                    <div class="button_buy-pic">
                                        <button class="button__buy">
                                            <a href="information_page.php" class="section__purchase">
                                                Купити</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php
            }
            ?>

<!--            <div class="col c2">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/2.jpg" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Technics</h4>-->
<!--                            <p class="information__about">SL-1210GREEK Black</p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">66 999 грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col c3">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/3.jpg" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Technics</h4>-->
<!--                            <p class="information__about">SL-1500CEE-S Silver</p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">39 999 грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col c4">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/4.webp" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Pro-Ject</h4>-->
<!--                            <p class="information__about">Jukebox S2 Walnut</p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">24 226грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col c5">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/5.webp" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Audio-Technica</h4>-->
<!--                            <p class="information__about">AT-LP60X USB Gun Metal-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">7 944грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col c6">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/6.webp" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Audio-Technica</h4>-->
<!--                            <p class="information__about">AT-LP120X USB Black-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">17 654грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col c7">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/7.webp" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Pro-Ject </h4>-->
<!--                            <p class="information__about">Debut Carbon EVO Satin Black-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">19 130грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col c8">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/8.webp" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Reloop</h4>-->
<!--                            <p class="information__about">Turn 2 Red-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">11 136грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col c9">-->
<!--                <div class="about__item">-->
<!--                    <div class="about__card-turntable">-->
<!--                        <div class="images__turntable">-->
<!--                            <img src="./img/jpg/проигрыватели/9.webp" alt="thorens" class="images">-->
<!--                        </div>-->
<!--                        <div class="items">-->
<!--                            <h4 class="manufacturer">Clearaudio</h4>-->
<!--                            <p class="information__about">Concept MC Dark Wood-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="section__price">-->
<!--                            <p class="price__number">73 080грн</p>-->
<!--                            <div class="button_buy-pic">-->
<!--                                <button class="button__buy">-->
<!--                                    <a href="information_page.php" class="section__purchase">-->
<!--                                        Купити</a>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="section__show_all">
                <button class="button__show_all">
                    <a href="#!" class="section__show_all">Завантажити ще</a>
                </button>
            </div>

        </div>
    </div>
</section>

<section class="turntables_text-first">
    <div class="first__text">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-5">
                    <div class="row justify-content-end">
                        <div class="col">
                            <h1 class="title-all">Hi-Fi и Hi-End вінілові програвачі</h1>
                            <div class="text">
                                <p class="sub_title-all">
                                    Найвищий рівень звуку. Візьміть максимум від вінілу!
                                </p>
                                <p class="sub_title-all">
                                    Історично існує кілька основних конструкцій вертушок для вінілу - з прямим, роликовим або пассіковим приводом диска (сьогодні по ряду причин поширені пассіковие), з різними типами тонарма і шасі. Всі вони по-своєму впливають на певні нюанси в звучанні вінілової платівки, хоча основні вимоги до якості відтворення завжди залишаються незмінними. У будь-якому випадку програвач вінілу необхідно вибирати тільки після уважного прослуховування в Hi-Fi-салоні.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="first__text-one">
    </div>
    <div class="first__text-two">
        <div class="container">
            <h1 class="title-all-mobile">Hi-Fi и Hi-End вінілові програвачі</h1>
            <p class="sub_title-all-mobile-first">
                Найвищий рівень звуку. Візьміть максимум від вінілу!
            </p>
            <p class="sub_title-all-mobile-second">
                Історично існує кілька основних конструкцій вертушок для вінілу - з прямим, роликовим або пассіковим приводом диска (сьогодні по ряду причин поширені пассіковие), з різними типами тонарма і шасі. Всі вони по-своєму впливають на певні нюанси в звучанні вінілової платівки, хоча основні вимоги до якості відтворення завжди залишаються незмінними. У будь-якому випадку програвач вінілу необхідно вибирати тільки після уважного прослуховування в Hi-Fi-салоні.
            </p>
        </div>
    </div>
</section>

<section class="text__second">
    <div class="second__text_turntables">
        <div class="container">
            <div class="width__second">
                <h1 class="title-all">Програвачі вінілових дисків</h1>
                <div class="text">
                    <p class="sub_title-all">
                        Вінілові програвачі, мабуть, є найбільш старими джерелами сигналу ери Hi-Fi, а на музиці з вінілових платівок виросло не одне покоління меломанів. Програвачі вінілу випускаються багатьма компаніями, серед яких є і гранди світової індустрії, і невеликі спеціалізовані компанії. На відміну від інших аудіопристроїв, програвали вінілових дисків є дуже "примхливими" у виготовленні з "механічною" точки зору.
                    </p>
                    <p class="sub_title-all">
                        Основні конструктивні вузли програвача, привід диска і тонарм з звукознімачем, повинні бути сконструйовані і виконані таким чином, щоб забезпечити стабільне зчитування звукової доріжки грамплатівки. Якщо в CD плеєрі нестабільність роботи сервомеханізму можна компенсувати за допомогою електронних систем корекції помилок, то в програвачі вінілових платівок помилки зчитування неминуче призведуть до артефактів - спотворень, перекоси тонального балансу, клацань або детонації звуку. Тому всі механічні вузли LP програвача повинні виготовлятися з максимально можливою точністю, а в процесі експлуатації програвач грамплатівок необхідно час від часу налаштовувати.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="second__text-one">
    </div>
    <div class="second__text-two">
        <div class="container">
            <h1 class="title-all-mobile">Програвачі вінілових дисків</h1>
            <p class="sub_title-all-mobile-first">
                Вінілові програвачі, мабуть, є найбільш старими джерелами сигналу ери Hi-Fi, а на музиці з вінілових платівок виросло не одне покоління меломанів. Програвачі вінілу випускаються багатьма компаніями, серед яких є і гранди світової індустрії, і невеликі спеціалізовані компанії. На відміну від інших аудіопристроїв, програвали вінілових дисків є дуже "примхливими" у виготовленні з "механічною" точки зору.
            </p>
            <p class="sub_title-all-mobile-second">
                Основні конструктивні вузли програвача, привід диска і тонарм з звукознімачем, повинні бути сконструйовані і виконані таким чином, щоб забезпечити стабільне зчитування звукової доріжки грамплатівки. Якщо в CD плеєрі нестабільність роботи сервомеханізму можна компенсувати за допомогою електронних систем корекції помилок, то в програвачі вінілових платівок помилки зчитування неминуче призведуть до артефактів - спотворень, перекоси тонального балансу, клацань або детонації звуку. Тому всі механічні вузли LP програвача повинні виготовлятися з максимально можливою точністю, а в процесі експлуатації програвач грамплатівок необхідно час від часу налаштовувати.
            </p>
        </div>

    </div>
</section>


<section class="section">
    <div class="contacts">
        <div class="container">
            <div class="contacts__information-block">
                <div class="about__company">
                    <h3 class="contacts__about">Про  нас</h3>

                    <div class="image__icons">
                        <a href="#!" class="contact__icon-link">
                            <img src="./img/svg/icon/Inst.svg" alt="inst">
                        </a>
                        <a href="#!" class="contact__icon-link">
                            <img src="./img/svg/icon/Telegram.svg" alt="Telegram">
                        </a>
                        <a href="#!" class="contact__icon-link">
                            <img src="./img/svg/icon/Meta.svg" alt="meta">
                        </a>
                    </div>

                    <div class="mobile_image__icons">
                        <a href="#!" class="mobile_contact__icon-link">
                            <img src="./img/svg/icon/mobile_inst.png" alt="mobile_inst">
                        </a>
                        <a href="#!" class="mobile_contact__icon-link">
                            <img src="./img/svg/icon/mobile_f.png" alt="mobile_meta">
                        </a>
                        <a href="#!" class="mobile_contact__icon-link">
                            <img src="./img/svg/icon/mobile_telega.png" alt="mobile_Telegram">
                        </a>
                    </div>

                    <p class="phone">+ 380973874924</p>
                </div>
                <div class="small__information">
                    <h1 class="contacts__topic">Інформація</h1>

                    <div class="about__contacts__topic">
                        <p class="about__topic">Доставка</p>
                        <p class="about__topic">Оплата</p>
                        <p class="about__topic">Обмін та повернення</p>
                    </div>
                </div>
                <div class="small__information">
                    <h1 class="contacts__topic">Бренди</h1>

                    <div class="about__contacts__topic">
                        <p class="about__topic">Crosley</p>
                        <p class="about__topic">ION</p>
                        <p class="about__topic">Audio-Technica</p>
                        <p class="about__topic">Pro-Ject</p>
                        <p class="about__topic">TEAC</p>
                        <p class="about__topic">Klipsch</p>
                        <p class="about__topic">Jamo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
