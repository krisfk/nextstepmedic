<?php


if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
    $lang_code = ICL_LANGUAGE_CODE;
  }
  ?>
<div class="book-an-appointment-div pt-4 pb-4">
    <a href="<?php echo get_site_url();?>/contact-us-book-online" class="book-an-appointment-a-btn">

        <?php echo ($lang_code == 'zh-hant') ? '預約':'Book an Appointment'; ?>


    </a>

    <div class="container white fw-bolder fst-italic mt-3 text-center">
        Take your NEXT STEP to consult our team and treat your problems proactively.
    </div>
</div>