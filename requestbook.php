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
	#bookrequest{ 
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
	#Bookname{
	}
	#submit{
		width: 130px;
    	height: 40px;
    	font:italic bold 20px/5px Georgia, serif;
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
		
			<script>
				function validate()
				{
				var personname = document.getElementById('personname');
				var Bookname = document.getElementById('Bookname');
				var Author = document.getElementById('Author');
				var publications = document.getElementById('publications');
				var edition = document.getElementById('edition');
				if(personname.value=='')
				{
					alert('please enter Bookname');
					return false;
				}
				if(Bookname.value=='')
				{
					alert('please enter Author name');
					return false;
				}
				if(Author.value=='')
				{
					alert('please enter Cost');
					return false;
				}
				if(publications.value=='')
				{
					alert('please enter Publications');
					return false;
				}
				if(edition.value=='')
				{
					alert('please enter Edition');
					return false;
				}
				}
				</script>
		    <?php 
			 error_reporting(E_ALL & ~E_NOTICE);
			if(isset($_GET))
			{
				echo $_GET['msg'];
			}
			?>
			<form id="bookrequest" onsubmit="return validate()" action="request.php" method="post" enctype="multipart/form-data"></br>
				<label><b><em> CUSTOMER NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em><b></label>
				<input id="personname" name="personname" type="text" placeholder="Type here"></br></br>
				<label><b><em> BOOK NAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em><b></label>
				<input id="Bookname" name="Bookname" type="text" placeholder="Type here"></br></br>
				<label><b><em> AUTHOR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em><b></label>
				<input id="Author" name="Author" type="text" placeholder="Type here"></br></br>
				<label><b><em> PUBLICATIONS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em><b></label>
				<input id="publications" name="publications" type="text" placeholder="Type here"></br></br>
				<label><b><em> EDITION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em><b></label>
				<input id="edition" name="edition" type="text" placeholder="Type here"></br></br></br>
				
    			<input id="Submit" type="submit" value="SUBMIT" name="submit">
			</form>
		</div>
	</div>
	</center>
</body>
</html>