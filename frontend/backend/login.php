<?php

/**
 * 
 * Login class to store login information
 * @author Vishal
 *
 */


$config_array = parse_ini_file("../config/config.ini");
$host=$config_array['host'];
$dbusername=$config_array['username']; 
$dbpassword=$config_array['password']; 
$db_name=$config_array['db'];
session_start();

// Connect to server and select databse.
$link = mysql_connect("$host", "$dbusername", "$dbpassword")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB ".mysql_error($link));

$action=$_POST['action'];
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
 	echo $action;

if($action == 'verify') {
        $sql="SELECT * FROM login WHERE username='$username' and password='$password'";
        $result=mysql_query($sql);
        $count=mysql_num_rows($result);
        if($count==1){
                $_SESSION['username'] = $username ;
                $_SESSION['is_logged_in'] = 1 ;
                echo "found the user" ;
        //        header("location:login_success.php"); // redirect the page...
        } else {
                echo "Wrong Username or Password";
                //header("location:login_failed.php"); // redirect the page...
        }
        
} else if($action == 'create') {
	
        $sql="insert into login (username,password,verified) values ('$username','$password', 0)";
        $result=mysql_query($sql);
        if($result) {
                $_SESSION['username'] = $username ; 
                echo " created the user, take him to JoinNow. Code for cookie/session ???";
				include('../JoinNow.php');
        }else {
                echo "unable to save the result..." ;
        }
        
}
mysql_close($link);
?>