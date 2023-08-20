<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Contact Us</title> 

    <!-- CSS: Html Designer --> 
    <?php include('includes/stylesheet.inc.php') ?> 
</head>
<body> 

    <!-- Preloader, Navigation, Top Header -->
    <?php include('includes/navbar.inc.php') ?>
 
    <!-- Header Wrapper Start -->
    <header class="page__header" style="background-image: url('images/page_header_banner.webp');">
        <div class="container"> 
            <h1 class="h1 text-center text-white d-none">Contact Us</h1>
        </div><!--.//container-->
    </header>
    <!-- Header Wrapper End -->

    <!-- Products Wrapper Start -->
    <div class="ptb contact__wrapper"> 
        <div class="container">
            <div class="col-lg-8 mx-auto"> 
                <h2 class="text-center wow fadeInDown">Send a Message</h2>
                <div class="row g-4 gx-lg-5 mt-1 wow fadeInUp">
                    <div class="col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control">
                        <div class="small text-danger" id="fname-error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control">
                        <div class="small text-danger" id="lname-error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="emailAddress">Email</label>
                        <input type="email" name="emailAddress" id="emailAddress" class="form-control">
                        <div class="small text-danger" id="emailAddress-error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="contactNumber" class="d-block">Phone Number</label>
                        <input type="tel" name="contactNumber" id="contactNumber" class="form-control">
                        <div class="small text-danger" id="contactNumber-error"></div>
                    </div>
                    <div class="col-12">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea>
                        <div class="small text-danger" id="message-error"></div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary px-4 mt-3" onclick="submitContactForm()">SUBMIT</button>
                    </div>
                </div>
            </div><!--.//col-->
            
        </div><!--.//container-->
    </div>
    <!-- Products Wrapper End -->

    <!-- Map Wrapper Start -->
    <div class="py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-8"> 
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.920590696319!2d76.3177261!3d9.9405652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f26865073114907!2sOakly%20Kochi!5e0!3m2!1sen!2sbd!4v1657953793223!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-4 bg-primary d-flex align-items-center">
                    <div class="content p-4 p-lg-5">
                        <h3 class="text-white">Oakly Kochi</h3>
                        <address class="text-white mt-3">
                            15/318A,Sky-Blue Tower, Vytila Aroor Bye Pass Road, Service Road West, NH , 47, NH 66
                            Kundannoor, Maradu
                            Ernakulam, Kerala 682304
                        </address>
                    </div> 
                </div>
            </div>
        </div><!--.//container-->
    </div>
    <!-- Map Wrapper End -->
 
    <!-- Map Wrapper Start -->
    <div class="pt-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-8 order-md-2"> 
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.9467002636957!2d76.9107463!3d8.504556400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x616130ddf333998a!2sSofas%20%26%20More%20by%20Oakly%20-%20Trivandrum!5e0!3m2!1sen!2sbd!4v1657950697962!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-4 order-md-1 bg-primary d-flex align-items-center">
                    <div class="content p-4 p-lg-5">
                        <h3 class="text-white">Sofas & More by Oakly - Trivandrum</h3>
                        <address class="text-white mt-3">
                            Saina Lifestyle LTD Lords hospital JN, NH bypass
                            Anayara <br>
                            Thiruvananthapuram, Kerala 695029
                        </address>
                    </div> 
                </div>
            </div>
        </div><!--.//container-->
    </div>
    <!-- Map Wrapper End --> 
   
    <!-- Footer Section -->
    <?php include_once('includes/footer.inc.php'); ?>
    
  
    
</body>
</html>