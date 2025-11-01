<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yola - <?php echo $titulo; ?></title>
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="/img/icono.png" type="image/png">
    <meta name="description" content="Administra y transforma eventos con nuestras taquizas. Ofrecemos servicios de catering auténticos y de calidad para hacer de cada evento un festín de sabores inolvidables. ¡Contáctanos para una experiencia única en la gestión de tus eventos y menús!">
   
</head>

<body class="dashboard">
    <?php
    include_once __DIR__ . '/templates/admin-sidebar.php';
    ?>
    <main class="dashboard__contenido">
        <?php
        include_once __DIR__ . '/templates/admin-topside.php';
        ?>
        <?php
        echo $contenido;
        ?>
    </main>
    <script src="/build/js/main.min.js" defer></script>
</body>
</html>