<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
/*Odoslanie mailu*/
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = 'From: ' . $email . "\r\n"; // Sender's Email
    /*$headers .= 'Cc: lukhor@gmail.com' . "\r\n"; // Carbon copy to Sender*/
    // Message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    mail("info@dogneck.sk", $subject, $message, $headers);
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Dogneck - Kontakt</title>
    <meta name=”keywords” content=”obojok, obojky, obojka, obojku, obojkom, dog, neck, dogneck, sťahovací, sťahovacie, sťahuje, škrtiaci, škrtidlo, škrtiace, škrtiaceho, škrtiacim, ťahanie, ťahá, ťahať, ťahaniu, ťahal, neťahal, zabráni, zabrániť, obmedziť, zamedziť, obmedzí, zamedzí, obmedzenie, zamedzenie, zmiernenie, zabránenie, bránenie, brániaci, pes, psa, psie, psí, psích, psieho, psovi, psy, psom, postroj, postroje, postroja, postrojom, popruh, šnúrka, lanko, lano, šnúra, šnúry, lana, stop, collar, millan, cesar, illusion, výcvik, výcvikový, training, pokojný, upokojiť, upokojí, kľud, kľudné, kľudne, prechádzka, prechádzky, prechádzok, chôdza, vychádzka, chodiť, pri, nohe, psovod, krátko, blízko, proti”>
    <!-- Page styles -->
    <link type='text/css' href='css/demo.css' rel='stylesheet' media='screen' />

    <!-- Contact Form CSS files -->
    <link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link href="css/component.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });</script>
</head>
<body>
<div class="men_banner">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""/></a>
        </div>
        <div class="menu">
            <ul class="megamenu skyblue">
                <li><a class="color1" href="/">O nás</a></li>
                <li><a class="color2" href="ako-to-funguje.php">Ako to funguje</a></li>
                <li><a class="color3" href="obojky.php">Obojky</a></li>
                <li><a class="color4" href="kde-zakupite.php">Kde zakúpite</a></li>
                <li><a class="color5" href="referencie.php">Referencie</a></li>
                <li class="active"><a class="color6" href="kontakt.php">Kontakt</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="men">
    <div class="container">
        <div class="grid_1">
            <h1>Kontaktné informácie</h1>

            <p>Váš názor je pre nás dôležitý a v prípade, ak máte akékoľvek otázky, alebo pripomienky, nás neváhajte kontaktovať na nižšie uvedených kontaktoch.</p>
        </div>
        <div class="grid_4">
            <div class="grid_2 preffix_1">
                <ul class="iphone">
                    <i class="phone"> </i>
                    <li class="phone_desc">Telefón : +421 944 411 708</li>
                    <div class="clearfix"></div>
                </ul>
                <ul class="iphone">
                    <i class="flag"> </i>
                    <li class="phone_desc">Web : <a href="http://www.dogneck.sk">www.dogneck.sk</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="grid_3">
                <ul class="iphone">
                    <i class="msg"> </i>
                    <li class="phone_desc">Email : <a href="malito:info@dogneck.sk">info(at)dogneck.sk</a></li>
                    <div class="clearfix"></div>
                </ul>
                <ul class="iphone">
                    <i class="home"> </i>
                    <li class="phone_desc">Adresa : Natália Havalová, Biskupická 28, 911 04 Trenčín</li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="contact_form">
            <h2>Napíšte nám</h2>

            <form method="post" action="kontakt.php">
                <div class="col-md-6 to">
                    <input type="text" name="name" class="text" value="Meno" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Meno';}">
                    <input type="text" name="email" class="text" value="Email" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Email';}">
                    <input type="text" name="subject" class="text" value="Predmet" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Predmet';}">
                </div>
                <div class="col-md-6 text">
                    <textarea name="message" value="Správa" onfocus="this.value = '';"
                              onblur="if (this.value == '') {this.value = 'Správa';}">Správa</textarea>
                </div>
                <div class="clearfix"></div>
                <div class="but__center"><input type="submit" value="Odoslať správu &gt;&gt;"></div>
            </form>
        </div>
        <div class="grid_1">
            <h1>Sídlo firmy</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10494.62354203642!2d18.046674991589626!3d48.8838362055514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1strencin+juh!5e0!3m2!1ssk!2ssk!4v1417469098933" width="1000" height="500" frameborder="0" style="border:0; display: block; margin: 0 auto;"></iframe>
        </div>

    </div>
</div>
<!-- FOOTER -->
<?php include("footer.php"); ?>

<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</body>
</html>		