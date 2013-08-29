<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="jquery-1.4.3.js"></script>
<script type="text/javascript">
	
$(function(){
	$('input[type=text],input[type=password]').keyup(function(e){
		cekError($(this));
		if($('input[name=password]').val() != $('input[name=u_password]').val()) {
			$('#notif-u_password').show().html('<span> Password Tidak Sama !! </span>');
			$('input[name=u_password]').css("border", "1px solid red");
		}
		if($(this).val().trim().length < $(this).attr('minlength') ){
			$('#notif-password').show().html('<span> Min Length '+ $(this).attr('minlength') +' </span>');
			$('input[name=password]').css("border", "1px solid red");
			return true;
		}
	});
	
	function cekError(obj){
		var ret = true;
		if(obj.val() != ""){
			$('#notif-' + obj.attr("name")).hide();
			obj.css("border", "1px solid black");
		}else{
			$('#notif-' + obj.attr("name")).show();
			obj.css("border", "1px solid red");
			ret = false;
		}
		return ret;
	}
	$('#sumbit').click(function(e){	
		$('input[type=text],input[type=password]').each(function(){
			if(!cekError($(this))){
				e.preventDefault();
			}
		});
		return true;
		
	});
	
	//validasi username
	
	$("#username").change(function(){
		$('#notif-username').html('<span> Cek username... </span>');
		var username = $("#username").val();
	
		$.ajax({
			type	: "POST",
			url		: "validasi.php",
			data	: "username=" + username,
			success	: function data(){
				if(data == 0){
					$("#notif-username").html("<img src='image/tick.png'/> Username Belum Di Gunakan...");
					$("#username").css("border","1px solid red");
				}else{
					$("#notif-username").html("<img src='image/silang.png'/> Username Sudah Di Gunakan...");
					$("#username").css("border","1px solid red");
				}
			}
		});
	});

});



	
</script>
<style type="text/css">

#form-register{
	font-family:arial;
	font-size:13px;
	font-weight:bold;
	border:1px solid #ccc;
	background:rgba(125,235,243,0.5);
	border-radius:5px;
	moz-border-radius:5px;
	webkit-border-radius:5px;
}
#form-register td{
	width:150px;
}

input[type="text"],
input[type="password"]{
	width:200px;
	height:22px;
}

.input{
	position:relative;
	display:inline-block;
}
.notif-error{
	white-space:nowrap;
	position:absolute;
	left:220px;
	top:4px;
	height:20px;
	background:rgba(232,1,34,0.8);	
	border-radius:0 2px 2px 0;
	display:none;
}
.notif-error:before{
	content:"";
	border-color:transparent rgba(232,1,34,0.8) transparent transparent;
	border-style:solid;
	border-width:10px;
	position:absolute;
	left:-20px;
	top:0;
}
.notif-error span{
	color:white;
	font-size:14px;
	white-space:nowrap;
	display:inline-block;
}
</style>
</head>
	<body>	
<form action="fregister.php" method="POST" onsubmit="return validasi();">
	<table id="form-register">
		<tr>
			<td>Username</td>
			<td>
				<div class="input">
					<input type="text" name="username" id="username" maxlength="24"/>
					<div id="notif-username" class="notif-error"><span> Masih Kosong !! </span></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<div class="input">
					<input type="password" name="password" id="password" maxlength="10" minlength="3"/>
					<div id="notif-password" class="notif-error"><span> Masih Kosong !! </span></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>Ulangi Password</td>
			<td>
				<div class="input">
					<input type="password" name="u_password" id="u_password" maxlength="12"/>
					<div id="notif-u_password" class="notif-error"><span> Masih Kosong !! </span></div>
				</div>
			</td>
		</tr>
		<tr>
			<td>Level</td>
			<td>
				<div class="input">
						<input type="text" name="level" id="level" maxlength="24"/>
					<div id="notif-level" class="notif-error"><span> Masih Kosong !! </span></div>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" id="sumbit" name="register" value="Register"/>
			</td>
		</tr>		
	</table>
</form>
<?php
include("koneksi.php");

if (!empty($_POST['register'])){
	$error = false;
	$username	= $_POST['username'];
	$password	= md5($_POST['password']);
	$u_password	= md5($_POST['u_password']);
	$level		= $_POST['level'];
	
	if(empty($username)){
		echo "username dan password masih kosong";
		$error = true;
	}elseif ($password != $u_password){
		echo "Password Tidak Sama";
		$error = true;
	}
	if (!$error){	
		$query = mysql_query("insert into tbl_user values(null,'$username','$password','$level')")or die(mysql_error());
		
		if ($query){
			echo "Berhasil";
		}else{
			echo "gagal";
		}
	}
}

?>
</body>
</html>