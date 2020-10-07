<?php

require_once("include/datas.inc.php");
const DATA_LOCATION ='datas/';

echo "----------Gestion des Licences logicielles--------------";

echo "\nListe des employés";

    
$employees=loadAndDump( DATA_LOCATION."employees.json");
$services=loadAndDump( DATA_LOCATION."services.json");
$softs=loadAndDump( DATA_LOCATION."softs.json");
$lincenses=loadAndDump( DATA_LOCATION."licenses.json");

echo("-------Employés par service---------\n");
Affichage(getEmployeesByService($employees,"dsi"));

echo("-------Logicielle par service---------\n");
Affichage(getLogicielleByService($services,"pgi"));