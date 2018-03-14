<?php
// PHP Data Objects(PDO) Sample Code:

try {
    $conn = new PDO("sqlsrv:server = tcp:testdbca.database.windows.net,1433; Database = testdbc", "chaggarty", "!@Welcome123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "chaggarty@testdbca", "pwd" => "{your_password_here}", "Database" => "testdbc", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:testdbca.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
