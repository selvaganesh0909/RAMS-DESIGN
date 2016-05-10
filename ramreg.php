<?php
session_start();
$Name=$_POST['name'];

$Email=$_POST['email'];
$Phone=$_POST['phoneno'];
$Message=$_POST['message'];
if($cpass==$password)
{
	$connect = mysqli_connect("localhost","root","","Ram2");
	mysqli_query($connect,"INSERT INTO R2 VALUES ('".$Name."','".$Email."','".$Phone."','".$Message."');");
	if(mysqli_affected_rows($connect) > 0)
	{
		echo 'Success signup';
		header('Location:http://localhost/interior-design/index.html ');
	}
	else
	{
		echo 'login error';
			header('Location:http://localhost/interior-design/contacts.html');
	}

}
else
{
	header('Location: http://localhost/interior-design/contacts.html');
	echo 'Password Error. Please enter password correctly';
}
