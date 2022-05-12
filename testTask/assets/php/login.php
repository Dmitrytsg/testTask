<?php

session_start();

include("classes/csv.php");

$login    = $_POST["login"];
$password = $_POST["password"];

$password = md5($password);

try {
    $csv = new CSV("../csv/db.csv");
    $get_csv = $csv->getCSV();
    $flag = false;
    foreach ($get_csv as $value) {
        if ($login == $value[1] && $password == $value[2]) {
            $_SESSION['user'] = [
                "id"     => $value[0],
                "login"  => $value[1],
                "password"  => $value[2],
                "name" => $value[3],
                "surname"  => $value[4],
                "yo"  => $value[5]
            ];
            $flag = true;
            break;
        }
        else {
            $flag = false;
        }
    }
}
catch (Exception $e) {
    echo $e -> getMassage();
}

echo json_encode([
    'flag' => $flag
]);

?>