<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Players Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container my-5">
      <h2> List of players </h2>
      <br>
      <table class = "table">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Offensive Position</th>
            <th>Defensive Position</th>
          </tr>
        <thead>
          <?php
          $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
          $username = "admin499";
          $password = "ICS49922";
          $database = "hffl";

          $conn = new mysqli($servername, $username, $password, $database);
          if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM players";
          $result = $conn->query($sql);
          
          while($row = $result->fetch_assoc()){
          echo "
            <tr>
              <td>$row[Player_First_Name]</td>
              <td>$row[Player_Last_Name]</td>
              <td>$row[Player_Offensive_Position]</td>
              <td>$row[Player_Defensive_Position]</td>
            </tr>
            ";
          }
          ?>
      </table>
    </div>
  </body>
</html>
