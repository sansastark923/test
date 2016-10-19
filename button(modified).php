<?php
$file1 = "buttonStatus1.txt";
$file2 = "buttonStatus2.txt";
$file3 = "buttonStatus3.txt";
$file4 = "buttonStatus4.txt";
$handle1 = fopen($file1,'w+');
if (isset($_POST['on1']))
{
$onstring = "ON1";
fwrite($handle1,$onstring);
fclose($handle1);
print "
<html>
<body>
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
<h2>The Device 1 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off1']))
{
$offstring = "OFF1";
fwrite($handle1, $offstring);
fclose($handle1);
print "
<html>
<body>
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
<h2>The Device 1 has been Turned OFF </h2>
</body>
</html>
";
}
else if(isset($_POST['on2']))
{
$offstring = "ON2";
fwrite($handle2, $offstring);
fclose($handle2);
print "
<html>
<body>
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
<h2>The Device 2 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off2']))
{
$offstring = "OFF2";
fwrite($handle2, $offstring);
fclose($handle2);
print "
<html>
<body>
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
<h2>The Device 2 has been Turned OFF </h2>
</body>
</html>
";
}
else if(isset($_POST['on3']))
{
$offstring = "ON3";
fwrite($handle3, $offstring);
fclose($handle3);
print "
<html>
<body>
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
<h2>The Device 3 has been Turned ON </h2>
</body>
</html>
";
}
else if(isset($_POST['off3']))
{
$offstring = "OFF3";
fwrite($handle4, $offstring);
fclose($handle4);
print "
<html>
<body>
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
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
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
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
<title>DLDA - Mini Project</title>
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
<h1>DLDA - Mini Project - Internet of Things Implementation</h2>
<h2>The Device 4 has been Turned OFF </h2>
</body>
</html>
";
}



?>