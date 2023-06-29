<?php
require "connect.php";

$arraytheloai = [];
$idchude = $_POST["idchude"];
$query = "SELECT * FROM theloai WHERE idChude = '$idchude'";
$data = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($data)) {
    array_push(
        $arraytheloai, array(
			"idTheLoai" => $row["idTheLoai"],
			"idKeyChuDe" => $row["idChude"],
			"TenTheLoai" => $row["TenTheLoai"],
			"HinhTheLoai" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhTheLoai"]
		)
    );
}

echo json_encode($arraytheloai);
?>