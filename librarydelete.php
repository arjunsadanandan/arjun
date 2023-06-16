<?php
include 'librarycon.php';
$mid = $_GET['id'];
mysqli_query($con,"delete from notebook where book_id='$mid'");
header('location:libraryview.php');
?>
