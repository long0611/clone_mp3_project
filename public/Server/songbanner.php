<?php
require "connect.php";

$query = "SELECT DISTINCT * FROM quangcao 	ORDER BY rand(" . date("Ymd") . ") LIMIT 4";
$dataquangcao = mysqli_query($con, $query);
$mangquangcao = [];

while ($row = mysqli_fetch_assoc($dataquangcao)) {
    array_push($mangquangcao, [
        "id" => $row["id"],
        "hinhanh" => 'http://'. $_SERVER['HTTP_HOST'] . $row["hinhanh"],
        "noidung" => $row["noidung"],
        "idbaihat" => $row["idBaiHat"],
        "tenBaiHat" => $row["TenBaiHat"],
        "banner" => 'http://'. $_SERVER['HTTP_HOST'] . $row["banner"],
    ]);
}

echo json_encode($mangquangcao, JSON_UNESCAPED_SLASHES);
?>
