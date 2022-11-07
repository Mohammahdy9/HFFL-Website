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
          $idteams =  $_POST['teamid'];
          $teamname =  $_POST['teamname'];
          $wins =  $_POST['wins'];
          $losses = $_POST['losses'];
          $win_loss_ratio=  $_POST['WLRatio'];
          $sql = "INSERT INTO teams (idteams,team_name,wins,losses,win_loss_ratio) VALUES ('$idteams','$teamname','$wins','$losses','$win_loss_ratio')";



        if(mysqli_query($conn, $sql)){
              echo "<h3>data stored in a database successfully."
                  . " Please browse "
                  . " to view the updated data</h3>";
            //
          } else{
              echo "ERROR: Hush! Sorry $sql. "
                  . mysqli_error($conn);
                }

        header('location:adminteams.php');
        // Close connection

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
