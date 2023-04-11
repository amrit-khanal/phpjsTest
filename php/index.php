<?php
//fetch data from url 
$xmlData = file_get_contents('http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml');

//convert xml object
$xml = simplexml_load_string($xmlData) or die("Error: could create xml object");

//convert xml object to json
$jsondata = json_encode($xml, true) or die("Error: Cannot encode json");
header('Content-Type: application/json; charset=utf-8');
echo $jsondata;
