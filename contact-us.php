<!doctype html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Contact Us | Fotis Law UAE</title>
    <link rel="canonical" href="<?php echo $base_url; ?>contact-us.php" />
    
    <!-- Stylesheets -->
    <?php  include_once "includes/stylesheet.inc.php" ?>
    <style>
        .contact__box { transition:all .4s ease; }
        .contact__box:hover { transform:translate(-.5rem, -1rem); }
    </style>
    
</head>
<body>  
    
    
    <?php  include_once "includes/header.inc.php"; ?>
    
    <div class="inner-header mb-0" style="background-image:url('assets/images/webp/contact__header__bg-1.webp');box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.55);">
        <div class="container">
            <h1 class="text-center h1"> Contact Us</h1>
        </div> 
    </div>
    
    <!-- Map -->
    <?php include_once "includes/map.inc.php"; ?> 
    <!-- Footer -->
    
    <section class="py-5 contact__page" style="margin-top: -7rem; position: relative;">
        <div class="container"> 
            <div class="row g-3">
                <div class="col-lg-4 d-flex">
                    <a href="<?php echo $base_url;?>dubai.php" class="p-3 p-lg-4 contact__box w-100" style="background-color:#141c2c">
                        <div class="git-box-c d-flex">
                            <div class="caption float-none">
                                <h2 class="mb-1 text-primary h2">Dubai</h2>
                                <p class="text-white mb-0"><strong class="d-block">Fotis International Consultancy Limited</strong>, Office 305, Park Towers (Tower B), Dubai, United Arab Emirates</p> 
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 d-flex">
                    <a href="<?php echo $base_url;?>abu-dhabi.php" class="p-3 p-lg-4 contact__box w-100 bg-primary">
                        <div class="git-box-c d-flex">
                            <div class="caption float-none">
                                <h2 class="mb-1 text-dark h2">Abu Dhabi</h2>
                                <p class="text-dark mb-0"><strong class="d-block">Fotis International Law Firm Limited,</strong> C14, 15, Al Sarab Tower, ADGM Square, Al Maryah Island, Abu Dhabi, United Arab Emirates</p> 
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 d-flex">
                    <a href="<?php echo $base_url;?>fujairah.php" class="p-3 p-lg-4 contact__box w-100" style="background-color:#141c2c">
                        <div class="git-box-c d-flex">
                            <div class="caption float-none">
                                <h2 class="mb-1 text-primary h2">Fujairah</h2>
                                <p class="text-white mb-0"><strong class="d-block">Fotis International Law Firm,</strong>Creative Tower, PO Box: 4422 Fujairah, Fujairah United Arab Emirates</p> 
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="border border-light shadow-lg rounded-3 p-3 p-sm-4 p-md-5 mt-4 mt-md-5">
                <h3 class="h3 h2color">Send Us a Message</h3>
                <form class="form-bg mt-4" id="contact-form" method="post" action="contact-from.php">
                    <div class="messages"></div>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input id="fname" type="text" name="name" class="form-control rounded-0 border-0 border-bottom px-0"> 
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input id="lname" type="text" name="name" class="form-control rounded-0 border-0 border-bottom px-0"> 
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" type="email" name="email" class="form-control rounded-0 border-0 border-bottom px-0" required="required"> 
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input id="phone" type="text" name="phone" class="form-control rounded-0 border-0 border-bottom px-0"> 
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input id="country" type="text" name="country" class="form-control rounded-0 border-0 border-bottom px-0"> 
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Type your message</label>
                                <textarea id="message" name="message" class="form-control rounded-0 border-0 border-bottom px-0" rows="2"></textarea> 
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!--.//container-->
    </section>
    
    
        
                    
   
    
    <!--
    
        <form class="form-bg mt-4" id="contact-form" method="post" action="contact-page-from-submit.php">
                        <div class="messages"></div>
                        <div class="controls row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                      <input type="text" name="fname" class="form-control" id="firstName" placeholder="Jhon Deo" required>
                                      <label for="firstName">First name <span class="text-danger">*</span></label>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                      <input type="text" name="lname" class="form-control" id="LastName" placeholder="Jhon Deo">
                                      <label for="LastName">Last name</label>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                      <input type="email" name="email" class="form-control" id="email" placeholder="jhone@gmail.com" data-error="Valid email is required." required>
                                      <label for="email">Email <span class="text-danger">*</span></label>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                      <input type="tel" name="phone" class="form-control" id="Phone" placeholder="Phone" required>
                                      <label for="Phone">Phone <span class="text-danger">*</span></label>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                      <input type="text" name="organisation" class="form-control" id="Organisation" placeholder="Organisation">
                                      <label for="Organisation">Organisation</label>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                      <input type="text" name="country" class="form-control" id="country" placeholder="Country*">
                                      <label for="country">Country</label>
                                </div> 
                            </div>
                             
                            
                            <div class="col-12 mb-1">
                                <div class="form-group pb-4">
                                    <textarea id="form_message" name="message" class="form-control"
                                        placeholder="Please explain your query" rows="4"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn gold-bg" value="Send message">
                            </div>
                        </div>
    
                    </form>
    -->
    
    <?php include_once "includes/footer.inc.php"; ?>
    
</body>

</html>