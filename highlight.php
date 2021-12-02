<!doctype html>
<html lang="en">

<head>
    <?php include './include/head.php' ?>
    <title>Naava Resort | Highlight</title>
</head>

<body>
    <!-- Header Opened -->
    <!-- NavBar started -->
    <?php $page = "highlight"; include('include/header.php') ?>
    <!-- Banner Image  -->
    <div class="about_cover">
        <div class="about_image">
            <img src="img/highlights/Highlight_banner.png" class="d-block w-100" alt=" Highlight Banner Image">
        </div>
        <div class="container about_breadcrumb d-none d-md-block">
            <h2 class="header_2 text-white"><strong><b>Highlight</b></strong> </h2>
            <ul class="breadcrumb pl-1">
                <li><a href="index.php">Home </a></li>
                <li><a href="accommodation.php">Highlight</a></li>
            </ul>
        </div>
    </div>
    <!-- Header Closed -->

    <!-- Highlight Content Session Opened -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xm-8 ">
                <h6 class="Header_6"><strong>HIGHLIGHTS</strong> </h6>
                <h2 class="Header_2"> <strong><b>What you get <br>In a nutshell</b> </strong></h2>
            </div>
            <div class="col-md-6 col-sm-12 col-xm-4 mt-auto mb-auto">
                <button class="btn col-5 btn-colour-1 btn-lg float-md-end mb-2">Explore</button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="img/highlights/highlights_1.png" class="card-img-top" alt="Bird watching">
                    <div class="card-body">
                        <h5 class="card-title Header_2">Bird Watching</h5>
                        <p class="card-text para_align">
                            Shivapuri has played a vital role in bird conservation and tourism.
                            886 species of birds have been recorded in Nepal, which are about 9% of
                            the total bird species found worldwide. Among them, 42 species are globally
                            threatened and 35 globally near threatened. Among them 311 bird species,
                            including 117 migratory birds have been found in Shivapuri, making it an
                            ornithologist’s paradise.
                            <br>
                            One can spot exotic birds such as the Wren babbler and the Spiny babbler, the only endemic bird
                            in Nepal. Other commonly spotted birds are white backed vulture. Himalayan griffon, black vulture,
                            beard vulture, dark kite, hen harrier, goshawk, sparrow hawk, sikhra, common buzzard, Asain black
                            eagle, steppe eagle, magpies, kalij pheasant, leafbirds, flycatcher, buchcat etc. At Naava, we accompany 
                            ornithologists and bird admires to pursue their passion and go for bird watching.      
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/highlights/Hiking_and_jungle_safari.png" class="card-img-top" alt="Jungle safari Collections">
                    <div class="card-body">
                        <h5 class="card-title Header_2">Hike and Jungle Safari </h5>
                        <p class="card-text para_align">
                            Your perfect adventure guide.
                            Available hiking routes
                            <ul class="pt-0 mt-0">
                                <li>
                                    <strong>Trail Code 101 – Naagi Gumba</strong> 
                                    <span>
                                        Paani Muhaan -Naagi Gumba (4km)
                                        <br>
                                        <u> Hike:</u> 45 minutes Jeep safari: 15 minutes <br> <u>Return Route: </u> Same
                                    </span>
                                </li>
                                <li>
                                    <strong>Trail 2 Code 102 – Bishnudwar</strong> 
                                    <span>
                                        Paani Muhaan -Bishnudwar
                                        <br>
                                        <u>Hike: </u> 1 hour (5km) Jeep safari: 30 minutes (6km) <br> <u>Return Route:</u>  Same
                                        </span>
                                </li>
                                <li>
                                    <strong>Trail Code 103 – Baghdwar</strong>
                                    <span>
                                        Paani Muhaan -Naagi Gumba - Baghdwar (10km)
                                        <br>
                                        <u>Hike:</u>  1 hour (5km) Jeep safari: 30 minutes (6km) <br> <u>Return Route:</u> Same
                                    </span>
                                    <span id="dots">...</span>
                                </li>
                                <div class="collapse multi-collapse" id="more">
                                    <li>
                                        <strong>Trail Code 104 – Shivapuri Peak</strong>
                                        <span>
                                            Paani Muhaan -Naagi Gumba - Baghdwar - Tinchuli -Shivapuri Peak (13km)
                                            <br>
                                            <u>Hike:</u> 3 hour 30 minutes<br> <u>Return Route:</u> Shivapuri Peak - Chaap Bhanjyang - 
                                            Bishnudwar - Paani Muhan (10km)
                                        </span>
                                    </li>
                                    <li>
                                        <strong>Trail Code 105 – Sundarijal</strong> 
                                        <span>
                                            Paani Muhaan -Naagi Gumba - Sundarijal(13km)
                                            <br>
                                            <u>Jeep Safari:</u> 1 hour (13km)<br> <u>Return Route:</u> Same
                                        </span>
                                    </li>
                                    <li>
                                        <strong>Trail Code 106 – Chisapani (Hike)</strong> 
                                        <span>
                                            Paani Muhaan -Naagi Gumba - Baghdwar - Tinchuli - Chisapaani (20km)
                                            <br>
                                            <u>Hike:</u> 5 hours<br> <u>Return Route:</u> Same
                                        </span>
                                    </li>
                                    <li>
                                        <strong>Trail Code 107 – Chisapani (Safari)</strong>
                                        <span>
                                            Paani Muhaan -Naagi Gumba - Sundarijal - Chisapani (30km) 
                                            <br>
                                            <u>Jeep Safari: </u> 2 hours<br> <u>Return Route:</u> Same
                                        </span>
                                    </li>
                                </div>
                                <button class="btn btn-colour-1 mb-2" onclick="myFunction()" id="myBtn" type="button" data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="false" aria-controls="more">Read More</button>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/highlights/Day_package.png" class="card-img-top" alt="Day Package - Picnic">
                    <div class="card-body">
                        <h5 class="card-title Header_2">Day Package - Picnic </h5>
                        <p class="card-text para_align">
                            Picnics are perfect means of getaway from the urban hustle and daily grind.
                            At Naava, you can book a picnic spot and spend time with your family. We
                            have the capacity of managing picnic for 100 participants and have variety
                            of menu to offer to our respected guest.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/highlights/Seminar_and_meeting.png" class="card-img-top" alt="Meeting and Seminar">
                    <div class="card-body">
                        <h5 class="card-title Header_2">Meeting and Seminar</h5>
                        <p class="card-text para_align">
                            Imagine holding a most productive workshop or a seminar, or even just
                            a brainstorming session, in a fresh, natural environment that's so
                            conveniently located, you'll appreciate how much time is saved in
                            arranging one, Imagine the unleashing of creativity and the opening
                            of minds, thats ensured by the wonderfully refreshing and cozy ambience.
                            We have capacity of 20 person in a round table layout and 30 in theatre
                            style set up.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Highlight Content Session Closed -->


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