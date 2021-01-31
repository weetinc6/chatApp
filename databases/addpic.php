<?php

include 'config.php';


$fromuser = $_POST['fromuser'];
$touser = $_POST['touser'];
$message_text = $_POST['message_text'];
$id = $_POST['id'];



$pp = "INSERT INTO `message` (`mid`, `fromuser`, `touser`, `message_text`, `id`) VALUES (NULL, '$fromuser', '$touser', '$message_text', '$id')";

$pp1 = mysqli_query($con, $pp);
if($pp1){

echo '<script>

window.location.href="profile.php?cid='.$id.'&user='.$fromuser.'"


</script>';

}
else{
	echo 'error';
}


















?>