<?php 

include("../include/connection.php");

$id = $_POST['id'];

$quert ="UPDATE doctors SET status ='Rejected' WHERE id='$id'";
mysqli_query($connect,$query);

 ?>