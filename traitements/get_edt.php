<?php
include "../database.php";
include "../class.php";

$jour = JourClass::selectWithDate(EdtCurlClass::convertDateForSQL($_POST['date']));
$creanaux = CreneauClass::selectAllInformations($jour['jour_id']);
echo json_encode($creanaux);