<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>FOTIS LAW</title>

    <!-- StyleSheets -->
    <?php include('__stylesheet.inc.php') ?>
</head>
<body> 

    <!-- Preloader, Navigation, Top Header -->
    <?php include('__navbar.inc.php') ?>


    <!-- Header Wrapper Start -->
    <header class="header__wrapper page__header subpage text-center blog" style="background: #000 url('../images/about/header-bg.webp') no-repeat center top / cover;">
        <div class="container">
            <h1 class="h1 text-white text-uppercase">BLOG</h1> 
        </div><!--.//container-->
    </header>
    <!-- Header Wrapper End -->

    <!-- Blog Content Wrapper Start -->
    <main class="blog__page">
        <div class="ptb">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8">

                        <!-- Blog Item -->
                        <div class="blog__item">
                            <h3 class="mt-3 mt-lg-4">
                                <a href="corporate-uniforms-in-dubai-style-success.php">Suiting Up for Success: Why Increasing Numbers of Companies are Embracing Corporate Uniforms</a>
                            </h3>
                            <div class="info__box d-flex align-items-center mt-2 mt-lg-3">
                                <div class="date d-flex align-items-center me-4">
                                    <img src="images/calander.svg" class="img-fluid me-2" alt="calander">
                                    <span>30 Dec, 2023</span>
                                </div>
                                <div class="date d-flex align-items-center">
                                    <img src="images/user.svg" class="img-fluid me-2" alt="calander">
                                    <span>Admin</span>
                                </div>
                            </div>
                            <p class="desc mt-3">
                                The age-old dilemma of what to wear to work It is not just about looking good, but also about fitting into the corporate culture, which is increasingly taking the form of uniforms these days! 
                            </p>
                            <a href="corporate-uniforms-in-dubai-style-success.php" class="link fw-semibold">READ MORE >>></a>
                        </div><!--.//blog__item-->

                        <!-- Pagination -->
                        <?php 
                            $firstArrow="false"; $lastArrow="true"; 
                            $prevPageUrl="index.php";
                            $nextPageUrl="page-2.php"; 
                            $active     = '1';
                            include_once('_pagination.inc.php'); 
                        ?>

                    </div><!--.//col-->

                    <div class="col-lg-4">
                        <?php include('__highlight.inc.php'); ?>
                    </div><!--.//col-->
                </div><!--.//row-->
            </div><!--.//container-->
        </div>
    </main>
    <!-- Blog Content Wrapper End -->

   
    <!-- Footer Section -->
    <?php include('__footer.inc.php'); ?>
    
</body>
</html>