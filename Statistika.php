<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/statistika.css">
    <title>Statistika</title>
</head>
<style media="screen">
    label{
        display: block;
    }
</style>

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

  <form id="myForm" action="submit.php" method="post" >
    <label for="">Punkti</label>
    <input type="number" name="punkti" required value="">

    <label for="">Piespēles</label>
    <input type="number" name="piespēles" required value="">

    <label for="">Nozagtas bumbas</label>
    <input type="number" name="noz_bumbas" required value="">

    <label for="">Atlēkušas bumbas</label>
    <input type="number" name="atl_bumbas" required value="">

    <label for="">Pazaudētas bumbas</label>
    <input type="number" name="paz_bumbas" required value="">

    <label for="">Personīgas piezīmes</label>
    <input type="number" name="pers_piezime" required value="">

    <label for="">Tehniskas piezīmes</label>
    <input type="number" name="teh_piezime" required value="">

    <button type="submit" name="submit" class ="btn btn-primary">Pievienot<button>
  </form>

<script src="./static/main.js"></script>
</body>
</html>