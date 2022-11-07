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
          $team_id =  $_POST['teamid'];

          $sql = "DELETE FROM teams WHERE idteams=$team_id";

        if(mysqli_query($conn, $sql)){
              echo "<h3>data deleted from database successfully."
                  . " Please browse "
                  . " to view the updated data</h3>";

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
