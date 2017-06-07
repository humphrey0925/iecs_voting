<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$unpassword="123456";

	ECHO $password = crypt($unpassword, '$6$' . 'IECS' . '$' . $unpassword . '$');
?>
</body>
</html>