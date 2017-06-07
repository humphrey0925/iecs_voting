<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>逢甲大學資訊一甲幹部投票系統</title>
</head>
<link rel=stylesheet type="text/css" href="dashboard.css">
<script type="text/javascript">
	
</script>
<?php 
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
			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		    $query = "SELECT * FROM ALL_VOTE WHERE `live` = 1";
		    $list=mysqli_query($dbc, $query);
		    if($list)
		    {
		    	
	    
	    
    ?>
<body>
	<div>
		<div id="header">
			<div>
				
			</div>
		</div>
		<div id="imp_part">
			<div id="navigate_bar">
				<div id="login_status">
					<p>用戶<?php ?>您好，歡迎您的登陸</p>
					<div id="logout">
						<p>登出</p>
					</div>
				</div>
				<div id="feature">
					<p id="feature_string">功能導覽</p>
					<h2>投票功能</h2>
					<ul>
						<?php
							for($i=1;$i<=mysqli_num_rows($list);$i++)
							{
								$row=mysqli_fetch_row($list);
								?><li><?php echo $row[0];?></li><?php
							}
						?>
					</ul>
					<h2>個人資料設定</h2>
					<ul>
						<li>設定密碼</li>
					</ul>
				</div>
			</div>
			<div id="control_page">
								
			</div>
		</div>
	</div>
    <?php
			}	
		}
	?>
</body>
</html>