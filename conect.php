<?php

//Sample Database Connection Syntax for PHP and MySQL.

//Connect To Database

$hostname="sql308.unaux.com";
$username="unaux_26273168";
$password="sa21dr07";
$dbname="unaux_26273168_aulaBD";
$usertable="client";
$yourfield = "2";

mysql_connect($hostname,$username, $password);
mysql_select_db($dbname);

# Verifique se o registro existe

$query = "SELECT * FROM $usertable";

$result = mysql_query($query);

if($result){
    while($row = mysql_fetch_array($result)){
        $name = $row["$yourfield"];
        echo "Nome: ".$name."br/>";
    }
}
?>

