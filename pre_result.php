<style type="text/css">
	.pga { width: 100%; }
	body{background-color: lightgrey;}
</style>
<body style="margin: 0px; font-family: sans-serif;">
<div class = "pga">
<?php
include 'init.php';
if(!logged_in())
{
	header('Location: index.php');
	exit();
}
include 'template/header.php';
?>
<div style="border:10px;">
<?php
	$a=$_SESSION['user_id'];
	$conn = new PDO("mysql:host=localhost;dbname=project",'root','12345');
	$data_query = $conn->query("select * from preference where user_id =$a");
	$preference = $data_query->fetchAll(PDO::FETCH_ASSOC);
	$data_query = $conn->query("select * from users");
	$users = $data_query->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($preference);
	//var_dump($users);
	$i=0;
	echo '<br/>1st<br/>';
	foreach($users as $user)
	{
		$data_query = $conn->query("select * from details");
		$details = $data_query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		$user['state'] === $preference[0]['state'] &&
		$details[0]['education'] === $preference[0]['education'] &&
		$details[0]['course'] === $preference[0]['course'] &&
		$details[0]['occupation'] === $preference[0]['occupation'] &&
		$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{
			echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';
			$users[$i]['printed']=1;
		}
		$i = $i +1;
	}
	$i=0;
	echo '<br/>2nd<br/>';
	foreach($users as $user)
	{
		$data_query = $conn->query("select * from details");
		$details = $data_query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		$user['state'] === $preference[0]['state'] &&
		$details[0]['education'] === $preference[0]['education'] &&
		$details[0]['course'] === $preference[0]['course'] &&
		//$details[0]['occupation'] === $preference[0]['occupation'] &&
		$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{
			echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';
			$users[$i]['printed']=1;
		}
		$i = $i +1;
	}
	$i=0;
	echo '<br/>3rd<br/>';
	foreach($users as $user)
	{
		$data_query = $conn->query("select * from details");
		$details = $data_query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		//$user['state'] === $preference[0]['state'] &&
		$details[0]['education'] === $preference[0]['education'] &&
		$details[0]['course'] === $preference[0]['course'] &&
		$details[0]['occupation'] === $preference[0]['occupation'] &&
		$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{
			echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';
			$users[$i]['printed']=1;
		}
		$i = $i +1;
	}
	$i=0;
	echo '<br/>4th<br/>';
	foreach($users as $user)
	{
		$data_query = $conn->query("select * from details");
		$details = $data_query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		$user['state'] === $preference[0]['state'] &&
		$details[0]['education'] === $preference[0]['education'] &&
		//$details[0]['course'] === $preference[0]['course'] &&
		$details[0]['occupation'] === $preference[0]['occupation'] &&
		$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{
			echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';
			$users[$i]['printed']=1;
		}
		$i = $i +1;
	}
	$i=0;
	echo '<br/>5th<br/>';
	foreach($users as $user)
	{
		$data_query = $conn->query("select * from details");
		$details = $data_query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		$user['state'] === $preference[0]['state'] &&
		//$details[0]['education'] === $preference[0]['education'] &&
		$details[0]['course'] === $preference[0]['course'] &&
		$details[0]['occupation'] === $preference[0]['occupation'] &&
		$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{
			echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';
			$users[$i]['printed']=1;
		}
		$i = $i +1;
	}
	$i=0;
	echo '<br/>6th<br/>';
	foreach($users as $user)
	{
		$data_query = $conn->query("select * from details");
		$details = $data_query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		$user['state'] === $preference[0]['state'] &&
		$details[0]['education'] === $preference[0]['education'] &&
		$details[0]['course'] === $preference[0]['course'] &&
		$details[0]['occupation'] === $preference[0]['occupation'] &&
		//$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{
			echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';
			$users[$i]['printed']=1;
		}
		$i = $i +1;
	}
	$i=0;
	echo '<br/>7th<br/>';
	foreach($users as $user)
	{
		$data_query = $conn->query("select * from details");
		$details = $data_query->fetchAll(PDO::FETCH_ASSOC);
		//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		//$user['state'] === $preference[0]['state'] &&
		//$details[0]['education'] === $preference[0]['education'] &&
		//$details[0]['course'] === $preference[0]['course'] &&
		//$details[0]['occupation'] === $preference[0]['occupation'] &&
		$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{
			echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';
			$users[$i]['printed']=1;
		}
		$i = $i +1;
	}
	$i=0;echo '<br/>8th<br/>';
	foreach($users as $user)
	{	$data_query = $conn->query("select * from details");$details = $data_query->fetchAll(PDO::FETCH_ASSOC);//var_dump($details);
		$users[$i]['printed']=0;
		if($user['gender'] === $preference[0]['looking'] &&
		$details[0]['maritalstatus'] === $preference[0]['marital_status'] &&
		$user['religion'] === $preference[0]['religion'] &&
		$details[0]['mothertongue'] === $preference[0]['mother_tongue'] &&
		//$user['state'] === $preference[0]['state'] &&
		//$details[0]['education'] === $preference[0]['education'] &&
		//$details[0]['course'] === $preference[0]['course'] &&
		//$details[0]['occupation'] === $preference[0]['occupation'] &&
		$details[0]['income'] === $preference[0]['income'] &&
		$details[0]['height'] >= $preference[0]['height_from'] &&
		$details[0]['height'] <= $preference[0]['height_to'] &&
		$details[0]['age'] >= $preference[0]['agefrom'] &&
		$details[0]['age'] <= $preference[0]['ageto']  )
		{	echo "NAME              ".$user['name'],'<br/>';echo "AGE               ".$details[0]['age'],'<br/>';echo "RELIGION          ".$user['religion'],'<br/>';echo "EDUCATION         ".$details[0]['education'],'<br/>';echo "OCCUPATION        ".$details[0]['occupation'],'<br/>';echo "INCOME            ".$details[0]['income'],'<br/>';echo "HEIGHT            ".$details[0]['height'],'<br/>';echo "COMPLEXION        ".$details[0]['complexion'],'<br/>';echo "MARITAL STATUS    ".$details[0]['maritalstatus'],'<br/>','<br/>','<br/>','<br/>';$users[$i]['printed']=1;
		}	$i = $i +1;
	}
	
	?>
</div>
<?php
include 'template/footer.php';
?>
</div>
</body>