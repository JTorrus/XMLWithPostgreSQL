<?php include 'queryexec.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LSG Restaurant</title>
</head>
<body>
<h1>
    Carta LSG Restaurant
</h1>

<h2>Primer Plat</h2>
<ul>
    <li>
        <?php echo $firstPlatesArray[0]. "\t||\t". $firstPlatesArray[3]. " cal / ". $firstPlatesArray[1]?>
        <br>
        <?php echo $firstPlatesArray[2]?>
    </li>
    <li>
        <?php echo $firstPlatesArray[4]. "\t||\t". $firstPlatesArray[7]. " cal / ". $firstPlatesArray[5]?>
        <br>
        <?php echo $firstPlatesArray[6]?>
    </li>
</ul>

<h2>Segon plat</h2>
<ul>
    <li>
        <?php echo $secondPlatesArray[0]. "\t||\t". $secondPlatesArray[3]. " cal / ". $secondPlatesArray[1]?>
        <br>
        <?php echo $secondPlatesArray[2]?>
    </li>
    <li>
        <?php echo $secondPlatesArray[4]. "\t||\t". $secondPlatesArray[7]. " cal / ". $secondPlatesArray[5]?>
        <br>
        <?php echo $secondPlatesArray[6]?>
    </li>
</ul>

<h2>Postres</h2>
<ul>
    <li>
        <?php echo $dessertsArray[0]. "\t||\t". $dessertsArray[3]. " cal / ". $dessertsArray[1]?>
        <br>
        <?php echo $dessertsArray[2]?>
    </li>
    <li>
        <?php echo $dessertsArray[4]. "\t||\t". $dessertsArray[7]. " cal / ". $dessertsArray[5]?>
        <br>
        <?php echo $dessertsArray[6]?>
    </li>
</ul>

<h2>Begudes</h2>
<ul>
    <li>
        <?php echo $drinksArray[0]. "\t||\t". $drinksArray[3]. " cal / ". $drinksArray[1]?>
        <br>
        <?php echo $drinksArray[2]?>
    </li>
    <li>
        <?php echo $drinksArray[4]. "\t||\t". $drinksArray[7]. " cal / ". $drinksArray[5]?>
        <br>
        <?php echo $drinksArray[6]?>
    </li>
</ul>

</body>
</html>