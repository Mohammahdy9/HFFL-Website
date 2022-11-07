<?php

$conn = "";

try {
  $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
  $username = "admin499";
  $password = "ICS49922";
  $database = "hffl";

    $conn = new PDO(
        "mysql:host=$servername; dbname=hffl",
        $username, $password
    );

   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
