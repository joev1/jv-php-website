<?php
include_once 'inc/header.php';
require_once '../config/db.php';

$msg = "";

    if(filter_has_var(INPUT_POST, 'submit')){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
             if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
                $msg = "Please use a valid email";
             } else {
                $sql = "INSERT INTO sys.ContactForm (name, email, phone, subject, message)
                VALUES (:name, :email, :phone, :subject, :message)";

                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':name', $name);
                $stmt->bindValue(':email', $email);
                $stmt->bindValue(':phone', $phone);
                $stmt->bindValue(':subject', $subject);
                $stmt->bindValue(':message', $message);

                $stmt->execute();
             }
        } else {
            $msg = "Please fill all fields with: '*'";
        }

    }
?>
    <body id="mainBackground">
    <div class="midWrapper">
        <div class="hero">
                <form id="contactForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
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
include_once  'inc/footer.php';