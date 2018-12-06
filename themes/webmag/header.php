<!DOCTYPE html>
<html lang="<?= get_bloginfo('language')?>">

<head>
    <meta charset="<?= get_bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?= get_bloginfo('name')?></title>

    <!-- Google font/CSS/JS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">
    <?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header id="header">
    <!-- Nav -->
    <div id="nav">
        <!-- Main Nav -->
        <div id="nav-fixed" class="slide-down">
            <div class="container">
                <!-- logo -->
                <div class="nav-logo">
                    <a href="index.html" class="logo"><img src="<?= ASSETS_PATH?>img/logo.png" alt=""></a>
                </div>
                <!-- /logo -->

                <!-- nav -->
                <?php get_template_part('template-parts/header/nav-menu')?>
                <!-- /nav -->

                <!-- search & aside toggle -->
                <div class="nav-btns">
                    <button class="aside-btn"><i class="fa fa-bars"></i></button>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <div class="search-form">
                        <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                        <button class="search-close"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /search & aside toggle -->
            </div>
        </div>
        <!-- /Main Nav -->

        <!-- Aside Nav -->
        <?php get_template_part('template-parts/header/widget-post') ?>
        <!-- Aside Nav -->
    </div>
    <!-- /Nav -->

    <!-- beadcrumb -->
    <?php if(!is_front_page() && !is_single()):?>
        <?php get_template_part('template-parts/header/beadcrumb') ?>
    <?php endif;?>
    <!-- /beadcrumb -->

</header>