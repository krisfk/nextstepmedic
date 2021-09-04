<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<div class="slides">
    <div class="position-relative">

        <div class="row position-absolute w-100 h-100 gx-0 ">
            <div class="col-6"></div>
            <div class="col-6 slide-content-txt-div-wrap">


                <div class="row align-items-center h-100">

                    <div class="col-12">
                        <div class="slide-content-txt-div">

                            The Next Step Medical Clinic is your one-stop orthopaedics,
                            physiotherapy and podiatry centre in Central, Hong Kong for treating musculoskeletal pain,
                            sports
                            injury, foot pain and other related conditions.

                        </div>

                    </div>
                </div>


            </div>
        </div>

        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-1-scaled.jpg" alt="">

    </div>
    <!-- <div class="position-relative">
        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-2-scaled.jpg" alt="">
    </div>
    <div class="position-relative">
        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-3-scaled.jpg" alt="">
    </div> -->
</div>

<script type="text/javascript">
$(function() {
    $('.slides').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,

        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false





    });

})
</script>
<?php


get_footer();