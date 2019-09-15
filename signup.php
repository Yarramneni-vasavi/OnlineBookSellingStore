<?php
include('db.php');?>
<html>
<head>
	<style>
	body{
		background-image:url(book1.png);
	}
	#f1{
		border-radius: 25px;
		border: 5px solid navy;
		box-shadow: 7px 7px 20px 5px #e5e4e2;
		background-color:#ffffff;
		width:500;
		height:300;
	}
	#f2{
		width: 100%;
		height: 20%;
	}
	h1{
		padding-left: 20px;
		text-align: left;
		font:italic bold 20px/30px Georgia, serif;
	}
	#login{
		width: 150px;
		height: 50px;
		background-color:green;
		color:white;
	}
</style>
</head>
<body>
<center>
	<div id="f2"> </div>
		<?php
		$s="insert into userslist values('".$_REQUEST['username']."','".$_REQUEST['emailid']."',".$_REQUEST['mobileno'].",'".$_REQUEST['enter']."')";

		if( $con->query($s))
		{	?>
		<div id="f1">
				<p><h1>Congrats! your registration done Successfully.</h1></p></br>
				<p><h1>Thanks for Registering :)</h1></p></br>
				<p>Click here to redirect to- <a href="login.html" target="a,b,c"><font size="5px" color="red">LOG IN</font></a></p>
		
		<?php }
				else
				{ ?>
					<p><h1><?php echo "error"; ?></h1></p>
				<?php }
		?>
		</div>
</center>
</body>
</html>