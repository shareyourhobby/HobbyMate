<?php
$con = mysqli_connect('localhost','root','root');
if (!$con)
{
	die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"hbmt");
$sql="SELECT * FROM userinfo";
$result = mysqli_query($con,$sql);

echo "<div class=\"row-fluid\">";
echo "<ul class=\"thumbnails\">";
while($row = mysqli_fetch_array($result))
{
	echo	"<li class=\"span3\">
			<div class=\"thumbnail\">
			<img src=\"img/placeholder-260x150.jpg\" alt=\"product name\">
			<div class=\"caption\">";
	echo  "<h3>". $row['username'] ."</h3>";
	echo  "<p>
			//User Comment {Currently not in DB}
			</p>
			</div>
			<div class=\"widget-footer\">
			<p>
			<a href=\"product.html\" class=\"btn\">Read more</a>
			</p>
			</div>
			</div>
			</li>";
}
echo "</ul>";
echo "</div>";

mysqli_close($con);
?>