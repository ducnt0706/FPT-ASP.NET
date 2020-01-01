<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healty meals to as many people as possible.">

    <link rel="stylesheet" type="text/css" href="Source/vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="Source/vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="Source/vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="Source/vendors/css/animate.css">
    <link rel="stylesheet" type="text/css" href="Source/resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="Source/resources/css/queries.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
    <title>UoG - CMS</title>

    <link rel="apple-touch-icon" sizes="57x57" href="Source/resources/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Source/resources/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Source/resources/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Source/resources/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Source/resources/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Source/resources/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Source/resources/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Source/resources/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Source/resources/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="Source/resources/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="Source/resources/favicons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="Source/resources/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="Source/resources/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="Source/resources/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="Source/resources/favicons/manifest.json">
    <link rel="shortcut icon" href="Source/resources/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="Source/resources/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="Source/resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
<header>
    <nav style="position: fixed">
        <div class="row" >
            <img src="Source/resources/img/cms.png"  class="logo">
            <img src="Source/resources/img/cms.png"  class="logo-black">
            <ul class="main-nav js--main-nav">
                <li><a href="#plans">Sign in</a></li>
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
        </div>
    </nav>
    <div class="hero-text-box">
        <h1>Welcome to<br>UoG's Course Management System</h1>
    </div>

</header>

<section class="section-plans js--section-plans" id="plans">
    <div class="row">
        <h2>SIGN IN BY YOUR ROLE</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <div class="plan-box js--wp-4">
                <div>
                    <h3>ADMIN</h3>
                    <p class="plan-price-meal">Features of Admin</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Add Information</li>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Edit Information</li>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Control System</li>
                    </ul>
                </div>
                <div>
                    <a href="login_admin.php" class="btn btn-full">Sign in now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>TRAINER</h3>
                    <p class="plan-price-meal">Features of Trainer</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Manage course</li>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Manage trainee</li>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Edit trainee's information</li>
                    </ul>
                </div>
                <div>
                    <a href="login_trainer.php" class="btn btn-ghost">Sign in now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>TRAINEE</h3>
                    <p class="plan-price-meal">Features of Trainee</p>
                </div>
                <div>
                    <ul>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Check their own course</li>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Check personal information</li>
                        <li><i class="ion-ios-checkmark-empty icon-small"></i>Enroll Course</li>
                    </ul>
                </div>
                <div>
                    <a href="login_trainee.php" class="btn btn-ghost">Sign in now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="row">
        <p>
            Copyright &copy; 2019 by UoG (VN). All rights reserved.
        </p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
<script src="Source/vendors/js/jquery.waypoints.min.js"></script>
<script src="Source/resources/js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-61026110-2', 'auto');
    ga('send', 'pageview');

</script>

</body>

</html>