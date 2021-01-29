<?php session_start(); ?>
<html lang="en_US" class="no-js iem7"> <![endif]--> <!--[if lt IE 7]> <html class="ie6 lt-ie10 lt-ie9 lt-ie8 lt-ie7 no-js" lang="en_US"> <![endif]--> <!--[if IE 7]> <html class="ie7 lt-ie10 lt-ie9 lt-ie8 no-js" lang="en_US"> <![endif]--> <!--[if IE 8]> <html class="ie8 lt-ie10 lt-ie9 no-js" lang="en_US"> <![endif]--> <!--[if IE 9]> <html class="ie9 lt-ie10 no-js" lang="en_US"> <![endif]--> <!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en_US"><!--<![endif]--> <head>  <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> <meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" /> <meta name="HandheldFriendly" content="true"/>


   <link rel="stylesheet" href="cc.css" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
   
 </head>
   <body>
  



<?php



error_reporting(0);
include 'config.php';
session_start();
$rdr = $_SESSION['ccphone'];




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
    <a href="mainpage">
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



<div class="bcontent-dwn">
<table width="100%"><tr>

<td align="left">
<a href="r_count.php">';

echo '<image src="images/chat.png" width="30"/>
</a>';
$nn = "SELECT `count` FROM `message_recieve` WHERE `touser` = '$rdr'";
$nn1 = mysqli_query($con, $nn);
$nn2 = mysqli_num_rows($nn1);
if($nn2>0){
 
echo '<b class="n-red">'.$nn2.'</b>';
}
else{
  echo '<b class="n-red">0</b>';
}



echo '</td>
';

if($gender == "Male"){


$gph = "SELECT * FROM `profilephoto` WHERE `ccphone` = '$rdr'";
$gph1 = mysqli_query($con, $gph);
$gph2 = mysqli_num_rows($gph1);
if($gph2>0){
  while($photo = mysqli_fetch_assoc($gph1)){
    $feed_image11 = $photo['feed_image'];

echo '<td align="left">
 <a href="profile">
<image src="'.$feed_image11.'" width="30"/>
</a>
</td>
';
  }
}
else{

 echo '<td align="left">
 <a href="profile">
<image src="images/male.png" width="30"/>
</a>
</td>
';
 }
}

else if($gender == "Female"){

$gph = "SELECT * FROM `profilephoto` WHERE `ccphone` = '$rdr'";
$gph1 = mysqli_query($con, $gph);
$gph2 = mysqli_num_rows($gph1);
if($gph2>0){
  while($photo = mysqli_fetch_assoc($gph1)){
    $feed_image11 = $photo['feed_image'];

echo '<td align="left">
 <a href="profile">
<image src="'.$feed_image11.'" width="30"/>
</a>
</td>
';
  }
}else{
 echo '<td align="left">
 <a href="profile">
<image src="images/female.png" width="30"/>
</a>
</td>
';
 
}
}

echo '<td align="right">
<a href="search.php">
<image src="images/search.svg" width="30"/>
</a>
</td>
';





echo '<td align="right">
<a href="notification_count.php">';

echo '<image src="images/bell.png" width="30" />
</a>';
$frnd = "SELECT * FROM `pending_friends_notify` WHERE `touser` ='$rdr'";

$frnd1 = mysqli_query($con, $frnd);
$frnd2 = mysqli_num_rows($frnd1);
if($frnd2>0){
 
echo '<b class="n-red">'.$frnd2.'</b>';
}
else{
  echo '<b class="n-red">0</b>';
}



echo '</a></td>
';





 echo '<td align="right">
 <a href="friendlist.php">
<image src="images/notify.png" width="30"/>
</a>
</td>
';
 

 


echo'</tr>
</table>
<br>
<br>
</div>
<br>
<br>
<br>
<br>


';




echo '<table width="100%"><tr>

<td align="left"><h2>Recieve Message</h2></td>


';

echo '</tr>
<table>


</b><br><br>';


$gg = "SELECT * FROM `message_sub` WHERE `touser` = '$rdr'";
$gg1 = mysqli_query($con, $gg);
$gg2 = mysqli_num_rows($gg1);
if($gg2>0){
  while($gg3 = mysqli_fetch_assoc($gg1)){
    $ggfromuser = $gg3['fromuser'];
    $ggtouser = $gg3['touser'];


$m = "SELECT * FROM `message_recieve` WHERE `touser` = '$rdr' LIMIT 1";
$m1 = mysqli_query($con, $m);
$m2 = mysqli_num_rows($m1);
if($m2>0){
  while($m3 = mysqli_fetch_array($m1)){

$fromuser = $m3['fromuser'];
$touser = $m3['touser'];
$message_text = $m3['message_text'];


$f = "SELECT * FROM `ccuser` WHERE `ccphone` = '$ggfromuser'";
$f1 = mysqli_query($con, $f);
$f2 = mysqli_num_rows($f1);
if($f2>0){
  while($d = mysqli_fetch_assoc($f1)){
    $dccfname = $d['ccfname'];
    $dccsurname = $d['ccsurname'];



echo '<a href="chat.php?from='.$ggtouser.'&to='.$ggfromuser.'">'.$dccfname.' '.$dccsurname.'</a><br>

'.$message_text.'<br>'; 

}
}


  }
}
 


}
}
else{


  
$gg = "SELECT * FROM `message_sub` WHERE `fromuser` = '$rdr'";
$gg1 = mysqli_query($con, $gg);
$gg2 = mysqli_num_rows($gg1);
if($gg2>0){
  while($gg3 = mysqli_fetch_assoc($gg1)){
    $ggfromuser = $gg3['fromuser'];
    $ggtouser = $gg3['touser'];

  

$m = "SELECT * FROM `message_recieve` WHERE `fromtouser` = '$ggfromuser' LIMIT 1";
$m1 = mysqli_query($con, $m);
$m2 = mysqli_num_rows($m1);
if($m2>0){
  while($m3 = mysqli_fetch_array($m1)){

$fromuser = $m3['fromtouser'];
$touser = $m3['from'];
$message_text = $m3['message_text'];



$f = "SELECT * FROM `ccuser` WHERE `ccphone` = '$touser'";
$f1 = mysqli_query($con, $f);
$f2 = mysqli_num_rows($f1);
if($f2>0){
  while($d = mysqli_fetch_assoc($f1)){
    $dccfname = $d['ccfname'];
    $dccsurname = $d['ccsurname'];



echo '<a href="chat.php?from='.$ggfromuser.'&to='.$ggtouser.'">'.$dccfname.' '.$dccsurname.'</a><br>

'.$message_text.'<br>'; 

}
}


  }
}
 


}
}









}















}
}

}
}



?>