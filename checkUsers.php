<?php
header('Content-type: text/html; charset=utf-8');
// Соединямся с БД
if($_SERVER['REQUEST_METHOD'] == 'GET') {
	$array = $_GET; //Массив, который приходит
	$Nick_Name = $_GET['Nick_Name'];
	$Setial = $_GET['Serial'];
}


		//$deres = iconv("windows-1251", "UTF-8", $reas);
$link=mysqli_connect("localhost", "vl4sov_fbitools", "HaRe2011", "vl4sov_fbitools");
if($link == true ) {
$sql = "SELECT min(id), Nick_Name, Serial FROM `users` GROUP BY Nick_Name, Serial";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
    print("" . $row['Nick_Name'] . " | " . $row['Serial'] . " <br>");
}
}
else {
	echo 'Сервер не отвечает';
}
?>
