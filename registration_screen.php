<!DOCTYPE html>
<html>		
	<head>
		<title>Registration screen</title>
		<meta charset="utf-8">
		 <link rel="stylesheet" type=text/css href="css/registration_screen_design.css">
	</head>
	
	
	<body>
	
	
	
	
	
		<div id="registration">
			<form name='form-registration' method="post" action="secure_registration.php">
				
				<span class="fontawesome-envelope"></span>
				<input type="text" name="email"  placeholder="Email" required>
		
				<span class="fontawesome-user"></span>
				<input type="text" name="user" placeholder="Username" required >
				
				<span class="fontawesome-lock"></span>
				<input type="password" name="pass" placeholder="Password" required>
				
				<span class="fontawesome-lock"></span>
				<input type="password" name="reppass" placeholder="Confirm password" required >
				<input type="submit" value="Registrate">
			</form>
		</div>
	</body>
</html>