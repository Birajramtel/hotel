<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Naava Resort | Eat and Drink</title>
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <?php $page = "eat_and_drink"; include('include/header.php') ?>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <!-- <img src="img/eat_and_drink_banner.png" class="d-block w-100" alt=" Eat and Drink"> -->
            <img src="img/eat_and_drink/banner.png" class="d-block w-100" alt=" Eat and Drink">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Eat And Drink</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="eat_and_drink.php">Eat And Drink</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- Eat and Drink Content Session Opened -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-sm-block d-md-none">
                <h2 class="Header_2"> <strong><b>Visit us to eat and Drink Fresh food</b></strong></h2>
                <p class="paragraph_align">
                    <strong>
                        At Naava, we serve you high quality food with variety and fresh local ingredients.
                        We serve multi-cuisine food menu with authentic Thakali meal set, Nepali food,
                        Indian dishes, popular Chinese and Indian dishes with local and imported beverages.
                    </strong>
                </p>
                <button class="btn  btn-lg btn-colour-1 mb-2">Learn More</button>
            </div>
            <div class="col-md-3 col-sm-6 pb-2 d-block d-sm-none">
                <img src="img/eat_and_drink_small_2.png" class="img-fluid w-100" alt="Foods and Drinks">
            </div>
            <div class="col-md-3 col-sm-6 pb-2 d-none d-sm-block">
                <img src="img/eat_and_drink_4.png" class="img-fluid " alt="Foods and Drinks">
            </div>
            <div class="col-md-3 col-sm-6 pr-0 pl-0 ">
                <img src="img/eat_and_drink//Eat_and_drink_1.png" class="pb-4 img-fluid" alt="Eat and Drink">
                <img src="img/eat_and_drink/Eat_and_drink_2.png" class="img-fluid" alt="Eat and Drink items">
            </div>
            <div class="col-md-6 d-none d-md-block">
                <h2 class="Header_2"> <strong><b>Visit us to eat and Drink Fresh food</b></strong></h2>
                <p class="para_align">
                    <strong>
                        At Naava, we serve you high quality food with variety and fresh local ingredients.
                        We serve multi-cuisine food menu with authentic Thakali meal set, Nepali food,
                        Indian dishes, popular Chinese and Indian dishes with local and imported beverages.
                        <span id="dots"></span>
                    </strong>
                </p>
                <div class="collapse multi-collapse" id="more">
                    <p class="para_align">
                        Hikers and nature lovers can hike all the way up to Shivapuri hill or book a jeep safari with us to explore the beautiful,
                        dense forests at Shivapuri. With an eagle eye view of Kathmandu Valley, beautiful Langtang Himalayas, lush rhododendron
                        forests as well as prestigious religious sites like Bagdwar and Bishnudwar, the Shivapuri hike o???ers you an experience unlike any other.
                    </p>
                </div>
                <button class="btn btn-colour-1 mb-2" onclick="myFunction()" id="myBtn" type="button" data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="false" aria-controls="more">Read More</button>
            </div>
        </div>
    </div>
    <!-- Food Gallery Opened -->
    <div class="container mt-5 mb-5">
        <h6 class="Header_6"><strong>PHOTOS</strong></h6>
        <h2 class="Header_2 col-lg-6 col-sm-12"><strong><b>Explore our menu and eat what you want</b></strong></h2>
        <div class="row ml-1">
            <div class="card mb-6 col-sm-12 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/eat_and_drink/Eat_and_drink_3.png" alt="Eat and Drink" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>FOOD</strong> </h6>
                            <h6 class="card-title"><strong>Thakali Khana set</strong></h6>
                            <p class="card-text">Fresh food directly from our restaurant ready coocked for you and you family</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-6 col-sm-12 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/eat_and_drink/Eat_and_drink_4.png" alt="Eat and Drink" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>FOOD</strong> </h6>
                            <h6 class="card-title"><strong>Chicken Biryani</strong></h6>
                            <p class="card-text">Fresh food directly from our restaurant ready coocked for you and you family</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-6 col-sm-12 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/eat_and_drink/Eat_and_drink_5.png" alt="Eat and Drink" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>FOOD</strong> </h6>
                            <h6 class="card-title"><strong>Chicken Chilly</strong></h6>
                            <p class="card-text">Fresh food directly from our restaurant ready coocked for you and you family</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-6 col-sm-12 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/eat_and_drink/Eat_and_drink_6.png" alt="Eat and Drink" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>FOOD</strong> </h6>
                            <h6 class="card-title"><strong>Mustang Aloo</strong></h6>
                            <p class="card-text">Fresh food directly from our restaurant ready coocked for you and you family</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food Gallery Closed -->

    <!-- Eat and Drink Content Session Closed -->


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