<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
session_destroy();
echo "<script> alert ('Successfully Logout'); window.location=('../../index.html')</script>";
?>
</body>
</html>