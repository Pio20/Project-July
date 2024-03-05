<?php
	session_start();
	if(isset($_SESSION["id"])){
	//location after login
	print"<script>window.location.href='1stwebsite.php';</script>";	
	die();	
	}
	if(isset($_POST["btnlogin"])){
		//Transfer datas from input to variable
	$fn=filter_input(INPUT_POST,"txtfn");
	$ln=filter_input(INPUT_POST,"txtln");
	//connect to db
	include('Connect.php');
	//login
	$qry=$connection->prepare("Select * from tbinfo where fname =:fnn and lname =:lnn");
	$qry->bindParam("fnn",$fn);
	$qry->bindParam("lnn",$ln);
	$qry->execute();
	$rows=$qry->fetchAll(PDO::FETCH_ASSOC);
	if($rows) {
		$_SESSION["id"]=$rows[0]["id"];
		print"<script>window.location.href='1stwebsite.php';</script>";
	}else"<script>alert('invalid');</script>";
	}
	?>
	
	<html>
		<head>
			<title>Login</title>
		</head>
	<body>
	<form action="" method="post">
	<input type="text" name="txtfn"></input>
	<input type="text" name="txtln"></input>
	<input type="submit" name="btnlogin" value="Login"></input>
	</form>
	</body>
	</html>