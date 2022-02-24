<?php
/*
Template Name: Шаблон для главной страницы.
*/
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

$category = get_the_category(get_the_ID());
$cat_id = get_cat_ID($category[0]->cat_name);
echo $cat_id;
?>
<?php get_header(); ?>

<!-- Theme Banner ________________________________ -->
<div id="banner">
    <div class="rev_slider_wrapper">
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="main-banner-slider" class="rev_slider" data-version="5.0.7">
            <ul>
					
                <!-- SLIDE1  -->
                <li data-index="rs-280" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-saveperformance="off"  data-title="Sarlavha shu yerga kiradi" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_template_directory_uri()?>/images/home/slide-1.jpg"  alt="image"  class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-56','-56','-45','-150']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"

                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">

                        <?if($sitelang == "uz"):?>
                            <h5>Jizzax politexnika instituti</h5>
                        <?elseif($sitelang == "ru"):?>
                            <h5>Джизакский политехнический институт</h5>
                        <?elseif($sitelang == "en"):?>
                            <h5>Jizzakh Polytechnic Institute</h5>
                        <?endif;?>

                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['20','25','30','-85']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"

                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="2000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">

                        <?if($sitelang == "uz"):?>
                            <h1>Jizzax<span class="p-color">politexnika</span> <br>instituti</h1>
                        <?elseif($sitelang == "ru"):?>
                            <h1>Джизакский<span class="p-color">политехнический</span> <br>институт</h1>
                        <?elseif($sitelang == "en"):?>
                            <h1>Jizzakh<span class="p-color">Polytechnic</span> <br>Institute</h1>
                        <?endif;?>

                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','80']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
                         data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['192','217','227','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','155']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
                         data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">
                        <!--<a href="#" class="buy-button p-color-bg">O'tish</a>-->
                    </div>

                </li>


                <!-- SLIDE2  -->
                <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo get_template_directory_uri()?>/images/home/slide-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Sarlavha shu yerga kiradi" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_template_directory_uri()?>/images/home/slide-2.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-56','-56','-36','-150']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"

                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">
                        <?if($sitelang == "uz"):?>
                            <h5>Jizzax politexnika instituti</h5>
                        <?elseif($sitelang == "ru"):?>
                            <h5>Джизакский политехнический институт</h5>
                        <?elseif($sitelang == "en"):?>
                            <h5>Jizzakh Polytechnic Institute</h5>
                        <?endif;?>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['20','20','45','-85']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"

                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="2000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">
                        <?if($sitelang == "uz"):?>
                            <h1>Jizzax<span class="p-color">politexnika</span> <br>instituti</h1>
                        <?elseif($sitelang == "ru"):?>
                            <h1>Джизакский<span class="p-color">политехнический</span> <br>институт</h1>
                        <?elseif($sitelang == "en"):?>
                            <h1>Jizzakh<span class="p-color">Polytechnic</span> <br>Institute</h1>
                        <?endif;?>
                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['-87','-87','-87','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','80']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
                         data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption"
                         data-x="['center','center','center','center']" data-hoffset="['105','105','105','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','155']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
                         data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">
                        <!----<a href="#" class="buy-button p-color-bg">O'tish</a>-->
                    </div>
                </li>
                <!-- SLIDE3  -->
                <li data-index="rs-20" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo get_template_directory_uri()?>/images/home/slide-5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Sarlavha shu yerga kiradi" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo get_template_directory_uri()?>/images/home/slide-5.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-56','-56','-45','-150']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"

                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="1000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">
                        <?if($sitelang == "uz"):?>
                            <h5>Jizzax politexnika instituti</h5>
                        <?elseif($sitelang == "ru"):?>
                            <h5>Джизакский политехнический институт</h5>
                        <?elseif($sitelang == "en"):?>
                            <h5>Jizzakh Polytechnic Institute</h5>
                        <?endif;?>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['20','25','30','-85']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-transform_idle="o:1;"

                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-mask_in="x:0px;y:[100%];"
                         data-mask_out="x:inherit;y:inherit;"
                         data-start="2000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         style="z-index: 6; white-space: nowrap;">
                        <?if($sitelang == "uz"):?>
                            <h1>Jizzax<span class="p-color">politexnika</span> <br>instituti</h1>
                        <?elseif($sitelang == "ru"):?>
                            <h1>Джизакский<span class="p-color">политехнический</span> <br>институт</h1>
                        <?elseif($sitelang == "en"):?>
                            <h1>Jizzakh<span class="p-color">Polytechnic</span> <br>Institute</h1>
                        <?endif;?>
                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['0','25','35','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','80']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
                         data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption"
                         data-x="['left','left','left','left']" data-hoffset="['192','217','227','15']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['205','205','210','155']"
                         data-transform_idle="o:1;"
                         data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                         data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
                         data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
                         data-start="3000"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on">
                        <!---<a href="#" class="buy-button p-color-bg">O'tish</a>---->
                    </div>
                </li>
            </ul>
        </div>
    </div><!-- END REVOLUTION SLIDER -->
</div> <!--  /#banner -->

<div class="main-post-cat">


    <?php


    $cats = get_categories( array(
        'taxonomy'     => 'category',
        'type'         => 'post',
        'child_of'     => 0,
        'parent'       => 72,
        'orderby'      => 'name',
        'order'        => 'ASC',
        'hide_empty'   => 1,
        'hierarchical' => 1,
        'exclude'      => '',
        'include'      => '',
        'number'       => 0,
        'pad_counts'   => false,
    ) );

    //dd($cats);

    ?>
    <!----type--category-public-events----->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <ul class="nav nav-tabs" role="tablist">
                        <?php
                        foreach($cats as $cat){
                            if($cat->slug == 'ilmiyang'){
                                echo "<li role='presentation' class='active'><a href='#".$cat->slug."'  role='tab' data-toggle='tab'>".$cat->name."</a></li>";
                            }else{
                                echo "<li role='presentation'><a href='#".$cat->slug."'  role='tab' data-toggle='tab'>".$cat->name."</a></li>";
                            }
                        }
                        ?>
                    </ul>
                    <!-- Tab panes -->

                    <div class="tab-content">
                        <?
                        foreach($cats as $catname){
                            switch($catname->slug){
                                case 'ilmiyang':
                                    echo "<div role='tabpanel' class='tab-pane active' id='".$catname->slug."'>";
                                    echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                    echo "<div class='container'>";
                                    echo "<div class='post-wrapper row'>";

                                    $posts = getAllPosts(3,$catname->term_id);
                                    foreach($posts as $thepost){

                                        $post_gets_days = get_the_date( 'd',$thepost);;
                                        $get_month = get_the_date( 'M',$thepost );
                                        $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                        $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                        $post_link = get_site_url()."/?p=".$thepost->ID;
                                        $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";

                                        //dd($thepost);

                                        ?>

                                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                            <div class="img-holder">
                                                <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                <div class="out-img-size">
                                                    <?php
                                                    $image = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    if(!empty($image)){
                                                        echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    }else{
                                                        echo $nophoto;
                                                    }
                                                    ?>
                                                </div><!---out-img-size-->
                                                <a href="<?=$post_link?>" class="tran4s"></a>
                                            </div>
                                            <div class="text-wrapper">
                                                <div class="text tran4s">
                                                    <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                    <p><?=$cutted_post?></p>
                                                </div> <!-- /.text -->
                                            </div> <!-- /.text-wrapper -->
                                        </div> <!-- /.single-post -->

                                        <?
                                    }

                                    echo "</div>";

                                    if($sitelang == "uz"):
                                        echo '<a href="https://www.jizpi.uz/ilmiyang/" class="myButton">Hammasini ko"rish</a></div>';
                                    elseif($sitelang == "ru"):
                                        echo '<a href="https://www.jizpi.uz/ru/ilmiyang/" class="myButton">Посмотреть все</a></div>';
                                    elseif($sitelang == "en"):
                                    echo '<a href="https://www.jizpi.uz/en/ilmiyang/" class="myButton">View all</a></div>';
                                    endif;
                                    echo "</div>";
                                    echo "</div>";
                                    break;
                                case 'marifiy-ishlar':
                                    echo "<div role='tabpanel' class='tab-pane' id='".$catname->slug."'>";
                                    echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                    echo "<div class='container'>";
                                    echo "<div class='post-wrapper row'>";
                                    $posts = getAllPosts(3,$catname->term_id);
                                    foreach($posts as $thepost){
                                        $post_gets_days = get_the_date( 'd',$thepost);;
                                        $get_month = get_the_date( 'M',$thepost );
                                        $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                        $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                        $post_link = get_site_url()."/?p=".$thepost->ID;
                                        $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                        //dd($thepost);

                                        ?>

                                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                            <div class="img-holder">
                                                <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                <div class="out-img-size">
                                                    <?php
                                                    $image = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    if(!empty($image)){
                                                        echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    }else{
                                                        echo $nophoto;
                                                    }
                                                    ?>
                                                </div><!---out-img-size-->
                                                <a href="<?=$post_link?>" class="tran4s"></a>
                                            </div>
                                            <div class="text-wrapper">
                                                <div class="text tran4s">
                                                    <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                    <p><?=$cutted_post?></p>
                                                </div> <!-- /.text -->
                                            </div> <!-- /.text-wrapper -->
                                        </div> <!-- /.single-post -->

                                        <?
                                    }

                                    echo "</div>";

                                    if($sitelang == "uz"):
                                        echo '<a href="https://www.jizpi.uz/marifiy-ishlar" class="myButton">Hammasini ko"rish</a></div>';
                                    elseif($sitelang == "ru"):
                                        echo '<a href="https://www.jizpi.uz/ru/marifiy-ishlar/" class="myButton">Посмотреть все</a></div>';
                                    elseif($sitelang == "en"):
                                        echo '<a href="https://www.jizpi.uz/en/marifiy-ishlar/" class="myButton">View all</a></div>';
                                    endif;

                                    echo "</div>";
                                    echo "</div>";
                                    break;
                                case 'moddiy-taminot':
                                    echo "<div role='tabpanel' class='tab-pane ' id='".$catname->slug."'>";
                                    echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                    echo "<div class='container'>";
                                    echo "<div class='post-wrapper row'>";

                                    $posts = getAllPosts(3,$catname->term_id);
                                    foreach($posts as $thepost){

                                        $post_gets_days = get_the_date( 'd',$thepost);;
                                        $get_month = get_the_date( 'M',$thepost );
                                        $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                        $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                        $post_link = get_site_url()."/?p=".$thepost->ID;
                                        $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                        //dd($thepost);

                                        ?>

                                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                            <div class="img-holder">
                                                <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                <div class="out-img-size">
                                                    <?php
                                                    $image = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    if(!empty($image)){
                                                        echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    }else{
                                                        echo $nophoto;
                                                    }
                                                    ?>
                                                </div><!---out-img-size-->
                                                <a href="<?=$post_link?>" class="tran4s"></a>
                                            </div>
                                            <div class="text-wrapper">
                                                <div class="text tran4s">
                                                    <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                    <p><?=$cutted_post?></p>
                                                </div> <!-- /.text -->
                                            </div> <!-- /.text-wrapper -->
                                        </div> <!-- /.single-post -->

                                        <?
                                    }

                                    echo "</div>";

                                    if($sitelang == "uz"):
                                        echo '<a href="https://www.jizpi.uz/moddiy-taminot/" class="myButton">Hammasini ko"rish</a></div>';
                                    elseif($sitelang == "ru"):
                                        echo '<a href="https://www.jizpi.uz/ru/moddiy-taminot/" class="myButton">Посмотреть все</a></div>';
                                    elseif($sitelang == "en"):
                                        echo '<a href="https://www.jizpi.uz/en/moddiy-taminot/" class="myButton">View all</a></div>';
                                    endif;

                                    echo "</div>";
                                    echo "</div>";
                                    break;
                                case 'uquvjar':
                                    echo "<div role='tabpanel' class='tab-pane ' id='".$catname->slug."'>";
                                    echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                    echo "<div class='container'>";
                                    echo "<div class='post-wrapper row'>";

                                    $posts = getAllPosts(3,$catname->term_id);
                                    foreach($posts as $thepost){

                                        $post_gets_days = get_the_date( 'd',$thepost);;
                                        $get_month = get_the_date( 'M',$thepost );
                                        $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                        $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                        $post_link = get_site_url()."/?p=".$thepost->ID;
                                        $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                        //dd($thepost);

                                        ?>

                                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                            <div class="img-holder">
                                                <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                <div class="out-img-size">
                                                    <?php
                                                    $image = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    if(!empty($image)){
                                                        echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    }else{
                                                        echo $nophoto;
                                                    }
                                                    ?>
                                                </div><!---out-img-size-->
                                                <a href="<?=$post_link?>" class="tran4s"></a>
                                            </div>
                                            <div class="text-wrapper">
                                                <div class="text tran4s">
                                                    <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                    <p><?=$cutted_post?></p>
                                                </div> <!-- /.text -->
                                            </div> <!-- /.text-wrapper -->
                                        </div> <!-- /.single-post -->

                                        <?
                                    }

                                    echo "</div>";

                                    if($sitelang == "uz"):
                                        echo '<a href="https://www.jizpi.uz/uquvjar/" class="myButton">Hammasini ko"rish</a></div>';
                                    elseif($sitelang == "ru"):
                                        echo '<a href="https://www.jizpi.uz/ru/uquvjar/" class="myButton">Посмотреть все</a></div>';
                                    elseif($sitelang == "en"):
                                        echo '<a href="https://www.jizpi.uz/en/uquvjar/" class="myButton">View all</a></div>';
                                    endif;

                                    echo "</div>";
                                    echo "</div>";
                                    break;
                                case 'xalqaro-aloqalar':
                                    echo "<div role='tabpanel' class='tab-pane ' id='".$catname->slug."'>";
                                    echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                    echo "<div class='container'>";
                                    echo "<div class='post-wrapper row'>";

                                    $posts = getAllPosts(3,$catname->term_id);
                                    foreach($posts as $thepost){

                                        $post_gets_days = get_the_date( 'd',$thepost);;
                                        $get_month = get_the_date( 'M',$thepost );
                                        $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                        $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                        $post_link = get_site_url()."/?p=".$thepost->ID;
                                        $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                        //dd($thepost);

                                        ?>

                                        <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                            <div class="img-holder">
                                                <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                <div class="out-img-size">
                                                    <?php
                                                    $image = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    if(!empty($image)){
                                                        echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                    }else{
                                                        echo $nophoto;
                                                    }
                                                    ?>
                                                </div><!---out-img-size-->
                                                <a href="<?=$post_link?>" class="tran4s"></a>
                                            </div>
                                            <div class="text-wrapper">
                                                <div class="text tran4s">
                                                    <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                    <p><?=$cutted_post?></p>
                                                </div> <!-- /.text -->
                                            </div> <!-- /.text-wrapper -->
                                        </div> <!-- /.single-post -->

                                        <?
                                    }

                                    echo "</div>";

                                    if($sitelang == "uz"):
                                        echo '<a href="https://www.jizpi.uz/xalqaro-aloqalar/" class="myButton">Hammasini ko"rish</a></div>';
                                    elseif($sitelang == "ru"):
                                        echo '<a href="https://www.jizpi.uz/ru/xalqaro-aloqalar/" class="myButton">Посмотреть все</a></div>';
                                    elseif($sitelang == "en"):
                                        echo '<a href="https://www.jizpi.uz/en/xalqaro-aloqalar/" class="myButton">View all</a></div>';
                                    endif;

                                    echo "</div>";
                                    echo "</div>";
                                    break;

                            }
                        }
                        ?>
                    </div>
                </div><!---pub-cat-type----end----->
            </div>
        </div>
    </div>

</div><!------main-post-cat------->



<!-- Manage Section _________________________ -->
<div class="theme-manage-area">
    <div class="container">
        <div class="item-part float-left item1 p-color-bg">
            <?if($sitelang == "uz"):?>
                <h3><i class="fa fa-university" aria-hidden="true"></i> Institutning ijro intizom holatini yaxshilash</h3>
                <?elseif($sitelang == "ru"):?>
                <h3><i class="fa fa-university" aria-hidden="true"></i> Совершенствование исполнительной дисциплины института</h3>
                <?elseif($sitelang == "en"):?>
                <h3><i class="fa fa-university" aria-hidden="true"></i> Improvement of the executive discipline of the Institute</h3>
                <?endif;?>

            <?if($sitelang == "uz"):?>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 0 (371) 226-45-47</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 0 (371) 226-46-05</p>
                <p>Ergashova D.F.</p>
            <?elseif($sitelang == "ru"):?>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 0 (371) 226-45-47</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 0 (371) 226-46-05</p>
                <p>Эргашова Д.Ф.</p>
            <?elseif($sitelang == "en"):?>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 0 (371) 226-45-47</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> 0 (371) 226-46-05</p>
                <p>Ergashova D.F.</p>
            <?endif;?>
            <!--<a href="course-details.html" class="tran3s">O'tish <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>--->
        </div>
        <div class="item-part float-left item2">
            <img src="<?php echo get_template_directory_uri()?>/images/home/1.jpg" alt="Image">
        </div>
        <div class="item-part float-left item1 p-color-bg">

            <?if($sitelang == "uz"):?>
                <h3><i class="fa fa-book" aria-hidden="true"></i>Rektor elektron qabulxonasi</h3>
                <a href="http://rektor.djizpi.uz/">O'tish</a>
            <?elseif($sitelang == "ru"):?>
                <h3><i class="fa fa-book" aria-hidden="true"></i>Электронная приемная ректора</h3>
                <a href="http://rektor.djizpi.uz/">Перейти</a>
            <?elseif($sitelang == "en"):?>
                <h3><i class="fa fa-book" aria-hidden="true"></i> Rector's electronic reception</h3>
                <a href="http://rektor.djizpi.uz/">Transition</a>
            <?endif;?>
            <!---<a href="course-details.html" class="tran3s">O'tish<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>--->
        </div>
    </div> <!-- /.container -->
</div> <!-- /.theme-manage-area -->
<!-- Welcome Section ___________________________ -->
<div class="welcome-section">
    <div class="container">
        <div class="section-title wow fadeInUp">
            <?if($sitelang == "uz"):?>
                <h2 class="p-color">Jizzax politexnika institutiga xush kelibsiz</h2>
                <h5>talaba bilan ajoyib muvaffaqiyat</h5>
            <?elseif($sitelang == "ru"):?>
                <h2 class="p-color">Добро пожаловать в Джизакский политехнический институт</h2>
                <h5>знания  для  себя,  достижения  -  для  процветания  узбекистана</h5>
            <?elseif($sitelang == "en"):?>
                <h2 class="p-color">Welcome to Jizzakh Polytechnic Institute</h2>
                <h5>great success with the student</h5>
            <?endif;?>

        </div> <!-- /.section-title -->

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
                <?if($sitelang == "uz"):?>
                    <h3><i class="fa fa-building-o" aria-hidden="true"></i> Institut binolar</h3>
                    <p>
                        Institut hududi 19100 m2 maydonga ega bo’lib, unda 1500 o’rinli asosiy bino, 1000 o’rinli yangi o’quv –laboratoriya binosi, sport zali va 2 ta mini futbol maydoni, katta futbol maydoni, tennis, yengil atletika maydonlari joylashgan.
                    </p>
                <?elseif($sitelang == "ru"):?>
                    <h3><i class="fa fa-building-o" aria-hidden="true"></i> Институт сегодня</h3>
                    <p>
                        Территория института  19100 м2.  Главное здание на 1500 мест, новое учебно–лабораторное здание на 1000 мест, современный информационно ресурсный центр, спортивный городок включающий в себя спортивный зал, 2 мини-футбольных поля, футбольное поле, теннисный корт и  легкоатлетическая площадки.
                    </p>
                <?elseif($sitelang == "en"):?>
                    <h3><i class="fa fa-building-o" aria-hidden="true"></i> Institute buildings</h3>
                    <p>
                        The territory of the institute has an area of 19100 m2, which includes the main building with 1500 seats, a new training and laboratory building with 1000 seats, a gym and 2 mini football fields, a large football field, tennis, athletics fields.
                    </p>
                <?endif;?>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
                <?if($sitelang == "uz"):?>
                    <h3><i class="fa fa-tags" aria-hidden="true"></i>Biz haqimizda</h3>
                    <p>
                        Institutda 5 ta fakultet, 22 ta kafedra mavjud bo’lib ularda 23 ta ta’lim yo’nalishida bakalavrlar, 6 ta mutaxassislik bo’yicha magistrlar, 6 ta sirtqi ta’lim, 4 ta ixtisosliklar bo’yicha doktorantlar malakali professor-o’qituvchilar tomonidan dars mashg’ulotlari olib borilib yetuk mutaxasislar yetishib chiqarilmoqda. Hozirgi kunda institutda 4969 ta Bakalavrlar, 41 ta magistrlar, 275 ta sirtqi talim talabalari tahsil olib kelishmoqda.
                    </p>
                <?elseif($sitelang == "ru"):?>
                    <h3><i class="fa fa-tags" aria-hidden="true"></i>О нас</h3>
                    <p>
                        В настоящее время в институте функционирует 5 факультетов и 24 кафедры с 23 специальностями бакалавриата, магистратура по 6 специальностям, 6 заочных курсов и 4 докторанта по 4 специальностям.   Высококвалифицированный профессорско-преподавательский состав обучает  и воспитывает будущих специалистов. В настоящее время в институте обучаются 4969 студентов бакалавриата, 97 магистрантов и 275 студентов заочного отделения.
                    </p>
                <?elseif($sitelang == "en"):?>
                    <h3><i class="fa fa-tags" aria-hidden="true"></i>About us</h3>
                    <p>
                        The institute has 5 faculties and 22 departments with 23 undergraduate specialties, 6 masters in specialties, 6 correspondence courses and 4 doctoral students in 4 specialties. At the Institute, highly qualified professors and teachers conduct classes and educate future specialists. Currently, 4969 bachelors, 41 masters and 275 correspondence students study at the institute.
                    </p>
                <?endif;?>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInUp">
                <?if($sitelang == "uz"):?>
                    <h3><i class="fa fa-diamond" aria-hidden="true"></i>Talabalar Turar va dam olish joyi</h3>
                    <p>
                        So’ngi yillarda yangi rekonstruksiya qilingan. 400 o’rinli talabalar turar joyi, texnopark, Axborot resurs markazi, 3 ta oshxona, bufet va fitobarlar mavjud bo’lib, ular bugungi kunda 5,5 ming kishilik jamoa a’zolarining o’quv va ilmiy faoliyat olib borishlarida xizmat qilmoqda.
                    </p>
                <?elseif($sitelang == "ru"):?>
                    <h3><i class="fa fa-diamond" aria-hidden="true"></i> Общежитие и места для отдыха студентов</h3>
                    <p>
                        Студенты института проживают в современном модернизированном общежитии на 400 мест.Во благо научной и учебной деятельности студентов в институте функционирует технопарк,спортивный городок, информационно-ресурсный центр, 3 cтоловых, буфеты и фитобары.
                    </p>
                <?elseif($sitelang == "en"):?>
                    <h3><i class="fa fa-diamond" aria-hidden="true"></i>Student Lodging and Recreation</h3>
                    <p>
                        In recent years, the building of the institute has been reconstructed again. There is a student dormitory for 400 people, an industrial park, an information and resource center, 3 dining rooms, buffets and phytobars, which today serve the benefit of the educational and scientific activities of students and the faculty of the institute.
                    </p>
                <?endif;?>


            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.welcome-section -->

<!-- Latest News ___________________________ -->
<div class="latest-news wow fadeInUp theme-bg-color bg-back">
    <div class="container">
        <div class="theme-title">
            <?if($sitelang == "uz"):?>
                <h2>Ommaviy tadbirlar</h2>
                <p>Ta'lim yangiliklari, so'nggi yangiliklar tasmasi</p>
            <?elseif($sitelang == "ru"):?>
                <h2>Публичные мероприятия</h2>
                <p>Образовательные новости, последние новости</p>
            <?elseif($sitelang == "en"):?>
                <h2>Public events</h2>
                <p>Educational news, the latest news feed</p>
            <?endif;?>


        </div>
        <?php


        $mains_cats = get_categories( array(
            'taxonomy'     => 'category',
            'type'         => 'post',
            'child_of'     => 0,
            'parent'       => 52,
            'orderby'      => 'name',
            'order'        => 'ASC',
            'hide_empty'   => 1,
            'hierarchical' => 1,
            'exclude'      => '',
            'include'      => '',
            'number'       => 0,
            'pad_counts'   => false,
        ) );

        //dd($cats);

        ?>
        <!----type--category-public-events----->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
                            foreach($mains_cats as $main_cat){
                                echo "<li role='presentation'><a href='#".$main_cat->slug."'  role='tab' data-toggle='tab'>".$main_cat->name."</a></li>";
                            }
                            ?>
                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">
                            <?
                            foreach($mains_cats as $main_catname){
                                switch($main_catname->slug){
                                    case 'davra-suhbatlari':
                                        echo "<div role='tabpanel' class='tab-pane active' id='".$main_catname->slug."'>";
                                        echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                        echo "<div class='container'>";
                                        echo "<div class='post-wrapper row'>";

                                        $mains_posts = getAllPosts(3,$main_catname->term_id);
                                        foreach($mains_posts as $thepost){

                                            $post_gets_days = get_the_date( 'd',$thepost);;
                                            $get_month = get_the_date( 'M',$thepost );
                                            $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                            $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                            $post_link = get_site_url()."/?p=".$thepost->ID;
                                            $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                            //dd($thepost);

                                            ?>

                                            <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="img-holder">
                                                    <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                    <div class="out-img-size">
                                                        <?php
                                                        $images = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        if(!empty($images)){
                                                            echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        }else{
                                                            echo $nophoto;
                                                        }
                                                        ?>
                                                    </div><!---out-img-size-->
                                                    <a href="<?=$post_link?>" class="tran4s"></a>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="text tran4s">
                                                        <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                        <p><?=$cutted_post?></p>
                                                    </div> <!-- /.text -->
                                                </div> <!-- /.text-wrapper -->
                                            </div> <!-- /.single-post -->

                                            <?
                                        }

                                        echo "</div>";

                                        if($sitelang == "uz"):
                                            echo '<a href="https://www.jizpi.uz/davra-suhbatlari/" class="myButton">Hammasini ko"rish</a></div>';
                                        elseif($sitelang == "ru"):
                                            echo '<a href="https://www.jizpi.uz/ru/davra-suhbatlari/" class="myButton">Посмотреть все</a></div>';
                                        elseif($sitelang == "en"):
                                            echo '<a href="https://www.jizpi.uz/en/davra-suhbatlari/" class="myButton">View all</a></div>';
                                        endif;

                                        echo "</div>";
                                        echo "</div>";
                                        break;
                                    case 'matbuot-konferensiyalari':
                                        echo "<div role='tabpanel' class='tab-pane' id='".$main_catname->slug."'>";
                                        echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                        echo "<div class='container'>";
                                        echo "<div class='post-wrapper row'>";
                                        $mains_posts = getAllPosts(3,$main_catname->term_id);
                                        foreach($mains_posts as $thepost){
                                            $post_gets_days = get_the_date( 'd',$thepost);;
                                            $get_month = get_the_date( 'M',$thepost );
                                            $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                            $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                            $post_link = get_site_url()."/?p=".$thepost->ID;
                                            $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                            //dd($thepost);

                                            ?>

                                            <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="img-holder">
                                                    <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                    <div class="out-img-size">
                                                        <?php
                                                        $images = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        if(!empty($images)){
                                                            echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        }else{
                                                            echo $nophoto;
                                                        }
                                                        ?>
                                                    </div><!---out-img-size-->
                                                    <a href="<?=$post_link?>" class="tran4s"></a>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="text tran4s">
                                                        <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                        <p><?=$cutted_post?></p>
                                                    </div> <!-- /.text -->
                                                </div> <!-- /.text-wrapper -->
                                            </div> <!-- /.single-post -->

                                            <?
                                        }

                                        echo "</div>";
                                            if($sitelang == "uz"):
                                                echo '<a href="https://www.jizpi.uz/matbuot-konferensiyalari/" class="myButton">Hammasini ko"rish</a></div>';
                                            elseif($sitelang == "ru"):
                                                echo '<a href="https://www.jizpi.uz/ru/matbuot-konferensiyalari/" class="myButton">Посмотреть все</a></div>';
                                            elseif($sitelang == "en"):
                                                echo '<a href="https://www.jizpi.uz/en/matbuot-konferensiyalari/" class="myButton">View all</a></div>';
                                            endif;
                                        echo "</div>";
                                        echo "</div>";
                                        break;
                                    case 'rasmiy-tashriflar':
                                        echo "<div role='tabpanel' class='tab-pane' id='".$main_catname->slug."'>";
                                        echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                        echo "<div class='container'>";
                                        echo "<div class='post-wrapper row'>";

                                        $mains_posts = getAllPosts(3,$main_catname->term_id);
                                        foreach($mains_posts as $thepost){

                                            $post_gets_days = get_the_date( 'd',$thepost);;
                                            $get_month = get_the_date( 'M',$thepost );
                                            $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                            $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                            $post_link = get_site_url()."/?p=".$thepost->ID;
                                            $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                            //dd($thepost);

                                            ?>

                                            <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="img-holder">
                                                    <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                    <div class="out-img-size">
                                                        <?php
                                                        $images = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        if(!empty($images)){
                                                            echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        }else{
                                                            echo $nophoto;
                                                        }
                                                        ?>
                                                    </div><!---out-img-size-->
                                                    <a href="<?=$post_link?>" class="tran4s"></a>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="text tran4s">
                                                        <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                        <p><?=$cutted_post?></p>
                                                    </div> <!-- /.text -->
                                                </div> <!-- /.text-wrapper -->
                                            </div> <!-- /.single-post -->

                                            <?
                                        }

                                        echo "</div>";
                                        if($sitelang == "uz"):
                                            echo '<a href="https://www.jizpi.uz/rasmiy-tashriflar/" class="myButton">Hammasini ko"rish</a></div>';
                                        elseif($sitelang == "ru"):
                                            echo '<a href="https://www.jizpi.uz/ru/rasmiy-tashriflar/" class="myButton">Посмотреть все</a></div>';
                                        elseif($sitelang == "en"):
                                            echo '<a href="https://www.jizpi.uz/en/rasmiy-tashriflar/" class="myButton">View all</a></div>';
                                        endif;
                                        echo "</div>";
                                        echo "</div>";
                                        break;
                                    case 'uchrashuvlar':
                                        echo "<div role='tabpanel' class='tab-pane' id='".$main_catname->slug."'>";
                                        echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                        echo "<div class='container'>";
                                        echo "<div class='post-wrapper row'>";

                                        $mains_posts = getAllPosts(3,$main_catname->term_id);
                                        foreach($mains_posts as $thepost){

                                            $post_gets_days = get_the_date( 'd',$thepost);;
                                            $get_month = get_the_date( 'M',$thepost );
                                            $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                            $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                            $post_link = get_site_url()."/?p=".$thepost->ID;
                                            $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                            //dd($thepost);

                                            ?>

                                            <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="img-holder">
                                                    <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                    <div class="out-img-size">
                                                        <?php
                                                        $images = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        if(!empty($images)){
                                                            echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        }else{
                                                            echo $nophoto;
                                                        }
                                                        ?>
                                                    </div><!---out-img-size-->
                                                    <a href="<?=$post_link?>" class="tran4s"></a>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="text tran4s">
                                                        <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                        <p><?=$cutted_post?></p>
                                                    </div> <!-- /.text -->
                                                </div> <!-- /.text-wrapper -->
                                            </div> <!-- /.single-post -->

                                            <?
                                        }

                                        echo "</div>";
                                            if($sitelang == "uz"):
                                                echo '<a href="https://www.jizpi.uz/uchrashuvlar/" class="myButton">Hammasini ko"rish</a></div>';
                                            elseif($sitelang == "ru"):
                                                echo '<a href="https://www.jizpi.uz/ru/uchrashuvlar/" class="myButton">Посмотреть все</a></div>';
                                            elseif($sitelang == "en"):
                                                echo '<a href="https://www.jizpi.uz/en/uchrashuvlar/" class="myButton">View all</a></div>';
                                            endif;
                                        echo "</div>";
                                        echo "</div>";
                                        break;
                                    case 'yigilishlar':
                                        echo "<div role='tabpanel' class='tab-pane' id='".$main_catname->slug."'>";
                                        echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                        echo "<div class='container'>";
                                        echo "<div class='post-wrapper row'>";

                                        $mains_posts = getAllPosts(3,$main_catname->term_id);
                                        foreach($mains_posts as $thepost){

                                            $post_gets_days = get_the_date( 'd',$thepost);;
                                            $get_month = get_the_date( 'M',$thepost );
                                            $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                            $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                            $post_link = get_site_url()."/?p=".$thepost->ID;
                                            $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                            //dd($thepost);

                                            ?>

                                            <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="img-holder">
                                                    <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                    <div class="out-img-size">
                                                        <?php
                                                        $images = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        if(!empty($images)){
                                                            echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        }else{
                                                            echo $nophoto;
                                                        }
                                                        ?>
                                                    </div><!---out-img-size-->
                                                    <a href="<?=$post_link?>" class="tran4s"></a>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="text tran4s">
                                                        <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                        <p><?=$cutted_post?></p>
                                                    </div> <!-- /.text -->
                                                </div> <!-- /.text-wrapper -->
                                            </div> <!-- /.single-post -->

                                            <?
                                        }

                                        echo "</div>";
                                            if($sitelang == "uz"):
                                                echo '<a href="https://www.jizpi.uz/yigilishlar/" class="myButton">Hammasini ko"rish</a></div>';
                                            elseif($sitelang == "ru"):
                                                echo '<a href="https://www.jizpi.uz/ru/yigilishlar/" class="myButton">Посмотреть все</a></div>';
                                            elseif($sitelang == "en"):
                                                echo '<a href="https://www.jizpi.uz/en/yigilishlar/" class="myButton">View all</a></div>';
                                            endif;
                                        echo "</div>";
                                        echo "</div>";
                                        break;
                                    case 'seminarlar':
                                        echo "<div role='tabpanel' class='tab-pane' id='".$main_catname->slug."'>";
                                        echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                        echo "<div class='container'>";
                                        echo "<div class='post-wrapper row'>";

                                        $mains_posts = getAllPosts(3,$main_catname->term_id);
                                        foreach($mains_posts as $thepost){

                                            $post_gets_days = get_the_date( 'd',$thepost);;
                                            $get_month = get_the_date( 'M',$thepost );
                                            $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                            $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                            $post_link = get_site_url()."/?p=".$thepost->ID;
                                            $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                            //dd($thepost);

                                            ?>

                                            <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="img-holder">
                                                    <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                    <div class="out-img-size">
                                                        <?php
                                                        $images = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        if(!empty($images)){
                                                            echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        }else{
                                                            echo $nophoto;
                                                        }
                                                        ?>
                                                    </div><!---out-img-size-->
                                                    <a href="<?=$post_link?>" class="tran4s"></a>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="text tran4s">
                                                        <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                        <p><?=$cutted_post?></p>
                                                    </div> <!-- /.text -->
                                                </div> <!-- /.text-wrapper -->
                                            </div> <!-- /.single-post -->

                                            <?
                                        }

                                        echo "</div>";
                                            if($sitelang == "uz"):
                                                echo '<a href="https://www.jizpi.uz/seminarlar/" class="myButton">Hammasini ko"rish</a></div>';
                                            elseif($sitelang == "ru"):
                                                echo '<a href="https://www.jizpi.uz/ru/seminarlar/" class="myButton">Посмотреть все</a></div>';
                                            elseif($sitelang == "en"):
                                                echo '<a href="https://www.jizpi.uz/en/seminarlar/" class="myButton">View all</a></div>';
                                            endif;
                                        echo "</div>";
                                        echo "</div>";
                                        break;
                                    case 'sport-tadbirlari':
                                        echo "<div role='tabpanel' class='tab-pane' id='".$main_catname->slug."'>";
                                        echo "<div class='latest-news wow fadeInUp blog-v1'>";
                                        echo "<div class='container'>";
                                        echo "<div class='post-wrapper row'>";

                                        $mains_posts = getAllPosts(3,$main_catname->term_id);
                                        foreach($mains_posts as $thepost){

                                            $post_gets_days = get_the_date( 'd',$thepost);;
                                            $get_month = get_the_date( 'M',$thepost );
                                            $cutted_title = mb_substr($thepost->post_title, 0, 150);
                                            $cutted_post = mb_substr($thepost->post_content, 0, 0);
                                            $post_link = get_site_url()."/?p=".$thepost->ID;
                                            $nophoto = "<img src='https://www.jizpi.uz/wp-content/uploads/2019/12/nophoto.jpg'/>";
                                            //dd($thepost);

                                            ?>

                                            <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                <div class="img-holder">
                                                    <div class="date wow fadeInUp p-color-bg " id="img-size"><?=$post_gets_days?><span><?=$get_month?></span></div>
                                                    <div class="out-img-size">
                                                        <?php
                                                        $images = get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        if(!empty($images)){
                                                            echo get_the_post_thumbnail( $thepost->ID,array(470, 350));
                                                        }else{
                                                            echo $nophoto;
                                                        }
                                                        ?>
                                                    </div><!---out-img-size-->
                                                    <a href="<?=$post_link?>" class="tran4s"></a>
                                                </div>
                                                <div class="text-wrapper">
                                                    <div class="text tran4s">
                                                        <a href="<?=$post_link?>"><?=$cutted_title."\n"?></a>
                                                        <p><?=$cutted_post?></p>
                                                    </div> <!-- /.text -->
                                                </div> <!-- /.text-wrapper -->
                                            </div> <!-- /.single-post -->

                                            <?
                                        }

                                        echo "</div>";
                                            if($sitelang == "uz"):
                                                echo '<a href="https://www.jizpi.uz/en/sport-tadbirlari/" class="myButton">Hammasini ko"rish</a></div>';
                                            elseif($sitelang == "ru"):
                                                echo '<a href="https://www.jizpi.uz/en/sport-tadbirlari/" class="myButton">Посмотреть все</a></div>';
                                            elseif($sitelang == "en"):
                                                echo '<a href="https://www.jizpi.uz/en/sport-tadbirlari/" class="myButton">View all</a></div>';
                                            endif;
                                        echo "</div>";
                                        echo "</div>";
                                        break;

                                }
                            }
                            ?>
                        </div>
                    </div><!---pub-cat-type----end----->
                </div>
            </div>
        </div>


        <!---pub-cat-type----end----->
    </div> <!-- /.container -->
</div> <!-- /.latest-news -->

<!-- Popular Course _________________________ -->
<div class="popular-course wow fadeInUp theme-bg-color">
    <div class="container">
        <?if($sitelang == "uz"):?>
            <h2>FAKULTETLAR</h2>
        <?elseif($sitelang == "ru"):?>
            <h2>ФАКУЛЬТЕТЫ</h2>
        <?elseif($sitelang == "en"):?>
            <h2>FACULTIES</h2>
        <?endif;?>

        <div class="row">
            <div class="theme-slider course-item-wrapper">
                <div class="item hvr-float-shadow">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri()?>/images/home/AvtoTrans.jpg" alt="Image"></div>
                    <div class="text">
                        <?if($sitelang == "uz"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/avtotransport/">AVTOTRANSPORT</a></h4>
                            <p>
                                «Avtotransport» fakultеti 2014 yil  12 iyundagi «Vazirlar Maxkamasining Jizzax politexnika instituti faoliyatini takomillashtirish to`g`risida 2012 yil 29 iyundagi 187-son qaroriga o`zgartirish kiritish haqida» 157-son qarori tashkil etildi.
                            </p>
                        <?elseif($sitelang == "ru"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/avtotransport/">Автотранспорт</a></h4>
                            <p>
                                Факультет «Автотранспорт» основан на основании постановления №157 от 12 июня 2014 года «О внесении изменений в решение Кабинета Министров о совершенствовании деятельности Джизакского политехнического института от 29 июня 2012 года № 187».
                            </p>
                        <?elseif($sitelang == "en"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/avtotransport/">Motor transport</a></h4>
                            <p>
                                The faculty of "Automobile transport" has made the decision №157 from June 12, 2014 "About modification of the Cabinet of Ministers decision on improvement of activity of the Jizzakh polytechnic institute from June 29, 2012 № 187".
                            </p>
                        <?endif;?>

                    </div> <!-- /.text -->
                </div> <!-- /.item -->

                <div class="item hvr-float-shadow">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri()?>/images/home/industry.jpg" alt="Image"></div>
                    <div class="text">
                        <?if($sitelang == "uz"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/sanoat-texnologiyalari/">Sanoat texnologiyalari</a></h4>
                            <p>
                                “Sanoat tеxnologiyalari” fakultеti 2014 yil  12 iyundagi “Vazirlar Maxkamasining “Jizzax politexnika instituti faoliyatini takomillashtirish to`g`risida” 2012 yil 29 iyundagi 187-son qaroriga o`zgartirish kiritish haqida” 157-son qarori tashkil etildi.
                            </p>
                        <?elseif($sitelang == "ru"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/sanoat-texnologiyalari/">Промышленные технологии</a></h4>
                            <p>
                                Факультет «Промышленные технологии» был основан в состветствии с постановлением Кабинета Министров от 12 июня 2014 года № 157 "О внесении изменений в решение Кабинета Министров О совершенствовании деятельности Джизакского политехнического института" от 29 июня 2012 года № 187.
                            </p>
                        <?elseif($sitelang == "en"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/sanoat-texnologiyalari/">Industrial Technology</a></h4>
                            <p>
                                The faculty of "Industrial Technology" has made the decision of the Cabinet of Ministers from June 12, 2014 № 157 "About modification of the decision of the Cabinet of Ministers" On improvement of activity of the Jizzakh Polytechnic Institute "dated June 29, 2012 № 187.
                            </p>
                        <?endif;?>

                    </div> <!-- /.text -->
                </div> <!-- /.item -->

                <div class="item hvr-float-shadow">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri()?>/images/home/architect.jpg" alt="Image"></div>
                    <div class="text">
                        <?if($sitelang == "uz"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/arxitektura-va-qurilish/">Arxitektura va qurilish</a></h4>

                            <p>
                                «Arxitektura va qurilish» fakulteti 2014 yil  12 iyundagi «Vazirlar Maxkamasining Jizzax politexnika instituti faoliyatini takomillashtirish to‘g‘risida 2012 yil 29 iyundagi 187-son qaroriga o‘zgartirish kiritish haqida» 157-son qarori, shuningdek tashkil etildi.
                            </p>
                        <?elseif($sitelang == "ru"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/arxitektura-va-qurilish/">Архитектура и Строительство</a></h4>

                            <p>
                                Архитектурно-строительный факультет был создан на основании постановления Кабинета Министров от 12 июня 2014 года № 157 «О внесении изменений в постановление Кабинета Министров о совершенствовании деятельности Джизакского политехнического института от 29 июня 2012 года № 187».
                            </p>
                        <?elseif($sitelang == "en"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/arxitektura-va-qurilish/">Architecture and Construction</a></h4>

                            <p>
                                Architecture and Construction faculty was also created by the decision of the Cabinet of Ministers of June 12, 2014 No. 157 "On Amendments to the Resolution of the Cabinet of Ministers No. 187 of June 29, 2012 on Improvement of Jizzakh Polytechnic Institute".
                            </p>
                        <?endif;?>

                    </div> <!-- /.text -->
                </div> <!-- /.item -->

                <div class="item hvr-float-shadow">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri()?>/images/home/elkt.jpg" alt="Image"></div>
                    <div class="text">
                        <?if($sitelang == "uz"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/elektromexanika-va-radioelektronika/">Elektromexanika va radioelektronika</a></h4>

                            <p>
                                Oliy va o‘rta maxsus ta’lim vazirligining 2017-yil 9-senabrdagi  “O‘zbekiston Respublikasi vazirlar maxkamasining 2017-yil 5-sentabrdagi 699-son qarori ijrosini ta’minlash to‘g‘risida” gi 650-sonli buyrug‘iga asosan yangi  «Elektromexanika va radioelektronika» fakulteti tashkil topdi.
                            </p>
                        <?elseif($sitelang == "ru"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/elektromexanika-va-radioelektronika/">Электромеханика и радиоэлектроника</a></h4>

                            <p>
                                Факультет "Электромеханика и радиоэлектроника" основан на основании ПРИКАЗА №650 МИНИСТЕРСТВА ВЫСШЕГО И СРЕДНЕГО СПЕЦИАЛЬНОГО ОБРАЗОВАНИЯ РЕСПУБЛИКИ УЗБЕКИСТАН от 9 сентября 2017 года".
                            </p>
                        <?elseif($sitelang == "en"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/elektromexanika-va-radioelektronika/">Electromechanics and radio electronics</a></h4>

                            <p>
                                ORDER OF THE MINISTRY OF HIGHER AND SECONDARY SPECIAL EDUCATION OF THE REPUBLIC OF UZBEKISTAN from September 9, 2017 of No. 650 The new faculty of "Electromechanics and Radio Electronics" was formed.
                            </p>
                        <?endif;?>

                    </div> <!-- /.text -->
                </div> <!-- /.item -->

                <div class="item hvr-float-shadow">
                    <div class="img-holder"><img src="<?php echo get_template_directory_uri()?>/images/home/service.jpg" alt="Image"></div>
                    <div class="text">
                        <?if($sitelang == "uz"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/servis/">Servis</a></h4>

                            <p>
                                O’zbekiston Respublikasi Oliy va O’rta Maxsus ta’lim vazirligining 2017 yil 9-sentyabrdagi “O’zbekiston Respublikasi Vazirlar  Mahkamasining 2017 yil 5- sentyabrdagi 699-son qarori ijrosini ta’minlash to’g’risida” gi 650-son buyrug’iga asosan yangi  “SERVIS” fakulteti tashkil topdi.
                            </p>
                        <?elseif($sitelang == "ru"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/servis/">Сервис</a></h4>

                            <p>
                                Факультет "СЕРВИС" основан на основании ПРИКАЗА №650 МИНИСТЕРСТВА ВЫСШЕГО И СРЕДНЕГО СПЕЦИАЛЬНОГО ОБРАЗОВАНИЯ РЕСПУБЛИКИ УЗБЕКИСТАН от 9 сентября 2017 года.
                            </p>
                        <?elseif($sitelang == "en"):?>
                            <h4><a href="https://www.jizpi.uz/tuzilma/faculties/servis/">Service</a></h4>

                            <p>
                                ORDER OF THE MINISTRY OF HIGHER AND SECONDARY SPECIAL EDUCATION OF THE REPUBLIC OF UZBEKISTAN from September 9, 2017 of No. 650 About implementation of the decision of the Cabinet of Ministers of the Republic of Uzbekistan from September 5, 2017 of No. 699 "SERVIS" faculty has been formed.
                            </p>
                        <?endif;?>
                    </div> <!-- /.text -->
                </div> <!-- /.item -->
            </div> <!-- /.course-slider -->
        </div>
    </div> <!-- /.container -->
</div> <!-- /.popular-course -->



<div class="latest-news wow fadeInUp theme-bg-color bg-back">
    <div class="container">
        <div class="theme-title">
            <?if($sitelang == "uz"):?>
                <h2>Xalqaro grantlar</h2>
                <p>Chet davlatda o'qish uchun grantlar</p>
            <?elseif($sitelang == "ru"):?>
                <h2>Международные Гранты</h2>
                <p>Гранты для обучения за рубежом</p>
            <?elseif($sitelang == "en"):?>
                <h2>International Grants</h2>
                <p>Grants for Study Abroad</p>
            <?endif;?>


        </div>

        <div class="post-wrapper row">

            <?php
            //global $post; // не обязательно

            // 3 записей из рубрики 13
            $grantposts = get_posts( array(
                'category' => 69,
                'numberposts' => 3
            ) );

            foreach( $grantposts as $grpost ){
                //setup_postdata( $post );
                $dates = explode('-',$grpost->post_date);
                switch($dates[1]){
                    case '01':
                        $month = 'Yan';
                        if($sitelang == 'uz'){
                            $month = 'Yan';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Янв';
                        }elseif($sitelang == 'en') {
                            $month = 'Jan';
                        }
                    break;
                    case '02':
                        $month = 'Fev';
                        if($sitelang == 'uz'){
                            $month = 'Fev';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Фев';
                        }elseif($sitelang == 'en') {
                            $month = 'Feb';
                        }
                    break;
                    case '03':
                        $month = 'Mar';
                        if($sitelang == 'uz'){
                            $month = 'Mar';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Мар';
                        }elseif($sitelang == 'en') {
                            $month = 'Msr';
                        }
                    break;
                    case '04':
                        $month = 'Apr';
                        if($sitelang == 'uz'){
                            $month = 'Apr';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Апр';
                        }elseif($sitelang == 'en') {
                            $month = 'Apr';
                        }
                    break;
                    case '05':
                        $month = 'May';
                        if($sitelang == 'uz'){
                            $month = 'May';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Май';
                        }elseif($sitelang == 'en') {
                            $month = 'May';
                        }
                    break;
                    case '06':
                        $month = 'Iyu';
                        if($sitelang == 'uz'){
                            $month = 'Iyu';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Июн';
                        }elseif($sitelang == 'en') {
                            $month = 'Jun';
                        }
                    break;
                    case '07':
                        $month = 'Iyu';
                        if($sitelang == 'uz'){
                            $month = 'Iyu';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Июл';
                        }elseif($sitelang == 'en') {
                            $month = 'Jul';
                        }
                    break;
                    case '08':
                        $month = 'Avg';
                        if($sitelang == 'uz'){
                            $month = 'Avg';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Авг';
                        }elseif($sitelang == 'en') {
                            $month = 'Aug';
                        }
                    break;
                    case '09':
                        $month = 'Sen';
                        if($sitelang == 'uz'){
                            $month = 'Sen';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Сен';
                        }elseif($sitelang == 'en') {
                            $month = 'Sep';
                        }
                        break;
                    case '10':
                        $month = 'Okt';
                        if($sitelang == 'uz'){
                            $month = 'Okt';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Окт';
                        }elseif($sitelang == 'en'){
                            $month = 'Oct';
                        }
                    break;
                    case '11':
                        $month = 'Noy';
                        if($sitelang == 'uz'){
                            $month = 'Noy';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Ноя';
                        }elseif($sitelang == 'en') {
                            $month = 'Nov';
                        }
                        break;
                    case '12':
                        $month = 'Dek';
                        if($sitelang == 'uz'){
                            $month = 'Dek';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Дек';
                        }elseif($sitelang == 'en') {
                            $month = 'Dec';
                        }
                        break;

                }
                $dday = explode(' ',$dates[2]);
                //$get_day2 = get_the_date( 'd' );
                $get_day3 = get_the_date( 'd' );

                $get_month2 = get_the_date( 'M' );
                $cutted_title2 = mb_substr($grpost->post_title, 0, 50);
                $cutted_post2 = mb_substr($grpost->post_content, 0, 0);
                $post_link2 = get_site_url()."/?p=".$grpost->ID;

                ?>

                <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="img-holder">
                        <div class="date wow fadeInUp p-color-bg"><?=$dday[0]?> <span><?=$month?> </span></div>
                        <div class="post-img-main-page">
                            <?php echo get_the_post_thumbnail( $grpost->ID,array(370, 250)); ?>
                            <a href="<?=$grpost->guid?>" class="tran4s"></a>
                        </div><!----post-img-main-page----end--->
                    </div>
                    <div class="text-wrapper">
                        <div class="text tran4s">
                            <a href="<?=$post_link2?>"><?=$cutted_title2.' ...'?></a>
                            <p><?=$cutted_post2?></p>
                        </div> <!-- /.text -->
                    </div> <!-- /.text-wrapper -->
                </div> <!-- /.single-post -->
                <?php

                // стандартный вывод записей
            }

            wp_reset_postdata(); // сбрасываем переменную $post
            ?>

        </div> <!-- /.post-wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.latest-news -->

<!-- course Progress  __________________________ -->
<div class="course-progress">
    <div class="opacity">
        <div class="container">
            <?if($sitelang == "uz"):?>
                <h2>ASOSIY <span class="p-color">KO`RSATKICHLAR</span></h2>
            <?elseif($sitelang == "ru"):?>
                <h2>ОСНОВНЫЕ <span class="p-color">ПОКАЗАТЕЛИ</span></h2>
            <?elseif($sitelang == "en"):?>
                <h2>MAIN<span class="p-color"> CHARACTERISTICS</span></h2>
            <?endif;?>

            <div class="row wuzstat">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="icon"><i class="icofont-teacher ico"></i></div>
                    <?if($sitelang == "uz"):?>
                        <p>O'qituvchilar</p>
                    <?elseif($sitelang == "ru"):?>
                        <p>Преподаватели</p>
                    <?elseif($sitelang == "en"):?>
                        <p>Teachers</p>
                    <?endif;?>

                    <div class="number"><span class="timer" data-from="0" data-to="383" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="icon"><i class="icofont-medal ico"></i></i></div>
                    <?if($sitelang == "uz"):?>
                        <p>Dotsent</p>
                    <?elseif($sitelang == "ru"):?>
                        <p>Доценты</p>
                    <?elseif($sitelang == "en"):?>
                        <p>Docent</p>
                    <?endif;?>

                    <div class="number"><span class="timer" data-from="0" data-to="83" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="icon"><i class="icofont-hat-alt ico"></i></i></div>
                    <?if($sitelang == "uz"):?>
                        <p>Professorlar</p>
                    <?elseif($sitelang == "ru"):?>
                        <p>Профессоры</p>
                    <?elseif($sitelang == "en"):?>
                        <p>Professors</p>
                    <?endif;?>

                    <div class="number"><span class="timer" data-from="0" data-to="19" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="icon"><i class="icofont-group-students ico"></i></div>
                    <?if($sitelang == "uz"):?>
                        <p>BAKALAVRLAR</p>
                    <?elseif($sitelang == "ru"):?>
                        <p>СТУДЕНТЫ БАКАЛАВРИАТА</p>
                    <?elseif($sitelang == "en"):?>
                        <p>BACHELORS</p>
                    <?endif;?>

                    <div class="number"><span class="timer" data-from="0" data-to="5306" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="icon"><i class="icofont-graduate-alt ico"></i></div>
                    <?if($sitelang == "uz"):?>
                        <p>MAGISTRLAR</p>
                    <?elseif($sitelang == "ru"):?>
                        <p>СТУДЕНТЫ МАГИСТАТУРЫ</p>
                    <?elseif($sitelang == "en"):?>
                        <p>MASTERS</p>
                    <?endif;?>

                    <div class="number"><span class="timer" data-from="0" data-to="97" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="icon"><i class="icofont-read-book-alt ico"></i></div>
                    <?if($sitelang == "uz"):?>
                        <p>Sirtqi talabalar</p>
                    <?elseif($sitelang == "ru"):?>
                        <p>СТУДЕНТЫ ЗАОЧНОГО ОТДЕЛЕНИЯ</p>
                    <?elseif($sitelang == "en"):?>
                        <p>Correspondence students</p>
                    <?endif;?>

                    <div class="number"><span class="timer" data-from="0" data-to="755" data-speed="1500" data-refresh-interval="5">0</span></div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.opacity -->
</div> <!-- /.course-progress -->


<!-- Latest News ___________________________ -->
<div class="latest-news wow fadeInUp theme-bg-color bg-back">
    <div class="container">
        <div class="theme-title">
            <?if($sitelang == "uz"):?>
                <h2>Investitsiya salohiyati</h2>
            <?elseif($sitelang == "ru"):?>
                <h2>Инвестиционный потенциал</h2>
            <?elseif($sitelang == "en"):?>
                <h2>Investment potential</h2>
            <?endif;?>


        </div>

        <div class="post-wrapper row">

            <?php
            //global $post; // не обязательно

            // 3 записей из рубрики 13
            $posts_inv = get_posts( array(
                'category' => 70,
                'numberposts' => 3
            ) );

            foreach( $posts_inv as $post_in ){
            $invdates = explode('-',$post_in->post_date);
            switch($invdates[1]) {
                case '01':
                    $month = 'Yan';
                    if ($sitelang == 'uz') {
                        $month = 'Yan';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Янв';
                    } elseif ($sitelang == 'en') {
                        $month = 'Jan';
                    }
                    break;
                case '02':
                    $month = 'Fev';
                    if ($sitelang == 'uz') {
                        $month = 'Fev';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Фев';
                    } elseif ($sitelang == 'en') {
                        $month = 'Feb';
                    }
                    break;
                case '03':
                    $month = 'Mar';
                    if ($sitelang == 'uz') {
                        $month = 'Mar';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Мар';
                    } elseif ($sitelang == 'en') {
                        $month = 'Msr';
                    }
                    break;
                case '04':
                    $month = 'Apr';
                    if ($sitelang == 'uz') {
                        $month = 'Apr';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Апр';
                    } elseif ($sitelang == 'en') {
                        $month = 'Apr';
                    }
                    break;
                case '05':
                    $month = 'May';
                    if ($sitelang == 'uz') {
                        $month = 'May';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Май';
                    } elseif ($sitelang == 'en') {
                        $month = 'May';
                    }
                    break;
                case '06':
                    $month = 'Iyu';
                    if ($sitelang == 'uz') {
                        $month = 'Iyu';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Июн';
                    } elseif ($sitelang == 'en') {
                        $month = 'Jun';
                    }
                    break;
                case '07':
                    $month = 'Iyu';
                    if ($sitelang == 'uz') {
                        $month = 'Iyu';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Июл';
                    } elseif ($sitelang == 'en') {
                        $month = 'Jul';
                    }
                    break;
                case '08':
                    $month = 'Avg';
                    if ($sitelang == 'uz') {
                        $month = 'Avg';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Авг';
                    } elseif ($sitelang == 'en') {
                        $month = 'Aug';
                    }
                    break;
                case '09':
                    $month = 'Sen';
                    if ($sitelang == 'uz') {
                        $month = 'Sen';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Сен';
                    } elseif ($sitelang == 'en') {
                        $month = 'Sep';
                    }
                    break;
                case '10':
                    $month = 'Okt';
                    if ($sitelang == 'uz') {
                        $month = 'Okt';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Окт';
                    } elseif ($sitelang == 'en') {
                        $month = 'Oct';
                    }
                    break;
                case '11':
                    $month = 'Noy';
                    if ($sitelang == 'uz') {
                        $month = 'Noy';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Ноя';
                    } elseif ($sitelang == 'en') {
                        $month = 'Nov';
                    }
                    break;
                case '12':
                    $month = 'Dek';
                    if ($sitelang == 'uz') {
                        $month = 'Dek';
                    } elseif ($sitelang == 'ru') {
                        $month = 'Дек';
                    } elseif ($sitelang == 'en') {
                        $month = 'Dec';
                    }
                    break;
            }
                $ddays = explode(' ',$invdates[2]);
                //$get_day2 = get_the_date( 'd' );
                $get_day4 = get_the_date( 'd' );

                $get_months = get_the_date( 'M' );
                $cutted_titles = mb_substr($post_in->post_title, 0, 50);
                $cutted_posst = mb_substr($post_in->post_content, 0, 0);
                $post_links = get_site_url()."/?p=".$post_in->ID;

                ?>

                <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="img-holder">
                        <div class="date wow fadeInUp p-color-bg"><?=$ddays[0]?> <span><?=$get_months?> </span></div>
                        <div class="post-img-main-page">
                            <?php
                            echo get_the_post_thumbnail( $post_in->ID,array(370, 250)); ?>
                            <a href="<?=$post_in->guid?>" class="tran4s"></a>
                        </div><!----post-img-main-page----end--->
                    </div>
                    <div class="text-wrapper">
                        <div class="text tran4s">
                            <a href="<?=$post_links?>"><?=$cutted_titles.' ...';?></a>
                            <p><?=$cutted_posst?></p>
                        </div> <!-- /.text -->
                    </div> <!-- /.text-wrapper -->
                </div> <!-- /.single-post -->
                <?php

                // стандартный вывод записей
            }

            wp_reset_postdata(); // сбрасываем переменную $post
            ?>

        </div> <!-- /.post-wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.latest-news -->


<!-- Event Section _______________________ -->
<div class="event-section wow fadeInUp">
    <div class="container">
        <div class="theme-title">
            <?if($sitelang == "uz"):?>
                <h2>E'lonlar</h2>
                <p>Bizning yaqinlashib kelayotgan tadbirimiz doimo yodingizda bo'lishi kerak</p>
            <?elseif($sitelang == "ru"):?>
                <h2>ОБЪЯВЛЕНИЯ</h2>
                <p>О ПРЕДСТОЯЩИХ МЕРОПРИЯТИЯХ ИНСТИТУТА</p>
            <?elseif($sitelang == "en"):?>
                <h2>EVENTS</h2>
                <p>Our upcoming event should always be remembered</p>
            <?endif;?>

        </div>

        <?php
        global $post; // не обязательно

        // 6 записей из рубрики 34
        $myposts = get_posts( array(
            'category' => 34,
            'numberposts' => 6
        ) );

        foreach( $myposts as $post ){
            //setup_postdata( $post );
            $get_day = get_the_date( 'd' );
            $get_month = get_the_date( 'M' );
            $post_link =site_url()."?p=".$post->ID;
            $post_date = explode(" ",$post->post_date);
            $cutted_title = mb_substr($post->post_title, 0, 50);
            $cutted_post = mb_substr($post->post_content, 0, 0);
            ?>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp hvr-float-shadow">
                <div class="single-event theme-bg-color">
                    <div class="date p-color"><?=$get_day?> <span><?=$get_month?></span></div>
                    <a href="<?=$post_link?>"><h6><?=$cutted_title.' ...';?></h6></a>
                    <p><?=$cutted_post?></p>
                    <ul>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <?=$post_date[0]?></li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?=$post_date[1]?></li>
                    </ul>
                </div> <!-- /.single-event -->
            </div>
            <?php

            // стандартный вывод записей
        }

        wp_reset_postdata(); // сбрасываем переменную $post
        ?>

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.event-section -->



<!-- Latest News ___________________________ -->
<div class="latest-news wow fadeInUp theme-bg-color bg-back">
    <div class="container">
        <div class="theme-title">
            <?if($sitelang == "uz"):?>
                <h2>Elektron nashrlar</h2>
            <?elseif($sitelang == "ru"):?>
                <h2>Электронные публикации</h2>
            <?elseif($sitelang == "en"):?>
                <h2>Electronic Publications</h2>
            <?endif;?>


        </div>

        <div class="post-wrapper row">

            <?php
            //global $post; // не обязательно

            // 3 записей из рубрики 13
            $posts_el_pub = get_posts( array(
                'category' => 79,
                'numberposts' => 3
            ) );

            foreach( $posts_el_pub as $post_elec_pubs ){
                $elect_pubs = explode('-',$post_elec_pubs->post_date);
                switch($elect_pubs[1]) {
                    case '01':
                        $month = 'Yan';
                        if ($sitelang == 'uz') {
                            $month = 'Yan';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Янв';
                        } elseif ($sitelang == 'en') {
                            $month = 'Jan';
                        }
                        break;
                    case '02':
                        $month = 'Fev';
                        if ($sitelang == 'uz') {
                            $month = 'Fev';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Фев';
                        } elseif ($sitelang == 'en') {
                            $month = 'Feb';
                        }
                        break;
                    case '03':
                        $month = 'Mar';
                        if ($sitelang == 'uz') {
                            $month = 'Mar';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Мар';
                        } elseif ($sitelang == 'en') {
                            $month = 'Msr';
                        }
                        break;
                    case '04':
                        $month = 'Apr';
                        if ($sitelang == 'uz') {
                            $month = 'Apr';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Апр';
                        } elseif ($sitelang == 'en') {
                            $month = 'Apr';
                        }
                        break;
                    case '05':
                        $month = 'May';
                        if ($sitelang == 'uz') {
                            $month = 'May';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Май';
                        } elseif ($sitelang == 'en') {
                            $month = 'May';
                        }
                        break;
                    case '06':
                        $month = 'Iyu';
                        if ($sitelang == 'uz') {
                            $month = 'Iyu';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Июн';
                        } elseif ($sitelang == 'en') {
                            $month = 'Jun';
                        }
                        break;
                    case '07':
                        $month = 'Iyu';
                        if ($sitelang == 'uz') {
                            $month = 'Iyu';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Июл';
                        } elseif ($sitelang == 'en') {
                            $month = 'Jul';
                        }
                        break;
                    case '08':
                        $month = 'Avg';
                        if ($sitelang == 'uz') {
                            $month = 'Avg';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Авг';
                        } elseif ($sitelang == 'en') {
                            $month = 'Aug';
                        }
                        break;
                    case '09':
                        $month = 'Sen';
                        if ($sitelang == 'uz') {
                            $month = 'Sen';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Сен';
                        } elseif ($sitelang == 'en') {
                            $month = 'Sep';
                        }
                        break;
                    case '10':
                        $month = 'Okt';
                        if ($sitelang == 'uz') {
                            $month = 'Okt';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Окт';
                        } elseif ($sitelang == 'en') {
                            $month = 'Oct';
                        }
                        break;
                    case '11':
                        $month = 'Noy';
                        if ($sitelang == 'uz') {
                            $month = 'Noy';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Ноя';
                        } elseif ($sitelang == 'en') {
                            $month = 'Nov';
                        }
                        break;
                    case '12':
                        $month = 'Dek';
                        if ($sitelang == 'uz') {
                            $month = 'Dek';
                        } elseif ($sitelang == 'ru') {
                            $month = 'Дек';
                        } elseif ($sitelang == 'en') {
                            $month = 'Dec';
                        }
                        break;
                }
                $ddays = explode(' ',$elect_pubs[2]);
                //$get_day2 = get_the_date( 'd' );
                $get_day4 = get_the_date( 'd' );

                $get_months = get_the_date( 'M' );
                $cutted_titles = mb_substr($post_elec_pubs->post_title, 0, 50);
                $cutted_posst = mb_substr($post_elec_pubs->post_content, 0, 0);
                $post_links = get_site_url()."/?p=".$post_elec_pubs->ID;

                ?>

                <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="img-holder">
                        <div class="date wow fadeInUp p-color-bg"><?=$ddays[0]?> <span><?=$get_months?> </span></div>
                        <div class="post-img-main-page">
                            <div class="out-img-size">
                            <?php echo get_the_post_thumbnail( $post_elec_pubs->ID,array(370, 250)); ?>

                            </div><!----out-img-size---end---->
                            <a href="<?=$post_elec_pubs->guid?>" class="tran4s"></a>
                        </div><!----post-img-main-page----end--->
                    </div>
                    <div class="text-wrapper">
                        <div class="text tran4s">
                            <a href="<?=$post_links?>"><?=$cutted_titles;?></a>
                            <p><?=$cutted_posst?></p>
                        </div> <!-- /.text -->
                    </div> <!-- /.text-wrapper -->
                </div> <!-- /.single-post -->
                <?php

                // стандартный вывод записей
            }

            wp_reset_postdata(); // сбрасываем переменную $post
            ?>
            <?if($sitelang == "uz"):?>
                <a class="el-pub-btn" href="https://www.jizpi.uz/elektron-nashrlar/">Hammasini ko'rish</a>
            <?elseif($sitelang == "ru"):?>
                <a class="el-pub-btn" href="https://www.jizpi.uz/elektron-nashrlar/">Посмотреть все</a>
            <?elseif($sitelang == "en"):?>
                <a class="el-pub-btn" href="https://www.jizpi.uz/elektron-nashrlar/">View all</a>
            <?endif;?>

        </div> <!-- /.post-wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.latest-news -->

<!-- Information Banner _______________________ -->
<div class="information-banner wow fadeInUp">
    <div class="container">
        <?if($sitelang == "uz"):?>
            <h2 class="useful">FOYDALI HAVOLALAR</h2>
        <?elseif($sitelang == "ru"):?>
            <h2 class="useful">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</h2>
        <?elseif($sitelang == "en"):?>
            <h2 class="useful">USEFUL LINKS</h2>
        <?endif;?>

        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://www.gov.uz/uz"><img src="<?php echo get_template_directory_uri()?>/images/gov_uz.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>Ўзбекистон Республикаси</h4>
                                        <p>Ҳукумат портали</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Правительственный портал</p>
										<h4>Республики Узбекистан</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan</h4>
                                        <p>Government portal</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="http://edu.uz/"><img src="<?php echo get_template_directory_uri()?>/images/gerb.png" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>O'zbekiston Respublikasi</h4>
                                        <p>OLIY VA O`RTA MAXSUS TA'LIM VAZIRLIGI</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>МИНИСТЕРСТВО ВЫСШЕГО И СРЕДНЕГО СПЕЦИАЛЬНОГО ОБРАЗОВАНИЯ</p>
										<h4>РЕСПУБЛИКИ УЗБЕКИСТАН</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan</h4>
                                        <p>MINISTRY OF HIGHER AND SECONDARY SPECIAL EDUCATION</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://strategy.gov.uz/uz"><img src="<?php echo get_template_directory_uri()?>/images/harkatlar.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>O'zbekiston Respublikasi normativ</h4>
                                        <p>huquqiy hujjatlar loyihalarining muhokamasi</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Обсуждение проектов правовых документов</p>
										<h4>Республики Узбекистан</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan</h4>
                                        <p>discussion of drafts of legal documents</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="http://lex.uz/"><img src="<?php echo get_template_directory_uri()?>/images/lex.uz.png" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>Ўзбекистон Республикаси </h4>
                                        <p>Қонун ҳужжатлари маълумотлари миллий базаси</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Национальная база данных законодательства</p>
										<h4>Республики Узбекистан</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan</h4>
                                        <p>National database of legislation</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /Slide1 -->
                <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://my.gov.uz/oz"><img src="<?php echo get_template_directory_uri()?>/images/my_gov.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4> Yagona interaktiv</h4>
                                        <p>davlat xizmatlari portali</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <h4> Единый интерактивный</h4>
                                        <p>портал общественных услуг</p>
                                    <?elseif($sitelang == "en"):?>
                                        <h4> Single interactive</h4>
                                        <p>portal of public services</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://president.uz/uz"><img src="<?php echo get_template_directory_uri()?>/images/prezident_sayt.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>Ўзбекистон Республикаси Президентининг </h4>
                                        <p>расмий веб-сайти</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Официальный сайт</p>
										<h4>Президента Республики Узбекистан</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>President of the Republic of Uzbekistan</h4>
                                        <p>official website</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://www.uzedu.uz/"><img src="<?php echo get_template_directory_uri()?>/images/halqtal.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>Ўзбекистон Республикаси </h4>
                                        <p>Халқ таълими вазирлиги</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Министерство народного образования</p>
                                        <h4>Республики Узбекистан</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan </h4>
                                        <p>Ministry of Public Education</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="http://ziyonet.uz/uz"><img src="<?php echo get_template_directory_uri()?>/images/ziyonet.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>O'zbekiston Respublikasi</h4>
                                        <p>Ta'lim portali</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Образовательный портал</p>
										<h4>Республики Узбекистан</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan </h4>
                                        <p>Educational portal</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /Slide2 -->
                <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://kun.uz/"><img src="<?php echo get_template_directory_uri()?>/images/kunuz.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4> Ўзбекистондаги энг фаол онлайн нашрлардан бири</h4>
                                    <?elseif($sitelang == "ru"):?>
                                        <h4>Одно из самых активных онлайн изданий в Узбекистане</h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>One of the most active online publications in Uzbekistan</h4>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://uzreport.news/"><img src="<?php echo get_template_directory_uri()?>/images/uzreport.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>Ўзбекистон Республикаси </h4>
                                        <p>Ахбарот агентлиги</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Информационное агентство</p>
										<h4>Республики Узбекистан </h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan </h4>
                                        <p>Information Agency</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://kitobim.uz/"><img src="<?php echo get_template_directory_uri()?>/images/kitob.png" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>O'zbekiston Respublikasi</h4>
                                        <p>Elektron kutubhona</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Электронная библиотека</p>
										<h4>Республики Узбекистан </h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan </h4>
                                        <p>Electronic Library</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="https://dtm.uz/"><img src="<?php echo get_template_directory_uri()?>/images/dtmuz.jpg" alt=""></a>
                                </div>
                                <div class="capt">
                                    <?if($sitelang == "uz"):?>
                                        <h4>O'zbekiston Respublikasi</h4>
                                        <p>Vazirlar Mahkamasi Huzuridagi Davlat test markazi</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <p>Государственный тестовый центр при Кабинете Министров</p>
										<h4>Республики Узбекистан </h4>
                                    <?elseif($sitelang == "en"):?>
                                        <h4>The Republic of Uzbekistan </h4>
                                        <p>State Testing Center under the Cabinet of Ministers</p>
                                    <?endif;?>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /Slide3 -->
            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel" class=""><i class="fa fa-arrow-left" aria-hidden="true"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel" class=""><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
            <!-- /.control-box -->

        </div><!-- /#myCarousel -->

    </div> <!-- /.container -->
</div> <!-- /.information-banner -->

<!-- Testimonial And FAQ Section _________________________ -->
<div class="test-faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 testimonial wow fadeInLeft">
                <div class="wrapper">
                    <?if($sitelang == "uz"):?>
                        <h3>Iqtidorli talabalar</h3>
                    <?elseif($sitelang == "ru"):?>
                        <h3>Одаренные студенты</h3>
                    <?elseif($sitelang == "en"):?>
                        <h3>Gifted students</h3>
                    <?endif;?>

                    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                            <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-box theme-bg-color">
                                    <div class="img round-border"><img src="<?php echo get_template_directory_uri()?>/images/home/2.jpg" alt="Image"></div>
                                    <?if($sitelang == "uz"):?>
                                        <h6>Xudoyberdiyeva Latofat Abdumo'min qizi<span>, "Sanoat texnologiyalari" talabasi</span></h6>
                                        <p>Beruniy Davlat stipendiyasi sohibasi. </p>
                                    <?elseif($sitelang == "ru"):?>
                                        <h6> Худайбердиева Латофат Абдумуминовна<span>Студентка факультета "Легкая промышленность"</span></h6>
                                        <p> Стипендиаты Беруний</p>
                                    <?elseif($sitelang == "en"):?>
                                        <h6>Xudoyberdiyeva Latofat Abdumo'minovna<span>Student of the faculty "Light Industry"</span></h6>
                                        <p>Winners of the Beruniy Scholarship</p>
                                    <?endif;?>

                                </div> <!-- /.single-box -->

                                <div class="single-box theme-bg-color">
                                    <div class="img round-border"><img src="<?php echo get_template_directory_uri()?>/images/home/12.jpg" alt="Image"></div>
                                    <?if($sitelang == "uz"):?>
                                        <h6>Xolboyev Sanjarbek Olimjon o‘g‘li<span>"Arxitektura va qurilish" fakulteti talabasi</span></h6>
                                        <p> Islom Karimov Davlat stipendiyasi sohibi.</p>
                                    <?elseif($sitelang == "ru"):?>
                                        <h6>Холбоев Санджар Олимджонович<span>Студент факультета "Архитектура и строительство"</span></h6>
                                        <p>Лауреаты Государственной стипендии им. Ислама Каримова.</p>
                                    <?elseif($sitelang == "en"):?>
                                        <h6>Xolboyev Sanjarbek Olimjonovich<span>Student of "Architecture and construction" faculty</span></h6>
                                        <p>Winners of Islam Karimov Scholarship</p>
                                    <?endif;?>

                                </div> <!-- /.single-box -->
                            </div>

                            <div class="item">
                                <div class="single-box theme-bg-color">
                                    <div class="img round-border"><img src="<?php echo get_template_directory_uri()?>/images/home/1.png" alt="Image"></div>
                                    <?if($sitelang == "uz"):?>
									<h6>Kushbakova Barno Botirkulovna<span>“Arxitektura va qurilish” fakulteti talabasi</span></h6>
                                    <p>Islom Karimov nomli stipendiya sohiblari</p>
									<?elseif($sitelang == "ru"):?>
									<h6>Кушбакова Барно Ботиркуловина<span>Студентка факультета "Архитектура и строительство"</span></h6>
                                    <p>Лауреаты Государственной стипендии им. Ислама Каримова.</p>
									<?elseif($sitelang == "en"):?>
									<h6>Kushbakova Barno Botirkulovna<span>Student of "Architecture and construction" faculty</span></h6>
                                    <p>Winners of Islam Karimov Scholarship</p>
									<?endif;?>
                                </div> <!-- /.single-box -->

                                <div class="single-box theme-bg-color">
                                    <div class="img round-border"><img src="<?php echo get_template_directory_uri()?>/images/home/10.jpg" alt="Image"></div>
                                    <?if($sitelang == "uz"):?>
									<h6>Rashidov Uchqun Ro'zimurod o'g'li<span>"Elektromexanika va radioelektronika"  fakulteti talabasi</span></h6>
                                    <p>Beruniy Davlat stipendiyasi sohiblari</p>
									<?elseif($sitelang == "ru"):?>
									<h6>Рашидов Учқун Рузимуродович<span> Студент факультета "Электромеханика и радиоэлектроника"</span></h6>
                                    <p>Стипендиаты Беруний</p>
									<?elseif($sitelang == "en"):?>
									<h6>Rashidov Uchqun Ro'zimurod o'g'li<span>Student of "Electromechanics and radio electronics" faculty</span></h6>
                                    <p>Winners of the Beruniy Scholarship</p>
									<?endif;?>
                                </div> <!-- /.single-box -->
                            </div>

                            <div class="item">
                                <div class="single-box theme-bg-color">
                                    <div class="img round-border"><img src="<?php echo get_template_directory_uri()?>/images/home/5.png" alt="Image"></div>
									<?if($sitelang == "uz"):?>
									<h6>Mahkamov Shohruh Sarvar o’g’li<span>“Servis” fakulteti talabasi</span></h6>
                                    <p>Beruniy Davlat stipendiyasi sohiblari</p>
									<?elseif($sitelang == "ru"):?>
									<h6>Махкамов Шохрух Сарварович<span>Студент факультета “Сервис”</span></h6>
                                    <p>Стипендиаты Беруний</p>
									<?elseif($sitelang == "en"):?>
									<h6>Mahkamov Shohruh Sarvar o’g’li<span>Student of “Service” faculty</span></h6>
                                    <p>Winners of the Beruniy Scholarship</p>
									<?endif;?>
                                </div> <!-- /.single-box -->

                                <div class="single-box theme-bg-color">
                                    <div class="img round-border"><img src="<?php echo get_template_directory_uri()?>/images/home/11.jpg" alt="Image"></div>
                                    <?if($sitelang == "uz"):?>
									<h6>Tulakov Jahongir To'raqul o'g'li<span>"Elektromexanika va radioelektronika"  fakulteti talabasi</span></h6>
                                    <p> Beruniy Davlat stipendiyasi sohibi. </p>
									<?elseif($sitelang == "ru"):?>
									<h6>Тулаков Жахонгир Туракулович<span>Студент факультета "Электромеханика и радиоэлектроника"</span></h6>
                                    <p>Стипендиаты Беруний </p>
									<?elseif($sitelang == "en"):?>
									<h6>Tulakov Jahongir To'raqul o'g'li<span>Student of "Electromechanics and radio electronics" faculty</span></h6>
                                    <p>Winners of the Beruniy Scholarship </p>
									<?endif;?>
                                </div> <!-- /.single-box -->
                            </div>
                        </div>
                    </div> <!-- /#testimonial-carousel -->
                </div> <!-- /.wrapper -->
            </div> <!-- /.testimonial -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 faq wow fadeInRight">
                <div class="wrapper">
                    <?if($sitelang == "uz"):?>
					<h3>INTERAKTIV XIZMATLAR</h3>
					<?elseif($sitelang == "ru"):?>
					<h3>ИНТЕРАКТИВНЫЕ УСЛУГИ</h3>
					<?elseif($sitelang == "en"):?>
					<h3>INTERACTIVE SERVICES</h3>
					<?endif;?>					
                    <!-- ________________ Panel _______________ -->
                    <nav>
      <div class="menu">
        <ul class="clear">
          <li>
            <a href="index.html" title="Diplom olganlar">
              <i class="fa fa-users" aria-hidden="true"></i>
              <?if($sitelang == "uz"):?>
			  <span class="link-text">Diplom olganlar</span>
			  <?elseif($sitelang == "ru"):?>
			  <span class="link-text">Диплом</span>
			  <?elseif($sitelang == "en"):?>
			  <span class="link-text">Diplom</span>
			  <?endif;?>
            </a>
          </li>
          <li>
            <a href="index.html" title="Ish joyidan ma'lumotnoma olish">
              <i class="fa fa-briefcase" aria-hidden="true"></i>
              <?if($sitelang == "uz"):?>
			  <span class="link-text">Ish joyidan ma'lumotnoma</span>
			  <?elseif($sitelang == "ru"):?>
			  <span class="link-text">Справка с места работы</span>
			  <?elseif($sitelang == "en"):?>
			  <span class="link-text">Ish joyidan ma'lumotnoma</span>
			  <?endif;?>
            </a>
          </li>
          <li>
            <a href="index.html" title="Talabalik xaqida ma'lumotnoma olish">
              <i class="fa fa-info" aria-hidden="true"></i>
              <?if($sitelang == "uz"):?>
			  <span class="link-text">Talabalik xaqida ma'lumotnoma</span>
			  <?elseif($sitelang == "ru"):?>
			  <span class="link-text">Спавка с места учебы (студентам)</span>
			  <?elseif($sitelang == "en"):?>
			  <span class="link-text">Talabalik xaqida ma'lumotnoma</span>
			  <?endif;?>
            </a>
          </li>
          <li>
            <a href="index.html" title="Abiturientlarni hujjatni qaytarish">
              <i class="fa fa-folder-open" aria-hidden="true"></i>
              <?if($sitelang == "uz"):?>
			  <span class="link-text">Abiturientlarni hujjatni qaytarish</span>
			  <?elseif($sitelang == "ru"):?>
			  <span class="link-text">Возврат документов абитуриентам</span>
			  <?elseif($sitelang == "en"):?>
			  <span class="link-text">Abiturientlarni hujjatni qaytarish</span>
			  <?endif;?>
            </a>
          </li>
          <li>
            <a href="index.html" title="TTJ da yashash uchun ariza">
              <i class="fa fa-bed" aria-hidden="true"></i>
			  <?if($sitelang == "uz"):?>
              <span class="link-text">TTJ da yashash uchun ariza</span>
			  <?elseif($sitelang == "ru"):?>
			  <span class="link-text">Заявка на проживание в общежитии</span>
			  <?elseif($sitelang == "en"):?>
			  <span class="link-text">TTJ da yashash uchun ariza</span>
			  <?endif;?>
            </a>
          </li>
            <li>
                <a href="index.html" title="Vakant lavozimlar">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <?if($sitelang == "uz"):?>
					<span class="link-text">Vakant lavozimlar</span>
					<?elseif($sitelang == "ru"):?>
					<span class="link-text">Ваканции института</span>
					<?elseif($sitelang == "en"):?>
					<span class="link-text">Vakant lavozimlar</span>
					<?endif;?>
                </a>
            </li>
            <li>
                <a href="index.html" title="Vertual qabulxona">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
					<?if($sitelang == "uz"):?>
                    <span class="link-text">Vertual qabulxona</span>
					<?elseif($sitelang == "ru"):?>
					<span class="link-text">Вертуальная приёмная</span>
					<?elseif($sitelang == "en"):?>
					<span class="link-text">Vertual qabulxona</span>
					<?endif;?>
                </a>
            </li>
            <li>
                <a href="index.html" title="Rektor qabuliga yozilish">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					<?if($sitelang == "uz"):?>
                    <span class="link-text">Rektor qabuliga yozilish</span>
					<?elseif($sitelang == "ru"):?>
					<span class="link-text">Запись на прием к Ректору</span>
					<?elseif($sitelang == "en"):?>
					<span class="link-text">Rektor qabuliga yozilish</span>
					<?endif;?>
                </a>
            </li>
            <li>
                <a href="index.html" title="Elektron kutubxona">
                    <i class="fa fa-book" aria-hidden="true"></i>
					<?if($sitelang == "uz"):?>
                    <span class="link-text">Elektron kutubxona</span>
					<?elseif($sitelang == "ru"):?>
					<span class="link-text">Электронная библиотека</span>
					<?elseif($sitelang == "en"):?>
					<span class="link-text">Elektron kutubxona</span>
					<?endif;?>
                </a>
            </li>
            <li>
                <a href="index.html" title="Dars jadvali">
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <?if($sitelang == "uz"):?>
					<span class="link-text">Dars jadvali</span>
					<?elseif($sitelang == "ru"):?>
					<span class="link-text">Расписания занятий</span>
					<?elseif($sitelang == "en"):?>
					<span class="link-text">Dars jadvali</span>
					<?endif;?>
                </a>
            </li>
            <li>
                <a href="index.html" title="Ilmiy faoliyat">
                    <i class="fa fa-flask" aria-hidden="true"></i>
					<?if($sitelang == "uz"):?>
                    <span class="link-text">Ilmiy faoliyat</span>
					<?elseif($sitelang == "ru"):?>
					<span class="link-text">Научная деятельность</span>
					<?elseif($sitelang == "en"):?>
					<span class="link-text">Ilmiy faoliyat</span>
					<?endif;?>
                </a>
            </li>
            <li>
                <a href="index.html" title="Contact">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
					<?if($sitelang == "uz"):?>
                    <span class="link-text">Davomi</span>
					<?elseif($sitelang == "ru"):?>
					<span class="link-text">Продожение</span>
					<?elseif($sitelang == "en"):?>
					<span class="link-text">O'tish</span>
					<?endif;?>
                </a>
            </li>
        </ul>
      </div>
</nav>
                </div> <!-- /.wrapper -->
            </div> <!-- /.faq -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.test-faq -->
<div class="container">
    <?if($sitelang == "uz"):?>
	<h2>FOTO GALEREYA</h2>
    <p>FOTO LAVHALARDA</p>
	<?elseif($sitelang == "ru"):?>
	<h2>ФОТО ГАЛЕРЕЯ</h2>
   	<?elseif($sitelang == "en"):?>
	<h2>FOTO GALEREYA</h2>
    <p>FOTO LAVHALARDA</p>
	<?endif;?>
    <div class="row">
        <div class="col-md-12">
            <?php echo do_shortcode('[supsystic-gallery id=1]') ?>
        </div>
    </div>
</div>


<div class="latest-news wow fadeInUp theme-bg-color bg-back">
    <div class="container">
        <div class="theme-title">
            <?if($sitelang == "uz"):?>
                <h2>Video galeriya</h2>
            <?elseif($sitelang == "ru"):?>
                <h2>Видео галерея</h2>
            <?elseif($sitelang == "en"):?>
                <h2>Video gallery</h2>
            <?endif;?>


        </div>

        <div class="post-wrapper row">

            <?php
            //global $post; // не обязательно

            // 3 записей из рубрики 13
            $grantposts = get_posts( array(
                'category' => 71,
                'numberposts' => 3
            ) );

            foreach( $grantposts as $grpost ){
                //setup_postdata( $post );
                $dates = explode('-',$grpost->post_date);
                switch($dates[1]){
                    case '01':
                        $month = 'Yan';
                        if($sitelang == 'uz'){
                            $month = 'Yan';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Янв';
                        }elseif($sitelang == 'en') {
                            $month = 'Jan';
                        }
                        break;
                    case '02':
                        $month = 'Fev';
                        if($sitelang == 'uz'){
                            $month = 'Fev';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Фев';
                        }elseif($sitelang == 'en') {
                            $month = 'Feb';
                        }
                        break;
                    case '03':
                        $month = 'Mar';
                        if($sitelang == 'uz'){
                            $month = 'Mar';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Мар';
                        }elseif($sitelang == 'en') {
                            $month = 'Msr';
                        }
                        break;
                    case '04':
                        $month = 'Apr';
                        if($sitelang == 'uz'){
                            $month = 'Apr';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Апр';
                        }elseif($sitelang == 'en') {
                            $month = 'Apr';
                        }
                        break;
                    case '05':
                        $month = 'May';
                        if($sitelang == 'uz'){
                            $month = 'May';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Май';
                        }elseif($sitelang == 'en') {
                            $month = 'May';
                        }
                        break;
                    case '06':
                        $month = 'Iyu';
                        if($sitelang == 'uz'){
                            $month = 'Iyu';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Июн';
                        }elseif($sitelang == 'en') {
                            $month = 'Jun';
                        }
                        break;
                    case '07':
                        $month = 'Iyu';
                        if($sitelang == 'uz'){
                            $month = 'Iyu';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Июл';
                        }elseif($sitelang == 'en') {
                            $month = 'Jul';
                        }
                        break;
                    case '08':
                        $month = 'Avg';
                        if($sitelang == 'uz'){
                            $month = 'Avg';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Авг';
                        }elseif($sitelang == 'en') {
                            $month = 'Aug';
                        }
                        break;
                    case '09':
                        $month = 'Sen';
                        if($sitelang == 'uz'){
                            $month = 'Sen';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Сен';
                        }elseif($sitelang == 'en') {
                            $month = 'Sep';
                        }
                        break;
                    case '10':
                        $month = 'Okt';
                        if($sitelang == 'uz'){
                            $month = 'Okt';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Окт';
                        }elseif($sitelang == 'en'){
                            $month = 'Oct';
                        }
                        break;
                    case '11':
                        $month = 'Noy';
                        if($sitelang == 'uz'){
                            $month = 'Noy';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Ноя';
                        }elseif($sitelang == 'en') {
                            $month = 'Nov';
                        }
                        break;
                    case '12':
                        $month = 'Dek';
                        if($sitelang == 'uz'){
                            $month = 'Dek';
                        }
                        elseif($sitelang == 'ru'){
                            $month = 'Дек';
                        }elseif($sitelang == 'en') {
                            $month = 'Dec';
                        }
                        break;

                }
                $dday = explode(' ',$dates[2]);
                //$get_day2 = get_the_date( 'd' );
                $get_day3 = get_the_date( 'd' );

                $get_month2 = get_the_date( 'M' );
                $cutted_title2 = mb_substr($grpost->post_title, 0, 50);
                $cutted_post2 = mb_substr($grpost->post_content, 0, 0);
                $post_link2 = get_site_url()."/?p=".$grpost->ID;

                ?>

                <div class="single-post wow fadeInUp col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="img-holder">
                        <div class="date wow fadeInUp p-color-bg"><?=$dday[0]?> <span><?=$month?> </span></div>
                        <div class="post-img-main-page">
                            <?php echo get_the_post_thumbnail( $grpost->ID,array(370, 250)); ?>
                            <a href="<?=$grpost->guid?>" class="tran4s"></a>
                        </div><!----post-img-main-page----end--->
                    </div>
                    <div class="text-wrapper">
                        <div class="text tran4s">
                            <a href="<?=$post_link2?>"><?=$cutted_title2.' ...'?></a>
                            <p><?=$cutted_post2?></p>
                        </div> <!-- /.text -->
                    </div> <!-- /.text-wrapper -->
                </div> <!-- /.single-post -->
                <?php

                // стандартный вывод записей
            }

            wp_reset_postdata(); // сбрасываем переменную $post
            ?>

        </div> <!-- /.post-wrapper -->
    </div> <!-- /.container -->
</div> <!-- /.latest-news -->

<!-- SubsCribe Banner ___________________ -->
<div class="subscribe-banner p-color-bg wow fadeInUp">
    <div class="container">
        <?if($sitelang == "uz"):?>
		<h3>Hozir obuna buling</h3>
        <p>Har hafta o'quv materiallari, yangi kurslar, eng mashhur xabarlar, ommabop kitoblar va boshqa ko'plab yangiliklarni oling.</p>
		<form action="#" class="clear-fix">
            <input type="email" class="float-left wow fadeInLeft" placeholder="Elektron pochta manzili">
            <button class="float-left tran3s wow fadeInRight">Obuna bo'ling</button>
        </form>
		<?elseif($sitelang == "ru"):?>
		<h3>ПОДПИШИТЕСЬ СЕЙЧАС</h3>
        <p>Получите савые последние новости, информацию о новых учебных курсах и учебных материаллах.</p>
		<form action="#" class="clear-fix">
            <input type="email" class="float-left wow fadeInLeft" placeholder="Адрес электронной почты">
            <button class="float-left tran3s wow fadeInRight">Подпишитесь</button>
        </form>
		<?elseif($sitelang == "en"):?>
		<h3>Hozir obuna buling</h3>
        <p>Har hafta o'quv materiallari, yangi kurslar, eng mashhur xabarlar, ommabop kitoblar va boshqa ko'plab yangiliklarni oling.</p>
		<form action="#" class="clear-fix">
            <input type="email" class="float-left wow fadeInLeft" placeholder="Elektron pochta manzili">
            <button class="float-left tran3s wow fadeInRight">Obuna bo'ling</button>
        </form>
		<?endif;?>
    </div>
</div>




<?php get_footer(); ?>
