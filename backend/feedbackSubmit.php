<?php
// connect to the database
$config_array = parse_ini_file("../config/config.ini");
$host=$config_array['host'];
$dbusername=$config_array['username'];
$dbpassword=$config_array['password'];
$db_name=$config_array['db'];
session_start();

$uid = 0 ;
if(isset($_SESSION['uid'])) {
	$uid = $_SESSION['uid'] ; 
}

$link = mysql_connect("$host", "$dbusername", "$dbpassword");
if (!$link)
{
	die('Could not connect: ' . mysqli_error($link));
}

    


mysql_select_db("$db_name")or die("cannot select DB ".mysql_error($link));

if (isset($_POST['formSubmit'])) 
{
	
$questA = $_POST['radios-A'];


$questB = mysql_real_escape_string($_POST['textarea-B'], $link);
$questC = $_POST['radios-C'];




function IsChecked($chkname,$value)
{
	if(!empty($_POST[$chkname]))
	{
		foreach($_POST[$chkname] as $chkval)
		{
			if($chkval == $value)
			{
				return true;
			}
		}
	}
	return false;
}

$questD = " ";

if(IsChecked('checkbox', 'A'))
{
$questD .= "A,";
}
if(IsChecked('checkbox', 'B'))
{
	$questD .= "B,";
}
if(IsChecked('checkbox', 'C'))
{
	$questD .= "C,";
}
if(IsChecked('checkbox', 'D'))
{
	$questD .= "D,";
}


$name = $_POST['name'];

$questE = mysql_real_escape_string($_POST['textarea-E'],$link);

$sql="INSERT INTO feedback (uid,questA, questB, questC, questD, questE, name) VALUES ($uid,'$questA','$questB','$questC','$questD','$questE','$name')";

mysql_query($sql) or trigger_error("Insert failed: " . mysql_error());
header("location:../frontend/thankForFeedback.php");
}
else
{
	echo("<p>You didn't select any options.</p>\n");
}

mysql_close($link);
?>



