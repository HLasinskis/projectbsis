<?php
require('./config/config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM statistika WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: viewstatistika.php"); 
?>