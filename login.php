<!DOCTYPE html>
<html>
<head>
	<title>逢甲大學資訊一甲幹部投票系統</title>
</head>
<body>
	<?php

	$account=$_POST['account'];
	$unpassword=$_POST['password'];
	define('DB_HOST', 'nihao.dynu.net:33306');
    define('DB_USER', 'classvote');
    define('DB_PASS', 'classvote');
    define('DB_NAME', 'zi_xun_yi_jia_vote');
    $password = crypt($unpassword, '$6$IECS$' . $unpassword . '$');
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $query = "SELECT count(`password`) FROM `user` WHERE `account` = '$account' AND `password` = '$password';";
    $list=mysqli_query($dbc, $query);
    $row=mysqli_fetch_row($list);
	if($row[0]==0)
	{
		?>
		<script type="text/javascript">
			alert("您輸入了錯誤的密碼，請重新輸入");

			window.location.href = 'index.php'

		</script>
		<?php
	}
	else
	{
		setcookie("login",'USER', time()+3600);
        
		?>
		<form action="dashboard.php" method='post'>
		<input type="hidden" value="<?php echo $account?>" name="account" />
		<?php
		header("Location: dashboard.php");
	}
	if(!$dbc)
	{
		echo "wrong connect";
		}
	?>
</body>
</html>