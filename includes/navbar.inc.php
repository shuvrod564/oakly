    <!-- PRELOADER --> 
    <div id="preloader"> 
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

      
    <!-- navigation start -->
    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container">
            <a href="<?php echo $base_url;?>" class="navbar-brand">
                <img src="<?php echo $base_url;?>images/oakley.webp" width="230" height="50" alt="Site-logo">
            </a> 
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <!-- Responsive Closer Buttton -->
                <button class="btn closer__btn p-2 d-lg-none" onclick="hideNavMenu()">                            
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                        <rect x="2" y="19.0898" width="22" height="2" rx="1" transform="rotate(-47 2 19.0898)" fill="#333333"/>
                        <rect x="3.43848" y="3" width="22" height="2" rx="1" transform="rotate(46 3.43848 3)" fill="#333333"/>
                    </svg>  
                </button>
                <ul class="navbar-nav"> 
                    <li class="nav-item"> 
                        <a href="<?php echo $base_url;?>sofa.php" class="nav-link">Sofas</a> 
                    </li>   
                    <li class="nav-item">  
                        <a href="<?php echo $base_url;?>kitchen.php" class="nav-link">kitchen</a> 
                    </li>    
                    <li class="nav-item">  
                        <a href="<?php echo $base_url;?>automotive.php" class="nav-link">Automotive</a> 
                    </li>    
                    <li class="nav-item">  
                        <a href="<?php echo $base_url;?>personal.php" class="nav-link">Personal</a> 
                    </li>     
                    <li class="nav-item">
                        <a href="<?php echo $base_url;?>about.php" class="nav-link">About Us</a>
                    </li>   
                    <li class="nav-item">
                        <a href="<?php echo $base_url;?>contact.php" class="nav-link">Contact Us</a>
                    </li>   
                </ul>  
                
            </div> 
          
            <button id="toggler" class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
                <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="28" height="2" rx="1.5" fill="#333333"/>
                    <rect x="10" y="10" width="4" height="2" rx="1" fill="#333333"/>
                    <rect y="10" width="20" height="2" rx="2" fill="#333333"/>
                    <rect y="19" width="28" height="2" rx="1.5" fill="#333333"/>
                </svg>                                                       
            </button>
        </div>
    </nav>
    <!-- navigation end -->
    