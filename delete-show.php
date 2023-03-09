<?php           


$showId = $_GET['showId'];

//connect

$db = new PDO('mysql:host=172.31.22.43;dbname=Kalem1185287', 'Kalem1185287', 'UsfhU87oyw');


$sql = "DELETE FROM shows WHERE showId = :showId";
$cmd = $db->prepare($sql);
$cmd->bindParam(':showId', $showId, PDO::PARAM_INT);


$cmd->execute();


$db = null;


echo '<p>Show has been deleted</p>
    <a href="select-service.php"></a>';


?>

