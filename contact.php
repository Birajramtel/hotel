<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Naava Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/owl.carousel.js">
    <link rel="stylesheet" href="js/owl.carousel.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/Naava PP.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About Naava</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Explore Shivapuri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="accommodation.php">Accommodation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="eat_and_drink.php">Eat and Drink</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="package.php">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="highlight.php">Highlights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php"><u>Contact Us</u></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <img src="img/Hotel_front_about.png" class="d-block w-100" alt=" Hotel Front">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Contact</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- Contact Contain Session Opened -->
    <div class="container mt-5 mb-5">
        <h2 class="Header_2"><strong><b> Contact us to get <br> free support.</b></strong></h2>
        <form>
            <div class="row">
                <div class="col-md-8 col-sm-12 mb-2 d-none d-md-block">
                    <div class="form-group">
                        <textarea class="form-control" rows="15" id="Description" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group input-group-lg mb-2">
                        <input type="text" class="form-control input-lg" id="inputlg" placeholder="Name">
                    </div>
                    <div class="form-group input-group-lg mb-2">
                        <input type="email" class="form-control input-lg" id="inputlg" placeholder="Email">
                    </div>
                    <div class="form-group input-group-lg mb-2">
                        <input type="text" class="form-control input-lg" id="inputlg" placeholder="Subject">
                    </div>
                    <div class="form-group input-group-lg mb-2 d-sm-block d-md-none">
                        <textarea class="form-control" rows="5" id="Description" placeholder="Description"></textarea>
                    </div>
                    <button style="font-size:18px" class="btn btn-colour-1 btn-sm col-12"> Send <i class="fa fa-send-o"></i></button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="container footer-social-icon pb-2">
        <div class="row mt-5 mb-2">
            <div class="col-md-4 col-sm-4 single-cta">
                <i class="far fa-envelope-open"></i>&nbsp;<span><strong>example@naava.com</strong></span>
            </div>
            <div class="col-md-4 col-sm-4 single-cta">
                <i class="fas fa-phone-alt"></i>&nbsp;<span><strong>+0 320 422 4254</strong></span>
            </div>
            <div class="col-md-4 col-sm-4 single-cta">
                <i class="fas fa-map-marker-alt"></i>&nbsp;<span><strong>Main Str Nepal</strong></span>
            </div>
        </div>
    </div>

    <!-- Contact Contain Session Closed -->


    <!-- Photo Session Opened -->
    <div class="container">
        <h6 class="Header_6"><strong>PHOTOS</strong></h6>
        <h2 class="Header_2 col-lg-8 col-sm-12"><strong><b>See our latest photos From restaurant and hotel</b></strong></h2>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="img/Table_final.png" class="float-right" alt="Table Final">
        </div>
        <div class="item">
            <img src="img/Bishnudwaar_final.png" class="float-right" alt="Bishnudwaar Hiking">
        </div>
        <div class="item">
            <img src="img/Bed_final.png" class="float-right" alt="Hotel Bed">
        </div>
        <div class="item">
            <img src="img/Seminar_final.png" class="float-right" alt="Seminar Hall">
        </div>
    </div>
    <!-- Photo Session Closed -->
    </section>
    <!-- Footer Session Opened -->
    <footer class="footer-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                    <!-- <img src="img/Naava PP.png" alt="Logo"> -->
                    <h2 class="text-white">Naava Resort & Retreat</h2>
                    <p class="text-white">Our hotel is an image of quality and profesionalism combined with hard work and precision.
                        You can expect only the best services from our staff.
                    </p>
                    <div class="footer-social-icon mt-2">
                        <a href="https://www.facebook.com/Naava-Resort-Retreat-100547551927011/"><i class="fab fa-facebook-f facebook-bg"></i></a>
                        <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                    <h2 class="text-white">Useful Links</h2>
                    <ul style="list-style-type:none;">
                        <li><a class="footer_link" href="#">Blog</a></li>
                        <li><a class="footer_link" href="package.php">Rooms</a></li>
                        <li><a class="footer_link" href="#">Gift Card</a></li>
                        <li><a class="footer_link" href="#">Testimonials</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                    <h2 class="text-white">Privacy</h2>
                    <ul style="list-style-type: none;">
                        <li><a class="footer_link" href="#">Career</a></li>
                        <li><a class="footer_link" href="about.php">About Us</a></li>
                        <li><a class="footer_link" href="contact.php">Contact us</a></li>
                        <li><a class="footer_link" href="#">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xm-12 mt-3">
                    <h2 class="text-white">Contact</h2>
                    <div class="footer-social-icon">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>&nbsp;<span class="text-white">example@naava.com</span>
                        </div>
                        <div class="single-cta">
                            <i class="fas fa-phone-alt"></i>&nbsp;<span class="text-white">+0 320 422 4254</span>
                        </div>
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>&nbsp;<span class="text-white">Main Str Nepal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <p class="text-white float-start">Copyright &copy; 2018, All Right Reserved SewaTech</p>
                </div>
                <div class="col-6">
                    <a class="footer_link float-end" href="#">https://naavaresort.com.np</a>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Footer Session Closed -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->

    <!--  jQuery 1.7+  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="jquery-1.9.1.min.js"></script>

    <!-- Include js plugin -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <script>
        var nav = document.querySelector("nav");

        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 100) {
                nav.classList.add("bg-dark", "shadow");
            } else {
                nav.classList.remove("bg-dark", "shadow");
            }
        });
    </script>

    <script>
        $(' .owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>

</body>

</html>