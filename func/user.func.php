<?php
//$login_id=-1;
function logged_in()
{
	//echo $_SESSION['user_id'];
	return isset($_SESSION['user_id']);
}
function login_check($email,$password)
{
	$password = md5($password);
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$login_query = $conn->query("select count(user_id) as count , user_id from users where email = '$email' and password = '$password'");
	$r = $login_query->fetchAll(PDO::FETCH_ASSOC);
//	var_dump($login_query);
	//var_dump($GLOBALS['login_id'0]);
	//$_GLOBALS['login_id'] = $r[0]['user_id'];
	return ($r[0]['count']== 1)?$r[0]['user_id'] : false ;
}
function added_details()
{
	$a=$_SESSION['user_id'];
	//echo $_SESSION['user_id'];
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$detail_query = $conn->query("select count(user_id) as count,user_id from details where user_id=$a");
	$r = $detail_query->fetchAll(PDO::FETCH_ASSOC);
	return ($r[0]['count']== 1)?true : false ;
}
function added_preference()
{
	$a=$_SESSION['user_id'];
	//echo $_SESSION['user_id'];
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$preference_query = $conn->query("select count(user_id) as count , user_id from preference where user_id = $a");
	$r = $preference_query->fetchAll(PDO::FETCH_ASSOC);
	return ($r[0]['count']== 1)?true : false ;
}
function retrieve_data($variable,$table)
{ 
	$a=$_SESSION['user_id'];
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$data_query = $conn->query("select $variable as value from $table where user_id =$a");
	$r = $data_query->fetchAll(PDO::FETCH_ASSOC);
	return $r[0]['value'];
	//var_dump($r);
}
function user_data()
{
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$args = func_get_args();
	$fields = '`'.implode('`,`',$args).'`';
	$query = $conn->query("select $fields from users where user_id =".$_SESSION['user_id']);
	$query_result = $query->fetch(PDO::FETCH_ASSOC);
	//var_dump($query_result);
	foreach($args as $field)
	{
		$args[$field] = $query_result[$field];
	}
	return $args;
}
function user_register($profile,$name,$gender,$dob,$religion,$city,$state,$mob_no,$email,$password)
{
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$password=md5($password);
	//echo $GLOBALS['login_id'];
	$sql = "insert into users"."(user_id,profile,name,gender,dob,religion,city,state,mob,email,password)"."
	values"."(default,'$profile','$name','$gender','$dob','$religion','$city','$state',$mob_no,'$email','$password')";
	$conn->query($sql);
	//print_r(($sql));
	//$conn->execute();
	//echo $conn->lastInsertId();
	return $conn->lastInsertId();
	
}
function add_detail($fname,$fo,$mname,$mo,$type,$sib,$tongue,$add,
	$marital,$occu,$income,$edu,$course,$ht,$wt,$comp,$blood,$smok,$drink,$hobbies,$future,$ay)
{
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$uid=$_SESSION['user_id'];
	$login_query = $conn->query("select dob from users where user_id=$uid");
	$f = $login_query->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($f);
	$from=$f[0]["dob"];
	//echo $from;
	$age=(date('Y') - date('Y',strtotime($from)));
	//echo $age;
	$sql = "insert into details"."(user_id,fname,foccupation,mname,moccupatio,familytype,siblings,
	mothertongue,address,maritalstatus,occupation,income,education,course,height,weight,age,complexion,
	bloodgroup,smoking,drinking,hobbies,futureplan,aboutyourself)"." values "."($uid,'$fname','$fo','$mname','$mo','$type',$sib,
	'$tongue','$add','$marital','$occu','$income','$edu','$course',$ht,$wt,$age,'$comp','$blood','$smok','$drink','$hobbies','$future','$ay')";
	$conn->query($sql);
	//print_r(($sql));
	//echo $conn->lastInsertId();
	return $uid;
	
}
function preference($gender,$agefrom,$ageto,$heightfrom,$heightto,$maritalstatus,$community,$mothertongue,
                                 $state,$edu,$course,$occupation,$income)
{
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$uid=$_SESSION['user_id'];
	//echo $_SESSION['user_id'];
	//echo $GLOBALS['login_id'];
	$sql = "insert into preference"."(user_id,looking,agefrom,ageto,height_from,height_to,marital_status,religion,
	mother_tongue,state,education,course,occupation,income)"."
	values"."($uid,'$gender',$agefrom,$ageto,$heightfrom,$heightto,'$maritalstatus','$community','$mothertongue','$state',
	'$edu','$course','$occupation','$income')";
	$conn->query($sql);
	//print_r(($sql));
	//echo $conn->lastInsertId();
	return $uid;
	
}
function user_exists($email)
{
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$query= $conn->query("select count(user_id) as 'no' from users where email='$email'");
	$r = $query->fetchAll(PDO::FETCH_ASSOC);
	//$query->execute();
	//print_r($r);
	return ($r[0]['no']== 1)? true : false ;
}
?>