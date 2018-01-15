<?php
	//-------------------------------------------------
	//準備
	//-------------------------------------------------
	$dsn  = 'mysql:dbname=MyNovelDB;host=127.0.0.1';   //接続先
	$user = 'root';         //MySQLのユーザーID
	$pw   = 'H@chiouji1';   //MySQLのパスワード

	
	if(array_key_exists('scenario_id', $_GET))
	{
		$sql = 'SELECT COUNT(*) FROM Save';
		
		$dbh = new PDO($dsn, $user, $pw);   //接続
		$sth = $dbh->prepare($sql);         //SQL準備
		$sth->execute();                    //実行
		
    	$buff = $sth->fetch(PDO::FETCH_ASSOC);
    	$savecount = $buff['COUNT(*)'] + 1;
    	
    	
	
		// 実行したいSQL
		$sql = 'INSERT INTO Save VALUES(:save_id,:scenario_id,:playername)';
		$dbh = new PDO($dsn, $user, $pw);   //接続
		$sth = $dbh->prepare($sql);         //SQL準備
		//プレースホルダに値を入れる
		$sth->bindValue(':save_id',   $savecount, PDO::PARAM_INT);
		$sth->bindValue(':scenario_id', $_GET['scenario_id'], PDO::PARAM_INT);
		$sth->bindValue(':playername', $_GET['playername'], PDO::PARAM_STR);

		// 実行
		$sth->execute();
		
		echo $_GET['scenario_id'];
		echo $_GET['playername'];
		echo $savecount;
	}
	
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset = "utf8">
	<title>Save</title>
		
</head>

<body>
	
	<script>		
		history.back();
	</script>
	
</body>

</html>
