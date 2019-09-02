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
            <!-- <div class="row justify-content-center descript">
           No adults available at this time.
        </div> -->
            <div class="descript">Adults are currently available! Go to our <a
                    href="https://www.instagram.com/skyline_giant_schnauzers/" class="btn btn-secondary btn-lg">
                    <i class="fa fa-instagram fa-fw"></i>
                    <span class="network-name">Instagram</span>
                </a> to see the gang! Serious inquiries please fill out our <a
                    href="questionnaire.php">questionnaire</a>.</div>
        </div>
    </section>

    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>
</body>

</html>