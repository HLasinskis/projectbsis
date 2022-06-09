<?php
include("./config/config.php");
$id=$_REQUEST['id'];
$query = "SELECT * from statistika where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pārveidot Statistiku</title>
<link rel="stylesheet" href="./static/statistika.css" />
</head>
<body>
<div class="form">
<h1>Pāveidot statistiku</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$punkti =$_REQUEST['punkti'];

$piespēles =$_REQUEST['piespēles'];

$noz_bumbas =$_REQUEST['noz_bumbas'];

$atl_bumbas =$_REQUEST['atl_bumbas'];

$paz_bumbas =$_REQUEST['paz_bumbas'];

$pers_piezime =$_REQUEST['pers_piezime'];

$teh_piezime =$_REQUEST['teh_piezime'];

$update="update statistika
set punkti='".$punkti."', piespēles='".$piespēles."',
noz_bumbas='".$noz_bumbas."', atl_bumbas='".$atl_bumbas."',
paz_bumbas='".$paz_bumbas."', pers_piezime='".$pers_piezime."',
teh_piezime='".$teh_piezime."' where id='".$id."'";

mysqli_query($conn, $update) or die(mysqli_error());

$status = "Dati veiksmīgi pārveidoti. </br></br>
<a href='viewstatistika.php'>Skatīties Pāveidota statistikas tabula</a>";
echo '<p style="color: #FFFFFF;">'.$status.'</p>';

}else {
?>
<div>
<form id="myForm" action="" method="post" > 

<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<label for="">Punkti</label>
    <input type="number" name="punkti" required value="<?php echo $row['punkti'];?>">

    <label for="">Piespēles</label>
    <input type="number" name="piespēles" required value="<?php echo $row['piespēles'];?>">

    <label for="">Nozagtas bumbas</label>
    <input type="number" name="noz_bumbas" required value="<?php echo $row['noz_bumbas'];?>">

    <label for="">Atlēkušas bumbas</label>
    <input type="number" name="atl_bumbas" required value="<?php echo $row['atl_bumbas'];?>">

    <label for="">Pazaudētas bumbas</label>
    <input type="number" name="paz_bumbas" required value="<?php echo $row['paz_bumbas'];?>">

    <label for="">Personīgas piezīmes</label>
    <input type="number" name="pers_piezime" required value="<?php echo $row['pers_piezime'];?>">

    <label for="">Tehniskas piezīmes</label>
    <input type="number" name="teh_piezime" required value="<?php echo $row['teh_piezime'];?>">

    <button type="submit" name="submit" class ="btn btn-primary">Atjaunot<button>
  </form>
<?php } ?>
</div>
</div>
</body>
</html>