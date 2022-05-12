<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../../index.php');
}

include("classes/csv.php");

try {
    $csv = new CSV("../csv/db.csv");
    $get_csv = $csv->getCSV();
}
catch (Exception $e) {
    echo $e -> getMassage();
}

echo json_encode($get_csv);

?>