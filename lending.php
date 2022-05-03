
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lending</title>
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
                <a href="lending.php" class="nav__link active">Головна</a>
                <a href="turntables.php" class="nav__link">Програвачі</a>
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
                <a href="lending.php" class="nav__link active">Головна</a>
                <hr width="100%" size="2" color="#AFAFAF" class="lines-first"/>
                <a href="turntables.php" class="nav__link">Програвачі</a>
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

<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro_-title-first">Збери свою аудіо систему!</h1>

            <h2 class="intro_-title-second">Будь найкращим разом з нами</h2>

            <button class="button_more">
                <a href="#!" class="purchase">
                    Детальніше</a>
            </button>
        </div>
    </div>
</div>


<section class="section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Програвачi вiнiлу</h2>
        </div>
        <div class="row row-cols-3">

            <?php
            require "db.php";
            $turntables = get_singles_all();

            $temp = 0;
            foreach ($turntables as $iter): ?>

            <?php
            if ($temp == 3) {
                break;
            }
            $temp++;
            ?>

            <div class="col-xxl col-xl col-md-6 col-sm-4 col-4">
                <div class="about__item">
                    <div class="about__card-turntable">
                        <div class="images__turntable">
                            <?php echo '<img src="data:image/png;base64,'
                                . base64_encode($iter['mainPhoto']) . '" alt="thorens" class="images " />'; ?>

                        </div>
                        <div class="items">
                            <h4 class="manufacturer"><?php echo $iter["brend"] ?></h4>
                            <p class="information__about"><?php echo $iter["subText"] ?></p>
                        </div>
                        <div class="section__price">
                            <p class="price__number"><?php echo $iter["price"] ?> грн</p>
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
<!--            <div class="col-xxl col-xl col-md-6 col-sm-4 col-4">-->
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
<!--            <div class="col-xxl col-xl col-md-6 col-sm-4 col-4">-->
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
        </div>
        <div class="page__number">
            <img src="./img/svg/Polygon left.svg" alt="left" class="number">
            <a href="#!" class="number active">1</a>
            <a href="#!" class="number">2</a>
            <a href="#!" class="number">3</a>
            <img src="./img/svg/Polygon right.svg" alt="right" class="number">
        </div>
    </div>
</section>

<div class="intro__programmers">
    <div class="container">
        <h1 class="intro__programmers-title-first">Не знайшов потрібного програвача?</h1>

        <button class="button_more__catalog">
            <a href="turntables.php" class="purchase__catalog">
                До катологу</a>
        </button>
    </div>
</div>

<section class="section_records">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Вiнiловi платiвки</h2>
        </div>
        <div class="row row-cols-4">
            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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

            <div class="col">
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
        </div>
        <div class="page__number">
            <img src="./img/svg/Polygon left.svg" alt="left" class="number">
            <a href="#!" class="number active">1</a>
            <a href="#!" class="number">2</a>
            <a href="#!" class="number">3</a>
            <img src="./img/svg/Polygon right.svg" alt="right" class="number">
        </div>
    </div>
</section>

<div class="intro__records">
    <div class="container">
        <h1 class="intro__programmers-title-first">Будемо раді допомогти вам знайти записи!</h1>

        <button class="button_more__catalog">
            <a href="records.php" class="purchase__catalog">
                До катологу</a>
        </button>
    </div>
</div>

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

