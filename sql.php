<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:testdbca.database.windows.net,1433; Database = testdbc", "chaggarty", "!@Welcome123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
echo "connected!<br>";
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "chaggarty@testdbca", "pwd" => "!@Welcome123", "Database" => "testdbc", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testdbca.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


$query = "select username from test where ID=1";
echo $query
$statement = $conn->query("select username from test where ID=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_NUM);
echo $result 
?>
