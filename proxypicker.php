<?php
include "banner.php";
echo "Masukan Jumlah Socks : ";
$jumlah = trim(fgets(STDIN));
$url = file_get_contents("http://indosec.web.id/api/socks.php?type=get&jumlah=$jumlah");
$ex = explode("<br>",$url);
foreach ($ex as $key) {
echo "$key";
}
?>
