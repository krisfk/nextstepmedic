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

                <h1 class="service-h1-title">Orthopaedics & Traumatology</h1>
            </div>
        </div>
    </div>

    <!-- <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-3@2x-50-1-scaled.jpg" alt=""> -->
</div>


<div class="container">


    <div class="row mt-5">


        <div class="col-6"><img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-1@2x-50.jpg
        " alt=""></div>
        <div class="col-6">
            <div class="service-subtitle">What is Orthopaedics & Traumatology?</div>
            <div class="mt-3">Orthopaedics focuses on injuries and diseases of the musculoskeletal system (the body’s
                muscles,
                skeleton and related connective tissues), including the spine, joints, ligaments, tendons and nerves.
                <br> <br>
                Explore our available private orthopaedics treatment options below and book your appointment today so
                that you can start to feel good again.
            </div>
            <div class="mt-3">
                <a href="<?php echo get_site_url();?>/contact-us-book-online" class="brown-round-btn">Book an
                    Appointment</a>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-2@2x-50-1-scaled.jpg"
                alt="">
            <div class="brown-bg pt-4 pe-5 ps-5 pb-4">

                <div class="service-subtitle white">Our Orthopaedics Services
                </div>
                <div class="mt-3">The Next Step provides musculoskeletal diagnostic services, surgical and
                    non-surgical
                    treatments that are tailored to the individual needs of our patients. Our orthopaedic
                    specialists
                    treat patients suffering from a comprehensive range of orthopaedic conditions of the knee,
                    shoulder
                    and elbow, foot and ankle, hand and wrist, hip and spine.
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">

        <div class="col-6">
            <div class="service-subtitle">Why Choose The Next Step?
            </div>
            <div class="mt-3">
                Our close-knit team of Consultant Surgeons and Specialists work together in a multidisciplinary
                fashion, enabling us to offer patients something truly unique: the feeling of trust and safety of a
                small family practice with the convenience and accessibility of a state-of-the-art treatment centre
                in the heart of Central, Hong Kong.


            </div>

        </div>


        <div class="col-6"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-3@2x-50-2.jpg" alt=""></div>
    </div>


    <div class="row mt-5">

        <div class="col-6"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-4@2x-50-2.jpg" alt=""></div>


        <div class="col-6">
            <div class="service-subtitle">What Do We Treat?
            </div>

            <div class="grey-bold mt-3">
                Common Musculoskeletal Problems
            </div>
            <ul class="mt-3 ps-3">
                <li>Elbow Pain</li>
                <li>Foot & Ankle
                    Pain</li>
                <li>General Orthopaedics</li>
                <li>Hand Pain</li>
                <li>Joint Deformity</li>
                <li>Hip Pain</li>
                <li>Knee Pain</li>
                <li>Musculoskeletal Cancer</li>
                <li>Orthopaedic Trauma</li>
                <li>Pediatric Orthopaedics</li>
                <li>Shoulder Pain</li>
                <li>Spine Pain</li>
                <li>Sports Medicine</li>
                <li>Paediatrics</li>
            </ul>



        </div>


    </div>

    <div class="row mt-5">

        <div class="col-6">
            <div class="service-subtitle">Extensive Treatments Available
            </div>

            <ul class="mt-3 ps-3">
                <li>Arthroscopy</li>
                <li>Assistive Devices</li>
                <li>Casts - Pediatric</li>
                <li>Corticosteroid injections</li>
                <li>External Fixation</li>
                <li>Femoroacetabular Impingement (FAI) Treatment</li>
                <li>Fracture Reduction</li>
                <li>Hip & Knee Care</li>
                <li>Joint injections</li>
                <li>Joint Replacement (Partial)</li>
                <li>Joint Replacement (Total)</li>
                <li>Joint Resurfacing</li>
                <li>Ligament Reconstruction</li>
                <li>Non-Steroidal Anti-Inflammatory Drugs (NSAIDS)</li>
                <li>Open Reduction with Internal Fixation of a Broken Bone</li>
                <li>Pain Management</li>
                <li>Physical and Occupational Therapy</li>
                <li>Primary Care Sports Medicine</li>
                <li>Sling immobilization</li>
                <li>Sports Medicine & Athletic Injury Care</li>
                <li>Sports Medicine Surgery</li>
            </ul>

        </div>


        <div class="col-6"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-5@2x-50-1.jpg" alt=""></div>
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