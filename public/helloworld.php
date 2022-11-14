<?php
$servername = "localhost";
$username = "test";
$password = "1";
try {
$conn = new PDO("mysql:host=$servername;dbname=testdb", $username,
$password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";

$sql = "DELETE FROM Product WHERE name LIKE 'pokemon6'";
if ($conn->query($sql) == true){
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . $conn -> error;
}

$stmt = $conn->prepare("SELECT * FROM Product");
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $row) {
    foreach($row as $v) {
        echo $v, " ";
    }
    echo "<br>";
}



} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
$conn = null // Close the connection
?>