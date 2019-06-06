<?php
include_once './../template/inc/header.php';
require_once './../components/Contact.php';
?>
    <body id="mainBackground">
    <div class="midWrapper">
        <div class="hero">
                <form id="contactForm" action="../components/Contact.php" method="post">
                    <div><input type="text" name="name" placeholder=" Your Name*" /></div>
                    <div><input type="email" name="email" placeholder="E-mail Address*" /></div>
                    <div><input type="tel" name="phone" placeholder="Phone Number (can be blank)"/></div>
                    <div><input type="text" name="subject" placeholder=" Subject*"/></div>
                    <div><textarea name="message" rows="8" placeholder=" Your Message*"></textarea></div>
                    <?php if($msg != ''): ?>
                        <div id="divMsg"><?php echo $msg; ?></div>
                    <?php endif; ?>
                    <div>
                        <input id="contactBtn" type="submit" name="submit" value="Submit">
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
include 'inc/footer.php';