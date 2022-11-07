<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Players Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <img class="logo" src="HFFL images/hffl.jpg" alt="HFFL LOGO" width="85">
  <button
    class="navbar-toggler"
    type="button"
    data-mdb-toggle="collapse"
    data-mdb-target="#navbarNavAltMarkup"
    aria-controls="navbarNavAltMarkup"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      <a class="nav-link" href="players.php">Players</a>
      <a class="nav-link" href="teams.php">Teams</a>
      <a class="nav-link" href="matches.php">Matches</a>
      <a class="nav-link" href="tournaments.php">Tournaments</a>
      <a href="adminlog.php" class="btn btn-danger" role="button">ADMIN</a>
    </div>
  </div>
</div>
</nav>
</header>
  <body>
    <div class = "container my-5">
      <h2> List of players </h2>
      <br>
      <table class = "table">
        <thead>
          <tr>
            <th>Player ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Offensive Position</th>
            <th>Defensive Position</th>
            <th>Games Played</th>
            <th>Passing Yards</th>
            <th>Passing Attempts</th>
            <th>Passes Completed</th>
            <th>Interceptions Thrown</th>
            <th>Passing Touchdowns</th>
            <th>Rushing Attempts</th>
            <th>Rushing Yards</th>
            <th>Rushing Touchdowns</th>
            <th>Receiving Yards</th>
            <th>Receptions</th>
            <th>Reception Touchdowns</th>
            <th>Targets</th>
            <th>Tackles</th>
            <th>Sacks</th>
            <th>Interceptions</th>
            <th>Defensive_Touchdowns</th>
            <th>Touchdowns(Total)</th>
            <th>ID Teams</th>
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
              <td>$row[Games_Played]</td>
              <td>$row[Passing_yards]</td>
              <td>$row[Passing_attempts]</td>
              <td>$row[Passes_completed]</td>
              <td>$row[Interceptions_thrown]</td>
              <td>$row[Passing_touchdowns]</td>
              <td>$row[Rushing_attempts]</td>
              <td>$row[Rushing_yards]</td>
              <td>$row[Rushing_touchdowns]</td>
              <td>$row[Receiving_yards]</td>
              <td>$row[Receptions]</td>
              <td>$row[Reception_Touchdowns]</td>
              <td>$row[Targets]</td>
              <td>$row[Tackles]</td>
              <td>$row[Sacks]</td>
              <td>$row[Interceptions]</td>
              <td>$row[Defensive_Touchdowns]</td>
              <td>$row[Total_Touchdowns]</td>
              <td>$row[idteams]</td>
            </tr>
            ";
          }
          ?>
      </table>
    </div>
  </body>
</html>
