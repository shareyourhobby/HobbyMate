<?php
// connect to the database
session_start();
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

	if(isset($_SESSION['username']))
			{
		$username = $_SESSION['username'];
			}
			else
			{
				$username = 'GUEST';
			}
	//echo "<h3>". $username ."</h3>";

	$success = false;
	for($i=0;$i<$cnt;$i++)
	{
		$hbname = $_POST['hobby'][$i];
		//echo "hb : $hbname";

		if(isset($_POST['learn'][$i]))
		{
			$learn = 'TRUE';
			//echo "Learn : $learn";
		}
		else
		{
			$learn = 'FALSE';
		}

		if(isset($_POST['share'][$i]))
		{
			$share = 'TRUE';
			//echo "Share : $share";
		}
		else
		{
			$share = 'FALSE';
		}

		if(isset($_POST['teach'][$i]))
		{
			$teach = 'TRUE';
			//echo "Teach : $teach";
		}
		else
		{
			$teach = 'FALSE';
		}

		$query="INSERT INTO hobbydetails ( learn, share, teach, hobbyname, username) VALUES ($learn , $share , $teach , '$hbname', '$username')";
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