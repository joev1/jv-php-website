<?php
include_once './../template/inc/header.php';
?>
    <div class="midWrapper">
        <div class="hero">
            <form id="contactForm" action="/sent" method="post">
                <div><input type="text" name="name" placeholder=" Your Name*"/></div>
                <div><input type="email" name="email" placeholder="E-mail Address*"/></div>
                <div><input type="tel" name="phone" placeholder="Phone Number (can be blank)"/></div>
                <div><input type="text" name="subject" placeholder=" Subject*"/></div>
                <div><textarea name="message" rows="8" placeholder=" Your Message*"></textarea></div>
                <?php if ($msg != ''): ?>
                    <div id="divMsg"><?php echo $msg; ?></div>
                <?php endif; ?>
                <div>
                    <input id="contactBtn" type="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
<?php
include 'inc/footer.php';
