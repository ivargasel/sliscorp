<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Welcome a SLIS Corp</title>
    <meta content="follow, index" name="robots">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nos dedicamos al desarrollo y comercialización de aplicaciones, soluciones y servicios en pro de la evolución digital.">
    <meta name="keywords" content="SL, SLIS Corp, Servicios Latam, Innovation, Solutions, Innovations and Solutions, SLIS">
    <meta name="author" content="SL Innovation and Solutions">
    <meta content="sliscorp.1.0" name="sliscorp_design_version">
    <meta content="sliscorp.1.r" name="sliscorp_inav_version">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Home">
    <meta property="og:image" content="https://www.sliscorp.com/etc/designs/web/logo.png">
    <meta property="og:description" content="Nos dedicamos al desarrollo y comercialización de aplicaciones, soluciones y servicios en pro de la evolución digital.">
    <meta property="og:url" content="https://www.sliscorp.com/">
    <meta content="homepage" name="business_subcategory">
    <meta content="homepage" name="page_type">
    <link rel="canonical" href="https://www.sliscorp.com/">
    <meta content="cr" name="target_country">
    <meta content="home" name="navigation-category">
    <meta content="R101" name="web_section_id">
    <link type="image/png" rel="shortcut icon" href="https://sliscorp.com/img/SL-sin fondo.png">
    <link rel="shortcut icon" href="https://sliscorp.com/img/SL-sin fondo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/sliscorp.min.css">
</head>
<body>

    <?php
        require_once ('Controllers/templateController.php');
        require_once ('Models/templateModel.php');

        $template = new templateControllerClass();
        $template -> GetTemplate();
    ?>

</body>
</html>