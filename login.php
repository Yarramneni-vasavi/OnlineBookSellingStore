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
		<div id="f1"><h1>&nbsp;&nbsp;SELL BOOKS, MAKE MONEY...</h1>

				<script>
				function validate()
				{
					var name = document.getElementById('name');
					var password = document.getElementById('password');
					if(name.value=='')
					{
						alert('please enter your name');
						return false;
					}
					if(password.value=='')
					{
						alert('please enter your password');
						return false;
					}
				}
				</script>
				<p>
									<form method="get" onsubmit="return validate()" action="loginvalid.php">
						 <?php
                       error_reporting(E_ALL & ~E_NOTICE);
						 
						 	if(isset($_GET))
							{
								echo $_GET['msg'];
							}
						?>
					</br>
						<label><b><em> Username:</em><b></label>
						<input type="text" id="name" name="name"></br></br> 
						<label><em>Password :</em></label>
						<input type="password" id="password" name="password"></br></br>
						<input type="submit" name="login" id="login" value="LOGIN"></br>
					</form>
				</p>
				<p>forgot password?</p>
				<p>If you are new user?  -  <a href="signup.html" target="a,b,c"><font size="5px" color="red">sign up</font></a></p>
		</div>
	</center>	
</body>
</html>