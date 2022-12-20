<?php
$username = "GenelMenuler";
$password = "123456";
$sunucu = "localhost";
$database = "genelmenuler";

$baglan = mysqli_connect($sunucu,$username,$password);
mysqli_query($baglan, "SET NAMES UTF8");


if(!$baglan)
{
    echo "Bağlantı Hatası : ".mysqli_error();
    exit();
}
$db = mysqli_select_db($baglan, $database);


if(!$db)
{
    echo "Veritabanı Hatası : ".mysqli_error($baglan); 
    echo"<br>";
    exit();
}


?>