<?php
require "connect.php";

$query = "SELECT * FROM paylist";
$data = mysqli_query($con, $query);

$arrayplaylist = [];
while ($row = mysqli_fetch_assoc($data)) {
    array_push($arrayplaylist, [
        "idPaylist" => $row["idPayList"],
        "Ten" => $row["Ten"],
        "HinhNen" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhNen"],
        "HinhIcon" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhIcon"],
    ]);
}
echo json_encode($arrayplaylist);
?>
