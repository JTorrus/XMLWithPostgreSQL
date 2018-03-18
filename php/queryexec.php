<?php

//insertDataIntoDb();

$conn_string = "host=localhost port=5432 dbname=lsg_restaurant user=postgres password=1234";
$conn = pg_connect($conn_string);

$sql = "SELECT fields FROM xmlinfo WHERE id='1'";

$xml = pg_query($conn, $sql);

$docXML = pg_fetch_array($xml);

$firstPlates = pg_query($conn, "SELECT xpath('//menjar[categoria = ''Primer Plat'']/nom/text()|//menjar[categoria = ''Primer Plat'']/preu/text()|//menjar[categoria = ''Primer Plat'']/calories/text()|//menjar[categoria = ''Primer Plat'']/descripcio/text()', 
'$docXML[0]', ARRAY[ARRAY['menu','']] )");
$secondPlates = pg_query($conn, "SELECT xpath('//menjar[categoria = ''Segon Plat'']/nom/text()|//menjar[categoria = ''Segon Plat'']/preu/text()|//menjar[categoria = ''Segon Plat'']/calories/text()|//menjar[categoria = ''Segon Plat'']/descripcio/text()', 
'$docXML[0]', ARRAY[ARRAY['menu','']] )");
$desserts = pg_query($conn, "SELECT xpath('//menjar[categoria = ''Postres'']/nom/text()|//menjar[categoria = ''Postres'']/preu/text()|//menjar[categoria = ''Postres'']/calories/text()|//menjar[categoria = ''Postres'']/descripcio/text()', 
'$docXML[0]', ARRAY[ARRAY['menu','']] )");
$drinks = pg_query($conn, "SELECT xpath('//menjar[categoria = ''Beguda'']/nom/text()|//menjar[categoria = ''Beguda'']/preu/text()|//menjar[categoria = ''Beguda'']/calories/text()|//menjar[categoria = ''Beguda'']/descripcio/text()', 
'$docXML[0]', ARRAY[ARRAY['menu','']] )");


$firstPlatesFinal = pg_fetch_array($firstPlates);
$secondPlatesFinal = pg_fetch_array($secondPlates);
$dessertsFinal = pg_fetch_array($desserts);
$drinksFinal = pg_fetch_array($drinks);

$firstPlatesToJson = json_decode(json_encode($firstPlatesFinal[0]));
$secondPlatesToJson = json_decode(json_encode($secondPlatesFinal[0]));
$dessertsToJson = json_decode(json_encode($dessertsFinal[0]));
$drinksToJson = json_decode(json_encode($drinksFinal[0]));

$firstPlatesArray = explode(",", substr($firstPlatesToJson, 0, -1));
$secondPlatesArray = explode(",", substr($secondPlatesToJson, 0, -1));
$dessertsArray = explode(",", substr($dessertsToJson, 0, -1));
$drinksArray = explode(",", substr($drinksToJson, 0, -1));

// ------------------------------------------------------------------------------------------------------------------------

function insertDataIntoDb()
{
    $conn_string = "host=localhost port=5432 dbname=lsg_restaurant user=postgres password=1234";
    $conn = pg_connect($conn_string);

    $fileToInsert = simplexml_load_file("../xml/menu.xml")->asXML();

    $sql = "INSERT INTO xmlinfo (id, fields) VALUES('1', '$fileToInsert')";

    pg_query($conn, $sql);
}