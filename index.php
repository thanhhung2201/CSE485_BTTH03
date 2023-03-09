<?php
include("Bai1/EmailServerInterface.php");
include("Bai1/EmailSender.php");
include("Bai1/MyEmailSender.php");
$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("example@example.com", "Test Email", "This is a test email.");
?>