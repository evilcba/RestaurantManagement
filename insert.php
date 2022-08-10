<?php require("conn.php");

extract($_POST);

if(isset($_POST['tableNo']) && isset($_POST['OrderFood']) )

$query ="INSERT INTO `crud`(`tableNo`, `OrderFood`) VALUES ('$tableNo','$OrderFood')";
mysqli_query($conn,$query);
 ?>
