<?php
mysqli_report(MYSQLI_REPORT_OFF);

$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
