<?php

session_start();
if (!$_SESSION['user']) {
    header('Location: ../../index.php');
}

include("classes/csv.php");

$login    = $_POST["login"];
$password = $_POST["password"];
$name     = $_POST["name"];
$surname  = $_POST["surname"];
$age      = $_POST["age"];

$password = md5($password);

try {
    $csv = new CSV("../csv/db.csv");
    $get_csv = $csv->getCSV();
    $flag = true;
    foreach ($get_csv as $value) {
        if($login == $value[1]) {
            $flag = false;
            break;
        }    
    }
    if ($flag) {
        $arr = array("".count($get_csv).";".$login.";".$password.";".$name.";".$surname.";".$age."");
        $csv->setCSV($arr);
    }
}
catch (Exception $e) {
    echo $e -> getMassage();
}

echo json_encode([
    'flag' => $flag
]);

?>