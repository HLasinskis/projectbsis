<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "bsis";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

    if(isset($_POST['submit']))
    {    

    $punkti = $_POST["punkti"];
    $piespēles = $_POST["piespēles"];
    $noz_bumbas = $_POST["noz_bumbas"];
    $atl_bumbas = $_POST["atl_bumbas"];
    $paz_bumbas = $_POST["paz_bumbas"];
    $pers_piezime = $_POST["pers_piezime"];
    $teh_piezime = $_POST["teh_piezime"];
    
    $query = "INSERT INTO statistika (punkti, piespēles, noz_bumbas, atl_bumbas, paz_bumbas, pers_piezime, teh_piezime) 
    VAlUES('$punkti', '$piespēles', '$noz_bumbas', '$atl_bumbas', '$paz_bumbas', '$pers_piezime', '$teh_piezime')";

if (mysqli_query($conn, $query)) {
    echo "New record has been added successfully !";
 } else {
    echo "Error: " . $query . ":-" . mysqli_error($conn);
 }
 mysqli_close($conn);
 header('location:index.php');
}
?>
