<?php
session_start();
include("koneksi.php");

$username=$_POST['username'];
$password=md5($_POST['password']);

$query = mysql_query("select * from tbl_user where username='$username' AND password='$password'")or die("error");
$datauser = mysql_fetch_array($query);
$cek = mysql_num_rows($query);

if ($cek == 1){
	/* Pembuatan Session */
	$_SESSION['username']=$username;
	/* Selesai Session */
	if ($datauser['level']=='admin'){
		echo "hai Admin";
	}else{
		echo "hai user";
	}
}else{
	echo "gagal";
}
?>