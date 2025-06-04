<?php
 include "connectdb.php";
 if(isset($_POST["sort_type"])){
  $orderType = $_POST["sort_type"];
  if(isset($_POST["order"])){
  $orderBy =  $_POST["order"];
  }
  if($orderType == "degree_type"){
   $query = "SELECT * FROM ta ORDER BY degreetype"; // Adjust the column name as per your database
  } elseif($orderType == "last_name"){
     if($orderBy == "asc"){
      $query = "SELECT * FROM ta ORDER BY lastname ASC";
     }
     else{
      $query = "SELECT * FROM ta ORDER BY lastname DESC";
     }
  }

  $result = mysqli_query($connection, $query);
  if (!$result) {
   die("Database query failed.");
  }

  while ($row = mysqli_fetch_assoc($result)) {
   echo "TA Name: " . $row['firstname'] . " " . $row['lastname'] . ", Degree: " . $row['degreetype'] . "<br>"; // Adjust according to your database columns
  } 

  mysqli_free_result($result);
 }

?>
