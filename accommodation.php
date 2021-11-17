<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Naava Hotel</title>
    <link rel="icon" type="image/x-icon" href="./img/fav_icon.png">
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <?php $page = "accommodation"; include('include/header.php') ?>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <img src="img/accommodation/Delux Room 1.png" class="d-block w-100" alt=" Hotel Front">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Accommodation</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="accommodation.php">Accommodation</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- Accommodation Content Session Opened -->
    <div class="container mt-5 ">
        <h2 class="ml-4"> <strong>Best Place <br> Best View.</strong></h2>
        <p class="para_align ml-4"><strong>
                Rooms surrounded by the natural vegetation of Shivapuri National Park in one elevation and overlooking
                Kathmandu valley on the other, Naava is a place where you can have quiet, peaceful and private resting.
                Our Standard Rooms have a large bed, private bathroom, shower products, LED TV with satellite channels,
                Tea / Coffee makers, hot water and free high-speed wireless internet. The rooms that have veranda where
                you can relax and have pleasure that will you feel at home, away from home. <br>
                The spectacular weather with a sip of fresh air and a breezy gulp of air inside make you pristine where
                you can relax in the garden and hear chirping of birds and other natural habitat in the national park.
                Shivapuri is a naturally and ecologically rich destination for tourists seeking to escape the hustle and
                bustle of Kathmandu city and an ideal stop-off point for hiking to the national part. One can indulge in
                all that nature has to offer as you experience the captivating sunrise views in the tranquil ambience of
                the resort. Spread over an expansive area of over 20,000sq.ft. of total space, living here can give you
                experience of home in the hills.</strong>
        </p>
        <!-- <div class="row ml-1 d-flex justify-content-center">
            <div class="card mb-6 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Accommodation room 1.png" alt="Accommodation Rooms" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>BIG</strong> </h6>
                            <h6 class="card-title"><strong>Spacious Room</strong></h6>
                            <p class="card-text">The most spacious room you will ever see in our hotel. Equipped with span and warm beds</p>
                        </div>
                    </div>
                    <div class="col-md-1 background_content">
                        <div class="d-flex justify-content-center">
                            <a href="room.php">
                                <i class='fas fa-arrow-circle-right float-end pt-5 mt-3 d-none d-md-block' style='font-size:28px'></i>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn-lg d-sm-block d-md-none btn-colour-1 text-white mb-2"><a href="room.php" class="text-white"> Book Now</a></button>
                </div>
            </div>
            <div class="card mb-6 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Accommodation room 1.png" alt="Accommodation Rooms" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>SMALL</strong> </h6>
                            <h6 class="card-title"><strong>Small Cheap Room</strong></h6>
                            <p class="card-text">Smallest and the most economic room in our hotel. Save an extra buck for your holyday</p>
                        </div>
                    </div>
                    <div class="col-md-1 background_content">
                        <div class="d-flex justify-content-center">
                            <a href="room.php">
                                <i class='fas fa-arrow-circle-right float-end pt-5 mt-3 d-none d-md-block' style='font-size:28px'></i>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn-lg d-sm-block d-md-none btn-colour-1 text-white mb-2"><a href="room.php" class="text-white"> Book Now</a></button>
                </div>
            </div>
            <div class="card mb-6 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Accommodation room 1.png" alt="Accommodation Rooms" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>PREMIUM</strong> </h6>
                            <h6 class="card-title"><strong>Big Room</strong></h6>
                            <p class="card-text">Biggest room in our hotel fully equipped with Wi-fi and hot coffee</p>
                        </div>
                    </div>
                    <div class="col-md-1 background_content">
                        <div class="d-flex justify-content-center">
                            <a href="room.php">
                                <i class='fas fa-arrow-circle-right float-end pt-5 mt-3 d-none d-md-block' style='font-size:28px'></i>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn-lg d-sm-block d-md-none btn-colour-1 text-white mb-2"><a href="room.php" class="text-white"> Book Now</a></button>
                </div>
            </div>
            <div class="card mb-6 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Accommodation room 1.png" alt="Accommodation Rooms" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h6 class="Header_6 card-title"><strong>EXPENSIVE</strong> </h6>
                            <h6 class="card-title"><strong>Expensive Luxury Room</strong></h6>
                            <p class="card-text">The most expensive room available for milionars and very rich people</p>
                        </div>
                    </div>
                    <div class="col-md-1 background_content">
                        <div class="d-flex justify-content-center">
                            <a href="room.php">
                                <i class='fas fa-arrow-circle-right float-end pt-5 mt-3 d-none d-md-block' style='font-size:28px'></i>
                            </a>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-colour-1 d-sm-block d-md-none text-white mb-2 "><a href="room.php" class="text-white"> Book Now</a></button>
                </div>
            </div>
        </div> -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="./img/accommodation//room_1.png" class="card-img-top" alt="Room">
                    <h5 class="card-text para_align text-center pt-2 pb-2">
                        <strong><u>Delux Room 1</u></strong> <br>
                    </h5>
                    <span class="text-align-center">The most spacious room you will ever see in our hotel. Equipped with span and warm beds</span>
                    <a href="contact.php" class="btn btn-colour-1">Book Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./img/accommodation/room_2.png" class="card-img-top" alt="accommodation Room">
                    <h5 class="card-text para_align text-center pt-2 pb-2">
                        <strong><u>Delux Room 2</u></strong>
                    </h5>
                    <span class="text-align-center">The most spacious room you will ever see in our hotel. Equipped with span and warm beds</span>
                    <a href="contact.php" class="btn btn-colour-1">Book Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="./img/accommodation/room_3.png" class="card-img-top" alt="Room Details">
                    <h5 class="card-text para_align text-center pt-2 pb-2">
                        <strong><u>Standard Room</u></strong>
                    </h5>
                    <span class="text-align-center">The most spacious room you will ever see in our hotel. Equipped with span and warm beds</span>
                    <a href="contact.php" class="btn btn-colour-1">Book Now</a>
                </div>
            </div>
        </div>
        <p class="para_align pt-5 ml-4">
            Feel the morning mist pass by your windows, so close you can almost reach out the clouds. We have well-appointed
            standard rooms each with proper services. What better place to refresh yourself after a long day and looking for
            a perfect getaway.
            Our Standard Rooms have a large bed, private bathroom, shower products, LED TV with satellite channels, Tea / Coffee
            makers, hot water and free high-speed wireless internet. 
        </p>
    </div>
   <!-- Accommodation Content Session Closed -->


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

</body>

</html>