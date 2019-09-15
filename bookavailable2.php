<?php include("db.php");
?>
<html>
<head>
	<script type="text/javascript">
	function locate()
	{
		x=document.getElementById('search').value;
		window.location.hash=x;
	}
	</script>
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
		background-color: #0000A0;
	}
	#cr3{
		width: 900px;
		height:80px;
		background-color: #ffcba4;
		padding-top: 10px;
		padding-right: 10px;
	}
	.marq{
		width: 500px;
		height: 50px;
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
    	width: 890px;
    	height: 250px;
    	background-color: #cc6600;
    	margin-top: 10px;
    	margin-bottom: 10px;
    	padding-top:10px;
    	padding-left: 5px;
    	padding-right: 5px;
	}
	.div2-1{
		float:left;
		width:420px;
		height: 240px;
	}
	.div2_2{
		float:right;
		width: 420px;
		height: 240px;
	}
	.display{
		text-align: left;
		padding-left: 30px; 
		font:italic bold 18px/10px Georgia, serif;
		color:#800000;
	}
	#logout{
		float:right;
		padding-right:15px;
	}
	h1{
		padding-top: 40px;
		padding-left:100px;
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
						<p id="logout"><a href="logout.php" target="_self"><u><b>LOG OUT</b></u></a></p>
						<p><h1>ONLINE BOOK STORE</h1></p>
		</div>
		<div id="cr2">
			<div class="div1" id="p1"><a href="bookavailable2.php"><h2>Books Available</h2></a></div>
			<div class="div1" id="p1"><a href="bookupload.php"><h2>Books Upload</h2></a></div>
			<div class="div1" id="p1"><a href="requestbook.php"><h2>Request Books</h2></a></div>
		</div>
		<div id="cr3">
				<marquee direction="top" class="marq">
				<?php
					$sql2="select * from bookrequests";
					$result2=$con->query($sql2);
					
					while($row1=$result2->fetch_assoc())
					{?>
						<h4><?php echo $row1['personname'] ;?>,<?php echo $row1['Bookname'] ;?>,<?php echo $row1['Author'] ;?>,<?php echo $row1['publications'] ;?>,<?php echo $row1['edition'] ;?></h4>
						
					<?php
					}
				?>
				
				</marquee>
				<form id="searchbox" action="">
    				<input id="search" type="text" placeholder="Type here">
    				<input id="submit" type="button" value="Search" onclick="locate()">
				</form>
		</div>
		<div id="cr4">
		<?php 
		
		$sql="select * from images";
		$result=$con->query($sql);

		while($row=$result->fetch_assoc())
		{
			?><div class='div2'>
					<div class = 'div2-1'>
					<p class='display' id='<?php echo $row['bookname']?>'>BOOK NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['bookname'] ;?></p>
					<p class='display'>AUTHOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['author'] ;?></p>
					<p class='display'>PUBLICATIONS&nbsp;&nbsp;: <?php echo $row['publications'] ;?></p>
					<p class='display'>EDITION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row['edition'] ;?></p>
					<p class='display'>COST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rs.<?php echo $row['cost'] ;?>/-</p>
					<p class='display'>CONTACT :  <?php echo $row['username'] ;?> ,  <?php echo $row['mobileno'] ;?></</p>

				</div>
			  	<div class='div2_2'><center><img src="<?php echo $row['image'];?>" height ="240px" width="240px"/></center></div>
			  </div>
		<?php
		}
		
		?>
				
		</div>
	</div>
	</center>
</body>
</html>