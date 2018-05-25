
<style type="text/css">
		
		.pga { width: 100%;}
		
</style>
<link rel="stylesheet" type="text/css" href="form.css">
<style type="text/css">
		/**{border: 1px solid;}*/
		a{text-decoration: none;}
		ul {list-style-type: none; }
		body{background-color: lightgrey;}
		.pg {display:table; width:50%;background-color: #edf9f3;}
		li {padding: 0px 0px 10px 10px;}
		
	</style>

<body style="margin: 0px; font-family: sans-serif;" >
<div class = "pga">
<?php
include 'init.php';
if(logged_in())
{
	header('Location: index.php');
	exit();
}
include 'template/header.php';
?>


<?php
if(isset($_POST['email'],$_POST['name'],$_POST['password'],$_POST['city'],$_POST['mob_no'],$_POST['subscribe']))
{  
	$email       = $_POST['email'];
	$name        = $_POST['name'];
	$password    = $_POST['password'];
	$city        = $_POST['city'];
	$mob_no      = $_POST['mob_no'];
	$profile     = $_POST['relation'];
	$gender      = $_POST['sex'];
	$religion     = $_POST['religion'];
	$dob        = $_POST['dob'];
	$state       = $_POST['state'];
	
	$errors=array();
	
	if(empty($email) || empty($name) || empty($password) || empty($city) || empty($mob_no) || empty($profile) || 
	empty($gender) || empty($religion) || empty($dob) || empty($state))
	{
		if(empty($email)) echo "Enter Email-id";
		if(empty($name)) echo "Enter name";
		if(empty($password)) echo "Enter password";
		if(empty($city)) echo "Enter city";
		if( empty($mob_no) ) echo "Enter mobile no.";
		if(empty($profile)) ;
		if(empty($gender)) echo "Enter gender";
		if(empty($religion)) echo "Enter religion";
		if( empty($dob)) ; echo "Enter DOB";
		$errors[]= 'All fields required';
	}
	else
	{
		if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
		{
			$errors[]='Email address not valid';
		}
		if(strlen($email)>255 || strlen($email)>35 || strlen($email)>35)
		{
			$errors[]='One or more fields contains too many characters';
		}
		if(user_exists($email)== true)
		{
			$errors[]='That email has already been registered';
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{
			$errors[] = "Only letters and white space allowed in name"; 
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$city)) 
		{
			$errors[] = "Only letters and white space allowed in city name"; 
		}
		if (!preg_match("/^[0-9 ]*$/",$mob_no)) 
		{
			$errors[] = "Only letters and white space allowed in mobile number"; 
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
		//echo $profile,$name,$gender,$day,$month,$year,$religion,$city,$state,$mob_no,$email;
		$register = user_register($profile,$name,$gender,$dob,$religion,$city,$state,$mob_no,$email,$password);
		if($register !== 0)
		$_SESSION['user_id'] = $register;
		//echo $_SESSION['user_id'];
		//echo $register;
		header('Location: index.php');
		//exit();
	}
}
?>

	<br>
	<div class="pg" style="margin: auto; padding-top: 20px;" >
		<form action="" method="post">
		<ul>	
			<h4 style="color:#34495e;text-decoration:none;font-family: sans-serif;" >Take the 1st step to your happy marriage! Register FREE!</h4>
			<li><label>Profile For :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="relation" required="required" >
			<option value="" label="Select" selected="selected">Select</option>
			<option value="Myself">Myself</option>
			<option value="Son">Son</option>
			<option value="Daughter">Daughter</option>
			<option value="Brother">Brother</option>
			<option value="Sister">Sister</option>
			<option value="Relative">Relative</option>
			<option value="Friend">Friend</option>
			</select>
			<li><label for="Name">Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="name" id="Name" required="required" ></li>
			<li><label>Gender :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="sex" value="Male" required="required" />Male
			<input type="radio" name="sex" value="Female" />Female</li>
			<li><label for="dob">DOB :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="date" name="dob" id="dob" required="required"></li>
			<li><label>Religion :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="religion" required="required" >
			<option value="" label="Select" selected="selected">Select</option>
			<option value="Hindu">Hindu</option>
			<option value="Muslim-Shia">Muslim-Shia</option>
			<option value="Muslim-Sunni">Muslim-Sunni</option>
			<option value="Muslim-Others">Muslim-Others</option>
			<option value="Christian">Christian</option>
			<option value="Sikh">Sikh</option>
			<option value="Jain">Jain</option>
			<option value="Parsi">Parsi</option>
			<option value="Buddhist">Buddhist</option>
			<option value="Inter-Religion">Inter-Religion</option>
			</select></li>
			<li><label for="city">City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="city" id="city" required="required" ></li>
			<li><label for="states">State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="state" id="stateofresidence">
    <option value="" label="Select" selected="selected">Select</option>
    <optgroup id="stateofresidence-optgroup-India" label="India">
    <option value="India:Andaman &amp; Nicobar" label="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
    <option value="India:Andhra Pradesh" label="Andhra Pradesh">Andhra Pradesh</option>
    <option value="India:Arunachal Pradesh" label="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="India:Assam" label="Assam">Assam</option>
    <option value="India:Bihar" label="Bihar">Bihar</option>
    <option value="India:Chandigarh" label="Chandigarh">Chandigarh</option>
    <option value="India:Chhattisgarh" label="Chhattisgarh">Chhattisgarh</option>
    <option value="India:Dadra &amp; Nagar Haveli" label="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
    <option value="India:Daman &amp; Diu" label="Daman &amp; Diu">Daman &amp; Diu</option>
    <option value="India:Delhi-NCR" label="Delhi-NCR">Delhi-NCR</option>
    <option value="India:Goa" label="Goa">Goa</option>
    <option value="India:Gujarat" label="Gujarat">Gujarat</option>
    <option value="India:Haryana" label="Haryana">Haryana</option>
    <option value="India:Himachal Pradesh" label="Himachal Pradesh">Himachal Pradesh</option>
    <option value="India:Jammu &amp; Kashmir" label="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
    <option value="India:Jharkhand" label="Jharkhand">Jharkhand</option>
    <option value="India:Karnataka" label="Karnataka">Karnataka</option>
    <option value="India:Kerala" label="Kerala">Kerala</option>
    <option value="India:Lakshadweep" label="Lakshadweep">Lakshadweep</option>
    <option value="India:Madhya Pradesh" label="Madhya Pradesh">Madhya Pradesh</option>
    <option value="India:Maharashtra" label="Maharashtra">Maharashtra</option>
    <option value="India:Manipur" label="Manipur">Manipur</option>
    <option value="India:Meghalaya" label="Meghalaya">Meghalaya</option>
    <option value="India:Mizoram" label="Mizoram">Mizoram</option>
    <option value="India:Nagaland" label="Nagaland">Nagaland</option>
    <option value="India:Orissa" label="Orissa">Orissa</option>
    <option value="India:Pondicherry" label="Pondicherry">Pondicherry</option>
    <option value="India:Punjab" label="Punjab">Punjab</option>
    <option value="India:Rajasthan" label="Rajasthan">Rajasthan</option>
    <option value="India:Sikkim" label="Sikkim">Sikkim</option>
    <option value="India:Tamil Nadu" label="Tamil Nadu">Tamil Nadu</option>
    <option value="India:Telangana" label="Telangana">Telangana</option>
    <option value="India:Tripura" label="Tripura">Tripura</option>
    <option value="India:Uttar Pradesh" label="Uttar Pradesh">Uttar Pradesh</option>
    <option value="India:Uttaranchal" label="Uttaranchal">Uttaranchal</option>
    <option value="India:West Bengal" label="West Bengal">West Bengal</option>
    <option value="India:Other" label="Other">Other</option>
    </optgroup>
    </select></li>
			<li><label for="mob_no">Mobile Number : &nbsp;</label>
			<input type="text" name="mob_no" id="mob_no" required="required" ></li>
			<li><label for="email">Email Id :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="email" id="email" required="required" ></li>
			<li><label for="password">Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="Password" name="password" id="password" required="required" ></li>
			<li><label>
			<input type="checkbox" name="subscribe" checked="checked"/>
			I have agreed to the <a href="">Terms & Conditions</a> & have read & understood the <a href="">Privacy Policy</a></label><br/></li>
			<input type="submit" value="Join Now">
		</ul>
		</form>
	</div>

	<?php
	include 'template/footer.php';
	?>
	</div>
		</body>