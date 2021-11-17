<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Naava Hotel</title>
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    
    <?php $page = "index"; include('include/header.php') ?>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <img src="img/Hotel_front_about.png" class="d-block w-100" alt=" Hotel Front">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>About Naava</b></strong> </h2>
            <ul class="breadcrumb pl-1 ">
                <li><a href="index.php">Home </a></li>
                <li><a href="about_us.php"> About Us</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- About Content Session Opened -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <h6 class="Header_6"><strong>ABOUT US</strong></h6>
                <h2 class="Header_2"><strong><b> Best Location for Best Experience</b></strong></h2>
                <p class="para_align">
                    <strong> Situated a mere 12.5 kilometers away from Kathmandu, Naava offers you a quick escape
                        from the hustle and bustle of the city and allows you to immerse into Shivapuri’s natural beauty.
                    </strong>
                </p>
                <p class="para_align">
                    Naava is an amalgamation of comfort, beauty and adventure: whether you are someone seeking a break from your daily
                    affairs or someone seeking adventure or insight into Nepal’s diverse flora and fauna, Naava is the perfect place for
                    you. With friendly and hospitable staff, quality food and spacious, modern architectural rooms, you can
                    experience a new home, away from home.
                    <span id="dots">...</span>
                </p>
                <div class="collapse multi-collapse" id="more">
                    <p class="para_align">
                        Hikers and nature lovers can hike all the way up to Shivapuri hill or book a jeep safari with us to explore the beautiful,
                        dense forests at Shivapuri. With an eagle eye view of Kathmandu Valley, beautiful Langtang Himalayas, lush rhododendron
                        forests as well as prestigious religious sites like Bagdwar and Bishnudwar, the Shivapuri hike oﬀers
                        you an experience unlike any other.
                    </p>
                </div>
                <button class="btn btn-colour-1 mb-2" onclick="myFunction()" id="myBtn" type="button" data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="false" aria-controls="more">Read More</button>
            </div>
            <div class="col-md-6 col-sm-12 pb-2">
                <div class="row">
                    <div class="col-md-6 col-sm-6 d-flex justify-content-center">
                        <img src="img/Hotel Location 1.png" class="img-fluid p-1" alt="Hotel Location">
                    </div>
                    <div class="col-md-6 col-sm-6 d-flex justify-content-center">
                        <img src="img/Hotel_Location 2.png" class="img-fluid p-1" alt="Hotel Location">
                    </div>
                </div>
                <img src="img/Hotel_Location 3.png" class="img-fluid" alt="Hotel Location" width="100%">
            </div>
        </div>
    </div>
    <div class="about_hotel mb-0">
        <img src="img/Location.png" alt="Location map" class="img-fluid">
    </div>
    <div class="container testimonial">
        <div class="row mt-5 bg_test">
            <div class="col-md-7 col-sm-12 mt-5 testimonials">
                <h6 class="Header_6"><strong>TESTIMONIALS</strong></h6>
                <h2 class="Header_2"> <strong><b> We trust our customers and they trusts us too</b></strong></h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/testimonial.png" alt="Testimonial">
                            <p>
                                I am very glad I had the opportinuty to visit this hotel. The stuff is very friendly
                                and I will definetly visit the hotel again next year.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img src="img/testimonial_1.png" alt="Testimonial">
                            <p>
                                I am very glad I had the opportinuty to visit this hotel. The stuff is very friendly
                                and I will definetly visit the hotel again next year.
                            </p>
                        </div>
                        <div class="carousel-item">
                            <img src="img/testimonial_2.png" alt="Testimonial">
                            <p>
                                I am very glad I had the opportinuty to visit this hotel. The stuff is very friendly
                                and I will definetly visit the hotel again next year.
                            </p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 mt-5 pb-2">
                <img src="img/Naava Brown BG Logo 1.png" class="img-fluid" alt="Naava Brown BG logo" width="100%">
            </div>
        </div>
    </div>
    <!-- About Content Session Closed -->
    <!-- Photo Session Opened -->
    <?php include './include/carousel_footer.php' ?>
    <!-- Photo Session Closed -->
    </section>
    <!-- Footer Session Opened -->
    <?php include './include/footer.php' ?>
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
    <?php include './include/script.php' ?>
    <?php include './include/carousel_footer_script.php' ?>
    <?php include './include/readmore.php' ?>

</body>

</html>