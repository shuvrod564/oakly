 

    <!-- Footer Wrapper Start -->
    <footer>
        <div class="logo__box">
            <div class="container">
                <a href="<?php echo $base_url;?>" class="logo"><img src="<?php echo $base_url;?>images/oakley.webp"  width="230" height="50" alt="site-logo"></a>
            </div>
        </div>
        <div class="container">
            <div class="row g-4 gx-xxl-5"> 
                <div class="col-xl-9"> 
                    <div class="row gx-1 gy-2">
                        <div class="col-lg-2 col-sm-4 col-6">
                            <p class="lead mb-2 mb-lg-3 text-white">OTHERS</p>
                            <ul> 
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Blog</a></li> 
                                <li><a href="#">Quality standards</a></li>
                                <li><a href="#">Awards</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Available Delivery Slot</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-6">
                            <div class="ps-lg-5"> 
                                <p class="lead mb-2 mb-lg-3 text-white">NEWS & MEDIA</p>
                                <ul> 
                                    <li><a href="#">Press releases</a></li>
                                    <li><a href="#">Newsletters</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Photo gallery</a></li>
                                    <li><a href="#">Recipes</a></li> 
                                    <li><a href="#">NBTV</a></li> 
                                </ul>
                            </div>
                        </div>    
                        <div class="col-lg-3 col-sm-4 col-12">
                            <div class="ps-lg-4"> 
                                <p class="lead mb-2 mb-lg-3 text-white">OUR POLICIES</p>
                                <ul> 
                                    <li><a href="#">Privacy policy</a></li> 
                                    <li><a href="#">Payment policy</a></li> 
                                    <li><a href="#">Disclaimer</a></li> 
                                    <li><a href="#">Statutory Compliance</a></li> 
                                    <li><a href="#">Data Protection Policy</a></li> 
                                    <li><a href="#">Grievance Officer</a></li>  
                                </ul>
                            </div>
                        </div>      
                        <div class="col-lg-4 col-sm-12 col-12">
                            <p class="lead mb-2 mb-lg-3 text-white">ABOUT US</p>
                            <p class="desc pe-lg-3">
                                Oakly is a super premium brand having a manufacturing facility in Bangalore, as well as retail locations and authorised franchises in 15 Indian metro cities. Our products are produced in two state-of-the-art manufacturing facilities in Bangalore, which employ over a thousand extremely skilled craftsmen.
                            </p>
                        </div>
                    </div><!--.//--> 
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="form"> 
                        <p class="lead text-white mb-3">SIGN UP TO STAY UPDATED</p>
                        <div class="input-group">
                            <input type="email" class="form-control" id="nEmailAddress" placeholder="name@example.com">
                            <button type="button" class="btn btn-primary" onclick="submitNewsLetterForm()">
                                <img src="<?php echo $base_url;?>images/icons/plane.svg" class="img-fluid" alt="icon">
                            </button>
                        </div> 
                        <div class="small text-danger nerror" id="nEmailAddress-error"></div>
                        
                    </div>

                    <p class="lead text-white mb-3 mt-4">FOLLOW US</p>
                    <ul class="social__links d-flex justify-content-start">
                        <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter">
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram">
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Youtube">
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="bottom" title="Linkedin">
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div><!--.//row-->
  
        </div><!--.//container-->
        <div class="copy_right">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 order-md-2">
                        <div class="d-flex flex-wrap justify-content-center justify-content-md-end copy__links">
                            <a href="#" class="">Terms & Conditions</a>
                            <a href="#" class="">Privacy Policy</a> 
                        </div>
                    </div>
                    <div class="col-md-7 order-md-1">
                        <p class="mb-0 small text-center text-md-start desc">&copy; Copyright Reserved <?php echo Date('Y'); ?>. Designed & Developed By <a href="https://suvroweb.com/" target="_blank">Shuvrodeb</a>.</p>
                    </div>
                </div><!--.//row-->
            </div><!--.//container-->
        </div><!--.//copyright-->
    </footer>
    <!-- Footer Wrapper End -->
         
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="backTop" class="btn backTop" title="Go to top"></button>
    <!-- JS: All Vendors --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js" integrity="sha512-ToL6UYWePxjhDQKNioSi4AyJ5KkRxY+F1+Fi7Jgh0Hp5Kk2/s8FD7zusJDdonfe5B00Qw+B8taXxF6CFLnqNCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js" integrity="sha512-Yk47FuYNtuINE1w+t/KT4BQ7JaycTCcrvlSvdK/jry6Kcxqg5vN7/svVWCxZykVzzJHaxXk5T9jnFemZHSYgnw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script type="text/javascript" src="https://unpkg.com/default-passive-events"></script> 
    <!-- JS: Designer Script -->
    <script src="<?php echo $base_url;?>js/script.js"></script> 
    <script src="<?php echo $base_url;?>form-validation.js"></script> 