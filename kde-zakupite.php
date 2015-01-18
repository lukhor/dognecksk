<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Dogneck - Kde zakúpite</title>
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
    <!--GMAPS-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var map = new GMaps({
                div: '#map',
                lat: 48.875523,
                lng: 18.048384,
                zoom: 12,
                zoomControl: true,
                zoomControlOpt: {
                    style: 'SMALL',
                    position: 'TOP_LEFT'
                },
                panControl: false
            });

            /* Predajna 1 - Chov - Mix Arari */
            map.addMarker({
                lat: 48.958374,
                lng: 18.170358,
                title: 'Chov - Mix Arari',
                infoWindow: {
                    content: '<p>Chov-mix Arari - Predajca DogNeck, +421 903 506 989, chovmixarari@post.sk</p>'
                }
            });

            /* Predajna 2 - AKVA POSEIDON, s.r.o. */
            map.addMarker({
                lat: 48.933888,
                lng: 21.905543,
                title: 'AKVA POSEIDON, s.r.o.',
                infoWindow: {
                    content: '<p>AKVA POSEIDON, s.r.o - Predajca DogNeck, +948 599 797, obchod@akvaposeidon.eu, www.akvaposeidon.eu</p>'
                }
            });

            /* Predajna 3 - Ťapka */
            map.addMarker({
                lat: 48.894948,
                lng: 18.066775,
                title: 'Ťapka',
                infoWindow: {
                    content: '<p>Ťapka - Predajca DogNeck, +421 908 754 288, info@tapka.sk, www.tapka.sk</p>'
                }
            });

            /* Predajna 4 - IBO */
            map.addMarker({
                lat: 48.899662,
                lng: 18.017566,
                title: 'IBO',
                infoWindow: {
                    content: '<p>IBO - Predajca DogNeck, +421 907 123 002, www.ibo.sk</p>'
                }
            });

            /* ZOOM na predajňu 1 - Chov - Mix Arari*/
            $(".pos1").click(function () {
                map.setCenter(48.958374, 18.170358);
                map.setZoom(16);
            })

            /* ZOOM na predajňu 2 - Akva Poseidon */
            $(".pos2").click(function () {
                map.setCenter(48.894948, 18.066775);
                map.setZoom(16);
            })

            /* ZOOM na predajňu 3 - Ťapka */
            $(".pos3").click(function () {
                map.setCenter(48.933888, 21.905543);
                map.setZoom(16);
            })

            /* ZOOM na predajňu 4 - IBO */
            $(".pos4").click(function () {
                map.setCenter(48.899662, 18.017566);
                map.setZoom(16);
            })
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
                <li><a class="color3" href="obojky.php">Obojky</a></li>
                <li class="active"><a class="color4" href="kde-zakupite.php">Kde zakúpite</a></li>
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
        <div class="grid_1">
            <div class="table-responsive">
                <h1>Kde zakúpite obojky Dog Neck</h1>

                <p>Kammené predajne, kde môžete zakúpiť objoky Dog Neck Originál a Dog Neck Easy. Po kliknutí na riadok,
                    budete na predajňu na mape.</p>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Názov</th>
                        <th>Adresa</th>
                        <!--<th>Ulica</th>-->
                        <th>Tel. kontakt</th>
                        <th>Web & Mail</th>
                        <!--<th>Krátky popis</th>-->
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pos1">1</td>
                            <td class="pos1">Chov-mix Arari</td>
                            <td class="pos1">A. Kmeťa 360/5, Dubnica nad Váhom</td>
                            <td class="pos1">+421 903 506 989</td>
                            <td class="pos1"><a href="malito:chovmixarari@post.sk">chovmixarari@post.sk</a></td>
                            <!--<td class="pos1">Všetko pre Vašich domácich miláčikov. Ak by náhodou niečo nemali, radi Vám to
                                promptne zabezpečia.
                            </td>-->
                        </tr>
                        <tr>
                            <!-- Ťapka - 48.894948, 18.066775-->
                            <td class="pos2">2</td>
                            <td class="pos2">Ťapka</td>
                            <td class="pos2">Pred poľom 1652, Trenčín</td>
                            <td class="pos2">+421 908 754 288</td>
                            <td class="pos2"><a href="malito:info@tapka.sk">info@tapka.sk</a>, <a href="http://www.tapka.sk" target="_blank">www.tapka.sk</a></td>
                            <!--<td class="pos2"></td>-->
                        </tr>
                        <tr>
                            <!-- AKVA POSEIDON, s.r.o. - 48.933888, 21.905543-->
                            <td class="pos3">3</td>
                            <td class="pos3">AKVA POSEIDON, s.r.o.</td>
                            <td class="pos3">Hviezdoslavova 1407/1, Humenné</td>
                            <td class="pos3">+421 948 599 797</td>
                            <td class="pos3"><a href="malito:obchod@akvaposeidon.eu">obchod@akvaposeidon.eu</a>, <a href="http://www.akvaposeidon.eu" target="_blank">www.akvaposeidon.eu</a></td>
                            <!--<td class="pos3"></td>-->
                        </tr>

                        <tr>
                            <td class="pos4">4</td>
                            <td class="pos4">IBO</td>
                            <td class="pos4">Bratislavská 123, 911 05 Trenčín</td>
                            <td class="pos4">+421 907 123 002</td>
                            <td class="pos3"><a href="http://www.ibo.sk" target="_blank">www.ibo.sk</a></td>
                            <!--<td class="pos4"></td>-->
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="map" style="width: 100%; height: 300px"></div>
        <br/>
        <iframe
            src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.dogneck.sk&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=80"
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:80px;"
            allowTransparency="true"></iframe>
    </div>
</div>
<!-- FOOTER -->
<?php include("footer.php"); ?>

<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

</body>
</html>		