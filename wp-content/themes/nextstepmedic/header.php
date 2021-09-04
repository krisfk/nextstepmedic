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

                    <div class="container">

                        <a href="logo-a">
                            <img src="https://nextstepmedic.com/wp-content/uploads/2021/09/logo.png" alt=""
                                class="logo">
                        </a>


                        <ul class=" top-menu-ul col-10">


                            <?php
                
                $main_menu = wp_get_menu_array('main menu');
                exit();
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
                
                    echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title.'</a>';

                
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


                            <!-- <li class="icon-li first">

                                <a href="#" class="icon-a search-icon-a">
                                    <img class="top-menu-icon"
                                        src="<?php echo get_template_directory_uri();?>/assets/images/search-icon.png"
                                        alt="">

                                </a>

                            </li>


 -->



                        </ul>








                    </div>