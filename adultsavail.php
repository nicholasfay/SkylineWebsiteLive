<!DOCTYPE html>
<html lang="en">
<?php include "includeWithVariables.php"?>
<?php includeWithVariables("head.php", array('title' => 'Adults Available - Skyline Giant Schnauzers'))?>

<body>
    <!-- Header -->
    <?php includeWithVariables("header.php", array('headerClass' => 'adults-avail-header', 'headerHTML' => '<h1>Adults Available</h1>'));?>

    <!-- Page Content -->
    <section class="content-section-a bg-color">
        <div class="container">
            <div class="row justify-content-center descript"><img class="img-fluid lazy"
                    sizes="(max-width: 600px) 100vw, 600px" data-srcset="
                        https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/IMG_6117_niiqok.jpg 600w"
                    data-src="https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/IMG_6117_niiqok.jpg"
                    alt="Giant Schnauzer puppy cropped for sale" title="Giant Schnauzer puppy cropped for sale"></div>
            <div class="row justify-content-center descript">
                Young adult male available to the right home. Looking for a one or two dog home (other dog must be a
                spayed female).
                Requirements: an experienced Giant or working dog owner who has ample time to spend training with him,
                and who can provide him a consistent structured daily routine, that includes work, fun, and lots of love
                and attention.
            </div>

            <!-- <div class="descript">Adults are currently available! Go to our <a
                    href="https://www.instagram.com/skyline_giant_schnauzers/" class="btn btn-secondary btn-lg">
                    <i class="fa fa-instagram fa-fw"></i>
                    <span class="network-name">Instagram</span>
                </a> to see the gang! Serious inquiries please fill out our <a
                    href="questionnaire.php">questionnaire</a>.</div>
        </div> -->
    </section>

    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>
</body>

</html>