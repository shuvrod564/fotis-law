<!doctype html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Locations | Fotislaw</title>
    
     
    <!-- Stylesheets -->
    <?php  include_once "includes/stylesheet.inc.php"; ?>
     

</head>
<body>  

    <?php require "includes/header.inc.php" ?>
    
    <!--Header Wrapper-->
    <div class="inner-header" style="background: #000 url('assets/images/locations/location-header-bg.webp') no-repeat center center / cover;">
        <div class="container">
            <h1 class="h1 text-center pt-lg-4 mb-sm-5">Locations</h1> 
        </div>
    </div>
    <!--Header Wrapper-->

    <div class="container-fluid px-0 ">
        <div class="position-relative location__item" style="background-image: url('assets/images/locations/Dubai.webp');"> 
            <div class="caption position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                <div class="w-100"> 
                    <h2 class="display-1 fw-semibold text-center text-uppercase mb-4" style="transition:all .3s ease-in-out;">
                        <a href="dubai.php" class="text-white">Dubai</a>
                    </h2>
                    <div class="text-center btn__box">
                        <a href="dubai.php" class="btn btn-outline-white lead fw-medium">See Our Office</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative location__item" style="background-image: url('assets/images/locations/Abu-Dhabi.webp');"> 
            <div class="caption position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                <div class="w-100"> 
                    <h2 class="display-1 fw-semibold text-center text-uppercase mb-4" style="transition:all .3s ease-in-out;">
                        <a href="abu-dhabi.php" class="text-white">Abu Dhabi</a>
                    </h2>
                    <div class="text-center btn__box">
                        <a href="abu-dhabi.php" class="btn btn-outline-white lead fw-medium">See Our Office</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative location__item" style="background-image: url('assets/images/locations/Fujairah.webp');"> 
            <div class="caption position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                <div class="w-100"> 
                    <h2 class="display-1 fw-semibold text-center text-uppercase mb-4" style="transition:all .3s ease-in-out;">
                        <a href="fujairah.php" class="text-white">Fujairah</a>
                    </h2>
                    <div class="text-center btn__box">
                        <a href="fujairah.php" class="btn btn-outline-white lead fw-medium">See Our Office</a>
                    </div>
                </div>
            </div>
        </div>
         
    </div>

 
    <?php require "includes/footer.inc.php"; ?>

</body>

</html>