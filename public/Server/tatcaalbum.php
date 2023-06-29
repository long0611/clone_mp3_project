<?php
require "connect.php";

$arrayalbum = [];
$query = "SELECT * FROM idAlbum";
$data = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($data)) {
    array_push($arrayalbum, [
        "IdAlbum" => $row["idAlbum"],
        "TenAlbum" => $row["TenAlbum"],
        "TenCaSiAlbum" => $row["TenCasiAlbum"],
        "HinhAlBum" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhAlbum"],
    ]);
}
echo json_encode($arrayalbum);

?>