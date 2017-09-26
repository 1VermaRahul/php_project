<?php
 session_start();
?>

<!doctype html>
<html>
    <head>
	<meta charset="UTF-8">
		<title>LOGIN_SYSTEM</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			body{
			   background-image: url(avengers.jpg);
			   background-size: cover;
			}
			.aa{
			   width:300px;
			   height:270px;
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
			<h1>login</h1>
			<form>
				<input type="text" placeholder="Please Enter the username.."><br><br>
				<input type="password" placeholder="Please Enter the password.."><br><br>
				<input type="submit" value="login"><br>
				<a href="google.com">Forgot password?</a>
			</form>
			<?php
				if (isset($_SESSION['id'])){
					echo $S_SESSION['id'];
				}else{
					echo "You are not logged in!!";
				}
			?>

		</div>
	</body>
</html>