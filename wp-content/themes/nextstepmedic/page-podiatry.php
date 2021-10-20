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

                <h1 class="service-h1-title">
                    <!-- Podiatry -->
                    <?php echo get_field('content_txt_0');?>
                </h1>
            </div>
        </div>
    </div>

</div>


<div class="container">


    <div class="row mt-lg-5 mt-md-3 mt-sm-3 mt-3 ">

        <?php echo get_field('content_txt_1');?>
        <!-- 
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-1@2x-50-1.jpg" alt=""></div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">



            <div class="service-subtitle">What Does A Podiatrist Treat?</div>
            <div class="mt-3">

                Are you looking for a foot doctor? Podiatrists are healthcare professionals who have been trained to
                diagnose and treat abnormal conditions of the feet and lower limbs. <br> <br>

                They can also treat and alleviate day-to-day foot problems, including:

                <ul class="mt-3 ps-3">
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

                <a href="<?php echo get_site_url();?>/contact-us-book-online" class="book-an-appointment-a-btn">
                    Book an Appointment
                </a>
            </div>


        </div> -->
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <?php echo get_field('content_txt_2');?>

            <!-- <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-2@2x-50-3-scaled.jpg"
                    alt="">
                <div class="brown-bg pt-4 pe-5 ps-5 pb-4">

                    <div class="service-subtitle white">Why Choose The Next Step?

                    </div>
                    <div class="mt-3">Pain and loss of function in our feet and ankles can be a huge obstacle, and we
                        understand that getting your body back to normal is of the utmost importance to you.

                        We offer the highest standard of care in podiatry. Combining experience, professionalism,
                        specialized technology and equipment to provide a wide range of effective services and
                        treatments.

                        We seek to make your visit simple, stress-free, and effective. It is our goal to resolve your
                        pain
                        and function issues in a way that allows you to live the life you are accustomed to.
                    </div>
                </div> -->
        </div>
    </div>

    <div class="row mt-5">

        <?php echo get_field('content_txt_3');?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-3@2x-50-4.jpg" alt=""></div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="service-subtitle">What Happens During A Podiatry
                    Treatment?

                </div>
                <div class="mt-3">

                    Our routine podiatry appointments are around 30 minutes long. During your first appointment, a full
                    medical record including any medication is needed. A foot health assessment is performed which used
                    in
                    combination with your concerns allows the Podiatrist to tailor the treatment to your needs. Any foot
                    complaints you have can be addressed and further advice provided if needed.


                </div>

            </div> -->
    </div>
    <?php echo get_field('content_txt_4');?>


    <!-- 
        <div class="service-subtitle text-center mt-5">Podiatry Services</div>

        <div class="row mt-5">


            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-4@2x-50-4.jpg" alt=""></div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="grey-bold">General Podiatry Care

                </div>
                <div class="mt-3">

                    We diagnose and treat all foot disorders and deformities, as well as providing general foot
                    treatment
                    and advice. We treat all problems on feet of all ages as well as all problems associated with a wide
                    range of medical conditions.
                </div>
                <div class="mt-3">Perhaps you have a painful lesion or hard skin on your foot or maybe you have
                    thickened
                    nails that you cannot manage, general podiatry care will help give pain relief and allow you to walk
                    pain free.
                </div>
                <div class="mt-3">
                    <a href="javascript:void(0);" class="find-out-more-btn brown-round-btn ">Find Out More</a>

                    <div class="hide-content">
                        We offer routine foot care and foot health, as well as treatments for:
                        <ul class="ps-3">
                            <li>Athlete’s foot</li>
                            <li>Biomechanics (arch supports)</li>
                            <li>Bunion treatment</li>
                            <li>Corn / Callus removal</li>
                            <li>Cracked heels</li>
                            <li>Foot pain related problems</li>
                            <li>Fungal nails</li>
                            <li>Hard skin removal</li>
                            <li>Nail cutting</li>
                            <li>Nail surgery</li>
                            <li>Verrucae treatment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->


    <div class="row mt-5 mobile-reverse">

        <?php echo get_field('content_txt_5');?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="grey-bold">Children's Foot Assessments


                </div>
                <div class="mt-3">


                    As children and toddlers grow and develop, they can suffer from a range of foot problems. We believe
                    by
                    assessing children’s feet early in their lives that any issues can be picked up and addressed before
                    becoming more problematic. Prevention is always better than cure!

                </div>
                <div class="mt-3">
                    <a href="javascript:void(0);" class="find-out-more-btn brown-round-btn ">Find Out More</a>

                    <div class="hide-content">
                        Common foot problems that your child may suffer from are:
                        <ul class="ps-3">
                            <li>Club foot</li>
                            <li>Heel pain (Sever’s Disease)</li>
                            <li>Ingrown toenails</li>
                            <li>Knee pain (Osgood Schlatter’s disease)</li>
                            <li>Metatarsus Adductus</li>
                            <li>Sprained ankle</li>
                            <li>Tarsal coalitions</li>
                            <li>Tinea athletes foot</li>
                            <li>Warts (verrucae)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-5@2x-50-3.jpg" alt=""></div> -->

    </div>


    <div class="row mt-5">

        <?php echo get_field('content_txt_6');?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-6@2x-50-2.jpg" alt=""></div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="grey-bold">Diabetic Foot Care



                </div>
                <div class="mt-3">

                    Diabetes can reduce the blood supply and damage the nerves in your feet, leading to a number of
                    serious
                    foot problems which is why it is recommended to have a diabetes foot assessment performed by a
                    podiatrist and ongoing podiatry care if necessary.


                </div>
                <div class="mt-3">
                    <a href="javascript:void(0);" class="find-out-more-btn brown-round-btn ">Find Out More</a>

                    <div class="hide-content">


                        Poor glucose control generally causes two main complications in the feet:
                        <ul class=" ps-3">
                            <li>Nerve damage that results in peripheral neuropathy</li>
                            <li>Poor blood supply & circulation</li>
                        </ul>
                        If nerve damage occurs, you may experience some of the following symptoms in your feet:
                        <ul class=" ps-3">
                            <li>Numbness or altered sensation</li>
                            <li>Pins & needles in the feet</li>
                            <li>Burning pain in the legs and feet, usually more noticeable at night</li>
                            <li>Coldness in the legs and feet. </li>
                        </ul>
                        Long Term Lower Limb Complications of Diabetes:
                        <ul class=" ps-3">
                            <li>Loss of protective sensation</li>
                            <li>Decreased blood supply to the feet</li>
                            <li>Increased risk of infection</li>
                            <li>Diabetic foot ulcers, amputations and gangrene.</li>
                        </ul>
                        A diabetes foot assessment performed by a podiatrist every 3 to 12 months is advisable,
                        depending on
                        your risk category, the podiatrist will use the following validated assessment tools to
                        establish a
                        foot risk status:
                        <ul class=" ps-3">

                            <li>Neurological Assessment </li>
                            <li>Vascular Assessment</li>
                            <li>Footwear assessment </li>
                            <li>Dermatological Assessment</li>
                            <li>Screen for skin cancers</li>
                            <li>General foot and Nail care </li>
                            <li>Diabetic foot health education and information </li>
                        </ul>

                        Once a foot risk status is determined, the podiatrist may make recommendations based on the
                        results.
                        This may include recommendations for footwear modifications and orthotics to reduce high plantar
                        pressure sites that are at risk of ulceration. 
                        <br> <br>
                        Recommendations are made to help you achieve your goal and follow up appointments are scheduled
                        based on your specific needs and desired outcomes.

                    </div>
                </div>
            </div> -->
    </div>



    <div class="row mt-5 mobile-reverse">
        <?php echo get_field('content_txt_7');?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="grey-bold">Gait and Biomechanical Assessment

                </div>
                <div class="mt-3">

                    Our body parts are interconnected, and pain in one area can often originate elsewhere. By examining
                    the
                    entire body, Biomechanical Assessments can help diagnose and resolve associative pain and injuries.

                </div>
                <div class="mt-3">
                    <a href="javascript:void(0);" class="find-out-more-btn brown-round-btn ">Find Out More</a>

                    <div class="hide-content">

                        A static and dynamic biomechanics assessment is an investigation into your lower limb function –
                        looking closely for abnormalities and compensations. The assessment will focus on the structure,
                        posture, range of motion, plantar pressure, alignment, strengths and weaknesses of the foot and
                        will
                        include the pelvis, legs and knees and how they work together as pain in one area can indicate a
                        weakness or structural problem in another. The information gained from a biomechanical
                        assessment
                        forms the basis for a rehabilitation programme, or if the problem is mechanical, an orthotic
                        will be
                        prescribed.

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-7@2x-50-2.jpg" alt=""></div> -->

    </div>


    <div class="row mt-5">

        <?php echo get_field('content_txt_8');?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-8@2x-50-2.jpg" alt=""></div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="grey-bold">Ingrown Toenail Treatment (Onychocryptosis)

                </div>
                <div class="mt-3">

                    An ingrown toenail is the most common reason why people visit a podiatrist. This condition usually
                    affects the big toenail but can affect the lesser nails too. A piece of nail or a serrated edge
                    pierces
                    and penetrates the soft skin at the edge of the nail, or a spike of nail penetrates the fleshy end
                    of
                    the toe (distal pulp).

                </div>
                <div class="mt-3">
                    <a href="javascript:void(0);" class="find-out-more-btn brown-round-btn ">Find Out More</a>

                    <div class="hide-content">


                        This results in soreness or extreme pain, swelling and redness and often produces pus. The
                        condition
                        affects both men and women equally, regardless of age. Is it caused by either an injury due to
                        physical activity, ill-fitting shoes or poor nail cutting.




                    </div>
                </div>
            </div> -->

    </div>


    <div class="row mt-5 mobile-reverse">

        <?php echo get_field('content_txt_9');?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="grey-bold">Orthotics / Insoles / Footwear

                </div>
                <div class="mt-3">

                    Custom foot orthotics are specialized shoe inserts that can help treating your foot and leg
                    problems.
                    Many ‘biomechanical’ (walking) complaints such as heel pain, knee pain and lower back pain are
                    caused by
                    poor foot function.


                </div>
                <div class="mt-3">
                    <a href="javascript:void(0);" class="find-out-more-btn brown-round-btn ">Find Out More</a>

                    <div class="hide-content">

                        Orthotics re-aligns the foot and ankle bones to their neutral position, thereby restoring
                        natural
                        foot function. In turn this helps alleviate problems in other parts of the body.
                        <br> <br>
                        In addition, orthotics gives a more even weight distribution, taking pressure of sore spots
                        (e.g.,
                        the ball of the foot, corns in between toes, bunions) and they provide some shock absorption.




                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-9@2x-50-2.jpg" alt=""></div> -->


    </div>




    <div class="row mt-5">


        <?php echo get_field('content_txt_10');?>


        <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img class="w-100"
                    src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-10@2x-50-1.jpg" alt=""></div>


            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="grey-bold">Orthotics Management, 3D Scanning for Orthotics

                </div>
                <div class="mt-3">

                    Our custom orthoses are designed to support, align and improve the function of your feet and lower
                    limbs. This service includes casting, one pair of custom orthoses, standard covers, dispensing, and
                    a
                    follow-up appointment. We also provide prefabricated orthotic and repair services.



                </div>
                <div class="mt-3">
                    <a href="javascript:void(0);" class="find-out-more-btn brown-round-btn ">Find Out More</a>

                    <div class="hide-content">


                        We have put together a list of common conditions that benefit from the use of orthotics.
                        <ul class=" ps-3">
                            <li>Achilles Tendinopathy</li>
                            <li>Aching feet</li>
                            <li>Arch soreness</li>
                            <li>Bunions</li>
                            <li>Bursitis</li>
                            <li>Flat feet (excessive foot pronation)</li>
                            <li>Heel pain and spurs</li>
                            <li>High arched feet (excessive foot supination)</li>
                            <li>Morton’s Neuroma</li>
                            <li>Plantar Fasciitis</li>
                            <li>Sore shins (shin splints)</li>
                        </ul>
                        If you are experiencing any kind of foot or lower limb pain or discomfort, then orthotics may
                        play
                        an important part in your treatment.

                    </div>
                </div>
            </div> -->


    </div>







    <div class="sep mt-3"></div>

    <div class="row mt-4">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3"><img style="height:400px"
                class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-2@2x.png" alt="">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12">

            <div class="gold">
                <div class="person-name">
                    Charlie S.K Lau
                </div>

                <div class="mt-3">
                    Registered Podiatrist (NZ) <br>
                    BHsc Podiatry (NZ)<br>
                    PgD in Musculoskeletal Medicine and Rehabilitation (CUHK)<br>
                    Member of PodiatryNZ<br>
                    Member of International Podiatrists Association of Hong Kong (IPAHK)
                </div>
            </div>

            <div class="mt-3">Charlie is a podiatrist registered under the International Podiatrists Association of
                Hong
                Kong and
                registered with the Podiatrists Board of New Zealand. He received professional training in podiatry
                from
                the Auckland university technology in New Zealand and furthered his education and obtained his
                Postgraduate Diploma in Musculoskeletal Medicine and Rehabilitation from the Chinese University of
                Hong
                Kong.
                <br><br>
                Charlie is currently working at the Matilda international hospital/ Matilda Medical Centre (Central)
                ,
                Hong Kong Adventist Hospital- Tsuen wan and Gleneagles Hospital Hong Kong. He had worked in two
                multidisciplinary clinics in Shanghai. He also volunteered at the HKSKH Lady MacLehose Centre and
                provided podiatry education for the disadvantaged.
                Charlie work closely in partnership with consultant orthopedic surgeons, general practitioner and
                physiotherapist. They ensure each patient is thoroughly assessed; diagnosed and optimum treatment is
                selected.
                <br><br>
                His experience in a private practice in New Zealand and at the Matilda International Hospital in
                Hong
                Kong has provided him with a comprehensive understanding of diagnosis and treatment of a wide array
                of
                pathologies of the foot and lower leg, including:

                <ul class=" ps-3">
                    <li>Athletic and sports injuries of the foot, knee, and hip</li>
                    <li>Biomechanical assessments (examination of the lower limbs, looking at their structure,
                        alignment,
                        strengths and weaknesses)</li>
                    <li>Chronic pathologies</li>
                    <li>Diabetic foot care</li>
                    <li>Footwear assessment</li>
                    <li>Nail & skin pathologies (callus / cracked heels, corns, in-growing toenails, fungal nails,
                        verrucae, foot warts, etc.)</li>
                    <li>Neurological disorders</li>
                    <li>Orthotic prescription</li>
                    <li>Paediatric assessment</li>
                    <li>Rheumatoid arthritis</li>
                    <li>Vascular & musculoskeletal disorders</li>

                </ul>
            </div>
        </div>
    </div>



</div>









</div>



<div class="mt-5">
    <?php echo get_template_part( 'book' );?>

</div>


<script type="text/javascript">
$(function() {

    $('.find-out-more-btn').click(function() {

        $(this).fadeOut(0)
        $(this).closest('col-12').find('.hide-content').slideDown(200);

    })
})
</script>
<?php


get_footer();