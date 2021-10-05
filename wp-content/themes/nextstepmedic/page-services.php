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


<div class="position-relative">

    <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-3@2x-50-1-scaled.jpg" alt="">

    <div class="row big-banner-central-row gx-0">

        <div class="col-12">

            <div class="content-div">

                <div class="large-subtitle mb-4">Services
                </div>
                The Next Step Medical Clinic is your one-stop orthopaedics, physiotherapy and podiatry centre for
                treating musculoskeletal pain, sports injury, foot pain and other related conditions. To help your
                recovery from surgery, your weekend sporting injuries and your everyday pain, get in touch with us.
                <br> <br>
                Our team of experienced and highly trained medical specialists includes orthopaedics, physiotherapists
                and podiatrists work together to provide the best treatment plan for your individual problems. We
                proactively treat the causes of the problems, not only the symptoms.
                <br> <br>
                We strongly believe in delivering greater value and higher quality of care to our patients through
                effective communication and ethical clinical practice.
            </div>
        </div>
    </div>

</div>


<div class="container">


    <div class="row mt-5">

        <div class="col-lg-4 col-md-12 col-sm-12 col-12 service-col mb-lg-0 mb-md-4 mb-sm-4 mb-4">
            <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-4@2x-50-1.jpg" alt="">
            <div class="service-title-div">
                <div class="service-title">Orthopaedics & Traumatology</div>
                <a href="<?php get_site_url()?>/orthopaedics-traumatology" class="read-more-btn">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 service-col mb-lg-0 mb-md-4 mb-sm-4 mb-4"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-5@2x-50.jpg" alt="">
            <div class="service-title-div">
                <div class="service-title">Physiotherapy</div>
                <a href="<?php get_site_url()?>/physiotherapy" class="read-more-btn">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 service-col mb-lg-0 mb-md-4 mb-sm-4 mb-4"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-6@2x-50.jpg" alt="">
            <div class="service-title-div">
                <div class="service-title">Podiatry </div>
                <a href="<?php get_site_url()?>/podiatry" class="read-more-btn">Read More</a>
            </div>
        </div>

    </div>
    <div class="row justify-content-center mt-lg-5 mt-md-0 mt-sm-0 mt-0 mb-5">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 service-col mb-lg-0 mb-md-4 mb-sm-4 mb-4"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-7@2x-50.jpg" alt="">
            <div class="service-title-div">
                <div class="service-title">

                    Swift Microwave Technology – <br>
                    For Wart Treatment

                </div>
                <a href="<?php get_site_url()?>/swift-laser-wart-treatment" class="read-more-btn">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 service-col mb-lg-0 mb-md-4 mb-sm-4 mb-4">
            <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-8@2x-50.jpg
        " alt="">
            <div class="service-title-div">
                <div class="service-title">Lunula Laser - For Fungal Nails
                </div>
                <a href="<?php get_site_url()?>/lunula-laser-fungal-nail-treatment" class="read-more-btn">Read More</a>
            </div>
        </div>

    </div>









</div>




<div class="book-an-appointment-div pt-4 pb-4">
    <a href="#" class="book-an-appointment-a-btn">
        Book an Appointment
    </a>

    <div class="container white fw-bolder fst-italic mt-3">
        Take your NEXT STEP to consult our team and treat your problems proactively.
    </div>
</div>





<?php


get_footer();