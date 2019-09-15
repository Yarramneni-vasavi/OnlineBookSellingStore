<html>
<head>
	<style>
	body{
			background-image : url(book1.png);
	}
	#cr1{
		
			width:900px;
			height: 170px;
			background-image: linear-gradient(to right,#c12267,#faafbe);
			color:#800517;
	}
	#login{
		text-align: right;
		text-decoration: none;
		padding-top: 10px;
		padding-right: 20px;
		font:italic bold 15px/30px Georgia, serif;
	}
	#cr2{
		
		width: 900px;
		height: 56px;
		background-color: #000080;
	}
	.div1{
		float: left;
    	width: 300px;
    	height: 50px;
    	border: 2px black #8AC007;
	}
	#p1:hover{
		background-color: #000000;
		width:300px;
		height:56px;
	}
	a:link{
		text-decoration: none;
	}
	a:hover{
		text-decoration: none;
	}
	#cr3{
		width: 900px;
		height: 500px;
		background-color: #ffcba4;
		padding-top: 20px;
	}
	#imageupload{ 
		border-radius: 25px;
		border: 5px solid navy;
    	width: 650px;
    	height: 400px;
    	padding-top: 60px;
	}
	#logout{
		float:right;
		padding-right:15px;
	}
	h1{
		padding-top: 40px;
		padding-left: 100px;
	}
	h2{
		color: #8AC007;
		padding-top: 0px;
	}	
	h3{
		color: #000000;
		font:italic bold 20px/5px Georgia, serif;
		text-align: left;
		padding-left: 140px;
	}
	#head{
		width: 80%;
		height: 120%;
	}
	</style>
</head>
<body>
<?php
session_start();
?>
	<center>
		<div id="head">
		<div id="cr1"><p id="login"><?php echo "WELCOME " .$_SESSION['username']; ?></p>
						<p id="logout"><a href="logout.php" target="_self"><u><b>LOG OUT</b></u></a></p>
						<p><h1>ONLINE BOOK STORE</h1></p>
		</div>
		<div id="cr2">
			<div class="div1" id="p1"><a href="bookavailable2.php"><h2>Books Available</h2></a></div>
			<div class="div1" id="p1"><a href="bookupload.php"><h2>Books Upload</h2></a></div>
			<div class="div1" id="p1"><a href="requestbook.php"><h2>Request Books</h2></a></div>
		</div>
		<div id="cr3">
			<div id="imageupload">
				<p><h1>Congrats! your registration done Successfully.</h1></p></br>
				<p><h1>Thanks for Registering :)</h1></p></br>
				<p>Click here to redirect to- <a href="login.html" target="a,b,c"><font size="5px" color="red">LOG IN</font></a></p>				
			</div>
		</div>
	</div>
	</center>
</body>
</html>