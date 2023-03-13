<!DOCTYPE html>
<html lang="tr">
<head>

	<title>tablo şeklinde çarpım tablosu oluşturma php(döngüler)</title>

</head>
<body>
<?php 
Echo "<table border=1><tr><td>x</td>";
For($x=1;$x<=10;$x++){
Echo "<td> $x</td>";
}
Echo "</tr>";
For($sat=1;$sat<=10;$sat++){
Echo "<tr><td>$sat</td>";
    For($sut=1;$sut<=10;$sut++){
Echo "<td>$sat x $sut = ",$sat*$sut,"<br></td>";
}
Echo "</tr>";
}
Echo "</table>";
?>


</body>
</html>