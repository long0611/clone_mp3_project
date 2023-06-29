<?php
require "connect.php";

$query =
    "SELECT DISTINCT * FROM paylist 	ORDER BY rand(" . date("Ymd") . ") LIMIT 3";

$arrayplaylistfortoday = [];
$data = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($data)) {
    array_push($arrayplaylistfortoday, [
        "idPaylist" => $row["idPayList"],
        "Ten" => $row["Ten"],
        "HinhNen" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhNen"],
        "HinhIcon" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhIcon"],
    ]);
}

echo json_encode($arrayplaylistfortoday);

?>
