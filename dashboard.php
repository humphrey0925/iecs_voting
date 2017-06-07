<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>逢甲大學資訊一甲幹部投票系統</title>
</head>
<script type="text/javascript">
	
</script>
<?php 
	echo "hi";
		if(!isset($_COOKIE["login"]))
		{
        	header("Location: index.php"); //將網址改為要導入的登入頁面
    	}
    
		else
		{
			
		define('DB_HOST', 'nihao.dynu.net:33306');
	    define('DB_USER', 'classvote');
	    define('DB_PASS', 'classvote');
	    define('DB_NAME', 'zi_xun_yi_jia_vote');
	    $password = crypt($unpassword, '$6$IECS$' . $unpassword . '$');
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	    $query = "SELECT count(`password`) FROM `user` WHERE `account` = '$account' AND `password` = '$password';";
	    $list=mysqli_query($dbc, $query);
	    $row=mysqli_fetch_row($list);
    ?>
<body>
	<div>
		<div>
			<div>
				
			</div>
		</div>
		<div>
			<div id="navigate_bar">
				<div id="login_status">
					<p>用戶<?php ?>您好，歡迎您的登陸</p>
				</div>
				<div>
					功能導覽
					<h2>投票功能</h2>
					<ul>
						<?php
						?>
					</ul>
					<h2>個人資料設定</h2>
				</div>
			</div>
			<div>
								
			</div>
		</div>
	</div>
    <?php
		}
	?>
</body>
</html>