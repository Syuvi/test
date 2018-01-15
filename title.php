<?php
	//-------------------------------------------------
	//準備
	//-------------------------------------------------
	$dsn  = 'mysql:dbname=MyNovelDB;host=127.0.0.1';   //接続先
	$user = 'root';         //MySQLのユーザーID
	$pw   = 'H@chiouji1';   //MySQLのパスワード
	
	$sql = 'SELECT COUNT(*) FROM Save';
		
	$dbh = new PDO($dsn, $user, $pw);   //接続
	$sth = $dbh->prepare($sql);         //SQL準備
	$sth->execute();                    //実行
		
    $buff = $sth->fetch(PDO::FETCH_ASSOC);
    $savecount = $buff['COUNT(*)'];
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset = "utf8">
	<title>ノベルゲーム</title>
	
	<link rel = "stylesheet" href = "style.css">
	<style>
		#novelwindow {
			border : 1px solid grey;
			width : 800px;
			height : 600px;
			text-align : center;
			
			background-image : url(image/page13.jpg);
			background-size : 800px 600px;
		}
	
		#novelwindow > h1 {
			margin-top : 200px;
			font-size : 32pt;
			
			background-color : white;
		}
		
		#novelwindow > form > button {
			width : 200px;
			height : 60px;
			margin-bottom : 10px;
		}
	</style>
	
</head>

<body>
	
	<section id = "novelwindow">
		<h1>ももたろう</h1>
	
		<form action = "setup.html" method = "GET">
			<button>ニューゲーム</button>
		</form>
		
		<form action = "load.php" method = "GET">
			<button id = "load">ロード</button>
		</form>
				
	</section>
	
	<script>
		var savecount = "<?= $savecount ?>";
		console.log("<?= $savecount ?>");
		
		
		var loadBtn = document.querySelector("#load");
		loadBtn.disabled = "";
		
		if(savecount == 0)
		{
			loadBtn.disabled = "disabled";
		}
	</script>
	
</body>

</html>
