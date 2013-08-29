<?php

include("koneksi.php");

$cek = mysql_query("select * from tbl_user where username = '$_POST[username]' ");
$cocok = mysql_num_rows($cek);

echo $cocok;

?>