<html>
<body>
<form action="getusers_1.php" method = "GET">
<Firstname: <input type="text" name="name">
<button type="submit">Submit</button>  
</form>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `Users` WHERE 'firstname' LIKE 
'%".$search_term."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  //output data of each row
  while ($row = $result->fetch_assoc()) {
      printf ("%s, %s<br>", $row["lastname"], $row["firstname"]);
  }

  if ($result->num_rows = 0) {
      echo "0 results <br";
  }
}
?>
</body>
</html>
