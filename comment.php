<?php session_start(); ?>
<html lang="en_US" class="no-js iem7"> <![endif]--> <!--[if lt IE 7]> <html class="ie6 lt-ie10 lt-ie9 lt-ie8 lt-ie7 no-js" lang="en_US"> <![endif]--> <!--[if IE 7]> <html class="ie7 lt-ie10 lt-ie9 lt-ie8 no-js" lang="en_US"> <![endif]--> <!--[if IE 8]> <html class="ie8 lt-ie10 lt-ie9 no-js" lang="en_US"> <![endif]--> <!--[if IE 9]> <html class="ie9 lt-ie10 no-js" lang="en_US"> <![endif]--> <!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en_US"><!--<![endif]--> <head>  <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> <meta http-equiv="content-type" content="text/html; charset=UTF-8;charset=utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" /> <meta name="HandheldFriendly" content="true"/>
<title>Comment</title>

   <link rel="stylesheet" href="../cc.css" type="text/css"/>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<link rel="icon" href="../favicon.ico" type="image/x-icon">
   
 </head>
   <body>
  



<?php


if(isset($_GET['cid'])){
error_reporting(0);
include '../config.php';
session_start();
$rdr = $_SESSION['ccphone'];
$cid = $_GET['cid'];

$us = "SELECT * FROM `mspwd` WHERE `ccphone` = '$rdr'";
$us1 = mysqli_query($con, $us);
$us2 = mysqli_num_rows($us1);
if($us2>0){
  while ($dy = mysqli_fetch_assoc($us1)){
    $ccphone = $dy['ccphone'];
   $gender = $dy['gender'];


  
     echo '<div class="bcontent">
  
    <table width="100%"><tr>
    <td align="left">
    <a href="../mainpage">
    <image src="../images/back.png" width="30">

</a>
<br>
<br>
<br>
</td>

<td align="right">
<a href="../page">
<image src="../images/flag.png" width="30"/>
</a> 
&nbsp;&nbsp;
<a href="../menu">
<image src="../images/menu.png" width="30"/>
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
<a href="../r_count.php">';

echo '<image src="../images/chat.png" width="30"/>
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
 <a href="../profile">
<image src="../'.$feed_image11.'" width="30"/>
</a>
</td>
';
  }
}
else{

 echo '<td align="left">
 <a href="../profile">
<image src="../images/male.png" width="30"/>
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
 <a href="../profile">
<image src="../'.$feed_image11.'" width="30"/>
</a>
</td>
';
  }
}else{
 echo '<td align="left">
 <a href="../profile">
<image src="../images/female.png" width="30"/>
</a>
</td>
';
 
}
}

echo '<td align="right">
<a href="../search.php">
<image src="../images/search.svg" width="30"/>
</a>
</td>
';





echo '<td align="right">
<a href="../notification_count.php">';

echo '<image src="../images/bell.png" width="30" />
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
 <a href="../friendlist.php">
<image src="../images/notify.png" width="30"/>
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



$h = "SELECT * FROM `feed` WHERE `fid` = '$cid' ORDER BY `tym` LIMIT 1";
$h1 = mysqli_query($con, $h);
$h2 = mysqli_num_rows($h1);
if($h2>0){

while ($dp = mysqli_fetch_assoc($h1)){

$fid = $dp['fid'];
$ccphone1 = $dp['ccphone'];
$feed_text = $dp['feed_text'];
$feed_image = $dp['feed_image'];
$feed_video = $dp['feed_video'];


$pp = "SELECT * FROM `ccuser` WHERE `ccphone` = '$ccphone1'";
$pp1 = mysqli_query($con, $pp);
$pp2 = mysqli_num_rows($pp1);
if($pp2>0){
  while ($gf = mysqli_fetch_assoc($pp1)){
$ccid = $gf['ccid'];
$fname = $gf['ccfname'];
$fsurname = $gf['ccsurname'];




$us1 = "SELECT * FROM `mspwd` WHERE `ccphone` = '$ccphone1'";
$us11 = mysqli_query($con, $us1);
$us21 = mysqli_num_rows($us11);
if($us21>0){
  while ($dy1 = mysqli_fetch_assoc($us11)){
    $ccphone1 = $dy1['ccphone'];
   $gender1 = $dy1['gender'];




echo '<div class="bcontent-log">';



echo '<table width="100%">
<tr>';











if($gender1 == "Male"){


$gph = "SELECT * FROM `profilephoto` WHERE `ccphone` = '$ccphone1'";
$gph1 = mysqli_query($con, $gph);
$gph2 = mysqli_num_rows($gph1);
if($gph2>0){
  while($photo = mysqli_fetch_assoc($gph1)){
    $feed_image11 = $photo['feed_image'];

echo '<td align="left">
 <a href="../profile?rdr='.$rdr.'">
<image src="../'.$feed_image11.'" width="30"/>
</a><a href="../profile.php?cid='.$ccid.'&user='.$rdr.'"><b>'.$fname.' '.$fsurname.'</b></a><br>
</td>
';
  }
}
else{

 echo '<td align="left">
 <a href="../profile?rdr='.$rdr.'">
<image src="../images/male.png" width="30"/>
</a><a href="../profile.php?cid='.$ccid.'&user='.$rdr.'"><b>'.$fname.' '.$fsurname.'</b></a><br>
</td>
';
 }
}

else if($gender1 == "Female"){

$gph = "SELECT * FROM `profilephoto` WHERE `ccphone` = '$ccphone1'";
$gph1 = mysqli_query($con, $gph);
$gph2 = mysqli_num_rows($gph1);
if($gph2>0){
  while($photo = mysqli_fetch_assoc($gph1)){
    $feed_image11 = $photo['feed_image'];

echo '<td align="left">
 <a href="../profile?rdr='.$rdr.'">
<image src="../'.$feed_image11.'" width="30"/>
</a><a href="../profile.php?cid='.$ccid.'&user='.$rdr.'"><b>'.$fname.' '.$fsurname.'</b></a><br>
</td>
';
  }
}else{
 echo '<td align="left">
 <a href="../profile?rdr='.$rdr.'">
<image src="../images/female.png" width="30"/>
</a><a href="../profile.php?cid='.$ccid.'&user='.$rdr.'"><b>'.$fname.' '.$fsurname.'</b></a><br>
</td>
';
 
}
}








echo '<td align="left">
</td>
<td align="right"></td>
</tr>
<br>
<tr>
<td>

<p>';



if($feed_text == $feed_text){
echo ''.$feed_text.'<br>'; 
  
}
if($feed_text = $feed_image){
    echo '
    <br>
      <div class="black-bg">
    <br>
    <center>

  <image src="../'.$feed_image.'"width="300"/>
  </center>
  <br><br>
</div>


  ';

}



$dli = "SELECT * FROM `comment` WHERE `gcid` = '$cid'";
$dl2 = mysqli_query($con, $dli);
$dl3 = mysqli_num_rows($dl2);
if($dl3>0){

echo '
<br>
</td>
</tr>
<table width="100%" cellpadding="10"><tr>
<td align="right">
<form method="POST" action="comment.php?rdr='.$rdr.'&cid='.$fid.'">
<button class="f">
<image src="../images/comments.png" width="20" /><font color="">'.$dl3.'</font>
</button>
</form>
</td>';



} 
else{

echo '
<br>
</td>
</tr>
<table width="100%" cellpadding="10"><tr>
<td align="right">
<form method="POST" action="like.php?rdr='.$rdr.'&cid='.$fid.'">
<button class="f">
<image src="../images/comments.png" width="20" /><font color="">0</font>
</button>
</form>
</td>';


}



$rli = "SELECT * FROM `like` WHERE `cid` = '$cid'";
$rl2 = mysqli_query($con, $rli);
$rl3 = mysqli_num_rows($rl2);
if($rl3>0){

echo '<td align="left">
<form method="POST" action="like.php?rdr='.$rdr.'&cid='.$fid.'">
<button class="f">
<image src="../images/like.png" width="20" /><font color="">'.$rl3.'</font>
</button>
</form>
</td>
</tr>
</table>
</table>
';
}
else{

echo '<td align="left">
<form method="POST" action="like.php?rdr='.$rdr.'&cid='.$fid.'">
<button class="f">
<image src="../images/like.png" width="20" /><font color="">0</font>
</button>
</form>
</td>
</tr>
</table>
</table>
';



}



echo '</div>
<br>';






}
}

}
}




 }

 echo '<b>Comment</b>
<br>
<br>';









$yy = "SELECT * FROM `comment` WHERE `gcid` = '$cid'";
$yy1 = mysqli_query($con, $yy);
$yy2 = mysqli_num_rows($yy1);
if($yy2>0){
  while($yyinfo = mysqli_fetch_assoc($yy1)){

 
$comm = $yyinfo['comment_text'];
$ccpg = $yyinfo['ccphone'];


$bb = "SELECT * FROM `ccuser` WHERE `ccphone` = '$ccpg'";

$bb1 = mysqli_query($con, $bb);
$bb2 = mysqli_num_rows($bb1);
if($bb2>0){

while ($bsin = mysqli_fetch_assoc($bb1)){
$ccidz = $bsin['ccid'];
$cvphcm = $bsin['ccphone'];
$ccfn1 = $bsin['ccfname'];
$ccfn2 = $bsin['ccsurname'];



$pw = "SELECT * FROM `mspwd` WHERE `ccphone` = '$cvphcm'";
$pw1 = mysqli_query($con, $pw);
$pw2 = mysqli_num_rows($pw1);
if($pw2>0){
  while ($ff = mysqli_fetch_assoc($pw1)){

$gen5 = $ff['gender'];


  }
}







echo '<div class="bcontent-log">
<br>';



if($gender == "Male"){


$gph = "SELECT * FROM `profilephoto` WHERE `ccphone` = '$cvphcm'";
$gph1 = mysqli_query($con, $gph);
$gph2 = mysqli_num_rows($gph1);
if($gph2>0){
  while($photo = mysqli_fetch_assoc($gph1)){
    $feed_image11 = $photo['feed_image'];

echo '<td align="right">
 <a href="">
<image src="../'.$feed_image11.'" width="30"/>
</a>
</td>
';
  }
}
else{

 echo '<td align="right">
 <a href="">
<image src="../images/male.png" width="30"/>
</a>
</td>
';
 }
}

else if($gender == "Female"){

$gph = "SELECT * FROM `profilephoto` WHERE `ccphone` = '$cvphcm'";
$gph1 = mysqli_query($con, $gph);
$gph2 = mysqli_num_rows($gph1);
if($gph2>0){
  while($photo = mysqli_fetch_assoc($gph1)){
    $feed_image11 = $photo['feed_image'];

echo '<td align="right">
 <a href="">
<image src="../'.$feed_image11.'" width="30"/>
</a>
</td>
';
  }
}else{
 echo '<td align="right">
 <a href="">
<image src="../images/female.png" width="30"/>
</a>
</td>
';
 
}
}
echo '<a href="../profile.php?cid='.$ccidz.'&user='.$rdr.'"><b>'.$ccfn1.' '.$ccfn2.'</b></a><br>

</td>';




echo '
<br>
'.$comm.'
<br>

';

echo '</div>
<br>
';





}

}

}
}


echo '</div>';

echo '<br>


<br>
<br>';



echo '<form method="POST" action="comment_auth.php?rdr='.$rdr.'&cid='.$cid.'">
<input type="text" class="binput" value="" required="" name="comment_text" placeholder="Comment...." />
<button class="gt-com"><b>Comment</b></button>
</form><br>
  <br>
  <br>';


} 
else{
  echo '
  <center>
  <br>
  <br>
  <br>
<image src="../images/news.png" width="30"/>
<br>
<br>
<br>
<br>
  No comments Yet
<br>
<br>
<br>
<br>
<br>
<br>
<form  method="POST" action="?rdr='.$rdr.'">
<button class="gt-share"><b>Try again</b></button>
</form>


  </center>';
}







}
echo '<br><br><br><br>';

}
else{

echo '<center>Error</center>';


}

























}
?>