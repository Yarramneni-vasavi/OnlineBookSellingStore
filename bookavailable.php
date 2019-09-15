<html>
<head>
	<style>
	body{
		background-image:url(book1.png);
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
	#cr3{
		width: 900px;
		height:80px;
		background-color: #ffcba4;
		padding-top: 10px;
		padding-right: 10px;
	}
	#searchbox
	{       
		border-radius: 25px;
    	width: 350px;
    	height: 50px;
    	background-color: #cd7f32;
    	padding-top: 15px;
    	float: right;
	}
	#search{
		width: 200px;
    	height: 30px;
	}
	#submit{
		width: 80px;
    	height: 30px;
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
	#cr4{
		width:900px;
		height: 100%;
	}
	.div2{
		float: left;
		position: relative;
    	width: 266px;
    	height: 250px;
    	background-color: #cc6600;
    	margin-top: 10px;
    	margin-bottom: 10px;
    	margin-left: 10px;
    	margin-right: 10px;
    	padding-left: 5px;
    	padding-right: 5px;
	}
	h1{
		padding-top: 40px;
	}
	h2{
		color: #8AC007;
		padding-top: 0px;
	}	
	#head{
		width: 80%;
		height: 550%;
	}
	</style>
</head>
<body>
<?php
session_start();
?>
	<center>
		<div id="head">
		<div id="cr1">
						<p id="login"><?php echo "WELCOME " .$_SESSION['username']; ?></p>
						<p><h1>ONLINE BOOK STORE</h1></p>
		</div>
		<div id="cr2">
			<div class="div1" id="p1"><a href="bookavailable2.php"><h2>Books Available</h2></a></div>
			<div class="div1" id="p1"><a href="bookupload.php"><h2>Books Upload</h2></a></div>
			<div class="div1" id="p1"><a href="requestbook.php"><h2>Request Books</h2></a></div>
		</div>
		<div id="cr3">
				<form id="searchbox" action="">
    				<input id="search" type="text" placeholder="Type here">
    				<input id="submit" type="submit" value="Search">
				</form>
		</div>
		<div id="cr4">
				<div class="div2"><h2>book1</h2></div>
				<div class="div2"><h2>book2</h2></div>
				<div class="div2"><h2>book3</h2></div>
				<div class="div2"><h2>book4</h2></div>
		</div>
	</div>
	</center>
</body>
</html>