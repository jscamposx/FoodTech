<?php

use Dotenv\Parser\Value;

$excludeSubHeader = true;
?>

<div class="h padding0" id="h">
    <div class="h__center">
        <div class="h__contenedor flex-column">
            <div class="h__pad-izquierdo">
                <div class="h__pad-izquierdo__titulo">
                    <h1 class="h__pad-izquierdo__titulo__h1 colorGreen">Descubre el Sabor del Norte en Cada Plato</h1>
                </div>
                <div class="h__pad-izquierdo__subtitulo">
                    <h2 class="h__pad-izquierdo__subtitulo__h2">Explora una travesía culinaria que celebra la autenticidad norteña en cada bocado.</h2>
                </div>

                <div class="h__pad-izquierdo__cboton">
                    <button class="h__pad-izquierdo__cboton__boton backgroundGreen" id="btnHeader">
                        <span>Explorar los platos</span>
                    </button>
                </div>

                <div class="h__pad-izquierdo__stars">
                    <span>
                        <svg height="32px" width="32px" viewBox="0 0 576 512" fill="#17330c">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg height="32px" width="32px" viewBox="0 0 576 512" fill="#17330c">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg height="32px" width="32px" viewBox="0 0 576 512" fill="#17330c">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg height="32px" width="32px" viewBox="0 0 576 512" fill="#17330c">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                        <svg height="32px" width="32px" viewBox="0 0 576 512" fill="#17330c">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                    </span>
                    <p>5.0 en Google | +1.000 reseñas</p>
                </div>
            </div>
            <div class="h__pad-derecho">
                <picture class="h__pad-derecho__img--picture">
                    <img class="h__pad-derecho__img" src="/img/header/Visual2.avif" alt="Header-VisualPC" width="1024" height="1024" loading="lazy">

                </picture>
            </div>
        </div>
    </div>

    <div class="swiper-container">
        <div class="h__contenedor flex-row margin7rem" id="miCarrusel">
            <div class="swiper-wrapper">
                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img src="/img/header/Card1.avif" alt="Card img" alt="Card-img" width="200" height="200">
                    </div>
                    <div class="h__contenedor__card--tittle fontsize-28px ">
                        <p>Elige los platos que quieras</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px ">
                        <p>Cada semana disfrutarás de un menú fresco y diverso con una amplia gama de opciones para que elijas tus favoritos.</p>
                    </div>
                </div>

                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img src="/img/header/Card2.avif" alt="Card img" alt="Card-img" width="200" height="200" loading="lazy">
                    </div>
                    <div class="h__contenedor__card--tittle fontsize-28px">
                        <p>Nosotros cocinamos por ti</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px">
                        <p>Delicias caseras con ingredientes naturales y productos locales de primera calidad.</p>
                    </div>
                </div>

                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img src="/img/header/Card3.avif" alt="Card img" alt="Card-img" width="200" height="200" loading="lazy">
                    </div>
                    <div class="h__contenedor__card--tittle  fontsize-28px">
                        <p>Disfruta de tu comida y gana tiempo</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px">
                        <p>Te llevamos la experiencia de una auténtica taquiza directamente a tu puerta. ¡Solo reserva y disfruta!</p>
                    </div>
                </div>

                <div class="h__contenedor__card swiper-slide">
                    <div class="h__contenedor__card--img">
                        <img src="/img/header/Card4.avif" alt="Card img" alt="Card-img" width="200" height="200" loading="lazy">
                    </div>
                    <div class="h__contenedor__card--tittle fontsize-28px">
                        <p>No solo somos tacos, hay variedad.</p>
                    </div>
                    <div class="h__contenedor__card--txt fontsize-16px">
                        <p>Explora una variedad excepcional de platos deliciosos para todos los gustos en tus eventos, más allá de los tacos.</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>


    <style>
        .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #17330c;

            opacity: 1;
            background: #FFF;
            border: 1px solid #17330c;

        }

        .swiper-pagination-bullet-active {
            width: 20px;
            height: 20px;
            color: #17330c;
            background: #17330c;
            transition: all 0.5s;

        }

        .swiper-pagination {
            position: static;
        }

        .swiper-container {
            overflow: hidden;
        }

        .swiper-wrapper {
            box-sizing: inherit;
        }
    </style>

    <div class="h__contenedor flex-column margin-8rem">
        <div class="h__tittle ">
            Elige platos para tu evento.
        </div>
        <div class="h__subtittle fontsize-2rem ">
            <p>Próximamente: esta función estará disponible. ¡No te la pierdas!</p>
        </div>
    </div>
</div>

<div class="platos__main">
    <?php if (empty($categorias)) { ?>
        <p class="text-center">Platillos no encontrados :(</p>
    <?php } else { ?>
        <?php foreach ($categorias as $categoria) { ?>
            <?php
            $tienePlatillos = false;
            foreach ($platillos as $platillo) {
                if ($platillo->tipo_platillo == $categoria->nombre) {
                    $tienePlatillos = true;
                    break;
                }
            }
            if ($tienePlatillos) {
            ?>
                <h1 class="fontsize28px"><?php echo $categoria->nombre; ?></h1>
                <p><?php echo $categoria->descripcion; ?></p>
                <div class="platos__contenedor">
                    <?php foreach ($platillos as $platillo) {
                        if ($platillo->tipo_platillo == $categoria->nombre) { ?>
                            <div class="platos__card">
                                <div class="platos__card--cimg">
                                    <img class="platos__card--img" src="/img/platillos/<?php echo $platillo->imagen; ?>.avif" loading="lazy" alt="Platillo-img">
                                    <span class="platos__card--span"><?php echo $platillo->nombre; ?></span>
                                </div>

                                <div class="platos__card--txt">
                                    <h2 class="platos__card--tittle"><?php echo $platillo->nombre; ?></h2>
                                    <p><?php echo $platillo->descripcion; ?></p>
                                </div>

                                <div class="platos__card--foot">
                                    <p></p>
                                    <button class="platos__card--btn" aria-label="btn-add"><svg height="35px" width="35px" viewBox="0 0 512 512">
                                            <path fill="#17330c" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                        </svg></button>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</div>
</div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php
$loadSwiperScript = true;
?>