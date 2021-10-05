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


<div class="position-relative contact-us-top-container pt-5 pb-5">

    <div class="container">
        <div class="row  gx-5 justify-content-center">

            <div class="col-lg-5 col-md-12 col-sm-12 col-12  mb-lg-0 mb-md-4 mb-sm-4 mb-4">
                <div class="subtitle">Getting to The Next Step Medical Clinic
                </div>
                <div class="contact-bold-txt text-start">3-Minute Walking Distance from Central MTR Station
                </div>
                <div class="mt-3">Located in the heart of the city, it enjoys easy accessibility to Central and Hong
                    Kong MTR
                    stations on
                    four railway lines (Tsuen Wan Line, Island Line, Tung Chung Line, Aiport Express) which connects
                    Hong
                    Kong Islands with Kowloon, New Territories and also the Airport. Other hassle-free travel options
                    include mini-bus, tram, ferry, bus and taxi. <br> <br>
                    It is also of close proximity to quality shopping and dining options, top-notch hotels as well as
                    entertainment and leisure facilities nearby.

                </div>

                <div class="row mt-5 g-0">

                    <div class="col-12 text-center">

                        <span>
                            <img class="human-icon" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-3@2x.png
                            " alt="">
                        </span>
                        <span class="rail-time">3 Minutes</span>
                    </div>

                    <div class="col-12 mt-2">

                        <table class="rail-table">
                            <tr>
                                <td class="p-0"> <img class="w-100"
                                        src="https://nextstepmedic.com/wp-content/uploads/2021/09/mtr-icon.png" alt="">
                                </td>
                                <td>
                                    <div class="rail-station-name">Central</div>


                                </td>
                                <td>
                                    <img class="w-100"
                                        src="https://nextstepmedic.com/wp-content/uploads/2021/09/dash.png" alt="">
                                </td>
                                <td>
                                    <div class="rail-station-name">Crawford House</div>
                                </td>
                            </tr>
                        </table>



                    </div>

                    <div class="col-12 text-center mt-3 address-div mx-auto pt-2 pb-2">
                        <span><img class="location-pin"
                                src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-6@2x-1.png"
                                alt=""></span>
                        <span>70 Queen's Road Central</span>

                    </div>

                </div>



            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 position-relative">

                <div id="map"></div>

                <?php //echo get_template_directory_uri().'/assets/images/pin.svg';?>
                <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-2@2x-1.png
" alt="">
            </div>
        </div>


        <div class="row gx-5 justify-content-center contact-us-info-div mt-5">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">

                <div class="contact-subtitle">Contact Us
                </div>

                <table class="mt-2">
                    <tr>
                        <td><img src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-7@4x.png" alt=""></td>
                        <td> Unit 1110, 11/F, Crawford House, 70 Queen's Road Central, Central, Hong Kong
                        </td>
                    </tr>


                    <tr>
                        <td><img src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-8@4x.png" alt=""></td>
                        <td> +852 9126 8257</td>
                    </tr>
                    <tr>
                        <td><img src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-9@4x.png" alt=""></td>
                        <td>
                            +852 xxxx xxxx</td>
                    </tr>
                    <tr>
                        <td><img src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-10@4x.png" alt=""></td>

                        <td> nextstepclinic@gmail.com
                        </td>
                    </tr>
                    </tr>

                </table>







            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">


                <div class="contact-subtitle">Opening Hours

                </div>

                <div class="mt-2">

                    Monday - Friday: 10:00 - 18:00 <br>
                    Saturday: 09:00 - 13:00<br>
                    Sunday & Public Holidays: Closed

                </div>

            </div>

        </div>


    </div>


    <!-- <img class="w-100" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-9@2x-50-scaled.jpg" alt=""> -->
</div>


<div class="container mt-5 mb-5">

    <form class="contact-us-form">
        <div class="row  gx-5 justify-content-center">

            <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">
                <div class="bold">Book an Appointment</div>
                <!-- <img class="w-100 mt-3" src="https://nextstepmedic.com/wp-content/uploads/2021/09/Asset-12@2x.png"
                    alt=""> -->
                <div id="datepicker" class="mt-3"></div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">
                <div class="bold">For any enquiries, please leave us your message:</div>


                <div class="row  mt-3">

                    <div class="col-6">
                        <input type="text" placeholder="Name" class="w-100 form-control">
                    </div>
                    <div class="col-6">
                        <input type="text" placeholder="Phone" class="w-100 form-control">

                    </div>
                    <div class="col-12  mt-2">
                        <input type="text" placeholder="Email" class="w-100 form-control">


                    </div>
                    <div class="col-12 mt-2">

                        <textarea class="w-100  form-control" placeholder="Message" rows="4" cols="50">
</textarea>

                    </div>
                    <div class="col-12 mt-2 text-end">

                        <a href="javascript:void(0);" class="send-msg-btn">Send Message</a>
                    </div>
                </div>
            </div>
        </div>


    </form>







</div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN611NFShALGyApUBivJPfvqlEIvbPRNU&callback=initMap&libraries=&v=weekly"
    async>
</script>

<script type="text/javascript">
function initMap() {

    const myLatLng = {

        lat: 22.282819076034496,
        lng: 114.15559715215691
    };
    const map = new google.maps.Map(document.getElementById("map"), {
        // zoom: 4,
        center: myLatLng,
        gestureHandling: 'greedy',
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeControl: false,
        streetViewControl: false

    });

    // const marker =
    //     new google.maps.Marker({
    //         position: myLatLng,
    //         map,
    //         title: "Hello World!",
    //     });

    var marker2 = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: {
            url: 'https://nextstepmedic.com/wp-content/themes/nextstepmedic/assets/images/pin.svg', // url
            scaledSize: new google.maps.Size(68, 96), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        }

    });


    map.setZoom(19);
    map.panTo(marker2.position);


    // const contentString = '<div class="infowindow">fdsaf</div>';


    // const infowindow = new google.maps.InfoWindow({
    //     content: contentString,
    // });

    // marker.addListener("click", () => {
    //     infowindow.open(map, marker);
    // });


}
</script>

<script type="text/javascript">
$(function() {

    $('.slides').slick({
        dots: false,
        arrows: true,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false,
        slidesToShow: 3,
        slidesToScroll: 1
    });

    $(function() {
        $("#datepicker").datepicker({
            // dayNamesShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
            // dayNames: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
            dayNamesMin: ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"],
            useCurrent: false,
            firstDay: 1



        });
    });
})
</script>




<?php


get_footer();