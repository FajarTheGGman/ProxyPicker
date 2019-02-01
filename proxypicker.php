<?php
include "banner.php";
echo "Masukan Jumlah Socks : ";
$jumlah = trim(fgets(STDIN));
$url = file_get_contents("http://indosec.web.id/api/socks.php?type=get&jumlah=$jumlah");
$ex = explode("<br>",$url);
foreach ($ex as $key) {
echo "$key";
}
#Dear Tukang Recode :
#[=============Baca Hadist ini=============]
#Lelaki yang mencuri dan wanita yang mencuri,potonglah tangan
#keduanya (sebagai) pembalasan bagi apa yang mereka kerjakan dan
#sebagai siksaan dari Allah.
#Dan Allah Maha Perkasa lagi Maha Bijaksana.
#Maka barangsiapa bertaubat (di antara pencuri-pencuri itu)
#sesudah melakukan kejahatan itu dan memperbaiki diri,
#maka sesungguhnya Allah menerima taubatnya.
#Sesungguhnya Allah Maha Pengampun lagi Maha Penyayang.”
#(QS. Al-Maidah: 38-39)
?>
