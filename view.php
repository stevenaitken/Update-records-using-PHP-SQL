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
<meta charset="utf-8">
<title>View all email records</title>
</head>
<body>
 <div class="container">
<table class="players">
<th>Username</th><th>XP</th><th>Level</th><th>Avatar</th><th>Action</th>
<?php
include('includes/dbconx.php'); 
include('includes/errors.php'); 
$sql =  "SELECT id, username, level, xp,avatar FROM players";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  echo '<tr>';
 // echo '<td>'.$row['id'].'</td>';
  echo '<td>'.$row['username'].'</td>';
  echo '<td>'.$row['level'].'</td>';
  echo '<td>'.$row['xp'].'</td>';
  echo '<td>'.'<img class="player" src="'.$row['avatar'].'"></td>';
  
  //$row['avatar'].'</td>';
 echo "<td><a href='update-form.php?id=" . $row['id'] . "'>Update</a></td>";
 





 
  //echo "<td>"."<a href='#'". "onmouseup='confirm('Are you sure?');'>"."Delete</a></td>";
  //echo '<td><a href = "delete.php?id='.$row['id'].'"  class="deleteKey" onclick="return confirm(\'Are you sure you want to delete this record ?\')">Delete</a></td>';
  // echo '<td><a href = "delete.php?id='.$row['id'].'"  class="deleteKey" onclick="return confirm(\'Are you sure you want to delete record '.$row['id'].'	 ?\')">Delete</a></td>';

echo '</tr>';
  }
}
  $conn->close();

?>
</table>
</div> 
</body>
</html>
