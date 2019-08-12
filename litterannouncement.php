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
                <img class="img-fluid lazy" sizes="(max-width: 800px) 100vw, 800px"
                    data-srcset="
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_200/giant-schnauzer-expecting-puppies_dx42er.jpg 200w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_300/giant-schnauzer-expecting-puppies_dx42er.jpg 300w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_400/giant-schnauzer-expecting-puppies_dx42er.jpg 400w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_500/giant-schnauzer-expecting-puppies_dx42er.jpg 500w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/giant-schnauzer-expecting-puppies_dx42er.jpg 600w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_700/giant-schnauzer-expecting-puppies_dx42er.jpg 700w"
                    data-src="https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_800/giant-schnauzer-expecting-puppies_dx42er.jpg"
                    alt="Giant Schnauzer 2019 litter announcement" title="Giant Schnauzer 2019 litter announcement">

                <img class="img-fluid lazy margin-top" sizes="(max-width: 800px) 100vw, 800px"
                    data-srcset="
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_200/giant-schnauzer-breeding-puppies-announcement_pq1g9u.jpg 200w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_300/giant-schnauzer-breeding-puppies-announcement_pq1g9u.jpg 300w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_400/giant-schnauzer-breeding-puppies-announcement_pq1g9u.jpg 400w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_500/giant-schnauzer-breeding-puppies-announcement_pq1g9u.jpg 500w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_600/giant-schnauzer-breeding-puppies-announcement_pq1g9u.jpg 600w,
            https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_700/giant-schnauzer-breeding-puppies-announcement_pq1g9u.jpg 700w"
                    data-src="https://res.cloudinary.com/djjyxjoz2/image/upload/c_scale,w_800/giant-schnauzer-breeding-puppies-announcement_pq1g9u.jpg"
                    alt="Giant Schnauzer 2019 litter announcement" title="Giant Schnauzer 2019 litter announcement">
                <!--<div class="descript margin-bottom">No litters to announce at this time.</div>-->
            </div>
        </div>
    </section>

    <?php include "socialmediabanner.php";?>
    <?php include "footer.php";?>


</body>

</html>