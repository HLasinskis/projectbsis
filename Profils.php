<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Profils</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/Profils.css">
</head>

<body>
<h1 class="logo">Logo</h1>
    <div class="container">
        <header class="header">
            <nav class="navbar">
                <a href="#" class="nav-logo"></a>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link">Sākums</a>
                    </li>
                    <li class="nav-item">
                        <a href="Profils.php" class="nav-link">Profils</a>
                    </li>
                    <li class="nav-item">
                        <a href="Statistika.php" class="nav-link">Statistiku ievadīšana</a>
                    </li>
                    <li class="nav-item">
                        <a href="viewstatistika.php" class="nav-link">Statistikas tabula</a>
                    </li>
                    <li class="nav-item">
                        <a href="home.php?logout='1'" style="color: white;" >Izrakstīties</a>
                    </li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>

  <div class="form-container">
    <h1>Profils</h1>

    <form action="" method="post" enctype="multipart/form-data">
      <img src="./image/Profils.png"></image>
      <label for="file">Mainīt bildi</label>
      <input type="file" name="image" id="file" >

      <label for="vards">Vārds</label>
      <input type="text" name="vards" id="vards"/>

      <label for="uzvards">Uzvārds</label>
      <input type="text" name="uzvards" id="uzvards"/>

      <div class="select-group">

        <label for="button"></label>
        <button id="button" class="button">
          <span id="select-label">Basketbola pozīcijas</span>
          <div id="arrow"  class="arrow"></div>
        </button>
<div class="dropdown hidden" id="dropdown">
          <input type="radio" id="select-pg" name="basketball_position " value="pg" class="option">
          <label for="select-pg" class="select-item">Saspēles vadītājs</label>

          <input type="radio" id="select-sg" name="basketball_position " value="sg" class="option">
          <label for="select-sg" class="select-item">Uzbrūkošais aizsargs</label>

          <input type="radio" id="select-sf" name="basketball_position " value="sf" class="option">
          <label for="select-sf" class="select-item">Vieglais uzbrucējs</label>

          <input type="radio" id="select-pf" name="basketball_position " value="pf" class="option">
          <label for="select-pf" class="select-item">Spēka uzbrucējs</label>

          <input type="radio" id="select-c" name="basketball_position " value="c" class="option">
          <label for="select-c" class="select-item">Centrs</label>
        </div>

        <label for="height">Augums</label>
        <input type="text" name="height" id="height"/>

        <label for="age">Vecums</label>
        <input type="text" name="age" id="age"/>

      </div>
      <input type="submit" name="upload" value="Mainīt izmaiņu" />
    </form>
    </div>
      <script src=".static/Profils.js"></script>
      <script src="./Home/main.js"></script>
    </body>

</html>
