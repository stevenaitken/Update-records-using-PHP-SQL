<?php
$recordID = $_POST['recordID'];
$userName = $_POST['username'];
$level = $_POST['level'];
$xp = $_POST['xp'];

echo $recordID;


include('includes/dbconx.php');
include('includes/errors.php');

$sql = "UPDATE players SET username='$userName', level='$level', xp = '$xp' WHERE id='$recordID'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>