<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

if(isset($_POST['sendfeedback'])) {
    if (isset($_POST['nameOf']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['messageOf'])) {
        $regex = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        $email = $_POST['email'];
        if ( preg_match( $regex, $email ) ) {
            $name = $_POST['nameOf'];
            $subject = $_POST['subject'];
            $message = $_POST['messageOf'];
            $headers = 'From: ' . $email . "\r\n"; // Sender's Email
            /*$headers .= 'Cc: lukhor@gmail.com' . "\r\n"; // Carbon copy to Sender*/
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
            //mail("info@dogneck.sk", $subject, $message, $headers);
            mail("lukhor@gmail.com", $subject, $message, $headers);
            $succesMsg = "Správa bola úspešne odoslaná";
        } else {
            $errorMsg = "Správa nebola odoslaná, pretože ste zadali neplatný E-mail, zadajte prosím platný E-mail";
        }
    } else {
        $errorMsg = "Správa nebola odoslaná, prosím vyplnte polia korektne a odošlite správu znovu";
    }
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <?php include("header.php"); ?>
    <script type="text/javascript" src="js/form-validate.js"></script>
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

            <p>Váš názor je pre nás dôležitý a v prípade, ak máte akékoľvek otázky, alebo pripomienky, nás neváhajte
                kontaktovať na nižšie uvedených kontaktoch.</p>
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

            <div class="but__center">
            <?php
            echo '<div class="but__center">';
            if(isset($succesMsg) && $succesMsg) {
                echo "<p style=\"color: green;\">",htmlspecialchars($succesMsg),"</p>\n\n";
            } else if(isset($errorMsg) && $errorMsg){
                echo "<p style=\"color: red;\">",htmlspecialchars($errorMsg),"</p>\n\n";
            }
            echo "</div>";
            ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return checkForm(this)">
                <div class="col-md-6 to">
                    <input type="text" name="nameOf" class="text" value="Meno" onfocus="if(this.value == 'Meno') this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Meno';}">
                    <input id="email" type="text" name="email" class="text" value="Email" onfocus="if(this.value == 'Email') this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Email';}">
                    <input type="text" name="subject" class="text" value="Predmet" onfocus="if(this.value == 'Predmet') this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Predmet';}">
                </div>
                <div class="col-md-6 text">
                    <textarea name="messageOf" value="Správa" onfocus="if(this.value == 'Správa') this.value = '';"
                              onblur="if (this.value == '') {this.value = 'Správa';}">Správa</textarea>
                </div>
                <div class="clearfix"></div>
                <div class="but__center"><input type="submit" name="sendfeedback" value="Odoslať správu &gt;&gt;"></div>

            </form>

        </div>
        <div class="grid_1">
            <h1>Sídlo firmy</h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10494.62354203642!2d18.046674991589626!3d48.8838362055514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1strencin+juh!5e0!3m2!1ssk!2ssk!4v1417469098933"
                width="1000" height="500" frameborder="0" style="border:0; display: block; margin: 0 auto;"></iframe>
        </div>

    </div>
</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>		