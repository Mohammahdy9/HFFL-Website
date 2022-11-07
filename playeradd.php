<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
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

        // Taking all 5 values from the form data(input)
          $Player_id =  $_POST['playerid'];
          $Player_First_Name =  $_POST['firstname'];
          $Player_Last_name = $_POST['lastname'];
          $Player_Offensive_Position =  $_POST['offensepos'];
          $Player_Defensive_Position = $_POST['defensepos'];
          $Games_Played = $_POST['gamesplayed'];
          $Passing_yards =  $_POST['passyards'];
          $Passing_attempts =  $_POST['passatt'];
          $Passes_completed = $_POST['passcomp'];
          $Interceptions_thrown = $_POST['intqb'];
          $Passing_touchdowns = $_POST['passtds'];
          $Rushing_yards = $_POST['rushyards'];
          $Rushing_touchdowns = $_POST['rushtds'];
          $Receiving_yards = $_POST['recyards'];
          $Receptions = $_POST['rec'];
          $Targets = $_POST['targets'];
          $Tackles = $_POST['tackles'];
          $Sacks = $_POST['sacks'];
          $Interceptions = $_POST['intd'];
          $Defensive_touchdowns =$_POST['dtds'];
          $Total_touchdowns = $_POST['tot'];
          $idteams = $_POST['teamid'];

          $sql = "INSERT INTO players (Player_id,Player_First_Name,Player_Last_name,Player_Offensive_Position,Player_Defensive_Position,
          Games_Played,Passing_yards,Passing_attempts,Passes_completed,Interceptions_thrown,Passing_touchdowns,Rushing_yards,Rushing_touchdowns,
        Receiving_yards,Receptions,Targets,Tackles,Sacks,Interceptions,Defensive_touchdowns,Total_touchdowns,idteams) VALUES ('$Player_id','$Player_First_Name','$Player_Last_name','$Player_Offensive_Position','$Player_Defensive_Position',
          '$Games_Played','$Passing_yards','$Passing_attempts','$Passes_completed','$Interceptions_thrown','$Passing_touchdowns','$Rushing_yards','$Rushing_touchdowns',
        '$Receiving_yards','$Receptions','$Targets','$Tackles','$Sacks','$Interceptions','$Defensive_touchdowns','$Total_touchdowns','$idteams')";



        if(mysqli_query($conn, $sql)){
              echo "<h3>data stored in a database successfully."
                  . " Please browse "
                  . " to view the updated data</h3>";
            //
          } else{
              echo "ERROR: Hush! Sorry $sql. "
                  . mysqli_error($conn);
                }

        header('location:adminplayers.php');
        // Close connection

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
