<?php
// connect to the database

$config_array = parse_ini_file("../config/config.ini");
$host=$config_array['host'];
$dbusername=$config_array['username'];
$dbpassword=$config_array['password'];
$db_name=$config_array['db'];
session_start();

$link = mysql_connect("$host", "$dbusername", "$dbpassword");
if (!$link)
{
	die('Could not connect: ' . mysqli_error($link));
}

mysql_select_db("$db_name")or die("cannot select DB ".mysql_error($link));

$cnt = count($_POST['hobby']);

if ($cnt > 0) {


	if(isset($_SESSION['username']))
	{
		//include(signup.php);
	}
	else
	{
		header("location:../frontend/signup.php");
	}

	$username = $_SESSION['username'];
	//echo "<h3>". $username ."</h3>";

	$success = false;
	for($i=0;$i<$cnt;$i++)
	{
		$hbname = $_POST['hobby'][$i];
		//echo "hb : $hbname";

		if(isset($_POST['learn'][$i]))
		{
			$learn = $_POST['learn'][$i];
			//echo "Learn : $learn";
		}

		if(isset($_POST['share'][$i]))
		{
			$share = $_POST['share'][$i];
			//echo "Share : $share";
		}

		if(isset($_POST['teach'][$i]))
		{
			$teach = $_POST['teach'][$i];
			//echo "Teach : $teach";
		}

		$query="INSERT INTO hobbydetails ( learn, share, teach, hobbyname, username) VALUES (FALSE , TRUE , FALSE , '$hbname', '$username')";
		mysql_query($query) or trigger_error("Insert failed: " . mysql_error());

		$success = true;
	}

	if($success)
	{
			header("location:../frontend/thankYou.php");
	}
}
mysql_close($link);
?>