<html>
<body>
<form action="getusers_2.php" method = "POST">
<Firstname: <input type="text" name="name">
<button type="submit">Submit</button>  
</form>
<?php
$db_connection = new PDO($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `Users` WHERE 'firstname' LIKE 
'%".$search_term."%'";

$query = $db_connection->prepare($sql);
$query->bindParam(':firstname', $firstname);
$query->execute();
//getting the result
$query->setFetchMode(PDO::FETCH_ASSOC);
$result = $query->fetchColumn();
?>
</body>
</html>
