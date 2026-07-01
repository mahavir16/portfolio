<?php
if (!isset($pageTitle)) {
    $pageTitle = SITE_TITLE;
}

if (!isset($pageDescription)) {
    $pageDescription = "Official Portfolio of Mahavir Jain | Senior Software Engineer | ERP Specialist | Founder • Navkarsoft";
}

if (!isset($pageKeywords)) {
    $pageKeywords = "Mahavir Jain, PHP Developer, ERP Developer, Software Engineer, Core PHP, MySQL, Bootstrap, JavaScript, AI, Navkarsoft";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ==========================================
        BASIC META
    =========================================== -->

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <meta name="description"
          content="<?= htmlspecialchars($pageDescription) ?>">

    <meta name="keywords"
          content="<?= htmlspecialchars($pageKeywords) ?>">

    <meta name="author"
          content="<?= SITE_NAME ?>">

    <meta name="robots"
          content="index,follow">

    <!-- ==========================================
        THEME
    =========================================== -->

    <meta name="theme-color"
          content="<?= PRIMARY_COLOR ?>">

    <meta name="apple-mobile-web-app-capable"
          content="yes">

    <meta name="apple-mobile-web-app-status-bar-style"
          content="black-translucent">

    <!-- ==========================================
        OPEN GRAPH
    =========================================== -->

    <meta property="og:type"
          content="website">

    <meta property="og:title"
          content="<?= htmlspecialchars($pageTitle) ?>">

    <meta property="og:description"
          content="<?= htmlspecialchars($pageDescription) ?>">

    <meta property="og:url"
          content="<?= SITE_URL ?>">

    <meta property="og:image"
          content="<?= SITE_URL ?>/assets/img/portfolio-preview.jpg">

    <!-- ==========================================
        TWITTER
    =========================================== -->

    <meta name="twitter:card"
          content="summary_large_image">

    <meta name="twitter:title"
          content="<?= htmlspecialchars($pageTitle) ?>">

    <meta name="twitter:description"
          content="<?= htmlspecialchars($pageDescription) ?>">

    <meta name="twitter:image"
          content="<?= SITE_URL ?>/assets/img/portfolio-preview.jpg">

    <!-- ==========================================
        FAVICON
    =========================================== -->

    <link rel="icon"
          href="<?= ICON_PATH ?>favicon.png">

    <!-- ==========================================
        GOOGLE FONTS
    =========================================== -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- ==========================================
        BOOTSTRAP
    =========================================== -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- ==========================================
        FONT AWESOME
    =========================================== -->

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- ==========================================
        AOS ANIMATION
    =========================================== -->

    <link rel="stylesheet"
          href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- ==========================================
        CUSTOM CSS
    =========================================== -->

    <link rel="stylesheet"
          href="<?= CSS_PATH ?>style.css">

    <link rel="stylesheet"
          href="<?= CSS_PATH ?>responsive.css">

    <link rel="stylesheet"
          href="<?= CSS_PATH ?>animation.css">

</head>

<body>

<div class="page-wrapper">