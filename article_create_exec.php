<?php

/**
 * Connect Database 
 */
require 'config.php';

$title = $_POST['title'];
$content = $_POST['content'];
if(isset($title) && isset($content)) {
	$str = "INSERT INTO articles (title, content) VALUES('$title','$content')";
	 $query = mysqli_query($conn, $str) or die(mysqli_error($conn));
	 if(!$query){
	 	echo "<div style='color:red;'>ไม่สามารถบันทึกข้อมูลได้!</div>";
	 } else {
         echo "<div style='color:green;'>บันทึกข้อมูลเรียบร้อยแล้ว!</div>";
     }
}

?>