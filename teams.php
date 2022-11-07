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
      <h2> List of teams </h2>
      <br>
      <table class = "table">
        <thead>
          <tr>
            <th>Team Name</th>
            <th>Wins</th>
            <th>Losses</th>
            <th>W\L Ratio</th>
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
          $sql = "SELECT * FROM teams";
          $result = $conn->query($sql);

          while($row = $result->fetch_assoc()){
          echo "
            <tr>
              <td>$row[team_name]</td>
              <td>$row[wins]</td>
              <td>$row[losses]</td>
              <td>$row[win_loss_ratio]</td>
            </tr>
            ";
          }
          ?>
      </table>
    </div>
  </body>
</html>
