<!DOCTYPE html>
<html lang="tr">
<head>

	<title>dosya boyutunu bulan komut</title>

</head>
<body>
<?php 

$path_file = ("img");//boyutunu öğrenmek istediğimiz dosyanın adını/adresini yazıyoruz
$boyut = filesize("$path_file");
 
$boyut = ceil($boyut / 1024);//BURDA BOYUTUNU KB ÇEVİRME İŞLEMİNİ GERÇEKLEŞTİRİYORUZ
                             //1024 BÖLEREK YAIYORUZ TABİ
 //mustafa TÜREDİ 221809100
echo $boyut." KB";

?>


</body>
</html>