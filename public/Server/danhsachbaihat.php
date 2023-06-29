<?php
require "connect.php";

$arraydanhsachbaihat = [];
if (isset($_POST["idalbum"])) {
    $idalbum = $_POST["idalbum"];
    $query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idalbum',idAlbum)";
}

if (isset($_POST["idtheloai"])) {
    $idtheloai = $_POST["idtheloai"];
    $query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idtheloai',idTheLoai)";
}

if (isset($_POST["idpaylist"])) {
    $idpaylist = $_POST["idpaylist"];
    $query = "SELECT * FROM baihat WHERE FIND_IN_SET('$idpaylist',idPayList)";
}

if (isset($_POST["idquangcao"])) {
    $idquangcao = $_POST["idquangcao"];
    $queryquangcao = "SELECT * FROM quangcao WHERE id ='$idquangcao'";
    $dataquangcao = mysqli_query($con, $queryquangcao);
    $rowquangcao = mysqli_fetch_assoc($dataquangcao);
    $id = $rowquangcao["idBaiHat"];
    $query = "SELECT * FROM baihat WHERE idBaiHat = '$id'";
}

$data = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($data)) {
    array_push($arraydanhsachbaihat, [
        "Idbaihat" => $row["idBaiHat"],
        "Tenbaihat" => $row["TenBaiHat"],
        "Hinhbaihat" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhBaiHat"],
        "Casi" => $row["Casi"],
        "Linkbaihat" => 'http://'. $_SERVER['HTTP_HOST'] . $row["LinkBaiHat"],
        "Luotthich" => $row["LuotThich"],
    ]);
}
echo json_encode($arraydanhsachbaihat);

?>
