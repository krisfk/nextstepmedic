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
    <div class="position-relative slide">
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
                            <div class="text-center mt-5">

                                <a href="#" class="slide-btns">Learn More</a>
                                <a href="#" class="slide-btns">Book an Appointment</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-1-scaled.jpg" alt="">
    </div>

    <div class="position-relative slide">
        <div class="row position-absolute w-100 h-100 gx-0 ">
            <div class="col-6"></div>
            <div class="col-6 slide-content-txt-div-wrap">
                <div class="row align-items-center h-100">

                    <div class="col-12">
                        <div class="slide-content-txt-div">
                            Our team of experienced and highly trained medical specialists includes orthopaedics,
                            physiotherapists and podiatrists work together to provide the best treatment plan for your
                            individual problems. We proactively treat the causes of the problems, not only the symptoms.


                            <div class="text-center mt-5">

                                <a href="#" class="slide-btns">Learn More</a>
                                <a href="#" class="slide-btns">Book an Appointment</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-2-scaled.jpg" alt="">
    </div>

    <div class="position-relative slide">
        <div class="row position-absolute w-100 h-100 gx-0 ">
            <div class="col-6"></div>
            <div class="col-6 slide-content-txt-div-wrap">
                <div class="row align-items-center h-100">

                    <div class="col-12">
                        <div class="slide-content-txt-div">
                            To help your recovery from surgery, your weekend sporting injuries and your everyday pain,
                            get in touch with us.

                            <div class="text-center mt-5">

                                <a href="#" class="slide-btns">Learn More</a>
                                <a href="#" class="slide-btns">Book an Appointment</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-3-scaled.jpg" alt="">
    </div>


    <!-- <div class="position-relative">
        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-2-scaled.jpg" alt="">
    </div>
    <div class="position-relative">
        <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/home-banner-3-scaled.jpg" alt="">
    </div> -->
</div>

<div class="container">

    <div class="row">
        <div class="col-6">
            <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-2@2x-50.jpg" alt="">
        </div>
        <div class="col-6">

            <div class="service-title">Orthopaedics & Traumatology</div>

            <div class="mt-4">Focus on injuries and diseases of the musculoskeletal system (the body’s muscles, skeleton
                and related
                connective tissues), including the spine, joints, ligaments, tendons and nerves. To provides
                musculoskeletal diagnostic services with surgical or non-surgical treatments that are tailored to the
                individual needs of our patients.</div>

            <a href="" class="brown-round-btn mt-5 d-inline-block">Read More</a>
        </div>

    </div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
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