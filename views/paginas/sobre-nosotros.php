<?php
$excludeSubHeader = true;
$loadSwiperScript = true;
?>

<div class="about">
    <!-- tittle -->
    <div class="about__contenedor">
        <h1 class="margin12rem font-size56px1">Yola-Tacos Rancheros</h1>
    </div>
    <!-- Sección 1 -->
    <div class="about__contenedor">
        <div class="about__contenedor--pad">
            <img src="img/about/img-section1.avif" class="about__contenedor--img" width="180" height="180" alt="Imagen Sección 1" width="auto" height="auto">
            <div class="about__contenedor--tittle">
                <p>Sabores Auténticos, Experiencia Inigualable</p>
            </div>
            <div class="about__contenedor--info">
                <div class="about__contenedor--subtittle">
                    <p>Sumérgete en la autenticidad de nuestros tacos, donde cada bocado es una explosión de sabores genuinos. Nuestras recetas han resistido el paso del tiempo, ofreciendo una experiencia culinaria que va más allá de lo común.</p>
                </div>
                <div class="about__contenedor--txt">
                    <p>En Yola - Tacos Rancheros, nos desviamos de lo convencional para brindarte una experiencia culinaria única y memorable. Similar al papel del Lorem Ipsum en la creación de diseños, nuestra creatividad se convierte en la fuerza motriz detrás de cada taco que ofrecemos. Nos embarcamos en una travesía culinaria donde la innovación y la pasión convergen para crear sabores que trascienden las fronteras de lo tradicional.

                        Cada taco es como una obra de arte culinaria, cuidadosamente elaborado con ingredientes frescos y auténticos que cuentan una historia de creatividad y dedicación.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Sección 2 -->
    <div class="about__contenedor">
        <div class="about__contenedor--pad">
            <div class="about__contenedor--tittle">
                <p>Nuestra Misión</p>
            </div>
            <div class="about__contenedor--info">
                <div class="about__contenedor--txt">
                    <p>En Yola, nuestra misión es clara: crear momentos inolvidables a través de la comida y la celebración. Nos esforzamos por ir más allá de la gastronomía, convirtiéndonos en cómplices de la alegría y la felicidad en cada evento que organizamos. Queremos que cada visita a Yola sea una experiencia única y satisfactoria.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Section 3  PENDIENTE
    <div class="about__contenedor padding0px">
        <div class="about__contenedor--pad background-transparent padding0px">
            <div class="about__contenedor--tittle font-size56px1">
                <p>Tus Taquizas en Cualquier Rincón de Durango</p>
            </div>
            <div class="about__contenedor--subtittle font-size36px">
                <p>El Antídoto para Taquizas sin Contratiempos</p>
            </div>

            <div class="about__contenedor--txt font-size22px">
                    <p>Nadie debería sentir la necesidad de consumir alimentos de manera apresurada, costosa o insatisfactoria. En Yola - Tacos Rancheros, preparamos cada taco con la intención de brindarte una experiencia culinaria que te permita disfrutar de lo que te gustaría preparar tú mismo, incluso en movimiento. Buscamos que la comida sea el epicentro de tu bienestar: una fusión de placer y sabor, salud y tiempo para ti.
                        Estamos aquí para desafiar la norma y enorgullecernos de la tradición de los tacos en movimiento. Porque los tacos se han convertido en nuestro símbolo contemporáneo de la comida casera, ahora también beneficiosa para ti y tu entorno.</p>
            </div>
        </div>
    </div>

-->

    <!-- Section 4 -->

    <div class="about__contenedor">
        <div class="swiper-container">
            <div class="about__contenedor--padm" id="miCarrusel">
                <div class="swiper-wrapper">
                    <div class="about__contenedor--padh swiper-slide">
                        <img src="img/about/img-section4-1.avif" class="about__contenedor--imgpad rotater" alt="Imagen Seccion 4.1" width="300" height="300" loading="lazy">
                        <div class="about__contenedor--info">
                            <div class="about__contenedor--tittle">
                                <p>Eventos Inolvidables</p>
                            </div>
                            <div class="about__contenedor--txt">
                                <p>Además de ofrecer tacos excepcionales, nos enorgullece ser tus socios en la organización de eventos inolvidables. Ya sea una fiesta íntima, una reunión de negocios o cualquier celebración especial, en Yola nos aseguramos de que cada detalle esté cuidado para que tu evento sea memorable. </p>
                            </div>

                        </div>
                    </div>

                    <div class="about__contenedor--padh padding-top14rem swiper-slide">
                        <img src="img/about/img-section4-2.avif" class="about__contenedor--imgpad rotatel" alt="Imagen Seccion 4.2" width="350" height="350" loading="lazy">
                        <div class="about__contenedor--info">
                            <div class="about__contenedor--tittle">
                                <p>Compromiso con la Excelencia</p>
                            </div>
                            <div class="about__contenedor--txt">
                                <p>En Yola, la excelencia es nuestra norma. Nos esforzamos por superar las expectativas en todo, desde el servicio al cliente hasta la presentación de nuestros platillos. Cada experiencia con nosotros refleja nuestro compromiso con ofrecer lo mejor en todo momento.</p>
                            </div>

                        </div>
                    </div>

                    <div class="about__contenedor--padh swiper-slide">
                        <img src="img/about/img-section4-3.avif" class="about__contenedor--imgpad rotater" alt="Imagen Seccion 4.3" width="350" height="350" loading="lazy">
                        <div class="about__contenedor--info">
                            <div class="about__contenedor--tittle">
                                <p>Nuestros Tacos Rancheros</p>
                            </div>
                            <div class="about__contenedor--txt">
                                <p>Desde la frescura de nuestros ingredientes hasta la maestría en la cocina, cada taco ranchero en Yola es una obra maestra de sabor. Nuestro compromiso con la calidad impulsa nuestra búsqueda constante de ingredientes auténticos. </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>
    <div class="swiper-pagination"></div>
    <style>
        .swiper-pagination-bullet {
            width: 18px;
            height: 18px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #383a33;

            opacity: 1;
            background: #FFF;
            border: 1px solid #383a33;

        }

        .swiper-pagination-bullet-active {
            width: 20px;
            height: 20px;
            color: #383a33;
            background: #383a33;
            transition: all 0.5s;

        }

        .swiper-pagination {
            position: static !important;
        }

        .swiper-container {
            overflow: visible !important;
            width: 100%;

        }



        @media only screen and (max-width: 1024px) {
            .swiper-container {
                overflow: hidden !important;
            }

        }
    </style>


    <!-- Section 5 -->
    <div class="about__contenedor">
        <div class="about__contenedor--padf">
            <img src="img/about/img-section5.avif" class="about__contenedor--padf--img" alt="Imagen Seccion 5" width="100%" height="100%" loading="lazy">
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>