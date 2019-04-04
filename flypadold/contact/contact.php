<?php
if ($action=="")    /* display the contact form */
    {
    ?>
<!--do nothing-->
    <?php
    } 
else                /* send the submitted data */
    {
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $comment= $_POST['comment'];
    $subject= $_POST['subject'];
    $formcontent= "From: $name \n Message: $comment";
    $recipient= "info@flypadcorp.com", "damilolabelloforeal@gmail.com";
    $mailheader= "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die ("Error!");
    echo "Thank You";
    }  
?>
