<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['on1']))
{
$onstring = "ON1";
fwrite($handle,$onstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 1 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off1']))
{
$offstring = "OFF1";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 1 has been Turned OFF </h2>
</body>
</html>
";
}
else if(isset($_POST['on2']))
{
$offstring = "ON2";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 2 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off2']))
{
$offstring = "OFF2";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 2 has been Turned OFF </h2>
</body>
</html>
";
}
else if(isset($_POST['on3']))
{
$offstring = "ON3";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 3 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off3']))
{
$offstring = "OFF3";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 3 has been Turned OFF </h2>
</body>
</html>
";
}
else if(isset($_POST['on4']))
{
$offstring = "ON4";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 4 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off4']))
{
$offstring = "OFF4";
fwrite($handle, $offstring);
fclose($handle);
print "
<html>
<body>
<title>DLDA Mini Project</title>
<style type=text/css>
h1{
	padding-left: 300px;
}
h2{
	position: absolute;
	top: 100px;
	left: 450px;
}
</style>
<h1>DLDA Mini Project - Internet of Things Implementation</h2>
<h2>The Device 4 has been Turned OFF </h2>
</body>
</html>
";
}



?>