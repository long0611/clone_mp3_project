<?php
require "connect.php";

$arraytheloai = [];
$arraychude = [];

$querytheloai =
    "SELECT DISTINCT * FROM theloai ORDER BY rand(" . date("Ymd") . ") LIMIT 4";
$datatheloai = mysqli_query($con, $querytheloai);

while ($row = mysqli_fetch_assoc($datatheloai)) {
    array_push($arraytheloai, [
        "idTheLoai" => $row["idTheLoai"],
        "idKeyChuDe" => $row["IdChuDe"],
        "TenTheLoai" => $row["TenTheLoai"],
        "HinhTheLoai" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhTheLoai"],
    ]);
}

$querychude =
    "SELECT DISTINCT * FROM idChude ORDER BY rand(" . date("Ymd") . ") LIMIT 4";
$datachude = mysqli_query($con, $querychude);
while ($row = mysqli_fetch_assoc($datachude)) {
    array_push($arraychude, [
        "idChuDe" => $row["IdChuDe"],
        "TenChuDe" => $row["TenChuDe"],
        "HinhChuDe" => $row["hinhchude"],
    ]);
}

$arraychudetheloai = ["Theloai" => $arraytheloai, "Chude" => $arraychude];
echo json_encode($arraychudetheloai);

?>
