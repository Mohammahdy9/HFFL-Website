<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>HFFL APP</title>
  <style>
    table {
      border-collapse: collapse;
      border: 1px solid gray;
      width: calc(50% - 10px);
      float: left;
      margin: 5px;
  }
  </style>
</head>
<body>
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
  <section>
    <script src="https://cdn.logwork.com/widget/countdown.js"></script>
    <a href="https://logwork.com/countdown-wa7c" class="countdown-timer" data-style="circles" data-timezone="America/Chicago" data-textcolor="#e73725"   data-date="2023-05-29 00:12" data-background="#e73725" data-digitscolor="#e73725" data-unitscolor="#e73725">Memorial Day Tournament in: </a>
  </section>
  <div class="d-flex justify-content-center" >
    <table class ="table table-bordered table-striped caption-top" style="width:100%">
      <caption>Top Teams:</caption>
      <tr>
        <th>Team</th>
        <th>Wins</th>
        <th>Losses</th>
      </tr>
      <?php
      $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
      $username = "admin499";
      $password = "ICS49922";
      $database = "hffl";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM (SELECT team_name, wins, losses from teams order by wins desc,team_name asc limit 3) tbl
order by wins DESC;";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()){
      echo "
        <tr>
          <td>$row[team_name]</td>
          <td>$row[wins]</td>
          <td>$row[losses]</td>
        </tr>
        ";
      }
      ?>
    </table>
  </div>
  <div class="d-flex justify-content-evenly">
    <table class = "table table-bordered table-striped caption-top">
      <caption>Top Passers:</caption>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Passing yards</th>
        <th>Passing TD's</th>
      </tr>
      <?php
      $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
      $username = "admin499";
      $password = "ICS49922";
      $database = "hffl";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM (SELECT Player_First_Name, Player_Last_Name,Passing_yards , Passing_touchdowns from players order by Passing_yards desc,Player_First_Name desc limit 3) tbl
order by Passing_yards DESC;";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()){
      echo "
        <tr>
          <td>$row[Player_First_Name]</td>
          <td>$row[Player_Last_Name]</td>
          <td>$row[Passing_yards]</td>
          <td>$row[Passing_touchdowns]</td>
        </tr>
        ";
      }
      ?>
    </table>
    <table class = "table table-bordered table-striped caption-top">
      <caption>Top Rushers:</caption>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Rushing Yards</th>
        <th>Rushing TD's</th>
      </tr>
      <?php
      $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
      $username = "admin499";
      $password = "ICS49922";
      $database = "hffl";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM (SELECT Player_First_Name, Player_Last_Name,Rushing_yards , Rushing_touchdowns from players order by Rushing_yards desc,Player_First_Name desc limit 3) tbl
order by Rushing_yards DESC;";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()){
      echo "
        <tr>
          <td>$row[Player_First_Name]</td>
          <td>$row[Player_Last_Name]</td>
          <td>$row[Rushing_yards]</td>
          <td>$row[Rushing_touchdowns]</td>
        </tr>
        ";
      }
      ?>
    </table>
  </div>
  <div class="d-flex justify-content-evenly">
    <table class = "table table-bordered table-striped caption-top ">
      <caption>Top Recievers:</caption>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Receiving Yard's</th>
        <th>Receiving TD's</th>
      </tr>
      <?php
      $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
      $username = "admin499";
      $password = "ICS49922";
      $database = "hffl";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM (SELECT Player_First_Name, Player_Last_Name,Receiving_yards , Reception_touchdowns from players order by Receiving_yards desc,Player_First_Name desc limit 3) tbl
order by Receiving_yards DESC;";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()){
      echo "
        <tr>
          <td>$row[Player_First_Name]</td>
          <td>$row[Player_Last_Name]</td>
          <td>$row[Receiving_yards]</td>
          <td>$row[Reception_touchdowns]</td>
        </tr>
        ";
      }
      ?>
    </table>
    <table class = "table table-bordered table-striped caption-top">
      <caption>Top Defenders:</caption>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Sacks</th>
        <th>Tackles</th>
      </tr>
      <?php
      $servername = "hffldb.crex5mtah7fd.us-east-2.rds.amazonaws.com";
      $username = "admin499";
      $password = "ICS49922";
      $database = "hffl";

      $conn = new mysqli($servername, $username, $password, $database);
      if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM (SELECT Player_First_Name, Player_Last_Name,Sacks , Tackles from players order by Sacks desc,Player_First_Name desc limit 3) tbl
order by Sacks DESC;";
      $result = $conn->query($sql);

      while($row = $result->fetch_assoc()){
      echo "
        <tr>
          <td>$row[Player_First_Name]</td>
          <td>$row[Player_Last_Name]</td>
          <td>$row[Sacks]</td>
          <td>$row[Tackles]</td>
        </tr>
        ";
      }
      ?>
    </table>
  </div>
</body>
<h2>Lastest Highlight Reels</h2>
<div class="embed-responsive embed-responsive-21by9" style="width: 100%">
<iframe width="560" height="315" src="https://www.youtube.com/embed/SZVdmsamBo4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/PyQ93EoMG_c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/FnQhsnQXN8k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/QklzEr23Vf8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</html>
