<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
    $(function() {

        <?php
     global $post;
     $post_slug = $post->post_name;

    ?>
        var slug = '<?php ?>';
    })
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php //esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

        <?php  //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <div class="desktop-menu-div">
                        <div class="container position-relative">

                            <div class="row align-items-center">

                                <div class="col-2">

                                    <a href="<?php echo get_site_url();?>" class="d-inline-block">
                                        <img src="https://nextstepmedic.com/wp-content/uploads/2021/10/logo.png" alt=""
                                            class="logo">
                                    </a>
                                </div>

                                <div class="col-10 text-end">

                                    <ul class="top-menu-ul">


                                        <?php
                
                $main_menu = wp_get_menu_array('main menu');
                foreach ($main_menu as $menu_item) {

                $url = $menu_item['url'];
                $title = $menu_item['title'];
                $class = $menu_item['class'];

                $temp_arr=explode(get_site_url(),$url);
                $slug=str_replace('/en/','',$temp_arr[1]);
                $slug=str_replace('/cn/','',$slug);
                $slug=str_replace('/','',$slug);


                if(count($menu_item['children']))
                {
                
                    echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title;
                    ?>

                                        <!-- <img class="arrow"
                                            src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png';?>"
                                            alt=""> -->
                                        <?php
                    echo '</a>';

                
                    echo '<ul class="mobile-menu-submenu">';
                ?>

                                        <?php
    
                foreach ($menu_item['children'] as $sub_menu_item) 
                {
                    $sub_url = $sub_menu_item['url'];
                    $sub_title = $sub_menu_item['title'];
                    
                    $sub_temp_arr=explode(get_site_url(),$sub_url);
                    $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
                    $sub_slug=str_replace('/cn/','',$sub_slug);
                    $sub_slug=str_replace('/','',$sub_slug);
                    echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
                }
                echo '</ul>';

            }
            else
            {
            echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

            }
            echo'</li>';


            }



            ?>

                                        <li>
                                            <a href="#" class="phone">Call: +852 3703-5860 / +852 65950118 </a>
                                        </li>


                                        <?php
                                        
                                        
                                        $langs= icl_get_languages('skip_missing=0&orderby=custom&order=asc&link_empty_to=');
                                        
                                        ?>
                                        <li>

                                            <div class="lang-div">
                                                <a href="<?php echo $langs['zh-hant']['url'];?>">繁</a><span
                                                    class="sep">|</span>
                                                <a href="<?php echo $langs['en']['url'];?>">Eng</a>

                                            </div>
                                        </li>

                                    </ul>

                                    <a id="nav-icon3" href="#" class="mobile-menu-btn float-end">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>






                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="desktop-menu-div-empty">

                    </div>

                    <script type="text/javascript">
                    $(function() {

                        $(window).resize(function() {
                            $('.top-menu-ul').fadeOut(0);

                            $('.mobile-menu-btn').removeClass('open');

                            if ($(window).width() > 991) {
                                $('.top-menu-ul').css({
                                    'display': 'inline-block'
                                });
                            }
                        })

                        $('.mobile-menu-btn').click(function(e) {
                            e.preventDefault();
                            $(this).toggleClass('open');

                            if ($(this).hasClass('open')) {
                                $('.top-menu-ul').slideDown(200);
                            } else {
                                $('.top-menu-ul').fadeOut(200);

                            }


                        })

                        $('.level-1.parent').mouseenter(function() {

                            if ($(window).width() > 991) {

                                $('.mobile-menu-submenu').dequeue().fadeOut(0);

                                $(this).next('.mobile-menu-submenu').fadeIn(0);
                            }
                        });


                        $('.level-1.parent').mouseleave(function() {
                            if ($(window).width() > 991) {

                                $('.mobile-menu-submenu').delay(200).fadeOut(0);
                            }
                        });

                        $('.mobile-menu-submenu').mouseenter(function() {
                            $('.mobile-menu-submenu').dequeue().fadeIn(0);

                        })

                        $('.mobile-menu-submenu').mouseleave(function() {
                            if ($(window).width() > 991) {

                                $('.mobile-menu-submenu').delay(200).fadeOut(0);
                            }

                        })





                    })
                    </script>