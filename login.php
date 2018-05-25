<style type="text/css">
		.pga { width: 100%; margin:auto auto auto auto;}
</style>
<style type="text/css">
		body{background-color: lightgrey;}
		.pg { display:table; width:50%;background-color: #edf9f3;margin:auto;padding-top: 20px;}
</style>

<link rel="stylesheet" type="text/css" href="form.css">
<body style="margin: 0px;font-family: sans-serif;">

<div class = "pga">
<?php
include 'init.php';
if(logged_in())
{
	include 'template/header.php';
	$user_data = (user_data('name','email'));
	echo 'Helloooo , ',$user_data['name'] ;
}
else
{
include 'template/header.php';
?>
<br>
<div class="pg">
<form action ="" method="post">
<p>
<div style="margin:0 auto 0 200px;">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<input type ="email" name="login_email" required="required" /></div>
<br>
<div style="margin:0 auto 0 200px;">Password:<input type ="password" name="login_password" required="required" /></div>
<div style="margin:0 auto 0 200px;"><input type="submit" value ="Log In" /></div>
</p>
</form>
</div>


<?php
}
if(isset($_POST['login_email'] ,$_POST['login_password']))
{
	//echo 'Ok';
	$login_email = $_POST['login_email'];
	$login_password = $_POST['login_password'];
	
	$errors = array();
	if(empty($login_email) || empty($login_password))
	{
		$errors[]='Email and password required';
	}
	else
	{
		$login = login_check($login_email,$login_password);
		if($login === false)
		{
			$errors[] = 'Unable to log you in';
		}
				
	}
	if(!empty($errors))
	{
		foreach($errors as $error)
			{
				echo $error,'<br/>';
			}
	}
	else
	{
		$_SESSION['user_id'] = $login;
		$user = $login;
		echo $user;
		header('Location: login.php');
		exit();
	}
}
include 'template/footer.php';
?>
</div>
</body>