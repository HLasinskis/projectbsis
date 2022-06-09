<?php include("./config/config.php") ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Statistikas tabula</title>
<link rel="stylesheet" href="./static/style.css">
</head>
<body>
<h1 class="logo">Logo</h1>
    <div class="container">
        <header class="header">
            <nav class="navbar">
                <a href="#" class="nav-logo"></a>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Sākums</a>
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
<div class="form">
<h2>Statistikas tabula</h2>
<table class = "center" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>ID</strong></th>

<th><strong>Punkti</strong></th>

<th><strong>Piespēles</strong></th>

<th><strong>Nozagtas bumbas</strong></th>

<th><strong>Atlēkušas bumbas</strong></th>

<th><strong>Pazaudētas bumbas</strong></th>

<th><strong>Personīgas piezīmes</strong></th>

<th><strong>Tehniskas piezīmes</strong></th>

<th><strong>Pārveidot</strong></th>

<th><strong>Dzēst</strong></th>

</tr>
</thead>
<tbody>

<?php
$count=1;
$query="Select * from statistika ORDER BY id desc;";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["punkti"]; ?></td>

<td align="center"><?php echo $row["piespēles"]; ?></td>

<td align="center"><?php echo $row["noz_bumbas"]; ?></td>

<td align="center"><?php echo $row["atl_bumbas"]; ?></td>

<td align="center"><?php echo $row["paz_bumbas"]; ?></td>

<td align="center"><?php echo $row["pers_piezime"]; ?></td>

<td align="center"><?php echo $row["teh_piezime"]; ?></td>

<td align="center">
<a href="editstatistikas.php?id=<?php echo $row["id"]; ?>">Pārveidot</a>
</td>

<td align="center">
<a href="deletestatistikas.php?id=<?php echo $row["id"]; ?>">Dzēst</a>
</td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
<script src="./static/main.js"></script>
</body>
</html>
