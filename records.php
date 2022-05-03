<?php require "db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
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
                <a href="turntables.php" class="nav__link">Програвачі</a>
                <a href="records.php" class="nav__link  active">Платівки</a>
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
                <a href="turntables.php" class="nav__link">Програвачі</a>

                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <a href="records.php" class="nav__link active">Платівки</a>

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

<div class="intro__second_container">
    <div class="container">
        <h1 class="title__second_container">
            Вінілові платівки
        </h1>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="button__helper">
            <div class="buttons__examination">
                <div class="second__button">
                    <input type="checkbox" class="genre_button-box" id="genre_button" name="genre_button" value="yes">
                    <label for="genre_button" class="label1">
                        Жанр <img src="./img/svg/details/Vector 1.svg" alt="arrow" class="image_arrow">
                    </label>

                    <br>
                    <div class="my__genre">
                        <div class="divs">
                            <input type="checkbox" id="Альтернативний рок">
                            <p>Альтернативний рок</p>    <br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Арт рок">
                            <p>Арт рок</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Блюз">
                            <p>Блюз</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Кантрі">
                            <p>Кантрі</p> <br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Фолк">
                            <p>Фолк</p> <br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Фанк">
                            <p>Фанк</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Гранж">
                            <p>Гранж</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Хип-хоп">
                            <p>Хип-хоп</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Поп">
                            <p>Поп</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Інді">
                            <p>Інді</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Джаз">
                            <p>Джаз</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Нью вейв">
                            <p>Нью вейв</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Метал">
                            <p>Метал</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Реггі">
                            <p>Реггі</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Електронна музика">
                            <p>Електронна музика</p><br>
                        </div>

                        <div class="divs">
                            <input type="checkbox" id="Саундтрек">
                            <p>Саундтрек</p><br>
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
                    <form class="my__search" method="get" action="records.php"  id="searchform">
                        <input type="search" name="search">
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
                                <form class="my__search"  method="get" action="records.php"  id="searchform">
                                    <input type="search" name="search">
                                    <img src="./img/svg/details/Search.svg" alt="search">
                                </form>
                            </div>
                        </div>
                    </label>

                    <div class="div">
                        <br>
                        <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>

                        <input type="checkbox" class="mobile_genre-checkbox" id="mobile_genre" name="mobile_genre" value="yes">
                        <label for="mobile_genre" class="label_genre">
                            <div class="clickss">
                                <p>Жанр</p>
                                <img src="./img/jpg/click.png" alt="click">
                                <img src="./img/jpg/click_active.png" alt="click_active">
                            </div>
                        </label>


                        <div class="genre"><br>
                            <div class="divs">
                                <input type="checkbox" id="Альтернативний рок">
                                <p>Альтернативний рок</p>    <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Арт рок">
                                <p>Арт рок</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Блюз">
                                <p>Блюз</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Кантрі">
                                <p>Кантрі</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Фолк">
                                <p>Фолк</p> <br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Фанк">
                                <p>Фанк</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Гранж">
                                <p>Гранж</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Хип-хоп">
                                <p>Хип-хоп</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Поп">
                                <p>Поп</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Інді">
                                <p>Інді</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Джаз">
                                <p>Джаз</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Нью вейв">
                                <p>Нью вейв</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Метал">
                                <p>Метал</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Реггі">
                                <p>Реггі</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Електронна музика">
                                <p>Електронна музика</p><br>
                            </div>

                            <div class="divs">
                                <input type="checkbox" id="Саундтрек">
                                <p>Саундтрек</p><br>
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

<section class="records_catalog">
    <div class="container">
        <div class="row row-cols-4">

            <div class="col c1">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/frank-sinatra-ultima 1.svg" alt="sinatra">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Frank Sinatra - Ultimate Christmas</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 650грн.</p>
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

            <div class="col c2">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/Nirvana.svg" alt="Nirvana">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Nirvana – Feels Like The First Time</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 899грн.</p>
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

            <div class="col c3">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/pink floyd.svg" alt="pink floyd">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Pink Floyd - The Dark Side Of The Moon</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 500грн.</p>
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

            <div class="col c4">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/tyler-the-creator-ig 1.svg" alt="tyler-the-creator">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Tyler, The Creator - Igor</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 350грн.</p>
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

            <div class="col c5">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/The Weeknd.svg" alt="The Weeknd">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">The Weeknd - Starboy</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 899грн.</p>
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

            <div class="col c6">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/zemfira-zemfira-vend 1.svg" alt="zemfira">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Земфира - Вендетта</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 950грн.</p>
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

            <div class="col c7">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/Adele.svg" alt="Adele">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Adele - 21</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 150грн.</p>
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

            <div class="col c8">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/svg/albums/three-days-grace-out 1.svg" alt="three-days-grace">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Three Days Grace - Outsider </p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 450грн.</p>
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

            <div class="col c9">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/9.jpg" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Soundtrack - Pulp Fiction [LP]</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 350грн.</p>
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

            <div class="col c10">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/10.webp" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Queen - Bohemian Rhapsody (OST) [2LP]</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 750грн.</p>
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

            <div class="col c11">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/11.webp" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Imagine Dragons - Evolve [LP]</p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 450грн.</p>
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

            <div class="col c12">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/12.webp" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">The Weeknd - After Hours [2LP]
                            </p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 750грн.</p>
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

            <div class="col c13">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/13.webp" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Joy Division – Unknown Pleasures [LP]
                            </p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 300грн.</p>
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

            <div class="col c14">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/14.webp" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Bob Marley - The Best Of Bob Marley [LP]
                            </p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 150грн.</p>
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

            <div class="col c15">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/15.webp" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Notorious B.I.G. - Born Again
                            </p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">1 300грн.</p>
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

            <div class="col c16">
                <div class="album__all">
                    <div class="about__albums__item">
                        <div class="images__albums">
                            <a href="information_page.php">
                                <img src="./img/jpg/альбом/16.webp" alt="three-days-grace" class="albums__cover-pic">
                            </a>
                        </div>

                        <div class="items">
                            <p class="information__about__albums">Ray Charles - 24 Greatest Hits [2LP]
                            </p>
                        </div>

                        <div class="section__price">
                            <p class="price__number">950грн.</p>
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

            <div class="section__show_all">
                <button class="button__show_all">
                    <a href="#!" class="section__show_all">Завантажити ще</a>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="first__second-block">
    <div class="first__text-second">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-5">
                    <div class="row justify-content-end">
                        <div class="col">
                            <h1 class="title-all">Магазин вінілових платівок</h1>
                            <div class="text">
                                <p class="sub_title-all">
                                    Запрошуємо в наш магазин вінілових пластинок. Якщо ви початківець меломан і вам до душі вініловий звук, якщо ви досвідчений аудіофіл і любитель перевірених часом вінілових записів, якщо ви колекціонер раритетних вінілових платівок або шукаєте оригінальний подарунок - в будь-якому випадку, серед більш ніж 5 000 пластинок, які ми пропонуємо до продажу, ви зможете підшукати що-небудь в нашому магазині вінілових платівок.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="first_photo">
    </div>
    <div class="first_text">
        <div class="container">
            <h1 class="title-all">Магазин вінілових платівок</h1>
            <div class="text">
                <p class="sub_title-all">
                    Запрошуємо в наш магазин вінілових пластинок. Якщо ви початківець меломан і вам до душі вініловий звук, якщо ви досвідчений аудіофіл і любитель перевірених часом вінілових записів, якщо ви колекціонер раритетних вінілових платівок або шукаєте оригінальний подарунок - в будь-якому випадку, серед більш ніж 5 000 пластинок, які ми пропонуємо до продажу, ви зможете підшукати що-небудь в нашому магазині вінілових платівок.
                </p>
            </div>
        </div>
    </div>

</section>

<section class="text__second">
    <div class="second__text-second">
        <div class="container">
            <div class="width__second">
                <h1 class="title-all">Play Vinyl Record Store</h1>
                <div class="text">
                    <p class="sub_title-all-second">
                        Ми раді запропонувати вам широкий вибір вінілу за демократичними цінами. Ми регулярно влаштовуємо знижки, акції і розпродажі. Ми продаємо тільки нові та оригінальні платівки. Нашою головною метою і основним принципом у роботі є задоволеність клієнтів, так як ми продаємо не музику, ми продаємо музичне задоволення.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="second__photo">

    </div>
    <div class="second_text">
        <div class="container">
            <h1 class="title-all">Play Vinyl Record Store</h1>
            <div class="text">
                <p class="sub_title-all-second">
                    Ми раді запропонувати вам широкий вибір вінілу за демократичними цінами. Ми регулярно влаштовуємо знижки, акції і розпродажі. Ми продаємо тільки нові та оригінальні платівки. Нашою головною метою і основним принципом у роботі є задоволеність клієнтів, так як ми продаємо не музику, ми продаємо музичне задоволення.
                </p>
            </div>
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
