<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php include("header.php"); ?>
    <link rel="stylesheet" href="css/colorbox.css" type="text/css">
    <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="js/jquery.colorbox-sk.js"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('a.gallery1').colorbox({rel: 'gallery1', slideshow: true, width: "75%", height: "75%"});
            jQuery('a.gallery2').colorbox({rel: 'gallery2', slideshow: true, width: "75%", height: "75%"});
        })
    </script>
</head>
<body>
<div class="men_banner">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="images/logo.png" alt=""/></a>
        </div>
        <div class="menu">
            <ul class="megamenu skyblue">
                <li><a class="color1" href="/">O nás</a></li>
                <li><a class="color2" href="ako-to-funguje.php">Ako to funguje</a></li>
                <li class="active"><a class="color3" href="obojky.php">Obojky</a></li>
                <li><a class="color4" href="kde-zakupite.php">Kde zakúpite</a></li>
                <li><a class="color5" href="referencie.php">Referencie</a></li>
                <li><a class="color6" href="kontakt.php">Kontakt</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="men">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Naše produkty</h1>
                <br>

                <div class="clearfix"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center">DogNeck Easy</h2>
                <a class='gallery1' href='images/easy/01.jpg'><img src="images/easy/01.jpg" class="img-rounded"
                                                                   style="width: 562px"/></a>
                <a class='gallery1' href='images/easy/02.jpg'><img src="images/easy/02.JPG" class="img-rounded"
                                                                   style="width: 562px; display: none;"/></a>
                <a class='gallery1' href='images/easy/03.jpg'><img src="images/easy/03.JPG" class="img-rounded"
                                                                   style="width: 562px; display: none;"/></a>
                <a class='gallery1' href='images/easy/04.jpg'><img src="images/easy/04.JPG" class="img-rounded"
                                                                   style="width: 562px; display: none;"/></a>
                <a class='gallery1' href='images/easy/05.jpg'><img src="images/easy/05.JPG" class="img-rounded"
                                                                   style="width: 562px; display: none;"/></a>

                <br><br>
                <dl>
                    <dt>Tento variant obojku má dve funkcie:</dt>

                    <dd>1- Polo-sťahovací obojok</dd>
                    <dd>2- Pevný obojok</dd>
                </dl>

                <p><b>Polo-sťahovací obojok</b></p>

                <p>V tomto type zapnutia na vôdzku obojok pri potiahnutí psa spôsobí tlak na krk a tým pes dostáva do
                    mozgu signál aby spomalil a tlak uvoľnil. Efektivita použitia je založená na správnej pozícii remeňa
                    na
                    krku psa, vďaka čomu Vaša sila pôsobí na tú časť krku, ktorá je najviac citlivá.</p><br>

                <p><b>Pevný obojok</b></p>

                <p>Tento spôsob zapnutia už nevyužíva zvýšenie tlaku na krk pri potiahnutí psa, avšak stále je
                    zabezpečené správne vedenie remeňa pod krkom psa a tým čiastočné zamedzenie tendencie ťahať.
                    V oboch prípadoch zapnutia je tento model obojku určený pre psíkov, ktorí ťahajú menej a sú
                    senzitívnejší na asertívny postoj majiteľa a tlak na určenom mieste na krku.</p>
            </div>
            <div class="col-lg-6">
                <h2 class="text-center">DogNeck Originál</h2>

                <a class='gallery2' href='images/original/01.jpg'><img src="images/original/01.jpg" class="img-rounded"
                                                                       style="width: 562px"/></a>
                <a class='gallery2' href='images/original/02.jpg'><img src="images/original/02.JPG" class="img-rounded"
                                                                       style="width: 562px; display: none;"/></a>
                <a class='gallery2' href='images/original/03.jpg'><img src="images/original/03.JPG" class="img-rounded"
                                                                       style="width: 562px; display: none;"/></a>
                <br><br>

                <p><b>Sťahovací obojok</b></p><br>

                <p>
                    Obojok so sťahovacou šnúrkou, ktorá pri ťahaní psa stiahnutím vytvorí tlak na citlivú časť krku.
                    Následne po tom, ako pes ťahať prestane, sa šnúrka opäť uvoľní. Konštrukcia obojku je navrhnutá
                    tak, aby bol pre psa komfortný a nijako ho pri správnom kráčaní neobmedzoval.
                    Tento model je určený najmä tým, ktorí majú silnejších psov. Pri použití minimálnej sily pes môže
                    byť zvládnutý a nedochádza k ohrozovaniu jeho, alebo majiteľovho zdravia.
                </p>
            </div>
        </div>
        <br/>

        <div class="row">
            <div clas="col-lg-12">
                <iframe
                    src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dogneck.sk&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80"
                    scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;"
                    allowTransparency="true"></iframe>
            </div>
        </div>
        <br/>

    </div>
</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>		