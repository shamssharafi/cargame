<?php
include_once 'text.php';

$result = mysqli_query($conn,"SELECT * FROM brand order by RAND() limit 1");

?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
</head>
<body>
    <style>
       { padding-bottom:40px; padding-top:40px; align-content: center;
        padding-left: 600px; font-size: 20px; }
        </style>
<table>
<tr>
<h3>Congratulations! It's a winner modal</h3>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr >
<td><?php echo $row["name"]; ?></td>
</tr>
<?php
$i++;
}

?>
</table>
</body>
</html>