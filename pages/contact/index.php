<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Contact Form';
    $to = 'fryarj@byui.edu';
    $subject = 'Hello';
    $human = $_POST['human'];
    
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {
            if (mail ($to, $subject, $body, $from)) {
            echo '<p>Your message has been sent!</p>';
            } else {
                echo '<p>Something went wrong, go back and try again!</p>';
            }
    } else if ($_POST['submit'] && $human != '4') {
    echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
    } else {
    echo '<p>You Need to fill in all required fields!!</p>';
    }
    
//Remove all values previously stored
    unset ($name);
    unset ($email);
    unset ($subject);
    unset ($message);
    unset ($captcha);
    
    //Display the contact page with the new message's
    include 'contact.php';
    exit;
} else {
    include 'contact.php';
    exit;
}
?>
       