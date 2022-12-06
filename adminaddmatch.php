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
            <a href="admintournaments.php">Tournaments view</a>
          </div>
        </div>
        <a href="index.php" class="btn btn-danger" role="button">NORMAL VIEW</a>
      </div>
    </div>
  </div>
  </nav>
  </header>
  <div class="container h-100%">
    <h1> Add </h1>
    <form action="adminpage.php" method="post">

      <div class="form-outline mb-4">
        <input type="text" name="teamid" class="form-control" />
        <label class="form-label">Match ID</label>
      </div>

    <div class="form-outline mb-4">
      <input type="text" name="teamid" class="form-control" />
      <label class="form-label">Team ID #1</label>
    </div>

    <div class="form-outline mb-4">
      <input type="text" name="teamid2" class="form-control" />
      <label class="form-label">Team ID #2</label>
    </div>

    <div class="form-outline mb-4">
      <input type="text" name="teamid" class="form-control" />
      <label class="form-label">Team #1 Score</label>
    </div>

    <div class="form-outline mb-4">
      <input type="text" name="teamid" class="form-control" />
      <label class="form-label">Team #2 Score</label>
    </div>

    <div class="form-outline mb-4">
      <input type="text" name="teamid" class="form-control" />
      <label class="form-label">Match Winner</label>
    </div>

  <!-- Submit button -->
  <button name="submitAdd" class="btn btn-primary btn-block mb-4">Add Match</button>
</div>
