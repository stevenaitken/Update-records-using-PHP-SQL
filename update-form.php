<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Author's name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <title>Update Records</title>
<style>
  .player{width:100px;height:100px;}
.container{width:80%;margin:0 auto;}

.deleteKey{	color:#FF0004;}
.players {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.players td, .players th {
  border: 1px solid #ddd;
  padding: 8px;
}

.players tr:nth-child(even){background-color: #f2f2f2;}

.players tr:hover {background-color: #ddd;}

.players th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>

<title>View all email records</title>
</head>

<body>

<?php
 include('includes/errors.php');
$recordID = $_GET['id'];
echo $recordID;
// connect to the database
 include('includes/dbconx.php');

 if(isset($recordID) || !empty($recordID)){
$sql = "SELECT id, username, level, xp from players WHERE id = '$recordID'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {?>

<form action="update-proc.php" method="post" name="updateForm">
<input type="hidden" name="recordID" value="<?php echo $row['id']?>">
username<input type="text" name="username" value="<?php echo $row['username']?>"> 
level<input type="text" name="level" value="<?php echo $row['level']?>"> 
xp<input type="text" name="xp" value="<?php echo $row['xp']?>"> 

<input type="submit" name="submit" id="submit">
</form>

	<?php

	}
}
 }
	
?>




 <div class="container">
<table class="players">


</div> 
</body>
</html>






