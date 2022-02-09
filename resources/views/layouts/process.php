<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $word = $_POST['word'];
	 $point = $_POST['point'];
	 $starttime = $_POST['starttime'];
     $createdat = $_POST['createdat'];
     $updatedat = $_POST['updatedat'];
	 
     $sql = "INSERT INTO save(username,word,point,starttime,createdat,updatedat)
	 VALUES('$username','$word','$point','$starttime','$createdat','$updatedat')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>