<?php
$str_db = "
host=localhost 
port=5432 
dbname=web_app 
user=postgres 
password=lnwdark
";
$dbcon = pg_connect($str_db)

    ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libs CSS -->
    <link rel="stylesheet" href=".././assets/fonts/Feather/feather.css">
    <link rel="stylesheet" href=".././assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href=".././assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href=".././assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href=".././assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href=".././assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href=".././assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css">

    <!-- Map -->

    <!-- Theme CSS -->
    <link rel="stylesheet" href=".././assets/css/theme.min.css">

    <title>เข้าระบบ</title>
</head>
<body>

<!-- CONTENT
================================================== -->
<section class="section-border border-primary">
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">
            <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

                <!-- Heading -->
                <h1 class="mb-0 font-weight-bold text-center">
                    เข้าสู่ระบบ
                </h1>

                <!-- Text -->
                <p class="mb-6 text-center text-muted">
                    เข้าสู่ระบบจัดการข้อมูล
                </p>

                <!-- Form -->
                <form class="mb-6">

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">
                            ชื่อผู้ใช้งาน
                        </label>
                        <input type="text" name="user_name" class="form-control" id="user_name" placeholder="ชื่อผู้ใช้งาน">
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="password">
                           รหัสผ่าน
                        </label>
                        <input type="password"  name="password" class="form-control" id="password" placeholder="รหัสผ่าน">
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                        เข้าาู่ระบบ
                    </button>

                </form>

                <!-- Text -->
                <p class="mb-0 font-size-sm text-center text-muted">
                    ยังไม่ได้เป็นสมาชิกใช่ไหม สมัครได้ที่นี้ ! <a href="signup.html">สมัครสมาชิก</a>.
                </p>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src=".././assets/libs/jquery/dist/jquery.min.js"></script>
<script src=".././assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src=".././assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
<script src=".././assets/libs/flickity-fade/flickity-fade.js"></script>
<script src=".././assets/libs/aos/dist/aos.js"></script>
<script src=".././assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
<script src=".././assets/libs/jarallax/dist/jarallax.min.js"></script>
<script src=".././assets/libs/jarallax/dist/jarallax-video.min.js"></script>
<script src=".././assets/libs/jarallax/dist/jarallax-element.min.js"></script>
<script src=".././assets/libs/typed.js/lib/typed.min.js"></script>
<script src=".././assets/libs/countup.js/dist/countUp.min.js"></script>
<script src=".././assets/libs/highlightjs/highlight.pack.min.js"></script>
<script src=".././assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>

<!-- Theme JS -->
<script src=".././assets/js/theme.min.js"></script>

</body>

<!-- Mirrored from landkit.goodthemes.co/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Sep 2019 12:43:38 GMT -->
</html>