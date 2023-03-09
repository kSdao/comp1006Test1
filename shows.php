<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows</title>
</head>
<body>
    <main>
<h1> Your Shows based on your selection! </h1>


<?php

$serviceId = $_POST['serviceId'];

$db = new PDO('mysql:host=172.31.22.43;dbname=Kalem1185287', 'Kalem1185287', 'UsfhU87oyw');

$sql = "SELECT * FROM shows WHERE serviceId = :serviceId";

$cmd = $db->prepare($sql);

$cmd->bindParam(':serviceId', $serviceId, PDO::PARAM_INT);

$cmd->execute();

$shows = $cmd->fetch();

$titles = implode($shows);

echo  $titles;






$db = null;

?>




    </main>
</body>
</html>