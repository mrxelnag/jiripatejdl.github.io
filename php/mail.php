<?php
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
        header("Location: /../index.hmtl");
    }

    $mailTo = "jirkapatejdl@seznam.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    //Když nefunguje, předělej na intex.php
    header("Location: /../index.hmtl");
    //header("Location: /../index.hmtl?mailOdeslan");
}
?>