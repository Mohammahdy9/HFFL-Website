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
  .center {
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
  border: 5px;
  padding: 100px;
  }
  .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
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
        <div class="dropdown">
          <button class="dropbtn">Players
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="adminplayers.php">Players List</a>
            <a href="adminaddplayer.php">Add Player</a>
            <a href="adminupdateplayer.php">Update Player</a>
            <a href="admindeleteplayer.php">Delete Player</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Teams
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="adminteams.php">Teams List</a>
            <a  href="adminaddteam.php">Add Team</a>
            <a href="adminupdateteam.php">Update Team</a>
            <a href="admindeleteteam.php">Delete Team</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Matches
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="adminmatchess.php">Matches List</a>
            <a href="adminaddmatch.php">Add Match</a>
            <a href="adminupdatematch.php">Update Match</a>
            <a href="admindeletematch.php">Delete Match</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Tournaments
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="admintournaments.php">Players List</a>
            <a href="adminaddtournaments.php">Add Player</a>
            <a href="adminupdatetournaments.php">Update Player</a>
            <a href="admindeletetournaments.php">Delete Player</a>
          </div>
        </div>
        <a href="index.php" class="btn btn-danger" role="button">NORMAL VIEW</a>
      </div>
    </div>
  </div>
  </nav>
  </header>
  <div >
    <h2> List of players </h2>
    <br>
    <table class ="table table-bordered table-sm" style="width:10%">
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
          <th>Sacks</th>
          <th>Tackles</th>
          <th>Interceptions</th>
          <th>Defensive_Touchdowns</th>
          <th>Touchdowns(Total)</th>
          <th>ID Teams</th>
          <th>Operations</th>
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
            <td>$row[Player_id]</td>
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
            <td>$row[Sacks]</td>
            <td>$row[Tackles]</td>
            <td>$row[Interceptions]</td>
            <td>$row[Defensive_Touchdowns]</td>
            <td>$row[Total_Touchdowns]</td>
            <td>$row[idteams]</td>
            <td>
              <button><a href= adminupdateplayer.php>Update</a></button>
              <button><a href= admindeleteplayer.php>Delete</a></button>
            </td>
          </tr>
          ";
        }
        ?>
    </table>
  </div>
