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

    <div class="row big-banner-central-row position-relative gx-0 align-items-center">

        <div class="col-12">

            <div class="content-div service-title-div">

                <h1 class="service-h1-title">Podiatry</h1>
            </div>
        </div>
    </div>

    <!-- <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-3@2x-50-1-scaled.jpg" alt=""> -->
</div>


<div class="container">


    <div class="row mt-5">


        <div class="col-6"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-1@2x-50-1.jpg" alt=""></div>
        <div class="col-6">
            <div class="service-subtitle">What Does A Podiatrist Treat?</div>
            <div class="mt-3">

                Are you looking for a foot doctor? Podiatrists are healthcare professionals who have been trained to
                diagnose and treat abnormal conditions of the feet and lower limbs. <br> <br>

                They can also treat and alleviate day-to-day foot problems, including:

                <ul class="mt-3 ps-4">
                    <li>Athlete's foot</li>
                    <li>Ageing feet</li>
                    <li>Blisters</li>
                    <li>Bunions</li>
                    <li>Corns and calluses</li>
                    <li>Dry and cracked heels</li>
                    <li>Flat feet</li>
                    <li>Gout</li>
                    <li>Heel pain</li>
                    <li>Smelly feet</li>
                    <li>Sports injuries</li>
                    <li>Toenail problems (thickened toenails, fungal nail infections or
                        ingrown toenails)</li>
                    <li>Verrucas</li>
                </ul>



            </div>
            <div class="mt-3">
                <a href="#" class="brown-round-btn">Book an Appointment</a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-2@2x-50-3-scaled.jpg"
                alt="">
            <div class="brown-bg pt-4 pe-5 ps-5 pb-4">

                <div class="service-subtitle white">Why Choose The Next Step?

                </div>
                <div class="mt-3">Pain and loss of function in our feet and ankles can be a huge obstacle, and we
                    understand that getting your body back to normal is of the utmost importance to you.

                    We offer the highest standard of care in podiatry. Combining experience, professionalism,
                    specialized technology and equipment to provide a wide range of effective services and treatments.

                    We seek to make your visit simple, stress-free, and effective. It is our goal to resolve your pain
                    and function issues in a way that allows you to live the life you are accustomed to.
                </div>
            </div>
        </div>
    </div>







    <div class="sep"></div>

    <div class="row mt-4">
        <div class="col-6"><img style="height:400px" class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-2@2x.png" alt="">
        </div>
        <div class="col-6 gold">
            <div class="person-name">
                Dr. Tong Chun Kit
            </div>

            <div class="mt-3">
                Specialist in Orthopaedics & Traumatology <br>
                MB BS (HK)<br>
                PgD MMR (CUHK)<br>
                MRCSEd<br>
                FRCSEd (Orth)<br>
                FHKCOS<br>
                FHKAM (Orthopaedic Surgery)
            </div>

        </div>
    </div>



</div>









</div>



<div class="mt-5">
    <?php echo get_template_part( 'book' );?>

</div>


<?php


get_footer();