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
<div>
</div>

<script type="text/javascript">
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
</script>
<?php


get_footer();