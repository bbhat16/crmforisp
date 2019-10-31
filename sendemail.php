<?php
require_once 'config.php';
session_start();
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
$id=$_GET['id'];    
$email = new \SendGrid\Mail\Mail(); 
$body=$_GET['solution'];
$emailax=strval($_GET['email']);
$email->setFrom("hahcsa@haha.com", "Flash");
$email->setSubject("SOLUTION");
$email->addTo($emailax, "Flash");
// $email->addContent("text/plain", $body."If you have any feedback go to.htps:/www.google.com);
$email->addContent(
    "text/html", "<strong>$body</strong><a href='http://localhost/ISP/startbootstrap-agency-gh-pages/feedback.php'>Click Here for Feedback</a>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
    $sql = "delete from complaints where id='$id'";
$ans = mysqli_query($link, $sql);
header('Location: complaint.php');
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}