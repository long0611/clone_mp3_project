<?php
require "connect.php";

if (isset($_POST["tukhoa"])) {
    $mangcakhuc = [];
    $tukhoa = $_POST["tukhoa"];
    $query = "SELECT * FROM baihat WHERE lower(TenBaiHat) LIKE '%$tukhoa%'";
    $data = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($data)) {
        array_push($mangcakhuc, [
            "Idbaihat" => $row["idBaiHat"],
            "Tenbaihat" => $row["TenBaiHat"],
            "Hinhbaihat" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhBaiHat"],
            "Casi" => $row["Casi"],
            "Linkbaihat" => 'http://'. $_SERVER['HTTP_HOST'] . $row["LinkBaiHat"],
            "Luotthich" => $row["LuotThich"],
        ]);
    }
    echo json_encode($mangcakhuc);
}

?>
