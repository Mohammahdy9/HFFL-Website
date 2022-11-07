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
</header>
<body>
  <div class = "container my-5">
    <h2> List of Matches </h2>
    <br>
    <table class = "table">
      <thead>
        <tr>
          <th>Team 1</th>
          <th>Team 2</th>
          <th>Quater</th>
          <th>Winner</th>
        </tr>
        <tr>
          <td>Phenoms</td>
          <td>Doomsday</td>
          <td>1st Quater</td>
          <td>Inprogress</td>
        </tr>
        <tr>
          <td>Black Venom</td>
          <td>Witness</td>
          <td>3rd Quater</td>
          <td>Inprogress</td>
        </tr>
        <tr>
          <td>Plaza Boyz</td>
          <td>Crewsaders</td>
          <td>Finished</td>
          <td>Crewsaders</td>
        </tr>
    </table>
  </div>
</body>
</html>
