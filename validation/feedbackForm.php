<?php 
require_once '../securimage/securimage.php';
$captcha = @$_POST['ct_captcha']; 
$securimage = new Securimage();

if ($securimage->check($captcha) == false) {
	echo 'Incorrect security code entered';
}
else echo $captcha;
?>
