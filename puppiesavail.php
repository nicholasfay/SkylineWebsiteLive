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
    <section class="content-section-a bg-color">
      <div class="container">
        <div class="announcement">
        <div class="row justify-content-center descript"><img class="img-fluid lazy" sizes="(max-width: 600px) 100vw, 600px"
                        data-srcset="
                        https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/puppy-for-sale-giant-schnauzer_sem6qi.jpg 600w"
                        data-src="https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/puppy-for-sale-giant-schnauzer_sem6qi.jpg"
                        alt="Giant Schnauzer puppy cropped for sale" title="Giant Schnauzer puppy cropped for sale"></div>
        <div class="row justify-content-center descript"><img class="img-fluid lazy" sizes="(max-width: 600px) 100vw, 600px"
                        data-srcset="
                        https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/puppy-for-sale-giant-schnauzer-2_g9nd3m.jpg 600w"
                        data-src="https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/puppy-for-sale-giant-schnauzer-2_g9nd3m.jpg"
                        alt="Giant Schnauzer puppy cropped for sale" title="Giant Schnauzer puppy cropped for sale"></div>
        </div>
        <div class="row justify-content-center descript">
          Beautiful show male, born 06/11/2019, with fantastic pedigree available. He is outgoing and confident with a fun loving personality.
        </div>
      </div>
    </section>
    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>


</body>

</html>