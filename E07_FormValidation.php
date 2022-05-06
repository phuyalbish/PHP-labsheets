<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<?php
		
			$default=$_POST;
			$name=$_POST['name'];
			$password=$_POST['password'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$flag=0;
			if(strlen($name)==0){
				$m1="username must not be empty.";
				$flag=1;
			}
			if(strlen($name)<6){
				$m2="username must contain atleast 6 characters.";
				$flag=1;
			}
			if(strlen($name)>15){
				$m3="username must not be more than 15 characters.";
				$flag=1;
			}
			if(!preg_match("/[A-Za-z0-9]{6,15}/",$name))
			{
				$m4="username must be alphanumerical.";
				$flag=1;
			}
			if(strlen($password)<6){
				$m5="password must contain atleast 6 characters.";
				$flag=1;
			}
			if(!preg_match("/98[0-9]{8}/",$phone)){
				$m6="phone number must contain 10 digit and start from 98.";
				$flag=1;
			}
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$m7="email must be in validate format.";
				$flag=1;
			}
			
			if($flag==0){
				print "You have successfully submitted the form.<br/>";
			}
			else{
				print '
				<form method="post" action="$_SERVER[PHP_SELF]" name="formval">
					username:<input type="text" name="name" value="'.htmlentities($default['name']).'">';
						if(isset($m1)){
							print "<font color='red'>$m1</font><br/>";
						}
						if(isset($m2)){
							print "<font color='red'>$m2</font><br/>";
						}
						if(isset($m3)){
							print "<font color='red'>$m3</font><br/>";
						}
						if(isset($m4)){
							print "<font color='red'>$m4</font><br/>";
						}

					print 'password:<input type="password" name="password" value="'.htmlentities($default['password']).'">';
					if(isset($m5)){
						print "<font color='red'>$m5</font><br/>";
					}
					
					print'<br/>
						Phone No:<input type="text" name="phone" value="'.htmlentities($default['phone']).'">';
							if(isset($m6)){
								print "<font color='red'>$m6</font><br/>";
							}
							print'<br/>
							email address:<input type="text" name="email" value="'.htmlentities($default['email']).'">';
							if(isset($m7)){
								print "<font color='red'>$m7</font><br/>";
							}
							print'<br/>
							<input type="submit" value="submit"><br/>
					</form>';
			}
		?>
	</body>
</html>