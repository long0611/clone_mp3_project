<?php
require "connect.php";

$arraychude = [];
$query = "SELECT * FROM idChude";
$data = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($data)) {
    array_push(
        $arraychude, array(
			"idChuDe" => $row["idChude"],
			"TenChuDe" => $row["TenChuDe"],
			"HinhChuDe" => 'http://'. $_SERVER['HTTP_HOST'] . $row["HinhChuDe"]
		)
    );
}

echo json_encode($arraychude , JSON_UNESCAPED_UNICODE);
?>
