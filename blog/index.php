<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <title>FOTIS LAW</title>

    <!-- StyleSheets -->
    <?php $folder='blog'; include_once('../includes/stylesheet.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Navigation, Top Header -->
    <?php $folder='blog'; include_once('../includes/header.inc.php'); ?> 


    <!--Header Wrapper-->
    <div class="inner-header subpage mb-4 mb-md-5" style="background: #000 url('https://fotislaw.com/lawtify/wp-content/uploads/2022/05/Blog-Image-scaled-1.jpg') no-repeat center center / cover;">
        <div class="container">
             
             
        </div>
    </div>
    <!--Header Wrapper-->

    <!-- //forem section Start -->
    <section class="">
        <div class="container">
            <div class="position-fixed top-0 start-0 w-100 h-100 bg-white filterMenu px-4 px-sm-5 pb-5 px-lg-0 pb-lg-0 pt-3" id="filterMenu"> 
                <form class="row gy-3 gx-3 mb-lg-5">
                    <div class="col-12 d-lg-none">
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <button type="button" class="btn px-0">Clear All Filter</button>
                            <button type="button" class="btn btn-close px-0 opacity-100" onclick="closeFilterMenu()"></button>
                        </div>
                    </div>
                    <div class="col-lg-4"> 
                        <input type="text" class="form-control" id="autoSizingInput" placeholder="Keyword" style="height: 60px;" required>
                    </div>
                    <div class="col-lg-2"> 
                        <select class="form-select ps-4 pe-3" id="autoSizingSelect" style="height: 60px;">
                            <option selected>Sector</option>
                            <option value="Aviation">Aviation</option>
                            <option value="Construction & Real Estate">Construction & Real Estate</option>
                            <option value="Healthcare & Life Sciences">Healthcare & Life Sciences</option>
                            <option value="Insurance & Reinsurance">Insurance & Reinsurance</option>
                            <option value="Mining">Mining</option>
                            <option value="Shipping & Martime">Shipping & Martime</option>
                            <option value="Banking & Finance">Banking & Finance</option>
                            <option value="Energy & Resources">Energy & Resources</option>
                            <option value="Hospitality & Leisure">Hospitality & Leisure</option>
                            <option value="Knowledge & Education">Knowledge & Education</option>
                            <option value="Retail & FMCG">Retail & FMCG</option>
                            <option value="Technology, Media & Telecommunications">Technology, Media & Telecommunications</option> 
                        </select> 
                    </div>
                    <div class="col-lg-2"> 
                        <select class="form-select ps-4 pe-3" id="autoSizingSelect" style="height: 60px;">
                            <option selected>Year</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>
                    <div class="col-lg-2"> 
                        <select class="form-select ps-4 pe-3" id="autoSizingSelect" style="height: 60px;">
                            <option selected>Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option> 
                        </select> 
                    </div>
                    <div class="col-lg-2 d-flex">
                        <button type="submit" class="btn btn-primary w-100">SEARCH</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- //forem section End --> 
    
    <!-- //Latest Articles section Start -->
    <section class="py-2">
        <div class="container mt-lg-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h2 fw-bold text-dark mb-0">Latest Articles</h2> 
                <button class="btn d-lg-none" onclick="openFilterMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><path fill="#dcb161" d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z"/></svg>
                </button>
                <script>
                    function openFilterMenu(){
                        document.querySelector("#filterMenu").classList.add('show')
                    }
                    function closeFilterMenu(){
                        document.querySelector("#filterMenu").classList.remove('show');
                    }
                </script>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 d-flex">
                    <div class="w-100 d-flex position-relative blog__caption__card"> 
                        <img 
                            class="img-fluid w-100 h-100 object-fit-cover" 
                            width="100" height="90" 
                            src="https://fotislaw.com/lawtify/wp-content/uploads/2023/10/Jurisdiction-Of-UAE-Courts-And-Applicability-of-An-Individuals-Personal-Law-scaled.jpg" 
                            alt="image"
                        >
                        <div class=" position-absolute top-0 start-0 w-100 h-100 z-1 p-3 p-sm-4 p-xl-5 d-flex align-items-end" style="background-color: rgba(0,0,0,0.625);">
                            <div class="w-100"> 
                                <h3 class="title text-white fs-3 fw-bold mb-3">
                                    <a href="blog-detail.php" class="text-white">Jurisdiction Of UAE Courts And Applicability of An Individual’s Personal Law</a>
                                </h3>
                                <p class="text-white fs-15 ellipses-4 mb-0 desc">
                                    The United Arab Emirates (UAE) is a nation known for its diverse culture, booming economy, and a legal system that uniquely
                                    blends civil law principles with Islamic Sharia law. Understanding the jurisdiction of UAE courts and the applicability of an
                                    individual’s personal law within this framework is crucial, especially for expatriates residing in the country. The UAE has a
                                    federal legal system, but each of the seven emirates that make up the UAE (Abu Dhabi, Dubai, Sharjah, Ras Al Khaimah,
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-3">
                        <div class="position-relative blog__caption__card">
                            <img 
                                class="img-fluid w-100" 
                                width="644" height="280" 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/10/Green-growth-and-responsible-business-Exploring-UAEs-environmental-social-and-governance-ESG-landscape-scaled.jpg" 
                                alt="blog Thumbnaill" style="height:280px;"
                            > 
                            <div class=" position-absolute top-0 start-0 w-100 h-100 z-1 p-3 p-sm-4 p-xl-5 d-flex align-items-end" style="background-color: rgba(0,0,0,0.625);">
                                <div class="w-100 transition"> 
                                    <h3 class="title text-white fs-4 fw-bold mb-3">
                                        <a href="blog-detail.php" class="text-white">Green growth and responsible business: Exploring UAE’s environmental, social and governance (ESG) landscape</a>
                                    </h3>
                                    <p class="text-white fs-15 ellipses-3 mb-0 desc">
                                        The United Arab Emirates (UAE), with its stunning skyscrapers, luxurious lifestyle, and booming business environment, has emerged as a global economic hub in recent decades. A significant driver of this transformation has been the liberalization of foreign direct investment (FDI) laws. These laws have played a pivotal role in attracting international businesses and investors to the UAE, 
                                    </p>
                                </div>
                            </div>
                        </div>  
                        <div class="position-relative blog__caption__card">
                            <img 
                                class="img-fluid w-100" 
                                width="644" height="280" 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/10/Foreign-Direct-Investment-Laws-and-Their-Impact-on-Economic-Growth-in-the-UAE-Introduction-scaled.jpg" 
                                alt="blog Thumbnaill" style="height:280px;"
                            > 
                            <div class=" position-absolute top-0 start-0 w-100 h-100 z-1 p-3 p-sm-4 p-xl-5 d-flex align-items-end" style="background-color: rgba(0,0,0,0.625);">
                            <div class="w-100 transition"> 
                                <h3 class="title text-white fs-4 fw-bold mb-3">
                                    <a href="blog-detail.php" class="text-white">Foreign Direct Investment Laws and Their Impact on Economic Growth in the UAE Introduction</a>
                                </h3>
                                <p class="text-white fs-15 ellipses-3 mb-0 desc">
                                    The United Arab Emirates (UAE), with its stunning skyscrapers, luxurious lifestyle, and booming business environment, has emerged as a global economic hub in recent decades. A significant driver of this transformation has been the liberalization of foreign direct investment (FDI) laws. These laws have played a pivotal role in attracting international businesses and investors to the UAE, contributing to its impressive economic growth.
                                </p>
                            </div>
                        </div>
                        </div>  
                    </div><!--//.row-->
                </div><!--//.row-->
            </div><!--//.row-->
        </div><!---//.container-->
    </section>
    <!-- //Latest Articles section End -->
    
    <!-- Blog Content Wrapper Start -->
    <main class="py-4 py-md-5">
        <div class="container">
            <h2 class="h2 fw-bold text-dark mb-3 mb-lg-4">Previous Articles</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/09/bandage.webp" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">DLD Guidelines For Off-Plan Sale Of Property</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/09/hand-shake.webp" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Structuring a Joint Venture in the UAE</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/09/Rights-Of-Children-Born-to-Unmarried-Couples-in-The-UAE.webp" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Rights Of Children Born to Unmarried Couples in The UAE</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/09/workers.webp" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Procedure Of Claiming Under the New Unemployment Insurance Scheme</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/08/construction.webp" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Payment For Variation Works (FIDIC) With No Instruction</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/08/money.jpg" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Identifying And Detecting Anti-Money Laundering Risks</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/08/bottles.jpg" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Changes To UAE Laws Relating To Alcohol Consumption</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/08/Trust.webp" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Special Purpose trusts in UAE: used for mutual funds/ securitization/ REITs</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="blog__item border w-100">
                        <a href="blog-detail.php" class="d-block">
                            <img 
                                src="https://fotislaw.com/lawtify/wp-content/uploads/2023/07/Suspension-bridge.webp" 
                                width="414" height="217" class="img-fluid thumbnail w-100" 
                                alt="Art of Carpet Cleaning"
                            > 
                        </a>
                        <div class="p-3 p-sm-4"> 
                            <h3 class="fs-5 fw-bold">
                                <a href="blog-detail.php" class="text-dark">Overview of Intellectual Property Issues in Cross-Border Joint Ventures</a>
                            </h3>
                            <p class="mt-3 desc ellipses-3 mb-0">
                                Dubai’s off-plan property market offers investors opportunities
                                under strict guidelines for transparency and protection. Buyers
                                should collaborate with registered developers and understand their
                                rights. …
                            </p>
                        </div>
                    </div> 
                </div><!--.//col-->
                 
            </div><!--.//row-->

            <nav aria-label="Page navigation example" class="mt-5 d-flex justify-content-center">
                <ul class="pagination align-items-center d-inline-flex px-2 py-1">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><path fill="#dcb161" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li> 
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">31</a></li> 
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><path fill="#dcb161" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!--.//container-->
    </main>
    <!-- Blog Content Wrapper End -->

   
    <!-- Footer Section -->
    <?php $folder='blog'; include_once('../includes/footer.inc.php'); ?> 
    
</body>
</html>