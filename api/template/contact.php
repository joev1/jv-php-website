<?php
include_once 'inc/header.php';
require_once '../config/db.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO sys.ContactForm (name, email, phone, subject, message)
            VALUES (:name, :email, :phone, :subject, :message)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':subject', $subject);
    $stmt->bindValue(':message', $message);

    $stmt->execute();

    echo "<script>alert('Message send')</script>";
}

?>
    <body id="mainBackground">
    <div class="midWrapper">
        <div class="hero">
                <form id="contactForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <div><input type="text" name="name" placeholder=" Your Name" /></div>
                    <div><input type="email" name="email" placeholder=" Your E-mail Address" /></div>
                    <div><input type="tel" name="phone" placeholder=" Your Phone Number"/></div>
                    <div><input type="text" name="subject" placeholder=" Subject"/></div>
                    <div><textarea name="message" rows="8" placeholder=" Your Message"></textarea></></div>
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
include_once  'inc/footer.php';