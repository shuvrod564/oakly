   
   <?php // $base_url="https://localhost/oakly/"; ?>
   <?php $base_url="https://oakly.suvroweb.com/"; ?>
   <!-- CSS: All Vendors -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- CSS: Html Designer -->
   <?php if(isset($page) && $page === 'home') { ?>
   <link rel="stylesheet" href="css/variables.css">  
   <link rel="stylesheet" href="css/parallax-slider.css">  
    <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css">  
    <?php } else { ?>
        <link rel="stylesheet" href="css/variables.css">  
         <link rel="stylesheet" href="<?php echo $base_url;?>css/style.css">  
    <?php } ?>