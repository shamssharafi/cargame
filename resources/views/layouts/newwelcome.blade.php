<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        body    { padding-bottom:40px; padding-top:40px; align-content: center;
        padding-left: 600px; font-size: 20px; }
    </style>
    <body>
    <form action="http://localhost/laravel/blog/resources/views/auth/countdown.blade.php">
    <button type="submit" class="btn btn-success">Play again</button>
    </form>
    <form action="insert.php">
    <button type="submit" class="btn btn-success">Save my score</button><br/><br/></body>
    </form>
<?php



include_once 'text.php';

$result = mysqli_query($conn,"SELECT * FROM brand order by RAND() limit 1");

?>
<!DOCTYPE html>
<html>
<head>
<title> Dashboard</title>
</head>
<body>
    <style>
       td{font-size: 30px; font-weight: bold; color: red; }
        </style>
<table>
<tr>
<h3>Congratulations! It's a winner modal.</h3>
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
