<!doctype html>
<html>
<head>
<title>Selamat Datang @ SIAM</title>
<style type="text/css">
	body{
		background:url(image/background.jpg);
		background-repeat:no-repeat;
		background-size:100%;
		overflow:hidden;
	}
	h1{
		font-family: Castellar;
		font-size: 24px;
		color: rgba(0,0,0,0.6);
		text-shadow: 2px 2px 3px rgba(255,255,255,0.1);
		text-align:center;
		position:fixed;
		left:510px;
		top:0;
		text-decoration:underline overline;
	}
	.form-field{
		width : 250px;
		display : block;
		margin : 250px 550px;
	}
	.form-field fieldset{
		border : 2px solid #7bf3fb;
		box-shadow : -3px 3px 15px 0px #ccc;
		moz-box-shadow : -3px 3px 15px 0px #ccc;
		webkit-box-shadow : -3px 3px 15px 0px #ccc;
		border-radius:4px;
		width:200px;
		height:120px;
		background:rgba(123,243,251,0.5);
	}
	.form-field .field{
		border:1px solid #BDC7D8;
		font-size:12px;
		border-radius:5px 5px 5px 5px;
		width:200px;
		float:left;
		height:23px;
		left:30px;
		padding:5px;
	}
	.form-field .field:focus{
		background:rgba(236,247,248,0.5);
	}
	div{
		padding:10px;
		margin-top:5px;
	}
	.btn-login{
		font-family: Verdana, Geneva, sans-serif; 
		font-size: 15px; color: #FFF; 
		margin-top:5px;
		float:right;
		border: 1px solid #999; 
		text-shadow: 0px 1px 1px #666;
		text-decoration: none; 
		-moz-box-shadow: 0 1px 3px #111; 
		-webkit-box-shadow: 0 1px 3px #111;
		box-shadow: 0 1px 3px #111; 
		border-radius: 4px;
		-moz-border-radius: 4px; 
		-webkit-border-radius: 4px; 
		background: #71ba2a;
		background: -moz-linear-gradient(top, #71ba2a 0%, #579727 50%, #58982a 51%, #498c25 100%); 
		background: -webkit-gradient(linear, left top, left bottom, from(#71ba2a), to(#498c25), color-stop(0.4, #579727), color-stop(0.5, #58982a), color-stop(.9, #498c25), color-stop(0.9, #498c25));
		cursor: pointer;
	}
	.btn-login:hover {
		background: #98cd66;
		background: -moz-linear-gradient(top, #98cd66 0%, #579727 70
		%, #58982a 51%, #498c25 100%); 
		background: -webkit-gradient(linear, left top, left bottom, from(#98cd66), to(#498c25), color-stop(0.4, #579727), color-stop(0.5, #58982a), color-stop(.9, #498c25), color-stop(0.9, #498c25));
	}
	.link-registrasi em{
		font-size:14px;
		color:rgba(6,31,48,0.5);
		text-decoration:none;
	}
</style>
</head>
<body>
<h1>Selamat Datang @ SIAM</h1>
<form action="proses_login.php" class="form-field" method="post">
	<fieldset>
		<div>
			<input type="text" id="username" name="username" class="field" placeholder="Username">
		</div>
		<div>
			<input type="password" id="password" name="password" class="field" placeholder="Password">
		</div>
			<input type="submit" name="submit" value="Login" class="btn-login">
		<div class="link-registrasi">
			<em><a href="facebook.php">Registrasi ?</a></em>
		</div>
	</fieldset>
</form>
</body>
</html>