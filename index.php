<?php
function get_CURL($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    return json_decode($result, true);
}

$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCmrhLdKQH_BMt4_yC1x7f8A&key=AIzaSyAZB35XiQs-8j6NUbeJzSpCyJJg2jB3oM0');


$youtubeName = $result['items'][0]['snippet']['title'];
$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$youtubeSubsCount = $result['items'][0]['statistics']['subscriberCount'];

//latest video


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- ====  REMIXICON CDN ==== -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />


    <!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container">
                <div class="box-navbar">
                    <div class="logo">
                        <h1>wawiDev.</h1>
                    </div>
                    <ul class="menu">
                        <li class="nav_menu_item">
                            <a href="#Skills">Skills</a>
                        </li>
                        <li class="nav_menu_item"><a href="#Services">Services</a></li>
                        <li class="nav_menu_item"><a href="#Portfolio">Portfolio</a></li>
                        <li class="nav_menu_item"><a href="#social">Contact</a></li>
                    </ul>
                    <button class="menu-bar">&#9776;</button>
                </div>
            </div>
        </div>
    </header>

    <section class="wrapper">
        <div class="container">
            <div class="grid-cols-2">
                <div class="grid-item-1">
                    <div class="col">
                        <h1 class="main-heading">
                            My Name is.</span>
                            <br />
                            Dwi Wahyu Maulana.
                        </h1>
                        <p class="info-text">
                            Junior front-end developer with a strong passion for creating innovative and user-friendly
                            web
                            interfaces. Eager to contribute and learn in a dynamic team environment. Possess
                            foundational
                            skills in JavaScript and React, with a commitment to continuous improvement.
                        </p>
                    </div>

                    <div class="btn_wrapper">
                        <button class="btn view_more_btn">
                            view all pages <i class="ri-arrow-right-line"></i>
                        </button>

                        <button class="btn documentation_btn">Resumes</button>
                    </div>
                </div>
                <div class="grid-item-2">
                    <div class="team_img_wrapper">
                        <img src="./img/team.png" alt="team-img" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="social">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h2 id="social" class="social-title">Social Media</h2>
            <div class="grid-cols-2">
                <div class="grid-col-item">
                    <div class="icon">
                        <a href="https://www.youtube.com/@dwiwahyum.4192"><img class="rounded-image" src="<?= $youtubeProfilePic; ?>" alt="">
                        </a>
                        <div class="text-info">
                            <h5><?= $youtubeName; ?> </h5>
                            <p><?= $youtubeSubsCount; ?></p>
                        </div>

                    </div>
                    <div class="featured_info">

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/y7nt-o6snnY?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="grid-col-item">
                    <div class="icon">
                        <img src="c:\Users\dwiie\Downloads\profileyt.jpg" alt="">
                        <div class="text-info">
                            <h5>Dwi Wahyu M. </h5>
                            <p>20000 subs</p>
                        </div>

                    </div>
                    <div class="featured_info">

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/y7nt-o6snnY?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Wawi16 &#169; 2024, Web Developer</p>
    </footer>


</body>
<!-- ==== ANIMATE ON SCROLL JS CDN -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- ==== GSAP CDN ==== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<!-- ==== SCRIPT.JS ==== -->
<script src="js/script.js"></script>

</html>