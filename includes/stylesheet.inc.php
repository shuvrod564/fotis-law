<?php 
    $base_url = 'http://localhost/fotis-law/'; 

    $color="#dcb161";
?>
    
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--<link href="assets/css/vendor.css" rel="stylesheet" > -->
    <link href="<?php echo $base_url;?>assets/css/style.css?v=15" rel="stylesheet" > 
    <?php if(isset($folder) && $folder==='compliance-lawyers'){ ?>
      <link href="<?php echo $base_url;?>assets/css/compliance-lawyers-style.css?v=5" rel="stylesheet" /> 
    <?php } ?>

    <style>
        :root {
            --check-dark:url('<?php echo $base_url;?>assets/images/icons/checked-dark.svg'); 
            --check-colored:url('<?php echo $base_url;?>assets/images/icons/checked-colored.svg'); 
            --white-check:url('<?php echo $base_url;?>assets/images/icons/White_TICK.svg'); 
        }
         
        /* :root{--brand:#dcb161;--dark:#141c2c } */
        /* .teamCarousel .member__card .h4{min-height:2rem;}.teamCarousel .member__card .h4 a {color: #242d4e;}.teamCarousel .member__card .h4 a:hover{color:var(--brand)!important;}  */
    </style>