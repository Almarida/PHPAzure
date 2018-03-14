
// PHP Data Objects(PDO) Sample Code:
//try {
//    $conn = new PDO("sqlsrv:server = tcp:testdbca.database.windows.net,1433; Database = testdbc", "chaggarty", "!@Welcome123");
  //  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}
//catch (PDOException $e) {
//    print("Error connecting to SQL Server.");
//    die(print_r($e));
//}

//echo "connected!"

// SQL Server Extension Sample Code:
//$connectionInfo = array("UID" => "chaggarty@testdbca", "pwd" => "!@Welcome123", "Database" => "testdbc", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
//$serverName = "tcp:testdbca.database.windows.net,1433";
//$conn = sqlsrv_connect($serverName, $connectionInfo);

<form action='' method='POST'>
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

echo "connected!"
$query  = "SELECT * FROM users";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {
    echo "  To delete user   <b>" . $row['username'] . "</b>  Click on the number <input type='submit' name='delete' value='" . $row['id'] . "' /><br/>";
}

if (isset($_POST['delete'])) {
    $user = $_POST['delete'];
    $delet_query = mysql_query("DELETE FROM users WHERE id = $user ") or die(mysql_error());

    if ($delet_query) {
        echo 'user with id ' . $user . ' is removed from your table, to refresh your page, click' . '<a href=' . $_SERVER["PHP_SELF"] . ' > here </a>';
    }
}
?>
</form>
