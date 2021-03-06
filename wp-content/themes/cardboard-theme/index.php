<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap&subset=cyrillic" rel="stylesheet">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body> 
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3 col-md-4">
                    <div class="header-logo">
                        
                    </div>
                </div>
                <div class="col-9 col-md-8">
                    <div class="header-contacts">
                        <div class="header-contacts__phones">
                            <div class="header-contacts__phone">
                                8 (347) 271-54-28
                            </div>
                            <div class="header-contacts__phone">
                                8 (937) 363-30-00
                            </div>
                        </div>
                        <button class="header-cantacts__button button">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/2.png" alt="">
                            <span class="hidden-mobile">Заказать звонок</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="main dark-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <div class="main-img wow fadeInDown hidden-mobile" data-wow-delay="0.1s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/3.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="main-text">
                        <h1 id="main-text" class="main-text__title wow fadeInDown " data-wow-delay="0.2s">
                        <?php the_field('main-title'); ?>
                        </h1>
                        <div class="main-text__subtitle wow fadeInDown " data-wow-delay="0.2s">
                        с доставкой по всей Росси
                        </div>
                        <div class="main-text__form wow fadeInDown " data-wow-delay="0.3s">
                            <div class="form-title">
                                Получите индивидуальное предложение
                                на производство и поставку гофропродукции
                                <span class="form-title__important">
                                    Образцы упаковки бесплатно!
                                </span>
                            </div>
                            <form action="mailer/smart.php" method="POST" class="form">
                                <input class="form__input" type="tel" name="user_phone" placeholder="Введите номер телефона">
                                <button class="button button_big" type="submit">Оставить заявку!</button>
                            </form>
                            <small class="form-small">*Минимальный заказ 500шт</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overlay">
        <div class="popup">
            <div class="popup-title">Форма обратной связи</div>
            <div class="popup-close">&times;</div>
            <div class="popup-form">
                <form action="#" class="main-form">
                    <div class="popup-form-header">
                        Получите индивидуальное предложение 
                        <span>на производство и поставку изделий</span>
                        <label for="phone" class="popup-form__label">
                            Введите ваш номер телефона:
                        </label>
                        <input type="tel" class="popup-form__input" name="phone" required>
                        <button class="button popup-form__btn">
                            Оставить заявку!
                        </button>
                        <div class="popup-form__note">
                            *Минимальный заказ 500шт
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section  id="numbers"  class="features">
        <div class="container">
            <div class="numbers">
                <div class="numbers-block">
                    <div class="numbers-block__title">5 лет</div>
                    <div class="numbers-block__text">На рынке изделий из гофрокартона</div>
                </div>
                <div class="numbers-block">
                    <div class="numbers-block__title">до 5 000 000 м<sup>2</sup></div>
                    <div class="numbers-block__text">Ежемесячный объем производства гофрокартона</div>
                </div>
                <div class="numbers-block">
                    <div class="numbers-block__title">4 000 м<sup>2</sup></div>
                    <div class="numbers-block__text">Площадь склада</div>
                </div>
            </div>
            <div class="features-blocks">
                <div class="features-block wow fadeInUp" data-wow-delay="0.1s">
                    <div class="features-block__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/6.png" alt="">
                    </div>
                    <div class="features-block__text">
                        <div class="features-block__title">Производство</div>
                        <div class="features-block__descr">4 технологические линии способны выполнить любой сложности</div>
                    </div>
                </div>
                <div class="features-block wow fadeInUp" data-wow-delay="0.2s">
                    <div class="features-block__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/7.png" alt="">
                    </div>
                    <div class="features-block__text">
                        <div class="features-block__title">Бесплатные образцы</div>
                        <div class="features-block__descr">Бесплатно делаем образцы гофроупаковки - это помогает заранее увидеть упаковку</div>
                    </div>
                </div>
                <div class="features-block wow fadeInUp" data-wow-delay="0.3s">
                    <div class="features-block__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="">
                    </div>
                    <div class="features-block__text">
                        <div class="features-block__title">Стабильное качество</div>
                        <div class="features-block__descr">Собственная лаборатория контролирует качество на каждом этапе производства</div>
                    </div>
                </div>
                <div class="features-block wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-block__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/9.png" alt="">
                    </div>
                    <div class="features-block__text">
                        <div class="features-block__title">Страховой запас</div>
                        <div class="features-block__descr">Можем хранить запас гофропродукции на своих складах и поставлять его партиям</div>
                    </div>
                </div>
                <div class="features-block wow fadeInUp" data-wow-delay="0.5s">
                    <div class="features-block__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/10.png" alt="">
                    </div>
                    <div class="features-block__text">
                        <div class="features-block__title">Флексопечать</div>
                        <div class="features-block__descr">Возможно нанесение вашего  логотипа, текста или манипуляционных знаков</div>
                    </div>
                </div>
                <div class="features-block wow fadeInUp" data-wow-delay="0.6s">
                    <div class="features-block__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/11.png" alt="">
                    </div>
                    <div class="features-block__text">
                        <div class="features-block__title">Гидрофобные добавки</div>
                        <div class="features-block__descr">На производстве реализована технология, которая позволяет гофрокартону стать прочнее</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <h2 id="section-title" class="section-title wow fadeInUp">
                наша Продукция
            </h2>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="products-block wow fadeInDown " data-wow-delay="0.1s">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/12.png" alt="">
                        <div class="products-block__title">
                            Гофрокороб 4-х клапанный 
                        </div>
                        <div class="products-block__buttons"><button class="button button-0 products-block__button">Подробнее</button><button class="button">Получить расчет</button></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="products-block wow fadeInDown " data-wow-delay="0.2s">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/13.png" alt="">
                        <div class="products-block__title">
                            Гофролоток 
                        </div>
                        <div class="products-block__buttons"><button class="button button-0 products-block__button">Подробнее</button><button class="button">Получить расчет</button></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="products-block wow fadeInDown " data-wow-delay="0.3s">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/14.png" alt="">
                        <div class="products-block__title">
                            Гофрокороб самосборный (сложная высечка) 
                        </div>
                        <div class="products-block__buttons"><button class="button button-0 products-block__button">Подробнее</button><button class="button">Получить расчет</button></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="products-block wow fadeInDown " data-wow-delay="0.4s">
                        <img class="products-block__img" src="<?php echo get_template_directory_uri(); ?>/img/15.png" alt="">
                        <div class="products-block__title">
                            Листовой гофрокартон
                        </div>
                        <div class="products-block__buttons"><button class="button button-0 products-block__button">Подробнее</button><button class="button">Получить расчет</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="offer" class="offer dark-bg">
        <div class="container">
            <h2 class="offer-title">
                Получите индивидуальное предложение 
                <span class="offer-title_small">на производство и поставку изделий</span>
            </h2>
            <div class="offer-form">
                <form action="#">
                    <label class="offer-form__label" for="">Введите ваш номер телефона:</label>
                    <input class="form__input offer-form__input" type="tel" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ1"> 
                    <button class="button offer-form__button" type="submit">Оставить заявку!</button>
                </form>
                <small class="form-small">*Минимальный заказ 500шт</small>
            </div>
        </div>
    </section>

    <section id="production" class="production">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="production-slider_top hidden-mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/18.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                    </div>
                    <div class="production-slider_bottom hidden-mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/19.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="production-text">
                        <div class="production-text__title">
                            Производство
                        </div>
                        <div class="production-text__descr">
                            Современное оборудование позволяет произ- водить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.
                            Досконально прорабатываем конструкции коро- бов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.
                            Возможно нанесение цветной флексопечати на поверхность коробов.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="container__text" class="container__text">
                <h2>Наши клиенты</h2>
            </div>
            <div class="section">
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/1.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/2.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/3.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/4.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/5.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/6.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/7.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/8.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/9.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/10.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/11.png" alt="">
                </div>
                <div class="section-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img/12.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div id="map" class="map"></div>
           <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A94856fec1da8fd7f229628909a98dc4697fc6e3b93043519d1b4ddfdee1ed659&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script> -->
           <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.5499191059266!2d56.00193943755464!3d54.75271740073023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d939f2f1bd4371%3A0x33be391ed5fe1488!2z0YPQuy4g0L_RgC3Rgi4g0J7QutGC0Y_QsdGA0Y8sIDQ2LCDQo9GE0LAsINCg0LXRgdC_LiDQkdCw0YjQutC-0YDRgtC-0YHRgtCw0L0sIDQ1MDAwMA!5e0!3m2!1sru!2sru!4v1565335896798!5m2!1sru!2sru" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <div class="contacts-block">
            <div class="contacts-block_address contacts-block__text">
                <span class="contacts-block__title">Адрес офиса</span>
                г. Уфа, Проспект октября, 46
                <span class="contacts-block__title">Адрес офиса</span> 
                г. Уфа, ул. Майкопская, 65/2
            </div>
            <div class="contacts-block__phone contacts-block__text">
                <span class="contacts-block__title">Тел. отдела продаж:</span>
                8 (347) 271-54-28 <br>
                8 (937) 363-30-00
            </div>
            <div class="contacts-block__cta contacts-block__text">
                <button class="button">Заказать звонок</button>
            </div>
            <div class="contacts-block__mail contacts-block__text">
                <span class="contacts-block__title">Е-mail</span>
                urals.karton@gmail.com
            </div>
        </div>
    </section>  
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
<script>
new WOW().init();
</script> 
<script>
    ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [54.752656, 56.002053],
            zoom: 18
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'img/1.png',
            // Размеры метки.
            iconImageSize: [95, 30],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-47, -30]
        });

    myMap.geoObjects
        .add(myPlacemark);
});
</script>
<?php wp_footer(); ?>
</body>
</html>