<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" id="bg_nav">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/Naava PP.png" alt="Naava hotel">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="<?php if($page=="index") {echo "is-active";}?> nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if($page=="about") {echo "is-active";}?> nav-link" href="about.php">About Naava</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if($page=="explore_shivapuri") {echo "is-active";}?> nav-link" href="explore_shivapuri.php">Explore Shivapuri</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if($page=="accommodation") {echo "is-active";}?> nav-link" href="accommodation.php">Accommodation</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if($page=="eat_and_drink") {echo "is-active";}?> nav-link" href="eat_and_drink.php">Eat and Drink</a>
                </li>
                <li class="nav-item ">
                    <a class="<?php if($page=="package") {echo "is-active";}?> nav-link" href="package.php">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if($page=="highlight") {echo "is-active";}?> nav-link" href="highlight.php">Highlights</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if($page=="gallery") {echo "is-active";}?> nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="<?php if($page=="contact") {echo "is-active";}?> nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>