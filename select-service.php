<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Selection</title>
</head>
<body>
    <main>
    <h1> Please Select a service provider </h1>
    <form action="shows.php" method="post">
    <fieldset>
    <label for="serviceId">Services: </label>
    <select name="serviceId" id="services">

<?php

$db = new PDO('mysql:host=172.31.22.43;dbname=Kalem1185287', 'Kalem1185287', 'UsfhU87oyw');

// Select all from our teams table we created

  $sql = "SELECT * FROM services";
  $cmd = $db->prepare($sql);
  $cmd->execute();

  //take the results and store them in a variable

  $services = $cmd->fetchAll();

  //display the values in our form

  foreach ($services as $value) {
      echo '<option value="' . $value['serviceId'] . '" >' .$value['name'] . '</option>';
  }


  echo 

  '<a href="shows.php?serviceId=' . $services['serviceId'] .'" title="Edit">';
 

  //disconect from the database
  $db = null;


?>

</select>
</fieldset>
<button class="btnOffset">Submit</button>
    </form>
</main>
</body>
</html>