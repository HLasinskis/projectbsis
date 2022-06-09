<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Jūms vispirms jāpieslēdzas";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/style.css">
    <style>
        body {
            margin: 0;
        }

        .container {
            width: 100vw;
            height: 100vh;

            font-family: 'Quicksand', sans-serif;
            font-weight: bold;
            font-size: 20px;

            display: grid;

            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 50px 1fr 1fr 100px;

            gap: 10px;

            padding: 10px;
            box-sizing: border-box;
        }

        .container div{
            padding: 10px;
            border: 1px solid #0000;
        }

        .header {
            grid-column-start: 1;
            grid-column-end: 4;
        }

        .content-large {
            grid-row-start: 2;
            grid-row-end: 4;
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .footer {
            grid-column-start: 1;
            grid-column-end: span 3;
        }
    </style>
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
    </header>
        <div class="content-small">2022-05-19 17:40	Pafbet LBL	VEF Rīga	93:92	BK Ventspils	OSC
            2022-05-17 18:10	Pafbet LBL	BK Ventspils	74:98	VEF Rīga	OC Ventspils
            2022-05-15 17:30	Pafbet LBL	BK Ogre	72:64	Latvijas Universitāte	Ogres 1.vsk
            2022-05-14 17:40	Pafbet LBL	VEF Rīga	89:65	BK Ventspils	OSC
            2022-05-12 20:15	Pafbet LBL	Latvijas Universitāte	51:69	BK Ogre	OSC
            2022-05-11 19:40	Pafbet LBL	BK Ventspils	93:88	VEF Rīga	OC Ventspils</div>
        <div class="content-large"><iframe width="90%" height="70%" src="https://www.youtube.com/embed/8_4NFOSxTDE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>      
    </div>
    <script src="./static/main.js"></script>
</body>
</html>
