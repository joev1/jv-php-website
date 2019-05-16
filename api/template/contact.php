<?php
include_once 'inc/header.php';
$message="<pre>$msg</pre>"
?>
    <body id="mainBackground">
    <div class="midWrapper">
        <div class="hero">
                <form id="contactForm" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <div><label><input type="text" name="name" value="<?php $name ?>" placeholder=" Your Name" /></label></div>
                    <div><label><input type="email" name="e-mail" value="<?php $email ?>"placeholder=" Your E-mail Adress" /></label></div>
                    <div><label><input type="tel" name="phone" value="<?php $phone ?>" placeholder=" Your Phone Number"/></label></div>
                    <div><label><input type="text" name="subject" value="<?php $subject ?>"placeholder=" Subject"/></label></div>
                    <div><label><textarea name="msg" rows="8" placeholder=" Your Message"></textarea></label></div>
                    <div>
                        <button id="contactBtn" type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    <div class="whiteBox">
        <div class="midWrapper2">
            <div class="otherP"><a href="#"><img src="img/otherp.png" alt="#"></a></div>
            <div class="gitH"><a href="#"><img src="img/github.png" alt="#"></a></div>
        </div>
    </div>
    </body>
<?php
include_once  'inc/footer.php';