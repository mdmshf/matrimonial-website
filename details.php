<style type="text/css">
		.pga {width: 100%; margin:auto auto auto auto;}
</style>
<link rel="stylesheet" type="text/css" href="form.css">
	<style type="text/css">
		ul {list-style-type: none; }
		li {padding: 0 0 15px 0;}
		.yourself textarea { width: 300px; height: 50px;  margin-bottom: 15px; font-size: 18px; }
		.family { display:table; width:50%;background-color: #edf9f3;margin: auto;
			 
		.family textarea { width: 300px; height: 50px; margin-bottom: 15px; font-size: 18px;}
		.yourself {display:table; width:50%; background-color:#edf9f3 ;margin: auto;
			 }
        body{background-color: lightgrey;}
        h3{ text-align:center;}
        h2{ text-align:center;}


	</style>
	<body style="margin: 0px; font-family: sans-serif;">	
<div class = "pga">
<?php
include 'init.php';
/*if(logged_in())
{
	header('Location: index.php');
	exit();
}*/
include 'template/header.php';

?>
<?php
if(isset($_POST['Father'],
		$_POST['Mother'],
		$_POST['Siblings'],
		$_POST['Address'],
		$_POST['Weight'],
		$_POST['Hobbies'],
		$_POST['Future'],
		$_POST['About']))
{ 
	$fname=     $_POST['Father'];
	$mname=     $_POST['Mother'];
	$sib=       $_POST['Siblings'];
	$add=       $_POST['Address'];
	$wt=        $_POST['Weight'];
	$hobbies=   $_POST['Hobbies'];
	$fp=        $_POST['Future'];
	$ay=        $_POST['About'];
	$fo=        $_POST['FatherOccupation'];
	$mo=        $_POST['MotherOccupation'];
	$type=      $_POST['type'];
	$tongue=    $_POST['Tounge'];
	$marital=   $_POST['Martial'];
	$occu=      $_POST['Occupation'];
	$income=    $_POST['Income'];
	$edu=       $_POST['edu'];
	$course=    $_POST['Course'];
	$ht=        $_POST['Height'];
	$comp=      $_POST['complexion'];
	$blood=     $_POST['Blood'];
	$smok=      $_POST['smoking'];
	$drink=     $_POST['drinking'];
	
	
	
	/*echo $fname;
	echo $mname;
	echo $sib;
	echo $add;
	echo $wt;
	echo $hobbies;
	echo $fp;
	echo $ay;
	echo $fo;
	echo $mo;
	echo $type;
	echo $tongue;
	echo $marital;
	echo $occu;
	echo $income;
	echo $edu;
	echo $course;
	echo $ht;
	echo $comp;
	echo $blood;
	echo $smok;
	echo $drink;*/
	
	
	$errors=array();
	
	if(empty($fname) || empty($mname) || empty($sib) || empty($add) || empty($wt) || empty($hobbies) || empty($fp) || empty($ay) || 
	empty($fo) || empty($mo) || empty($type) || empty($tongue) || empty($marital) || empty($occu) || empty($income) 
	|| empty($edu) || empty($course) || empty($ht) || 
	empty($comp) || empty($blood) || empty($smok) || empty($drink)  )
	
	{
		$errors[]= 'All fields required';
		//var_dump($errors);
		
		/*if(empty($fname)) echo "1";
		if(empty($mnae) ) echo "2";
		if(empty($sib)) echo "3";
		if(empty($add)) echo "4";
		if(empty($wt)) echo "5";
		if(empty($hobbies)) echo "6";
		if(empty($fp)) echo "7";
		if( empty($ay)) echo "8";
		if(empty($fo) ) echo "9";
		if( empty($mo)) echo "10";
		if(empty($type)) echo "11";
		if(empty($tongue)) echo "12";
		if(empty($marital)) echo "13";
		if( empty($occu)) echo "14";
		if( empty($income) ) echo "15";
		if(empty($edu)) echo "16";
		if(empty($course)) echo "17";
		if( empty($ht) ) echo "18";
		if(	empty($comp)) echo "19";
		if(empty($blood) ) echo "20";
		if(empty($smok) ) echo "21";
		if(empty($drink)) echo "22";*/
	}
	else
	{
		if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
		{
			$errors[] = "Only letters and white space allowed in father\'s name"; 
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$mname)) 
		{
			$errors[] = "Only letters and white space allowed in mother\'s name"; 
		}
		if (!preg_match("/^[0-9]*$/",$sib)) 
		{
			$errors[] = "Only numbers allowed in number of siblings"; 
		}
		if (!preg_match("/^[0-9]*$/",$wt)) 
		{
			$errors[] = "Only numbers allowed in weight"; 
		}
		//var_dump($errors);
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
		//echo $profile,$name,$gender,$day,$month,$year,$religion,$city,$mob_no,$email;
		$register = add_detail($fname,$fo,$mname,$mo,$type,$sib,$tongue,$add,
	$marital,$occu,$income,$edu,$course,$ht,$wt,$comp,$blood,$smok,$drink,$hobbies,$fp,$ay);
		$_SESSION['user_id'] = $register;
		//echo $_SESSION['user_id'];
		//echo $register;
		header('Location: view_details.php');
		//exit();
		//echo "Data Entered in database.";
	}
}
else
{
	//echo "not entering in is_set";
	//echo    $_POST['Father'];
}
?>
	
	

		<br>
		<div class="family" >
		<h2 style="color: black;background-color:#edf9f3 ">Fill your Personal Information.... </h2><br>
		<form action="" method="post">	
			<ul style="list-style-type: none;">
			<h3 style="text-decoration:none">Family Background.... </h3>
			<li><label for="Father's Name">Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="Father" id="Father's Name" required="required" ></li>
			<li><label for="Father's Occupation">Father's Occupation:&nbsp;&nbsp;</label>
			<select name="FatherOccupation" id="Father's Occupation" required="required" >
    <option value="" label="Select" selected="selected">Select</option>
    <optgroup id="occupation-optgroup-Accounting, Banking &amp; Finance" label="Accounting, Banking &amp; Finance">
    </optgroup>
    <option value="Banking Professional" label="Banking Professional">Banking Professional</option>
    <option value="Chartered Accountant" label="Chartered Accountant">Chartered Accountant</option>
    <option value="Company Secretary" label="Company Secretary">Company Secretary</option>
    <option value="Finance Professional" label="Finance Professional">Finance Professional</option>
    <option value="Investment Professional" label="Investment Professional">Investment Professional</option>
    <option value="Accounting Professional (Others)" label="Accounting Professional (Others)">Accounting Professional (Others)</option>
    <optgroup id="occupation-optgroup-Administration &amp; HR" label="Administration &amp; HR">
    </optgroup>
    <option value="Admin Professional" label="Admin Professional">Admin Professional</option>
    <option value="Human Resources Professional" label="Human Resources Professional">Human Resources Professional</option>
    <optgroup id="occupation-optgroup-Advertising, Media &amp; Entertainment" label="Advertising, Media &amp; Entertainment">
    </optgroup>
    <option value="Actor" label="Actor">Actor</option>
    <option value="Advertising Professional" label="Advertising Professional">Advertising Professional</option>
    <option value="Entertainment Professional" label="Entertainment Professional">Entertainment Professional</option>
    <option value="Event Manager" label="Event Manager">Event Manager</option>
    <option value="Journalist" label="Journalist">Journalist</option>
    <option value="Media Professional" label="Media Professional">Media Professional</option>
    <option value="Public Relations Professional" label="Public Relations Professional">Public Relations Professional</option>
    <optgroup id="occupation-optgroup-Agriculture" label="Agriculture">
    </optgroup>
    <option value="Farming" label="Farming">Farming</option>
    <option value="Horticulturist" label="Horticulturist">Horticulturist</option>
    <option value="Agricultural Professional (Others)" label="Agricultural Professional (Others)">Agricultural Professional (Others)</option>
    <optgroup id="occupation-optgroup-Airline &amp; Aviation" label="Airline &amp; Aviation">
    </optgroup>
    <option value="Air Hostess / Flight Attendant" label="Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option>
    <option value="Pilot / Co-Pilot" label="Pilot / Co-Pilot">Pilot / Co-Pilot</option>
    <option value="Other Airline Professional" label="Other Airline Professional">Other Airline Professional</option>
    <optgroup id="occupation-optgroup-Architecture &amp; Design" label="Architecture &amp; Design">
    </optgroup>
    <option value="Architect" label="Architect">Architect</option>
    <option value="Interior Designer" label="Interior Designer">Interior Designer</option>
    <option value="Landscape Architect" label="Landscape Architect">Landscape Architect</option>
    <optgroup id="occupation-optgroup-Artists, Animators &amp; Web Designers" label="Artists, Animators &amp; Web Designers">
    </optgroup>
    <option value="Animator" label="Animator">Animator</option>
    <option value="Commercial Artist" label="Commercial Artist">Commercial Artist</option>
    <option value="Web / UX Designers" label="Web / UX Designers">Web / UX Designers</option>
    <option value="Artist (Others)" label="Artist (Others)">Artist (Others)</option>
    <optgroup id="occupation-optgroup-Beauty, Fashion &amp; Jewellery Designers" label="Beauty, Fashion &amp; Jewellery Designers">
    </optgroup>
    <option value="Beautician" label="Beautician">Beautician</option>
    <option value="Fashion Designer" label="Fashion Designer">Fashion Designer</option>
    <option value="Hairstylist" label="Hairstylist">Hairstylist</option>
    <option value="Jewellery Designer" label="Jewellery Designer">Jewellery Designer</option>
    <option value="Designer (Others)" label="Designer (Others)">Designer (Others)</option>
    <optgroup id="occupation-optgroup-BPO, KPO, &amp; Customer Support" label="BPO, KPO, &amp; Customer Support">
    </optgroup>
    <option value="Customer Support / BPO / KPO Professional" label="Customer Support / BPO / KPO Professional">Customer Support / BPO / KPO Professional</option>
    <optgroup id="occupation-optgroup-Civil Services / Law Enforcement" label="Civil Services / Law Enforcement">
    </optgroup>
    <option value="IAS / IRS / IES / IFS" label="IAS / IRS / IES / IFS">IAS / IRS / IES / IFS</option>
    <option value="Indian Police Services (IPS)" label="Indian Police Services (IPS)">Indian Police Services (IPS)</option>
    <option value="Law Enforcement Employee (Others)" label="Law Enforcement Employee (Others)">Law Enforcement Employee (Others)</option>
    <optgroup id="occupation-optgroup-Defense" label="Defense">
    </optgroup>
    <option value="Airforce" label="Airforce">Airforce</option>
    <option value="Army" label="Army">Army</option>
    <option value="Navy" label="Navy">Navy</option>
    <option value="Defense Services (Others)" label="Defense Services (Others)">Defense Services (Others)</option>
    <optgroup id="occupation-optgroup-Education &amp; Training" label="Education &amp; Training">
    </optgroup>
    <option value="Lecturer" label="Lecturer">Lecturer</option>
    <option value="Professor" label="Professor">Professor</option>
    <option value="Research Assistant" label="Research Assistant">Research Assistant</option>
    <option value="Research Scholar" label="Research Scholar">Research Scholar</option>
    <option value="Teacher" label="Teacher">Teacher</option>
    <option value="Training Professional (Others)" label="Training Professional (Others)">Training Professional (Others)</option>
    <optgroup id="occupation-optgroup-Engineering" label="Engineering">
    </optgroup>
    <option value="Civil Engineer" label="Civil Engineer">Civil Engineer</option>
    <option value="Electronics / Telecom Engineer" label="Electronics / Telecom Engineer">Electronics / Telecom Engineer</option>
    <option value="Mechanical / Production Engineer" label="Mechanical / Production Engineer">Mechanical / Production Engineer</option>
    <option value="Non IT Engineer (Others)" label="Non IT Engineer (Others)">Non IT Engineer (Others)</option>
    <optgroup id="occupation-optgroup-Hotel &amp; Hospitality" label="Hotel &amp; Hospitality">
    </optgroup>
    <option value="Chef / Sommelier / Food Critic" label="Chef / Sommelier / Food Critic">Chef / Sommelier / Food Critic</option>
    <option value="Catering Professional" label="Catering Professional">Catering Professional</option>
    <option value="Hotel &amp; Hospitality Professional (Others)" label="Hotel &amp; Hospitality Professional (Others)">Hotel &amp; Hospitality Professional (Others)</option>
    <optgroup id="occupation-optgroup-IT &amp; Software Engineering" label="IT &amp; Software Engineering">
    </optgroup>
    <option value="Software Developer / Programmer" label="Software Developer / Programmer">Software Developer / Programmer</option>
    <option value="Software Consultant" label="Software Consultant">Software Consultant</option>
    <option value="Hardware &amp; Networking professional" label="Hardware &amp; Networking professional">Hardware &amp; Networking professional</option>
    <option value="Software Professional (Others)" label="Software Professional (Others)">Software Professional (Others)</option>
    <optgroup id="occupation-optgroup-Legal" label="Legal">
    </optgroup>
    <option value="Lawyer" label="Lawyer">Lawyer</option>
    <option value="Legal Assistant" label="Legal Assistant">Legal Assistant</option>
    <option value="Legal Professional (Others)" label="Legal Professional (Others)">Legal Professional (Others)</option>
    <optgroup id="occupation-optgroup-Medical &amp; Healthcare" label="Medical &amp; Healthcare">
    </optgroup>
    <option value="Dentist" label="Dentist">Dentist</option>
    <option value="Doctor" label="Doctor">Doctor</option>
    <option value="Medical Transcriptionist" label="Medical Transcriptionist">Medical Transcriptionist</option>
    <option value="Nurse" label="Nurse">Nurse</option>
    <option value="Pharmacist" label="Pharmacist">Pharmacist</option>
    <option value="Physician Assistant" label="Physician Assistant">Physician Assistant</option>
    <option value="Physiotherapist / Occupational Therapist" label="Physiotherapist / Occupational Therapist">Physiotherapist / Occupational Therapist</option>
    <option value="Psychologist" label="Psychologist">Psychologist</option>
    <option value="Surgeon" label="Surgeon">Surgeon</option>
    <option value="Veterinary Doctor" label="Veterinary Doctor">Veterinary Doctor</option>
    <option value="Therapist (Others)" label="Therapist (Others)">Therapist (Others)</option>
    <option value="Medical / Healthcare Professional (Others)" label="Medical / Healthcare Professional (Others)">Medical / Healthcare Professional (Others)</option>
    <optgroup id="occupation-optgroup-Merchant Navy" label="Merchant Navy">
    </optgroup>
    <option value="Merchant Naval Officer" label="Merchant Naval Officer">Merchant Naval Officer</option>
    <option value="Mariner" label="Mariner">Mariner</option>
    <optgroup id="occupation-optgroup-Sales &amp; Marketing" label="Sales &amp; Marketing">
    </optgroup>
    <option value="Marketing Professional" label="Marketing Professional">Marketing Professional</option>
    <option value="Sales Professional" label="Sales Professional">Sales Professional</option>
    <optgroup id="occupation-optgroup-Science" label="Science">
    </optgroup>
    <option value="Biologist / Botanist" label="Biologist / Botanist">Biologist / Botanist</option>
    <option value="Physicist" label="Physicist">Physicist</option>
    <option value="Science Professional (Others)" label="Science Professional (Others)">Science Professional (Others)</option>
    <optgroup id="occupation-optgroup-Corporate Professionals" label="Corporate Professionals">
    </optgroup>
    <option value="CxO / Chairman / Director / President" label="CxO / Chairman / Director / President">CxO / Chairman / Director / President</option>
    <option value="VP / AVP / GM / DGM" label="VP / AVP / GM / DGM">VP / AVP / GM / DGM</option>
    <option value="Sr. Manager / Manager" label="Sr. Manager / Manager">Sr. Manager / Manager</option>
    <option value="Consultant / Supervisor / Team Leads" label="Consultant / Supervisor / Team Leads">Consultant / Supervisor / Team Leads</option>
    <option value="Team Member / Staff" label="Team Member / Staff">Team Member / Staff</option>
    <optgroup id="occupation-optgroup-Others" label="Others">
    </optgroup>
    <option value="Agent / Broker / Trader / Contractor" label="Agent / Broker / Trader / Contractor">Agent / Broker / Trader / Contractor</option>
    <option value="Business Owner / Entrepreneur" label="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
    <option value="Politician" label="Politician">Politician</option>
    <option value="Social Worker / Volunteer / NGO" label="Social Worker / Volunteer / NGO">Social Worker / Volunteer / NGO</option>
    <option value="Sportsman" label="Sportsman">Sportsman</option>
    <option value="Travel &amp; Transport Professional" label="Travel &amp; Transport Professional">Travel &amp; Transport Professional</option>
    <option value="Writer" label="Writer">Writer</option>
    <optgroup id="occupation-optgroup-Non Working" label="Non Working">
    </optgroup>
    <option value="Student" label="Student">Student</option>
    <option value="Retired" label="Retired">Retired</option>
    <option value="Not working" label="Not working">Not working</option>
</select> </li>          
			<li><label for="Mother's Name">Mother's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="Mother" id="Mother's Name" required="required" ></li>
			<li><label for="Mother's Occupation">Mother's Occupation:&nbsp;</label>
			<select name="MotherOccupation" id="Mother's Occupation" required="required" >
    <option value="" label="Select" selected="selected">Select</option>
    <optgroup id="occupation-optgroup-Accounting, Banking &amp; Finance" label="Accounting, Banking &amp; Finance">
    </optgroup>
    <option value="Banking Professional" label="Banking Professional">Banking Professional</option>
    <option value="Chartered Accountant" label="Chartered Accountant">Chartered Accountant</option>
    <option value="Company Secretary" label="Company Secretary">Company Secretary</option>
    <option value="Finance Professional" label="Finance Professional">Finance Professional</option>
    <option value="Investment Professional" label="Investment Professional">Investment Professional</option>
    <option value="Accounting Professional (Others)" label="Accounting Professional (Others)">Accounting Professional (Others)</option>
    <optgroup id="occupation-optgroup-Administration &amp; HR" label="Administration &amp; HR">
    </optgroup>
    <option value="Admin Professional" label="Admin Professional">Admin Professional</option>
    <option value="Human Resources Professional" label="Human Resources Professional">Human Resources Professional</option>
    <optgroup id="occupation-optgroup-Advertising, Media &amp; Entertainment" label="Advertising, Media &amp; Entertainment">
    </optgroup>
    <option value="Actor" label="Actor">Actor</option>
    <option value="Advertising Professional" label="Advertising Professional">Advertising Professional</option>
    <option value="Entertainment Professional" label="Entertainment Professional">Entertainment Professional</option>
    <option value="Event Manager" label="Event Manager">Event Manager</option>
    <option value="Journalist" label="Journalist">Journalist</option>
    <option value="Media Professional" label="Media Professional">Media Professional</option>
    <option value="Public Relations Professional" label="Public Relations Professional">Public Relations Professional</option>
    <optgroup id="occupation-optgroup-Agriculture" label="Agriculture">
    </optgroup>
    <option value="Farming" label="Farming">Farming</option>
    <option value="Horticulturist" label="Horticulturist">Horticulturist</option>
    <option value="Agricultural Professional (Others)" label="Agricultural Professional (Others)">Agricultural Professional (Others)</option>
    <optgroup id="occupation-optgroup-Airline &amp; Aviation" label="Airline &amp; Aviation">
    </optgroup>
    <option value="Air Hostess / Flight Attendant" label="Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option>
    <option value="Pilot / Co-Pilot" label="Pilot / Co-Pilot">Pilot / Co-Pilot</option>
    <option value="Other Airline Professional" label="Other Airline Professional">Other Airline Professional</option>
    <optgroup id="occupation-optgroup-Architecture &amp; Design" label="Architecture &amp; Design">
    </optgroup>
    <option value="Architect" label="Architect">Architect</option>
    <option value="Interior Designer" label="Interior Designer">Interior Designer</option>
    <option value="Landscape Architect" label="Landscape Architect">Landscape Architect</option>
    <optgroup id="occupation-optgroup-Artists, Animators &amp; Web Designers" label="Artists, Animators &amp; Web Designers">
    </optgroup>
    <option value="Animator" label="Animator">Animator</option>
    <option value="Commercial Artist" label="Commercial Artist">Commercial Artist</option>
    <option value="Web / UX Designers" label="Web / UX Designers">Web / UX Designers</option>
    <option value="Artist (Others)" label="Artist (Others)">Artist (Others)</option>
    <optgroup id="occupation-optgroup-Beauty, Fashion &amp; Jewellery Designers" label="Beauty, Fashion &amp; Jewellery Designers">
    </optgroup>
    <option value="Beautician" label="Beautician">Beautician</option>
    <option value="Fashion Designer" label="Fashion Designer">Fashion Designer</option>
    <option value="Hairstylist" label="Hairstylist">Hairstylist</option>
    <option value="Jewellery Designer" label="Jewellery Designer">Jewellery Designer</option>
    <option value="Designer (Others)" label="Designer (Others)">Designer (Others)</option>
    <optgroup id="occupation-optgroup-BPO, KPO, &amp; Customer Support" label="BPO, KPO, &amp; Customer Support">
    </optgroup>
    <option value="Customer Support / BPO / KPO Professional" label="Customer Support / BPO / KPO Professional">Customer Support / BPO / KPO Professional</option>
    <optgroup id="occupation-optgroup-Civil Services / Law Enforcement" label="Civil Services / Law Enforcement">
    </optgroup>
    <option value="IAS / IRS / IES / IFS" label="IAS / IRS / IES / IFS">IAS / IRS / IES / IFS</option>
    <option value="Indian Police Services (IPS)" label="Indian Police Services (IPS)">Indian Police Services (IPS)</option>
    <option value="Law Enforcement Employee (Others)" label="Law Enforcement Employee (Others)">Law Enforcement Employee (Others)</option>
    <optgroup id="occupation-optgroup-Defense" label="Defense">
    </optgroup>
    <option value="Airforce" label="Airforce">Airforce</option>
    <option value="Army" label="Army">Army</option>
    <option value="Navy" label="Navy">Navy</option>
    <option value="Defense Services (Others)" label="Defense Services (Others)">Defense Services (Others)</option>
    <optgroup id="occupation-optgroup-Education &amp; Training" label="Education &amp; Training">
    </optgroup>
    <option value="Lecturer" label="Lecturer">Lecturer</option>
    <option value="Professor" label="Professor">Professor</option>
    <option value="Research Assistant" label="Research Assistant">Research Assistant</option>
    <option value="Research Scholar" label="Research Scholar">Research Scholar</option>
    <option value="Teacher" label="Teacher">Teacher</option>
    <option value="Training Professional (Others)" label="Training Professional (Others)">Training Professional (Others)</option>
    <optgroup id="occupation-optgroup-Engineering" label="Engineering">
    </optgroup>
    <option value="Civil Engineer" label="Civil Engineer">Civil Engineer</option>
    <option value="Electronics / Telecom Engineer" label="Electronics / Telecom Engineer">Electronics / Telecom Engineer</option>
    <option value="Mechanical / Production Engineer" label="Mechanical / Production Engineer">Mechanical / Production Engineer</option>
    <option value="Non IT Engineer (Others)" label="Non IT Engineer (Others)">Non IT Engineer (Others)</option>
    <optgroup id="occupation-optgroup-Hotel &amp; Hospitality" label="Hotel &amp; Hospitality">
    </optgroup>
    <option value="Chef / Sommelier / Food Critic" label="Chef / Sommelier / Food Critic">Chef / Sommelier / Food Critic</option>
    <option value="Catering Professional" label="Catering Professional">Catering Professional</option>
    <option value="Hotel &amp; Hospitality Professional (Others)" label="Hotel &amp; Hospitality Professional (Others)">Hotel &amp; Hospitality Professional (Others)</option>
    <optgroup id="occupation-optgroup-IT &amp; Software Engineering" label="IT &amp; Software Engineering">
    </optgroup>
    <option value="Software Developer / Programmer" label="Software Developer / Programmer">Software Developer / Programmer</option>
    <option value="Software Consultant" label="Software Consultant">Software Consultant</option>
    <option value="Hardware &amp; Networking professional" label="Hardware &amp; Networking professional">Hardware &amp; Networking professional</option>
    <option value="Software Professional (Others)" label="Software Professional (Others)">Software Professional (Others)</option>
    <optgroup id="occupation-optgroup-Legal" label="Legal">
    </optgroup>
    <option value="Lawyer" label="Lawyer">Lawyer</option>
    <option value="Legal Assistant" label="Legal Assistant">Legal Assistant</option>
    <option value="Legal Professional (Others)" label="Legal Professional (Others)">Legal Professional (Others)</option>
    <optgroup id="occupation-optgroup-Medical &amp; Healthcare" label="Medical &amp; Healthcare">
    </optgroup>
    <option value="Dentist" label="Dentist">Dentist</option>
    <option value="Doctor" label="Doctor">Doctor</option>
    <option value="Medical Transcriptionist" label="Medical Transcriptionist">Medical Transcriptionist</option>
    <option value="Nurse" label="Nurse">Nurse</option>
    <option value="Pharmacist" label="Pharmacist">Pharmacist</option>
    <option value="Physician Assistant" label="Physician Assistant">Physician Assistant</option>
    <option value="Physiotherapist / Occupational Therapist" label="Physiotherapist / Occupational Therapist">Physiotherapist / Occupational Therapist</option>
    <option value="Psychologist" label="Psychologist">Psychologist</option>
    <option value="Surgeon" label="Surgeon">Surgeon</option>
    <option value="Veterinary Doctor" label="Veterinary Doctor">Veterinary Doctor</option>
    <option value="Therapist (Others)" label="Therapist (Others)">Therapist (Others)</option>
    <option value="Medical / Healthcare Professional (Others)" label="Medical / Healthcare Professional (Others)">Medical / Healthcare Professional (Others)</option>
    <optgroup id="occupation-optgroup-Merchant Navy" label="Merchant Navy">
    </optgroup>
    <option value="Merchant Naval Officer" label="Merchant Naval Officer">Merchant Naval Officer</option>
    <option value="Mariner" label="Mariner">Mariner</option>
    <optgroup id="occupation-optgroup-Sales &amp; Marketing" label="Sales &amp; Marketing">
    </optgroup>
    <option value="Marketing Professional" label="Marketing Professional">Marketing Professional</option>
    <option value="Sales Professional" label="Sales Professional">Sales Professional</option>
    <optgroup id="occupation-optgroup-Science" label="Science">
    </optgroup>
    <option value="Biologist / Botanist" label="Biologist / Botanist">Biologist / Botanist</option>
    <option value="Physicist" label="Physicist">Physicist</option>
    <option value="Science Professional (Others)" label="Science Professional (Others)">Science Professional (Others)</option>
    <optgroup id="occupation-optgroup-Corporate Professionals" label="Corporate Professionals">
    </optgroup>
    <option value="CxO / Chairman / Director / President" label="CxO / Chairman / Director / President">CxO / Chairman / Director / President</option>
    <option value="VP / AVP / GM / DGM" label="VP / AVP / GM / DGM">VP / AVP / GM / DGM</option>
    <option value="Sr. Manager / Manager" label="Sr. Manager / Manager">Sr. Manager / Manager</option>
    <option value="Consultant / Supervisor / Team Leads" label="Consultant / Supervisor / Team Leads">Consultant / Supervisor / Team Leads</option>
    <option value="Team Member / Staff" label="Team Member / Staff">Team Member / Staff</option>
    <optgroup id="occupation-optgroup-Others" label="Others">
    </optgroup>
    <option value="Agent / Broker / Trader / Contractor" label="Agent / Broker / Trader / Contractor">Agent / Broker / Trader / Contractor</option>
    <option value="Business Owner / Entrepreneur" label="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
    <option value="Politician" label="Politician">Politician</option>
    <option value="Social Worker / Volunteer / NGO" label="Social Worker / Volunteer / NGO">Social Worker / Volunteer / NGO</option>
    <option value="Sportsman" label="Sportsman">Sportsman</option>
    <option value="Travel &amp; Transport Professional" label="Travel &amp; Transport Professional">Travel &amp; Transport Professional</option>
    <option value="Writer" label="Writer">Writer</option>
    <optgroup id="occupation-optgroup-Non Working" label="Non Working">
    </optgroup>
    <option value="Student" label="Student">Student</option>
    <option value="Retired" label="Retired">Retired</option>
    <option value="Not working" label="Not working">Not working</option>
</select></li>       
			<li><label for="family type">Family type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="type" value="Joint" required="required" />Joint
			<input type="radio" name="type" value="Nuclear"/>Nuclear</li>
			<li><label for="No. of Siblings">No. of Siblings:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="Siblings" id="No. of Siblings" required="required" ></li>
			<li><label for="Mother Tongue">Mother Tongue:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="Tounge" id="Mother Tounge" required="required" >
                                <option value="" label="Select" selected="selected">Select</option>
                                <optgroup id='mother_tongue-optgroup-Frequently Used' label='Frequently Used'>Frequently Used</optgroup>
								<option value="Assamese" >Assamese</option><option value="Bengali" >Bengali</option><option value=
								"English" >English</option><option value="Gujarati" >Gujarati</option><option value="Hindi">
								Hindi</option><option value="Kannada" >Kannada</option><option value="Konkani" >Konkani</option>
								<option value="Malayalam" >Malayalam</option><option value="Marathi" >Marathi</option><option value=
								"Marwari" >Marwari</option><option value="Odia" >Odia</option><option value="Punjabi" >Punjabi</option>
								<option value="Sindhi" >Sindhi</option><option value="Tamil" >Tamil</option><option value="Telugu" >
								Telugu</option><option value="Urdu" >Urdu</option><optgroup 
								id='mother_tongue-optgroup-All Mother Tongues' label='All Mother Tongues'>All Mother Tongues</optgroup>
								<option value="Aka" >Aka</option><option value="Arabic" >Arabic</option><option value="Arunachali" >
								Arunachali</option><option value="Assamese" >Assamese</option><option value="Awadhi" >Awadhi</option>
								<option value="Baluchi" >Baluchi</option><option value="Bengali" >Bengali</option><option value="Bhojpuri"
								>Bhojpuri</option><option value="Bhutia" >Bhutia</option><option value="Brahui" >Brahui</option>
								<option value="Brij" >Brij</option><option value="Burmese" >Burmese</option><option value="Chattisgarhi" >
								Chattisgarhi</option><option value="Chinese" >Chinese</option><option value="Coorgi" >Coorgi</option><
								option value="Dogri" >Dogri</option><option value="English" >English</option><option value="French" >
								French</option><option value="Garhwali" >Garhwali</option><option value="Garo" >Garo</option><option 
								value="Gujarati" >Gujarati</option><option value="Haryanavi" >Haryanavi</option><option value=
								"Himachali/Pahari" >Himachali/Pahari</option><option value="Hindi" >Hindi</option><option value="Hindko"
								>Hindko</option><option value="Kakbarak" >Kakbarak</option><option value="Kanauji" >Kanauji</option>
								<option value="Kannada" >Kannada</option><option value="Kashmiri" >Kashmiri</option><option value=
								"Khandesi" >Khandesi</option><option value="Khasi" >Khasi</option><option value="Konkani" >Konkani</option>
								<option value="Koshali" >Koshali</option><option value="Kumaoni" >Kumaoni</option><option value="Kutchi" >
								Kutchi</option><option value="Ladakhi" >Ladakhi</option><option value="Lepcha" >Lepcha</option><option 
								value="Magahi" >Magahi</option><option value="Maithili" >Maithili</option><option value="Malay" >Malay
								</option><option value="Malayalam" >Malayalam</option><option value="Manipuri" >Manipuri</option><option
								value="Marathi" >Marathi</option><option value="Marwari" >Marwari</option><option value="Miji" >Miji
								</option><option value="Mizo" >Mizo</option><option value="Monpa" >Monpa</option><option value="Nepali" >
								Nepali</option><option value="Odia" >Odia</option><option value="Pashto" >Pashto</option><option value=
								"Persian" >Persian</option><option value="Punjabi" >Punjabi</option><option value="Rajasthani" >Rajasthani
								</option><option value="Russian" >Russian</option><option value="Sanskrit" >Sanskrit</option><option 
								value="Santhali" >Santhali</option><option value="Seraiki" >Seraiki</option><option value="Sindhi" >
								Sindhi</option><option value="Sinhala" >Sinhala</option><option value="Sourashtra" >Sourashtra</option>
								<option value="Spanish" >Spanish</option><option value="Swedish" >Swedish</option><option value="Tagalog"
								>Tagalog</option><option value="Tamil" >Tamil</option><option value="Telugu" >Telugu</option><option 
								value="Tulu" >Tulu</option><option value="Urdu" >Urdu</option><option value="Other" >Other</option>   
								</select></li>
			<li><label for="Address">Address:</label><br>
			<textarea name="Address" id="Address" required="required" ></textarea></li>
			</ul>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	<div class="yourself">
	<!	<form action="" method="post.php">
			<ul>
						<h3 style="text-decoration:none">About Yourself.... </h3>
			<li><label for="Martial Status">Martial Status:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="Martial" required="required" >
				<option value="" label="Select" selected="selected">Select</option>
				<option value="unmarried" label="Unmarried">Unmarried</option>
				<option value="Divorced" label="Divorced">Divorced</option>
				<option value="Widowed" label="Widowed">Widowed</option>
				<option value="Awaiting Divorce" label="Awaiting Divorce">Awaiting Divorce</option>
				<option value="Annulled" label="Annulled">Annulled</option>
			</select></li>
			<li><label for="Occupation">Occupation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="Occupation" id="Occupation" required="required" >
    <option value="" label="Select" selected="selected">Select</option>
    <optgroup id="occupation-optgroup-Accounting, Banking &amp; Finance" label="Accounting, Banking &amp; Finance">
    </optgroup>
    <option value="Banking Professional" label="Banking Professional">Banking Professional</option>
    <option value="Chartered Accountant" label="Chartered Accountant">Chartered Accountant</option>
    <option value="Company Secretary" label="Company Secretary">Company Secretary</option>
    <option value="Finance Professional" label="Finance Professional">Finance Professional</option>
    <option value="Investment Professional" label="Investment Professional">Investment Professional</option>
    <option value="Accounting Professional (Others)" label="Accounting Professional (Others)">Accounting Professional (Others)</option>
    <optgroup id="occupation-optgroup-Administration &amp; HR" label="Administration &amp; HR">
    </optgroup>
    <option value="Admin Professional" label="Admin Professional">Admin Professional</option>
    <option value="Human Resources Professional" label="Human Resources Professional">Human Resources Professional</option>
    <optgroup id="occupation-optgroup-Advertising, Media &amp; Entertainment" label="Advertising, Media &amp; Entertainment">
    </optgroup>
    <option value="Actor" label="Actor">Actor</option>
    <option value="Advertising Professional" label="Advertising Professional">Advertising Professional</option>
    <option value="Entertainment Professional" label="Entertainment Professional">Entertainment Professional</option>
    <option value="Event Manager" label="Event Manager">Event Manager</option>
    <option value="Journalist" label="Journalist">Journalist</option>
    <option value="Media Professional" label="Media Professional">Media Professional</option>
    <option value="Public Relations Professional" label="Public Relations Professional">Public Relations Professional</option>
    <optgroup id="occupation-optgroup-Agriculture" label="Agriculture">
    </optgroup>
    <option value="Farming" label="Farming">Farming</option>
    <option value="Horticulturist" label="Horticulturist">Horticulturist</option>
    <option value="Agricultural Professional (Others)" label="Agricultural Professional (Others)">Agricultural Professional (Others)</option>
    <optgroup id="occupation-optgroup-Airline &amp; Aviation" label="Airline &amp; Aviation">
    </optgroup>
    <option value="Air Hostess / Flight Attendant" label="Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option>
    <option value="Pilot / Co-Pilot" label="Pilot / Co-Pilot">Pilot / Co-Pilot</option>
    <option value="Other Airline Professional" label="Other Airline Professional">Other Airline Professional</option>
    <optgroup id="occupation-optgroup-Architecture &amp; Design" label="Architecture &amp; Design">
    </optgroup>
    <option value="Architect" label="Architect">Architect</option>
    <option value="Interior Designer" label="Interior Designer">Interior Designer</option>
    <option value="Landscape Architect" label="Landscape Architect">Landscape Architect</option>
    <optgroup id="occupation-optgroup-Artists, Animators &amp; Web Designers" label="Artists, Animators &amp; Web Designers">
    </optgroup>
    <option value="Animator" label="Animator">Animator</option>
    <option value="Commercial Artist" label="Commercial Artist">Commercial Artist</option>
    <option value="Web / UX Designers" label="Web / UX Designers">Web / UX Designers</option>
    <option value="Artist (Others)" label="Artist (Others)">Artist (Others)</option>
    <optgroup id="occupation-optgroup-Beauty, Fashion &amp; Jewellery Designers" label="Beauty, Fashion &amp; Jewellery Designers">
    </optgroup>
    <option value="Beautician" label="Beautician">Beautician</option>
    <option value="Fashion Designer" label="Fashion Designer">Fashion Designer</option>
    <option value="Hairstylist" label="Hairstylist">Hairstylist</option>
    <option value="Jewellery Designer" label="Jewellery Designer">Jewellery Designer</option>
    <option value="Designer (Others)" label="Designer (Others)">Designer (Others)</option>
    <optgroup id="occupation-optgroup-BPO, KPO, &amp; Customer Support" label="BPO, KPO, &amp; Customer Support">
    </optgroup>
    <option value="Customer Support / BPO / KPO Professional" label="Customer Support / BPO / KPO Professional">Customer Support / BPO / KPO Professional</option>
    <optgroup id="occupation-optgroup-Civil Services / Law Enforcement" label="Civil Services / Law Enforcement">
    </optgroup>
    <option value="IAS / IRS / IES / IFS" label="IAS / IRS / IES / IFS">IAS / IRS / IES / IFS</option>
    <option value="Indian Police Services (IPS)" label="Indian Police Services (IPS)">Indian Police Services (IPS)</option>
    <option value="Law Enforcement Employee (Others)" label="Law Enforcement Employee (Others)">Law Enforcement Employee (Others)</option>
    <optgroup id="occupation-optgroup-Defense" label="Defense">
    </optgroup>
    <option value="Airforce" label="Airforce">Airforce</option>
    <option value="Army" label="Army">Army</option>
    <option value="Navy" label="Navy">Navy</option>
    <option value="Defense Services (Others)" label="Defense Services (Others)">Defense Services (Others)</option>
    <optgroup id="occupation-optgroup-Education &amp; Training" label="Education &amp; Training">
    </optgroup>
    <option value="Lecturer" label="Lecturer">Lecturer</option>
    <option value="Professor" label="Professor">Professor</option>
    <option value="Research Assistant" label="Research Assistant">Research Assistant</option>
    <option value="Research Scholar" label="Research Scholar">Research Scholar</option>
    <option value="Teacher" label="Teacher">Teacher</option>
    <option value="Training Professional (Others)" label="Training Professional (Others)">Training Professional (Others)</option>
    <optgroup id="occupation-optgroup-Engineering" label="Engineering">
    </optgroup>
    <option value="Civil Engineer" label="Civil Engineer">Civil Engineer</option>
    <option value="Electronics / Telecom Engineer" label="Electronics / Telecom Engineer">Electronics / Telecom Engineer</option>
    <option value="Mechanical / Production Engineer" label="Mechanical / Production Engineer">Mechanical / Production Engineer</option>
    <option value="Non IT Engineer (Others)" label="Non IT Engineer (Others)">Non IT Engineer (Others)</option>
    <optgroup id="occupation-optgroup-Hotel &amp; Hospitality" label="Hotel &amp; Hospitality">
    </optgroup>
    <option value="Chef / Sommelier / Food Critic" label="Chef / Sommelier / Food Critic">Chef / Sommelier / Food Critic</option>
    <option value="Catering Professional" label="Catering Professional">Catering Professional</option>
    <option value="Hotel &amp; Hospitality Professional (Others)" label="Hotel &amp; Hospitality Professional (Others)">Hotel &amp; Hospitality Professional (Others)</option>
    <optgroup id="occupation-optgroup-IT &amp; Software Engineering" label="IT &amp; Software Engineering">
    </optgroup>
    <option value="Software Developer / Programmer" label="Software Developer / Programmer">Software Developer / Programmer</option>
    <option value="Software Consultant" label="Software Consultant">Software Consultant</option>
    <option value="Hardware &amp; Networking professional" label="Hardware &amp; Networking professional">Hardware &amp; Networking professional</option>
    <option value="Software Professional (Others)" label="Software Professional (Others)">Software Professional (Others)</option>
    <optgroup id="occupation-optgroup-Legal" label="Legal">
    </optgroup>
    <option value="Lawyer" label="Lawyer">Lawyer</option>
    <option value="Legal Assistant" label="Legal Assistant">Legal Assistant</option>
    <option value="Legal Professional (Others)" label="Legal Professional (Others)">Legal Professional (Others)</option>
    <optgroup id="occupation-optgroup-Medical &amp; Healthcare" label="Medical &amp; Healthcare">
    </optgroup>
    <option value="Dentist" label="Dentist">Dentist</option>
    <option value="Doctor" label="Doctor">Doctor</option>
    <option value="Medical Transcriptionist" label="Medical Transcriptionist">Medical Transcriptionist</option>
    <option value="Nurse" label="Nurse">Nurse</option>
    <option value="Pharmacist" label="Pharmacist">Pharmacist</option>
    <option value="Physician Assistant" label="Physician Assistant">Physician Assistant</option>
    <option value="Physiotherapist / Occupational Therapist" label="Physiotherapist / Occupational Therapist">Physiotherapist / Occupational Therapist</option>
    <option value="Psychologist" label="Psychologist">Psychologist</option>
    <option value="Surgeon" label="Surgeon">Surgeon</option>
    <option value="Veterinary Doctor" label="Veterinary Doctor">Veterinary Doctor</option>
    <option value="Therapist (Others)" label="Therapist (Others)">Therapist (Others)</option>
    <option value="Medical / Healthcare Professional (Others)" label="Medical / Healthcare Professional (Others)">Medical / Healthcare Professional (Others)</option>
    <optgroup id="occupation-optgroup-Merchant Navy" label="Merchant Navy">
    </optgroup>
    <option value="Merchant Naval Officer" label="Merchant Naval Officer">Merchant Naval Officer</option>
    <option value="Mariner" label="Mariner">Mariner</option>
    <optgroup id="occupation-optgroup-Sales &amp; Marketing" label="Sales &amp; Marketing">
    </optgroup>
    <option value="Marketing Professional" label="Marketing Professional">Marketing Professional</option>
    <option value="Sales Professional" label="Sales Professional">Sales Professional</option>
    <optgroup id="occupation-optgroup-Science" label="Science">
    </optgroup>
    <option value="Biologist / Botanist" label="Biologist / Botanist">Biologist / Botanist</option>
    <option value="Physicist" label="Physicist">Physicist</option>
    <option value="Science Professional (Others)" label="Science Professional (Others)">Science Professional (Others)</option>
    <optgroup id="occupation-optgroup-Corporate Professionals" label="Corporate Professionals">
    </optgroup>
    <option value="CxO / Chairman / Director / President" label="CxO / Chairman / Director / President">CxO / Chairman / Director / President</option>
    <option value="VP / AVP / GM / DGM" label="VP / AVP / GM / DGM">VP / AVP / GM / DGM</option>
    <option value="Sr. Manager / Manager" label="Sr. Manager / Manager">Sr. Manager / Manager</option>
    <option value="Consultant / Supervisor / Team Leads" label="Consultant / Supervisor / Team Leads">Consultant / Supervisor / Team Leads</option>
    <option value="Team Member / Staff" label="Team Member / Staff">Team Member / Staff</option>
    <optgroup id="occupation-optgroup-Others" label="Others">
    </optgroup>
    <option value="Agent / Broker / Trader / Contractor" label="Agent / Broker / Trader / Contractor">Agent / Broker / Trader / Contractor</option>
    <option value="Business Owner / Entrepreneur" label="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
    <option value="Politician" label="Politician">Politician</option>
    <option value="Social Worker / Volunteer / NGO" label="Social Worker / Volunteer / NGO">Social Worker / Volunteer / NGO</option>
    <option value="Sportsman" label="Sportsman">Sportsman</option>
    <option value="Travel &amp; Transport Professional" label="Travel &amp; Transport Professional">Travel &amp; Transport Professional</option>
    <option value="Writer" label="Writer">Writer</option>
    <optgroup id="occupation-optgroup-Non Working" label="Non Working">
    </optgroup>
    <option value="Student" label="Student">Student</option>
    <option value="Retired" label="Retired">Retired</option>
    <option value="Not working" label="Not working">Not working</option>
</select></li>           
			<li><label for="Annual Income">Annual Income:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="Income" id="Annual Income" required="required" >
    <option value="" label="Select" selected="selected">Select</option>
    <option value="Upto INR 1 Lakh" label="Upto INR 1 Lakh">Upto INR 1 Lakh</option>
    <option value="INR 1 Lakh to 2 Lakh" label="INR 1 Lakh to 2 Lakh">INR 1 Lakh to 2 Lakh</option>
    <option value="INR 2 Lakh to 4 Lakh" label="INR 2 Lakh to 4 Lakh">INR 2 Lakh to 4 Lakh</option>
    <option value="INR 4 Lakh to 7 Lakh" label="INR 4 Lakh to 7 Lakh">INR 4 Lakh to 7 Lakh</option>
    <option value="INR 7 Lakh to 10 Lakh" label="INR 7 Lakh to 10 Lakh">INR 7 Lakh to 10 Lakh</option>
    <option value="INR 10 Lakh to 15 Lakh" label="INR 10 Lakh to 15 Lakh">INR 10 Lakh to 15 Lakh</option>
    <option value="INR 15 Lakh to 20 Lakh" label="INR 15 Lakh to 2 0 Lakh">INR 15 Lakh to 20 Lakh</option>
    <option value="INR 20 Lakh to 30 Lakh" label="INR 20 Lakh to 30 Lakh">INR 20 Lakh to 30 Lakh</option>
    <option value="INR 30 Lakh to 50 Lakh" label="INR 30 Lakh to 50 Lakh">INR 30 Lakh to 50 Lakh</option>
    <option value="INR 50 Lakh to 75 Lakh" label="INR 50 Lakh to 75 Lakh">INR 50 Lakh to 75 Lakh</option>
    <option value="INR 75 Lakh to 1 Crore" label="INR 75 Lakh to 1 Crore">INR 75 Lakh to 1 Crore</option>
    <option value="INR 1 Crore &amp; above" label="INR 1 Crore &amp; above">INR 1 Crore &amp; above</option>
    <option value="Not applicable" label="Not applicable">Not applicable</option>
    <option value="Dont want to specify" label="Dont want to specify">Dont want to specify</option>
</select>		</li>
			<li><label for="Education">Education:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="edu" required="required" >
				<option value="" label="Select" selected="selected">Select</option>
				<option value="PHD">PHD</option>
				<option value="Post Graduate">Post Graduate</option>
				<option value="Graduate">Graduate</option>
				<option value="12th">12th</option>
				<option value="10th">10th</option>
				<option value="Lower">Lower</option>
				<option value="Iliterate">Iliterate</option>
			</select></li>
			<li><label for="Course">Specify Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="Course" id="Course" required="required" >
    <option value="" label="Select">Select</option>
    <option value="Advertising/ Marketing" label="Advertising/ Marketing">Advertising/ Marketing</option>
    <option value="Administrative services" label="Administrative services">Administrative services</option>
    <option value="Architecture" label="Architecture">Architecture</option>
    <option value="Armed Forces" label="Armed Forces">Armed Forces</option>
    <option value="Arts" label="Arts">Arts</option>
    <option value="Commerce" label="Commerce">Commerce</option>
    <option value="Computers/ IT" label="Computers/ IT">Computers/ IT </option>
    <option value="Education" label="Education">Education</option>
    <option value="Engineering/ Technology" label="Engineering/ Technology">Engineering/ Technology</option>
    <option value="Fashion" label="Fashion">Fashion</option>
    <option value="Finance" label="Finance">Finance</option>
    <option value="Fine Arts" label="Fine Arts">Fine Arts</option>
    <option value="Home Science" label="Home Science">Home Science</option>
    <option value="Law" label="Law">Law</option>
    <option value="Management" label="Management">Management</option>
    <option value="Medicine" label="Medicine">Medicine</option>
    <option value="Nursing/ Health Sciences" label="Nursing/ Health Sciences">Nursing/ Health Sciences</option>
    <option value="Office administration" label="Office administration">Office administration</option>
    <option value="Science" label="Science">Science</option>
    <option value="Shipping" label="Shipping">Shipping</option>
    <option value="Travel &amp; Tourism" label="Travel &amp; Tourism">Travel &amp; Tourism</option>
</select></li>
			<li><label for="Height">Height in cm:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="Height" id="Height" required="required" >
    <option value="" label="Select" selected="selected">Select</option>
    <option value="134cm" label="4ft 5in - 134cm">4ft 5in - 134cm</option>
    <option value="137" label="4ft 6in - 137cm">4ft 6in - 137cm</option>
    <option value="139" label="4ft 7in - 139cm">4ft 7in - 139cm</option>
    <option value="142" label="4ft 8in - 142cm">4ft 8in - 142cm</option>
    <option value="144" label="4ft 9in - 144cm">4ft 9in - 144cm</option>
    <option value="147" label="4ft 10in - 147cm">4ft 10in - 147cm</option>
    <option value="149" label="4ft 11in - 149cm">4ft 11in - 149cm</option>
    <option value="152" label="5ft - 152cm">5ft - 152cm</option>
    <option value="154" label="5ft 1in - 154cm">5ft 1in - 154cm</option>
    <option value="157" label="5ft 2in - 157cm">5ft 2in - 157cm</option>
    <option value="160" label="5ft 3in - 160cm">5ft 3in - 160cm</option>
    <option value="162" label="5ft 4in - 162cm">5ft 4in - 162cm</option>
    <option value="165" label="5ft 5in - 165cm">5ft 5in - 165cm</option>
    <option value="167" label="5ft 6in - 167cm">5ft 6in - 167cm</option>
    <option value="170" label="5ft 7in - 170cm">5ft 7in - 170cm</option>
    <option value="172" label="5ft 8in - 172cm" >5ft 8in - 172cm</option>
    <option value="175" label="5ft 9in - 175cm">5ft 9in - 175cm</option>
    <option value="177" label="5ft 10in - 177cm">5ft 10in - 177cm</option>
    <option value="180" label="5ft 11in - 180cm">5ft 11in - 180cm</option>
    <option value="182" label="6ft - 182cm">6ft - 182cm</option>
    <option value="185" label="6ft 1in - 185cm">6ft 1in - 185cm</option>
    <option value="187" label="6ft 2in - 187cm">6ft 2in - 187cm</option>
    <option value="190" label="6ft 3in - 190cm">6ft 3in - 190cm</option>
    <option value="193" label="6ft 4in - 193cm">6ft 4in - 193cm</option>
    <option value="195" label="6ft 5in - 195cm">6ft 5in - 195cm</option>
    <option value="198" label="6ft 6in - 198cm">6ft 6in - 198cm</option>
    <option value="200" label="6ft 7in - 200cm">6ft 7in - 200cm</option>
    <option value="203" label="6ft 8in - 203cm">6ft 8in - 203cm</option>
    <option value="205" label="6ft 9in - 205cm">6ft 9in - 205cm</option>
    <option value="208" label="6ft 10in - 208cm">6ft 10in - 208cm</option>
    <option value="210" label="6ft 11in - 210cm">6ft 11in - 210cm</option>
    <option value="213" label="7ft - 213cm">7ft - 213cm</option>
</select></li>   
			<li><label for="Weight">Weight in kgs:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="Weight" id="Weight" required="required" ></li>
			<li><label for="Complexion">Complexion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<label for="complexion-VeryFair"><input type="radio" name="complexion" id="complexion-VeryFair" value="Very Fair" required="required" />Very 
			Fair</label> <label for="complexion-Fair"><input type="radio" name="complexion" id="complexion-Fair" value="Fair" />Fair</lab
			el> <label for="complexion-Wheatish"><input type="radio" name="complexion" id="complexion-Wheatish" value="Wheatish" />
			Wheatish</label> <label for="complexion-Dark"><input type="radio" name="complexion" id="complexion-Dark" value="Dark" />
			Dark</label></label></li>     
			<li><label for="Blood group">Blood group:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="Blood" required="required" >
				<option value="" label="Select" selected="selected">Select</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select></li>
			<li><label>Smoking:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="smoking" value="Yes" required="required" />Yes
			<input type="radio" name="smoking" value="No" />No</li>
			<li><label>Drinking:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="radio" name="drinking" value="Yes" required="required" />Yes
			<input type="radio" name="drinking" value="No" />No</li>
			<li><label for="Hobbies:">Hobbies:<label><br>
			<textarea name="Hobbies" id="Hobbies:" required="required" ></textarea></li>
			<li><label for="Plan">Future Plan:</label><br>
			<textarea name="Future" id="Future Plan" required="required" ></textarea></li>
			<li><label for="About Yourself">About Yourself:</label><br>
			<textarea name="About" id="About" required="required" ></textarea></li>

			<br>
			<li><input type="submit" value="submit"></li>
			</ul>
		</form>
	</div>
	
<?php
	
	include 'template/footer.php';
?>
</div>
</body>