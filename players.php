<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Players Page</title>
  </head>

  <?php
  $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
  $username = "admin499";
  $password = "ICS49922";
  $database = "hffl";

  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM players;
  $result = $conn->query($sql);


  while($row = $result -> fetch_assoc()){

  echo "
  <ol>
    <h1>Team name</h1>
    <li>$row[Player_First_Name]</li>
    <li>player name 2</li>
    <li>player name 3</li>
  </ol>
  ";
  }

  ?>

  <ul id="services-list">
    <ol>
      <h1>Team name</h1>
      <li>player name 1</li>
      <li>player name 2</li>
      <li>player name 3</li>
    </ol>
    <ol>
      <h1>Team name</h1>
      <li>player name 1</li>
      <li>player name 2</li>
</ul>
</html>
