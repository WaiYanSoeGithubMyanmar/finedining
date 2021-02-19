<?php

define('TITLE', "Contact | Franklin's Fine Dining ");
include('includes/header.php')
?>

<div id="contact">
    <hr>

    <h1>Get in touch with us!</h1>

    <?php

    // Check for header injections
    function has_header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    }


    //submit mail
    if (isset($_POST['contact_submit'])) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $msg = trim($_POST['message']);

        //check to see if $name or $email have header injections

        if (has_header_injection($name) || has_header_injection($email)) {
            die();
        }

        if (!$name  || !$email || !$msg) {
            echo "<h4 class='error'> All fields required.</h4>";

            exit;
        }

        //mail address
        $to = "waiyansoe4421@gmail.com";

        //mail subject
        $subject = "$name send you a message via you contact form ";

        //mail message
        $msg = "Name: $name\r\n";
        $msg .= "Email: $name\r\n";
        $msg .= "Message: $name\r\n";

        // If the subscribe checkbox was checked... 
        if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {

            $msg .= "\r\n\r\nPlease add     $email to the mailing list.\r\n";
        }

        $msg = wordwrap($msg, 72);

        //mail headers
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset =iso-8859-1\r\n";
        $headers .= "From: $name <$email> \r\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\r\n\r\n";


        mail($to, $subject, $msg, $headers);



    ?>

        <h5>Thanks for contacting Franklin's!</h5>
        <p>Please allow 24 hours for a responses</p>
        <p> <a href="index.php" class="button block">&laquo; Go Back Home</a> </p>

    <?php } else { ?>
        <form action="" method="POST" id="contact-form">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea>

            <input type="submit" class="button next" name="contact_submit" value="Send Message">

        </form>
    <?php } ?>


</div>

<?php

include('includes/footer.php')
?>