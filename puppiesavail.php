<!DOCTYPE html>
<html lang="en">
<?php include "includeWithVariables.php"?>
<?php includeWithVariables("head.php", array('title' => 'Puppies Available - Skyline Giant Schnauzers'))?>

<body>
    <!-- Header -->
    <?php includeWithVariables("header.php", array('headerClass' => 'puppies-avail-header', 'headerHTML' => '<h1>Puppies Available</h1>'));?>

    <!-- Page Content -->
    <section class="content-section-a bg-color">
        <div class="container">
            <!-- <div class="row justify-content-center descript">
           No puppies available at this time.
        </div> -->
            <div class="descript">Puppies are currently available! Go to our <a
                    href="https://www.instagram.com/skyline_giant_schnauzers/" class="btn btn-secondary btn-lg">
                    <i class="fa fa-instagram fa-fw"></i>
                    <span class="network-name">Instagram</span>
                </a> for live updates! Serious inquiries please fill out our <a
                    href="questionnaire.php">questionnaire</a>.</div>
        </div>
    </section>
    <!-- Page Content -->
    <!-- <section class="content-section-a bg-color">
      <div class="container">
        <div class="row justify-content-center descript">
           Skyline’s Ring Leader “Dottie”
        </div>
        <div class="row justify-content-center descript"><img width=400 height=600 class="img-fluid" src="images/zeus.jpg" alt="Giant Schnauzer" title="Giant Schnauzer"></div>
        <div class="row justify-content-center descript">
        This handsome 5 mos old male is now available to the right home. He’s an energetic, outgoing and happy young pup. He’s also housebroken.
        </div>
      </div>
    </section> -->
    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>


</body>

</html>