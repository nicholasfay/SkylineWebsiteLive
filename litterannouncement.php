<!DOCTYPE html>
<html lang="en">
<?php include "includeWithVariables.php"?>
<?php includeWithVariables("head.php", array('title' => 'Litter Announcement - Skyline Giant Schnauzers'))?>

<body>
    <!-- Header -->
    <?php includeWithVariables("header.php", array('headerClass' => 'litter-announce-header', 'headerHTML' => '<h1>Litter Announcements</h1>'));?>

    <!-- Page Content -->
    <section class="content-section-a">
        <div class="container">
            <div class="text-center">
                <h3>Summer puppies are here!! ❤️❤️❤️🐾🐾🐾</h3>
                <div class="row justify-content-center descript mt-3"><img class="img-fluid lazy"
                        sizes="(max-width: 600px) 100vw, 600px"
                        data-srcset="
                        https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/2024-giant-schnauzer-litter-announcement_z3vuez.jpg 600w"
                        data-src="https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/2024-giant-schnauzer-litter-announcement_z3vuez.jpg"
                        alt="Giant Schnauzer puppies, litter announcement"
                        title="Giant Schnauzer puppies, litter announcement"></div>

                <!-- <div class="descript margin-bottom">No litters to announce at this time.</div> -->

            </div>
        </div>
    </section>

    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>


</body>

</html>