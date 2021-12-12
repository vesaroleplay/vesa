<?php
$sunucu = "localhost";
$kuladi = "root";
$sifre  = "Okn1101996";
$verit  = "kuveyt";
$baglan=mysql_connect($sunucu, $kuladi, $sifre) or die(mysql_error());mysql_select_db($verit, $baglan) or die(mysql_error());
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");
?>