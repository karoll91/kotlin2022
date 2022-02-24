<?php
$sitelang = qtranxf_getLanguage();
switch($sitelang){
    case "uz":
        $actuz = "class='active'";
        break;
    case "ru":
        $actru = "class='active'";
        break;
    case "en":
        $acten = "class='active'";
        break;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5N8BDTQ');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="<?php echo get_template_directory_uri()?>/images/fav-icon/icon2.png">


    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/chair.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/fonts/icofont.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/dist/css/bvi.min.css">

    <!-- Fix Internet Explorer ______________________________________-->

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/vendor/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/vendor/respond.js"></script>
    <![endif]-->


</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N8BDTQ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<audio id="myAudio" src="/wp-content/themes/jizpiGoodTemp/mp3/gimn.mp3"></audio>
<script>
    var myAudio = document.getElementById("myAudio");

    function togglePlay() {
        return myAudio.paused ? myAudio.play() : myAudio.pause();
    };
</script>
<div class="main-page-wrapper">

    <div class="pulse ds-learning">
        <a href="http://moodle.jizpi.uz/" target="_blank">&nbsp;</a>
    </div>
    <!-- Header _________________________________ -->
    <header class="main-header">


        <div class="top-header">
            <div class="container">
                <div class="left-side float-left">
                    <ul>
                        <?if($sitelang == "uz"):?>
                            <li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="" class="tran3s">Jizzax shaxri I.Karimov shox ko'chasi 4 uy</a></li>
                        <?elseif($sitelang == "ru"):?>
                            <li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="" class="tran3s">Джизак, проспект И.Каримова строение 4. </a></li>
                        <?elseif($sitelang == "en"):?>
                            <li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="" class="tran3s">JIZAKH CITY I.KARIMOV STREET 4 HOUSE</a></li>
                        <?endif;?>

                        <li><span class="icon round-border"><i class="ficon flaticon-multimedia"></i></span> <a href="http://jizpi.uz/webmail/" target="_blank" class="tran3s">Korporativ pochta</a></li>
                        <li><span class="icon round-border"><i class="ficon flaticon-technology"></i></span> <a href="" class="tran3s">+998 72 2264605</a></li>
                        <li>
                        <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="icon round-border"><i class="ficon flaticon-translation"></i></span>Languages</a>
                            <ul class="dropdown-menu drop-lang">
                                <?/**
                                 * Языки для смены кнопки
                                 */

                                //$sitelang
                                $current_url = $_SERVER['REDIRECT_URL'];
                                    $slice_url = explode('/',$current_url);
                                   // dd($slice_url);

                                    if($sitelang == 'uz'){
                                        $uzLang = $current_url;
                                        $ruLang = '/ru'.$current_url;
                                        $enLang = '/en'.$current_url;
                                    }elseif($sitelang == 'ru'){
                                        if(!empty($slice_url['3'])){
                                            $extra = $slice_url['3'].'/'.$slice_url['4'];
                                        }
                                        $uzLang = '/uz/'.$slice_url['2'].'/'.$extra;
                                        $ruLang = $current_url;
                                        $enLang = '/en/'.$slice_url['2'].'/'.$extra;
                                    }elseif($sitelang == 'en'){
                                        if(!empty($slice_url['3'])){
                                            $extra = $slice_url['3'].'/'.$slice_url['4'];
                                        }
                                        $uzLang = '/uz/'.$slice_url['2'].'/'.$extra;
                                        $ruLang = '/ru/'.$slice_url['2'].'/'.$extra;
                                        $enLang = $current_url;
                                    }
                                ?>
                                <li><a  href="<?=$uzLang;?>">Uzbek<br></a></li>
                                <li><a href="<?=$ruLang;?>">Russian</a></li>
                                <li><a href="<?=$enLang;?>">English</a></li>
                            </ul>

                        </div>
                        </li>
                    </ul>
                </div> <!-- /.left-side -->
                <div class="right-side float-right">
                    <ul>
                        <li><a href="http://moodle.jizpi.uz/" class="tran3s round-border icon"><img src="<?php echo get_template_directory_uri()?>/images/moodle2.png"/></a></li>
                        <li><a href="/bayroq/" class="tran3s round-border icon"><img src="<?php echo get_template_directory_uri()?>/images/sm_bayroq.png"/></a></li>
                        <li><a href="/gerb/" class="tran3s round-border icon"><img src="<?php echo get_template_directory_uri()?>/images/sm_gerb.png"/></a></li>
                        <li><a href="https://www.jizpi.uz/sitemap/" class="tran3s round-border icon"><i class="fa fa-sitemap" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon" onclick="togglePlay()"><i class="fa fa-music" aria-hidden="true"></i></a></li>
                        <li><a href="#"  id="specialButton" class="tran3s round-border icon"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="tran3s round-border icon " data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a></li>

                    </ul>
                </div> <!-- /.right-side -->
            </div>
        </div> <!-- /.top-header -->

        <!-- _______________________ Theme Menu _____________________ -->

        <div class="container">
            <div class="main-menu-wrapper clear-fix">
                <div class="container">
                    <div class="logo float-left"><a href="http://www.jizpi.uz/" style="vertical-align:middle;"><img src="<?php echo get_template_directory_uri()?>/images/logo/jizpi.png" alt="LOGO" width="150" height="150"></a></div>

                    <!--<form action="#" class="float-right">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search-minus" aria-hidden="true"></i></button>
                    </form>---->

                    <!-- Menu -->
                    <nav class="navbar float-right">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php wp_nav_menu( array(
                            'menu'            => 'topnav',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                            // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                            'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                            'container_class' => 'collapse navbar-collapse',              // (string) class контейнера (div тега)
                            'container_id'    => 'navbar-collapse-1',
                            'add_li_class' => 'dropdown-holder',
                            'menu_class'      => 'nav navbar-nav',          // (string) class самого меню (ul тега)
                            'menu_id'         => '',              // (string) id самого меню (ul тега)
                            'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                            'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                            'before'          => '',              // (string) Текст перед <a> каждой ссылки
                            'after'           => '',              // (string) Текст после </a> каждой ссылки
                            'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
                            'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
                            'depth'           => 2,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                            'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                            'theme_location'  => 'main-menu'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                        ) );
                        ?>
                    </nav>
                </div>
            </div> <!-- /.main-menu-wrapper -->
        </div>
    </header>
<!------search------start------->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" class="form-control" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Search for...">
                                <span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				  </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                    </div>
                </form>
            </div>
        </div>
    </div><!------search---block-----end----->





