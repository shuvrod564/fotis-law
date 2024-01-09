<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title><?php echo $title; ?></title>
    <link rel="canonical" href="<?php echo $canonical; ?>"/>
    
    <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet" />-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" />-->
    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>

    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        })
    });
    // DOMContentLoaded  end
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        if($(window).innerWidth() >= 991) {
            $(".dropdown").hover(function() {
                var dropdownMenu = $(this).children(".dropdown-menu");
                if (dropdownMenu.is(":visible")) {
                    dropdownMenu.parent().toggleClass("open");
                }
            });
        }
    });
    </script>
    <script>
    //<![CDATA[


    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".sticky-top").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".sticky-top").removeClass("active");
        }
    });
    //]]>
    </script>
    <script>
        $(document).ready(function() {
            // $('body').on('click', function() {
            //     $('.navbar-collapse').removeClass('show');
            //     $('.navbar-nav .nav-item').on('click', function(){
            //         event.stopPropagation(); 
            //     });
            // });
            // $('.nav-item').on('click', function() {
            //     if($(window).innerWidth() <= 991) {
            //         console.log('h222');
            //         // $(this).find('.dropdown-menu').toggleClass('show');
            //     }
            // });
        });
    </script>

</head>
<nav class="header-sep">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="tel:+971561298984" class="nav-link px-2"><i class="fas fa-phone-volume"></i>
                    +971 56 129 8984</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="https://twitter.com/FotisLaw" class="nav-link link-dark" target="_blank"><i
                        class="fab fa-twitter"></i></a></li>
            <li class="nav-item"><a href="https://www.facebook.com/fotislawfirm" class="nav-link link-dark"
                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li class="nav-item"><a href="https://www.youtube.com/channel/UCgugT4fWIsJnmoeCvOpcHcQ"
                    class="nav-link link-dark" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <li class="nav-item"><a href="https://ae.linkedin.com/company/fotis-law-firm"
                    class="nav-link link-dark px-2" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </div>
</nav>
<nav class="navbar sticky-top navbar-expand-lg mt-1" aria-label="">
    <div class="container pos-relative">
        <a class="navbar-brand " href="index.php"><img src="assets/images/logo.png" alt="" /></a>
     
        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#MainNav"
            aria-controls="MainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fwb" id="MainNav">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown00" data-bs-toggle="dropdown"
                        aria-expanded="false">About Us &nbsp;<i class="fas fa-angle-down sub-arrow"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li class="brd-btm-gold"><a class="dropdown-item" href="the-firm.php">The Firm</a></li>
                        <li><a class="dropdown-item" href="the-team.php">The Team</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                        aria-expanded="false">Practice Areas &nbsp;<i class="fas fa-angle-down sub-arrow"></i></a>
                    <div class="dropdown-menu megamenu" role="menu">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="col-megamenu">
                                    <ul class="list-unstyled">
                                        <li><a href="<?php echo $base_url; ?>administrative-law.php">Administrative Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>finance-law.php">Banking & Finance Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>capital-markets.php">Capital Markets Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>commercial-law.php">Commercial Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>criminal-law.php">Criminal Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>debt-recovery.php">Debt Collection</a></li>
                                        <li><a href="<?php echo $base_url; ?>family-lawyer.php">Family & Divorce Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>intellectual-property.php">Intellectual Property</a></li>
                                        <li><a href="<?php echo $base_url; ?>employment-and-immigration-law.php">Employment & Immigration
                                                Law</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-6">
                                <div class="col-megamenu">
                                    <ul class="list-unstyled">
                                        <li><a href="<?php echo $base_url; ?>arbitration-law-firm-dubai.php">Arbitration Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>bankruptcy-law.php">Bankruptcy Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>corporate-law.php">Corporate Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>construction-law.php">Construction Law</a></li>
                                        <li><a href="<?php echo $base_url; ?>cyber-risk.php">Cyber Risk</a></li>
                                        <li><a href="<?php echo $base_url; ?>dispute-resolution.php">Dispute Resolution</a></li>
                                        <li><a href="<?php echo $base_url; ?>franchising.php">Franchising</a></li>
                                        <li><a href="<?php echo $base_url; ?>taxation.php">Taxation</a></li>

                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown"
                        aria-expanded="false">Sectors &nbsp;<i class="fas fa-angle-down sub-arrow"></i></a>
                    <div class="dropdown-menu megamenu" role="menu">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="col-megamenu">
                                    <ul class="list-unstyled">
                                        <li><a href="<?php echo $base_url; ?>aviation.php">Aviation</a></li>
                                        <li><a href="<?php echo $base_url; ?>construction-and-real-estate.php">Construction & Real Estate</a>
                                        </li>
                                        <li><a href="<?php echo $base_url; ?>healthcare-and-life-sciences.php">Healthcare & Life Sciences</a>
                                        </li>
                                        <li><a href="<?php echo $base_url; ?>insurance-and-reinsurance.php">Insurance & Reinsurance</a></li>
                                        <li><a href="<?php echo $base_url; ?>mining.php">Mining</a></li>
                                        <li><a href="<?php echo $base_url; ?>shipping-and-martime.php">Shipping & Martime</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <div class="col-md-6">
                                <div class="col-megamenu">
                                    <ul class="list-unstyled">
                                        <li><a href="<?php echo $base_url; ?>banking-and-financial-services.php">Banking & Finance</a></li>
                                        <li><a href="<?php echo $base_url; ?>energy-and-resources.php">Energy & Resources</a></li>
                                        <li><a href="<?php echo $base_url; ?>hospitality-leisure.php">Hospitality & Leisure</a></li>
                                        <li><a href="<?php echo $base_url; ?>knowledge-and-education.php">Knowledge & Education</a></li>
                                        <li><a href="<?php echo $base_url; ?>fmcg-retail.php">Retail & FMCG</a></li>
                                        <li><a href="<?php echo $base_url; ?>technology-media-telecommunications.php">Technology, Media &
                                                Telecommunications</a></li>
                                    </ul>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                            <!-- end col-3 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- dropdown-mega-menu.// -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown"
                        aria-expanded="false">Lawtify &nbsp;<i class="fas fa-angle-down sub-arrow"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <li class="brd-btm-gold"><a class="dropdown-item" href="<?php echo $base_url; ?>lawtify/blog/">Blog</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo $base_url; ?>lawtify/video-podcast/">Video Podcast</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>careers.php">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a>
                </li>
                <li class="nav-item gold-bg">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Submit Enquiry</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</html>
