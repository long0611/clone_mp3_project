<?php
require "connect.php";

$query = "SELECT * FROM baihat ORDER BY Luotthich DESC LIMIT 5";
$dataalbum = mysqli_query($con, $query);

$arraycasi = [];
while ($row = mysqli_fetch_assoc($dataalbum)) {
    array_push($arraycasi, [
        "Idbaihat" => $row["idBaiHat"],
        "Tenbaihat" => $row["TenBaiHat"],
        "Hinhbaihat" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhBaiHat"],
        "Casi" => $row["Casi"],
        "Linkbaihat" => 'http://'. $_SERVER['HTTP_HOST'] . $row["LinkBaiHat"],
        "Luotthich" => $row["LuotThich"],
    ]);
}

echo json_encode($arraycasi);

?>
