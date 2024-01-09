    <div class="pt-5 before" id="formWrapp"></div>
    <section class="container pb-5">
        <div class="row g-4 g-xxl-5">
            <div class="col-lg-6"> 
                <h3 class="h2 fw-semibold">Send Us a Message</h3>
                <form class="form-bg mt-4" id="contact-form" method="post" action="contact-from.php"> 
                    <div class="messages"></div> 
                    <div class="controls"> 
                        <div class="col-12 pb-2 pb-md-3 pb-lg-4 mb-1"> 
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="name" placeholder="name@example.com">
                                <label for="name">Name</label>
                            </div> 
                        </div>
                        <div class="col-12 pb-2 pb-md-3 pb-lg-4 mb-1">
                            <div class="form-floating">
                                <input type="text" name="email" class="form-control" id="form_email" placeholder="name@example.com" required="required"  data-error="Valid email is required.">
                                <label for="form_email">Email Address</label>
                            </div>  
                        </div>
                        <div class="col-12 pb-2 pb-md-3 pb-lg-4 mb-1">
                            <div class="form-floating">
                                <input type="tel" name="phone" class="form-control" id="form_phone" placeholder="Phone number" required="required">
                                <label for="form_phone">Phone</label>
                            </div>  
                        </div>
                        <div class="col-12 pb-2 pb-md-3 pb-lg-4 mb-1"> 
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Leave a comment here" id="form_message" style="height: 100px"></textarea>
                                <label for="form_message">Please explain your query</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" value="Send Message">
                        </div>
                    </div> 
                </form>
            </div>
            <div class="col-lg-6">
                <h3 class="h2 fw-semibold">Contact Us</h3>
                <div class="border mb-4 rounded p-3 p-sm-4 d-flex gap-3 mt-4">
                    <div class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle" style="width:3rem;height:3rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill centered" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </div>
                    <div class="col">
                        <h5 class="mb-1">Call Us Today</h5>
                        <a href="tel:+971561298984" class="text-dark">+971 56 129 8984</a>  
                    </div>
                </div>
                <div class="border mb-4 rounded p-3 p-sm-4 d-flex gap-3">
                    <div class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle" style="width:3rem;height:3rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope centered" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    </div>
                    <div class="col">
                        <h5 class="mb-1">Send Message</h5> 
                        <a href="mailto:corporate@fotislaw.com" class="text-dark">corporate@fotislaw.com</a>
                    </div>
                </div>
                <div class="border mb-4 rounded p-3 p-sm-4 d-flex gap-3">
                    <div class="d-inline-flex justify-content-center align-items-center bg-primary text-white rounded-circle" style="width:3rem;height:3rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill centered" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </div>
                    <div class="col">
                        <h5 class="mb-1">Visit Us</h5>
                        <!--<strong>Fotis International Consultancy Limited</strong>, Office 305, Park Towers (Tower B),-->
                        <!--Dubai, United Arab Emirates<br /> <b>Fotis International Law Firm</b> Creative Tower, PO Box: 4422-->
                        <!--Fujairah, Fujairah United Arab Emirates-->
                        <ul class="nav nav-pills contact__pills other" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active ps-0" id="pills-dubai-tab" data-bs-toggle="pill" data-bs-target="#pills-dubai" type="button" role="tab" aria-controls="pills-dubai" aria-selected="true">Dubai</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-dhabi-tab" data-bs-toggle="pill" data-bs-target="#pills-dhabi" type="button" role="tab" aria-controls="pills-dhabi" aria-selected="false">Abu Dhabi</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-fujairah-tab" data-bs-toggle="pill" data-bs-target="#pills-fujairah" type="button" role="tab" aria-controls="pills-fujairah" aria-selected="false">Fujairah</button>
                          </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-dubai" role="tabpanel" aria-labelledby="pills-dubai-tab">
                                <p class="text-dark"><strong>Fotis International Consultancy Limited</strong>, Office 305, Park Towers (Tower B), Dubai, United Arab Emirates</p>
                            </div>
                            <div class="tab-pane fade" id="pills-dhabi" role="tabpanel" aria-labelledby="pills-dhabi-tab">
                                <p class="text-dark"><b>Fotis International Law Firm Limited</b> C14, 15, Al Sarab Tower, ADGM Square, Al Maryah Island, Abu Dhabi, United Arab Emirates</p>
                            </div>
                            <div class="tab-pane fade" id="pills-fujairah" role="tabpanel" aria-labelledby="pills-fujairah-tab">
                                <p class="text-dark"><b>Fotis International Law Firm</b> Creative Tower, PO Box: 4422 Fujairah, Fujairah United Arab Emirates</p>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>