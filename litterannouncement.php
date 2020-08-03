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
                <!-- <video class="video-center" autoplay controls loop muted>
              <source src="videos/litter-announce-3-31-19.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video> -->
                 <a href="https://www.facebook.com/skylinegiantschnauzers/posts/1424954944359837">Check out our latest litter announcement by clicking this link!</a>
                <!--<div class="descript margin-bottom">No litters to announce at this time.</div>-->
            </div>
        </div>
    </section>

    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>


</body>

</html>