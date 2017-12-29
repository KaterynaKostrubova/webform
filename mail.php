<?php

// $recepient = "katerinakosrtrubova@gmail.com";
// $siteName = "namesite";

// $name = trim($_POST["name"]);
// $phone = trim($_POST["email"]);
// $info = trim($_POST["info"]);
// $message = "Имя: $name \nE-mail: $email \nТекст: $info" 

// $pagetitle = "Заявка с сайта \"$siteName\"";
// mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");


if(!empty($_POST["name"]) AND !empty($_POST['email'])){


$headers = "From: Bla Bla\r\n".
		   "Reply-To: kittykasy@gmail.com\r\n".
		   "X-Mailer: PHP/". phpversion();
$theme = "new";
$letter = "data message:\r\n";
$letter .= "Name:" . $_POST["name"]. "\r\n";
$letter .= "Email:" . $_POST["email"]. "\r\n";
$letter .= "Message:" . $_POST["info"]. "\r\n";

	if(mail("katerinakostrubova@gmail.com", $theme, $letter, $headers)){
		header("Location: thankyou.php");
	}else{
		header("Location: error1");
	}



} else {
	header("Location: error2");

}






