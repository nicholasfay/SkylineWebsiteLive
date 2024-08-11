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
            <div class="row justify-content-center descript">
                Check out our <a href="litterannouncement.php#">litter announcement page</a>
            </div>
        </div>
    </section>
    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>


</body>

</html>