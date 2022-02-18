<?php
    echo "BENVENUTO SU ALPHA <br />\n";
    $servername = "localhost";
    $username = "hu";
    $password = "hu";
    $dbname = "game";

// Create connection
try {
  $myDB = new PDO('mysql:dbname='.$dbname.';host=db', $username, $password);
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$endpoint = "Alpha";
$qry = "INSERT INTO Connections (endpoint) VALUES (?)";
$myDB->prepare($qry)->execute([$endpoint]);

$stmt = $myDB->query("SELECT * FROM Connections WHERE endpoint = 'Alpha'");

while ($row = $stmt->fetch()) {
    echo $row['ID']." ".$row['timestamp']." ".$row['endpoint']."<br />\n";
}
?>