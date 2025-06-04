
<!DOCTYPE html>
<html>
<head>
	<title>Teaching Assistants</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="teachingAssistant.css">
</head>
<?php
include "connectdb.php";
?>
<body>
 <h1>Teaching Assistants</h1>
 Order TA's By:
 <br>
 <form action="getTa.php" method="post">
  <input type="radio" id="lastname" name="sort_type" value="last_name" onclick="orderBy(this.value)">Last Name <br>
  <input type="radio" id="degree" name="sort_type" value="degree_type" onclick="orderBy(this.value)">Degree Type <br>

  <div id="lastName" style="display: none;">
   Order Last Names By:
   <br>
   <input type="radio" id="asc" name="order" value="asc">Ascending <br>
   <input type="radio" id="dec" name="order" value="desc">Descending <br>
  </div>
  <input type="submit" value="Submit">
 </form>

 <script>
  function orderBy(orderType){
   document.getElementById("lastName").style.display = orderType == "last_name" ? "block" : "none";
  }
 </script>
<form action=getTa.php method="post">
<select name="pickTA" id="pickTA">
<option value="l">Select TA</option>
<?php
include "getTa.php"
?>
</select>
</form>
</body>
</html>
