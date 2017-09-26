
<!doctype html>
<html>
    <head>
	<meta charset="UTF-8">
		<title>SIGNUP_SYSTEM</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			body{
			   background-image: url("./heroes.png");
			   background-size: cover;
			}
			.aa{
			   width:300px;
			   height:400px;
			   background-color:rgba(0,0,0,0.4);
			   margin:0 auto;
			   margin-top:40px;
			   padding-top:10px;
			   padding-left:50px;
			   font-size:18px;
			   border-radius:15px;
			   -webkit-border-radius:15px;
			   -c-border-radius:15px;
			   color:white;
			   font-weight:bolder;
			   box-shadow:inset -4px -4px rgba(0,0,0,0.5);
			   
			}
			.aa input[type="text"]{
			 width:200px;
			 padding-left:5px;
			 height:35px;
			 border:0;
			 border-radius:5px;
			 -webkit-border-radius:5px;
			 -c-border-radius:5px;
			}
			
			
			.aa input[type="password"]{
			 width:200px;
			 height:35px;
			 padding-left:5px;
			 border:0;
			 border-radius:5px;
			 -webkit-border-radius:5px;
			 -c-border-radius:5px;
			}
			
			.aa input[type="submit"]{
			   width:100px;
			   height:35px;
			   border:0;
			   border-radius:5px;
			   -webkit-border-radius:5px;
			   -c-border-radius:5px;
			   background-color:skyblue;
			   font-weight:bolder;
			}
		</style>
	</head>
	<body>
	    <div class="aa">
			<h1>SIGNUP</h1>
			<form action="signup.php" method="POST">
				<input type="text" name="first" placeholder="firstname.."><br><br>
				<input type="text" name="last" placeholder="lastname.."><br><br>
				<input type="text" name="uid" placeholder="Username.."><br><br>
				<input type="password" name="pwd" placeholder="set password.."><br><br>
				<input type="submit" value="signup"><br>
				<a href="main1.php">Login</a>
			</form>
		</div>
	</body>
</html>