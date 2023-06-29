<?php
require "connect.php";

$query =
    "SELECT DISTINCT * FROM idAlbum 	ORDER BY rand(" . date("Ymd") . ") LIMIT 4";
$dataalbum = mysqli_query($con, $query);

$arrayalbum = [];
while ($row = mysqli_fetch_assoc($dataalbum)) {
    array_push($arrayalbum, [
        "IdAlbum" => $row["idAlbum"],
        "TenAlbum" => $row["TenAlbum"],
        "TenCaSiAlbum" => $row["TenCasiAlbum"],
        "HinhAlBum" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhAlbum"],
    ]);
}

echo json_encode($arrayalbum);

?>
