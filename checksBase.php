<?php
header('Content-type: text/html; charset=utf-8');
// Соединямся с БД
if($_SERVER['REQUEST_METHOD'] == 'GET') {
	$array = $_GET; //Массив, который приходит
	$sName = $_GET['sName'];
}


		//$deres = iconv("windows-1251", "UTF-8", $reas);
$link=mysqli_connect("localhost", "vl4sov_fbitools", "HaRe2011", "vl4sov_fbitools");
if($link == true ) {
$sql = "SELECT * FROM `DataBase` WHERE `sName` = '".$sName."' ORDER BY id DESC LIMIT 1";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
    print("" . $row['datetime'] . " | " . $row['aName'] . " | " . $row['sName'] . " | " . $row['reason'] . " | " . $row['wanted'] . " | " . $row['note'] . " | " . $row['skin'] . "");
}
}
else {
	echo 'Сервер не отвечает';
}
?>