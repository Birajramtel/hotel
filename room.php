<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Naava Hotel</title>
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <?php include('include/header.php') ?>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <img src="img/Hotel_front_about.png" class="d-block w-100" alt=" Hotel Front">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Accommodation</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="accommodation.php">Room</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->
    <!-- Form Opened -->
    <div class="container Form_bg">
        <form class="form_bg p-3 mt-3" action="">
            <div class="row">
                <div class="col-md-2 mt-2">
                    <label for="rooms" class="text-white">Rooms</label>
                    <select id="room" name="room">
                        <option value="room_0">Rooms</option>
                        <option value="room_1">B&B</option>
                        <option value="room_2">SMALL</option>
                        <option value="room_3">PREMIUM</option>
                        <option value="room_4">EXPENCIVE</option>
                    </select>
                </div>
                <div class="col-md-3 mt-2">
                    <label for="Check In" class="text-white">Check In</label>
                    <input type="date" class="form-control" placeholder="Check In" aria-label="Check In">
                </div>
                <div class="col-md-3 mt-2">
                    <label for="Check Out" class="text-white">Check Out</label>
                    <input type="date" class="form-control" placeholder="Check Out" aria-label="Check Out">
                </div>
                <div class="col-md-3 mt-2">
                    <label for="Email" class="text-white">Email</label>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="d-flex justify-content-center pt-3">
                    <button type="submit" class="btn btn-light">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Form Closed -->

    <!-- Accommodation Content Session Opened -->
    <div class="container mt-5 mb-5">
        <h2 class="ml-4"> <strong>Our Rooms available</strong></h2>
        <div class="card-group">
            <div class="card p-3 pb-2">
                <img src="img/gallery/Accommodation room 1 1.png" class="card-img-top" alt="Room">
                <div class="card-body">
                    <h6 class="card-title Header_6">B&B</h6>
                    <h5><strong>Spacious Room</strong></h5>
                    <p class="card-text">The most spacious room you will ever see in our hotel. Equipped with span and warm beds.</p>
                </div>
                <button class="btn btn-colour-1">Book Now</button>
            </div>
            <div class="card p-3 pb-2">
                <img src="img/gallery/Accommondation 2.png" class="card-img-top" alt="Room">
                <div class="card-body">
                    <h6 class="card-title Header_6">SMALL</h6>
                    <h5><strong>Small Cheap Room</strong></h5>
                    <p class="card-text">Smallest and the most economic room in our hotel. Save an extra buck for your holyday.</p>
                </div>
                <button class="btn btn-colour-1">Book Now</button>
            </div>
            <div class="card p-3 pb-2">
                <img src="img/Accommodation room 3.png" class="card-img-top" alt="Room">
                <div class="card-body">
                    <h6 class="card-title Header_6">EXPENSIVE</h6>
                    <h5><strong>Big Room</strong></h5>
                    <p class="card-text">Biggest room in our hotel fully equipped with Wi-fi and hot coffee</p>
                </div>
                <button class="btn btn-colour-1">Book Now</button>
            </div>
            <!-- <div class="card p-3 pb-2">
                <img src="img/Accommodation room 3.png" class="card-img-top" alt="Room">
                <div class="card-body">
                    <h6 class="card-title Header_6">PREMIUM</h6>
                    <h5><strong>Expensive Luxury Room</strong></h5>
                    <p class="card-text">The most expensive room available for milionars and very rich people</p>
                </div>
                <button class="btn btn-colour-1">Book Now</button>
            </div> -->
        </div>
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