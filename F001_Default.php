<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<?php
		
			$default=$_POST;
            print "
            <form method='post' action='".$_SERVER[PHP_SELF]."' name='formval'>
                username:<input type='text' name='name' value='".htmlentities($default['name'])."'>
                password:<input type='password' name='password' value='".htmlentities($default['password'])."'><br/>
                Phone No:<input type='text' name='phone' value='".htmlentities($default['phone'])."'><br/>
                Email:<input type='text' name='email' value='".htmlentities($default['email'])."'><br/>
                <input type='submit' value='submit'><br/>
                </form>";
        ?>