<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web.AR.</title>
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="splide-2.4.21/dist/js/splide.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('.splide').mount();
        });
    </script>


</head>

<body>

    <div class="navbar">
        <img src="images/web.AR_logo.png" class="webAR_logo" style="width:150px" title="Web.AR logo">
        <a class="active" href="project.php" title="AR Projects">AR PROJECTS</a>
    </div>

    <div class="main">
        <div class="contentOne">
            <h2 class="abts" title="About">About</h2>
            <h1>Web Augmented Reality</h1>
            <p>An Augmented reality (AR) experience presented on a web browser</p>

            <h2 class="kbts">Key benfits</h2>
            <table>
                <td>▸Increases engagement and interactivity
                </td>
                <td>▸Provide additional information on a given subject
                </td>
                <td>▸Makes learning fun
                </td>
            </table>
        </div>
        <div class="contentTwo">
            <h2 id="hws" title="How it works">How it works</h2>
            <div class="pict">
                <img src="images/pictorial.jpg" alt="pictorial">
            </div>
        </div>
        <div class="contentThree">
            <h2 class="dmo" title="Demo">Demo</h2>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="images/arm.png" style="width: 320px;" /></li>
                        <li class="splide__slide"><img src="images/body.png" style="width: 320px;" /></li>
                        <li class="splide__slide"><img src="images/heart.png" style="width: 320px;" /></li>
                        <li class="splide__slide"><img src="images/thorax.png" style="width: 320px;" /></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="contentFour">
            <h2 class="ttl" title="Tutorial">Tutorial</h2>
            <p class="carp">Augmented Reality Projects</p>
            <p class="arP">To experience more augmented reality download from<span
                    style="color: #0672FF; padding: 5; font-weight: 500; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    AR
                    projects</span></br>For others to experience your augmented reality projects uplaod to<span
                    style="color: #0672FF; padding: 5; font-weight: 500; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    AR
                    projects </span></p>
            <img src="images/down-chevron.png" class="down_arrow">
            <p class="learn">Learn how to create your own Augmented Reality experience</p>
            <embed src="WebAR project.pdf" type="application/pdf" class="pdf_doc" width="700px" height="900" />
        </div>
        <div class="contentFive">
            <h2 class="ttl" title="Reference">Reference</h2>
            <p class="scmtl">Source Materials</p>
            <a class="link" href="https://ar-js-org.github.io/AR.js-Docs/#:~:text=on%20the%20Web-,AR.,based%20AR%20and%20Marker%20tracking.">Ar.js</a>
            <a class="link" href="https://www.qrcode-monkey.com/">QRcode-Monkey</a>
            <a class="link" href="https://aframe.io/blog/arjs/">Creating Augmented Reality with AR.js and A-Frame</a>
            <a class="link" href="https://aframe.io/docs/0.6.0/components/gltf-model.html">A-FRAME-glt-model</a>
            <a class="link" href="https://aframe.io/docs/1.0.0/introduction/models.html">A-FRAME-3D Models</a>
            <a class="link" href="https://au.gmented.com/app/marker/marker.php">Marker generator</a>
            <p class="mdl">Sketchfab Models</p>
            <a class="link"
                href="https://sketchfab.com/3d-models/ecorche-anatomy-study-e402d3d541eb4b199c57d5410f5d3c57">Ecorche -
                Anatomy study</a>
            <a class="link" href="https://sketchfab.com/3d-models/anatomical-heart-codominance-42d07ac1517748ea82bb05b0a362b298">Anatomical heart</a>
            <a class="link" href="https://sketchfab.com/3d-models/human-anatomy-heart-in-thorax-22ebd4abce9440639563807e72e5f8d1">Heart in thorax</a>
            <a class="link" href="https://sketchfab.com/3d-models/simple-arm-anatomy-874c8868bdb942f1a0dab2f023e16ee3">Simple arm anatomy</a>
            

        </div>

        <footer>
            <small style="line-height: 5;">&copy; Copyright 2021 Web.AR. All Rights Reserved</small>
        </footer>

    </div>
</body>

</html>