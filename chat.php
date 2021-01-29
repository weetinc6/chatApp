<?php session_start(); ?>
<html lang="en_US" class="no-js iem7"> <![endif]--> <!--[if lt IE 7]> <html class="ie6 lt-ie10 lt-ie9 lt-ie8 lt-ie7 no-js" lang="en_US"> <![endif]--> <!--[if IE 7]> <html class="ie7 lt-ie10 lt-ie9 lt-ie8 no-js" lang="en_US"> <![endif]--> <!--[if IE 8]> <html class="ie8 lt-ie10 lt-ie9 no-js" lang="en_US"> <![endif]--> <!--[if IE 9]> <html class="ie9 lt-ie10 no-js" lang="en_US"> <![endif]--> <!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en_US"><!--<![endif]--> <head>  <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> <meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" /> <meta name="HandheldFriendly" content="true"/>


   <link rel="stylesheet" href="cc.css" type="text/css"/>
<style>
body{
  background-image: url('images/wall.jpg');
}

</style>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
   
 </head>
   <body>
  



<?php

if(isset($_GET['from'])){

error_reporting(0);
include 'config.php';

session_start();
$rdr = $_SESSION['ccphone'];
$touser = $_GET['to'];
$from = $_GET['from'];




//default user header stuff


$g = "SELECT * FROM `mspwd` WHERE `ccphone` = '$rdr'";
$g1 = mysqli_query($con, $g);
$g2 = mysqli_num_rows($g1);
if($g2>0){
  while($dinfo = mysqli_fetch_assoc($g1)){
    $gender = $dinfo['gender'];
    $ccph = $dinfo['ccphone'];

    


//get another user profile info
$us = "SELECT * FROM `ccuser` WHERE `ccphone` = '$rdr'";
$us1 = mysqli_query($con, $us);
$us2 = mysqli_num_rows($us1);
if($us2>0){
  while ($dy = mysqli_fetch_assoc($us1)){
   $ccfname = $dy['ccfname'];
   $ccsurname = $dy['ccsurname'];

echo '<title>'.$ccfname.' '.$ccsurname.' - rw</title>';

    echo '<div class="bcontent">
  
    <table width="100%"><tr>
    <td align="left">
    <a href="recieve_messages.php">
    <image src="images/back.png" width="30">

</a>
<br>
<br>
<br>
</td>

<td align="right">
<a href="page">
<image src="images/flag.png" width="30"/>
</a> 
&nbsp;&nbsp;
<a href="menu">
<image src="images/menu.png" width="30"/>
</a>
<br>
<br>
<br>
</td>
</tr>
</table>
</div>




<br>
<br>
<br>
<br>


';



echo '<table width="100%"><tr>

<td align="left"></td>';

echo '</tr>
</table>
';





$d = "SELECT * FROM `message_recieve` WHERE `touser` = '$touser' AND `from` = '$from' ORDER BY `touser` DESC ";

$d1 = mysqli_query($con, $d); while($dy = mysqli_fetch_assoc($d1)){ 

$fromuserP = $dy['touser']; 
$mess = $dy['message_text']; 
$touserP = $dy['from']; 

 if($touserP){ 
  echo '<div align="right"><p
class="chat-bubble-green">'.$touserP.'<br>
<image src="images/mark.png" width="10" /><image src="images/mark.png" width="10" />'.$mess.'</p></div>'; 



}

if($touserP){ 
$d = "SELECT * FROM `message_recieve` WHERE `touser` = '$from' AND `from` = '$touser' ORDER BY `from` DESC ";

$d1 = mysqli_query($con, $d); while($dy = mysqli_fetch_assoc($d1)){ 

$fromuserP = $dy['touser']; 
$messP = $dy['message_text']; 
$touserP = $dy['from']; 


 
  echo '<p class="chat-bubble">'.$touserP.'
  <br><image src="images/mark.png" width="10" /><image src="images/mark.png" width="10" />'.$messP.'</p>';



}











}



}











echo '<br><br>
<table width="100%"><tr>
<form method="POST" action="send_auth.php?rdr='.$rdr.'">
<input type="hidden" name="from" value="'.$from.'" />
<input type="hidden" name="touser" value="'.$touser.'" />
<input type="hidden" name="count" value="1" />
<td align="left"><input type="text" name="message_text" class="binput5" value="" required="" placeholder="type message" /></td><td align="right"><button class="gt-send"><b><image src="images/msend.png" width="32" /></button></td></tr>
</table>
</form>


';




}
}


}
}


}
?>