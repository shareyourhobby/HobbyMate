<?php
if(isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	$username = "GUEST";
}

if($username == 'GUEST')
{
echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
echo "HELLO ". $username;
echo "<b class=\"caret\"></b></a>
<ul class=\"dropdown-menu\">
<li><a href=\"signup.php\">Sign up</a></li>
<li><a href=\"signin.php\">Sign in</a></li>
</ul>";
}
else
{
	echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
	echo "HELLO ". $username;
	echo "<b class=\"caret\"></b></a>
<ul class=\"dropdown-menu\">
<li><a href=\"logout.php\">Logout</a></li>
</ul>";
}
?>