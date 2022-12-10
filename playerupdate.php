<!DOCTYPE html>
<html>

<head>
    <title>Player Update Page</title>
</head>
<body>
    <center>
      <?php
      $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
      $username = "admin499";
      $password = "ICS49922";
      $database = "hffl";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

          $Player_id =  $_POST['playerid'];


        // Create an array with the field names
$fields = array('Player_First_Name', 'Player_Last_Name','Player_Offensive_Position','Player_Defensive_Position','Games_Played', 'Passing_yards','Passing_attempts','Passes_completed','Interceptions_thrown','Passing_touchdowns','Rushing_yards','Rushing_touchdowns','Receiving_yards','Receptions','Targets','Tackles','Sacks','Interceptions','Defensive_touchdowns','Total_touchdowns','idteams');

// Loop through the fields
foreach ($fields as $field) {
  // Check if the field is not empty
  if (!empty($_POST[$field])) {
    // Update the field in the database
    $query = "UPDATE players SET $field = '$_POST[$field]' WHERE Player_id = $Player_id";
    $result = $conn->query($query);
  }
}
        if(mysqli_query($conn, $query)){
              echo "<h3>data stored in a database successfully."
                  . " Please browse "
                  . " to view the updated data</h3>";

          } else{
              echo "ERROR: Hush! Sorry $query. "
                  . mysqli_error($conn);
                }

        header('location:adminplayers.php');
        // Close connection

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
