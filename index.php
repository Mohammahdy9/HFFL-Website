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
      <tr>
        <td>Witness</td>
        <td>20</td>
        <td>3</td>
      </tr>
      <tr>
        <td>Blue Dragons</td>
        <td>18</td>
        <td>5</td>
      </tr>
      <tr>
        <td>Plaza Boyz</td>
        <td>17</td>
        <td>6</td>
      </tr>
    </table>
  </div>
  <div class="d-flex justify-content-evenly">
    <table class = "table table-bordered table-striped caption-top">
      <caption>Top Passers:</caption>
      <tr>
        <th>Name</th>
        <th>Passing yards</th>
        <th>Passing TD's</th>
      </tr>
      <tr>
        <td>Mike Vang</td>
        <td>900</td>
        <td>12</td>
      </tr>
      <tr>
        <td>Andrew Chang</td>
        <td>789</td>
        <td>15</td>
      </tr>
      <tr>
        <td>Ross Johnson</td>
        <td>750</td>
        <td>11</td>
      </tr>
    </table>
    <table class = "table table-bordered table-striped caption-top">
      <caption>Top Rushers:</caption>
      <tr>
        <th>Name</th>
        <th>Rushing Yards</th>
        <th>Rushing TD's</th>
      </tr>
      <tr>
        <td>Van Brookes</td>
        <td>503</td>
        <td>10</td>
      </tr>
      <tr>
        <td>Tony Yang</td>
        <td>501</td>
        <td>12</td>
      </tr>
      <tr>
        <td>Ger Lao</td>
        <td>489</td>
        <td>9</td>
      </tr>
    </table>
  </div>
  <div class="d-flex justify-content-evenly">
    <table class = "table table-bordered table-striped caption-top ">
      <caption>Top Recievers:</caption>
      <tr>
        <th>Name</th>
        <th>Receiving Yard's</th>
        <th>Receiving TD's</th>
      </tr>
      <tr>
        <td>Noah Brown</td>
        <td>603</td>
        <td>15</td>
      </tr>
      <tr>
        <td>Yusuf Aburia</td>
        <td>599</td>
        <td>11</td>
      </tr>
      <tr>
        <td>James Yang</td>
        <td>549</td>
        <td>12</td>
      </tr>
    </table>
    <table class = "table table-bordered table-striped caption-top">
      <caption>Top Defenders:</caption>
      <tr>
        <th>Name</th>
        <th>Sacks</th>
        <th>Tackles</th>
      </tr>
      <tr>
        <td>Mohamed Mahdy</td>
        <td>17</td>
        <td>10</td>
      </tr>
      <tr>
        <td>Jimmy Vang</td>
        <td>16</td>
        <td>15</td>
      </tr>
      <tr>
        <td>Sterling Willie</td>
        <td>15</td>
        <td>12</td>
      </tr>
    </table>
  </div>
</body>
</html>
