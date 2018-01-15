<?php
	//-------------------------------------------------
	//準備
	//-------------------------------------------------
	$dsn  = 'mysql:dbname=MyNovelDB;host=127.0.0.1';   //接続先
	$user = 'root';         //MySQLのユーザーID
	$pw   = 'H@chiouji1';   //MySQLのパスワード


	if(array_key_exists('playername', $_GET))
	{
		/*
		$sql = 'UPDATE Save SET playername = :name';
		
		$dbh = new PDO($dsn, $user, $pw);   //接続
		$sth = $dbh->prepare($sql);         //SQL準備
		$sth->bindValue(':name', $_GET['playername'], PDO::PARAM_STR);
		$sth->execute();
		*/
		
		$playername = $_GET['playername'];
		$scenario_id = 1;
	}
	else
	{
		$sql = 'SELECT playername FROM Save WHERE scenario_id = :id';
		
		$dbh = new PDO($dsn, $user, $pw);   //接続
		$sth = $dbh->prepare($sql);         //SQL準備
		$sth->bindValue(':id', $_GET['scenario_id'], PDO::PARAM_INT);
		$sth->execute();                    //実行
		
    	$buff = $sth->fetch(PDO::FETCH_ASSOC);
    	$playername = $buff['playername'];
    	
    	$scenario_id = $_GET['scenario_id'];
	}
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset = "utf8">
	<title>Novel</title>
	
	<style>
		#novelwindow {
			border : 1px solid grey;
			width : 800px;
			height : 600px;
			
			background-image : url(image/page01.jpg);
			background-size : 800px 600px;
		}
		
		#message {
			position : absolute;
			top : 350px;
			left : 75px;
			
			border : 1px solid blue;
			width : 650px;
			height : 200px;
			
			font-size : 22pt;
			padding : 5px;
			
			background-color : rgba(221, 255, 253, 0.5);
		}
		
		#char1 {
			height : 600px;
		}
		
		#saveButton {
			position : absolute;
			top : 570px;
			left : 700px;
			
			width : 100px;
			height : 30px;
		}
		
	</style>
</head>

<body>
	
	<div id = "novelwindow">
		
		<div id = "message">
			あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお
		</div>
		
		<form id = "save" action = "save.php" method = "GET">
			
		</form>
		
	</div>
	
	<audio id = "bgm" src="audio/bgm2.wav" autoplay loop></audio>
	
	<script>
		//プレイヤーネームの取得
		var playername = "<?= $playername ?>";
		//シナリオの配列を用意
		var scenario = [];
		var count = 0
		
		console.log("<?= $test ?>");

		"<?php 
			$sql = 'SELECT * FROM Scenario';
		
			$dbh = new PDO($dsn, $user, $pw);   //接続
			$sth = $dbh->prepare($sql);         //SQL準備
			$sth->execute();                    //実行

			//取得した内容を表示する
			while(true)
			{
    			//ここで1レコード取得
    			$buff = $sth->fetch(PDO::FETCH_ASSOC);
    			if( $buff === false )
    			{
        			break;    //データがもう存在しない場合はループを抜ける
   				}
   				
   		?>"
   			
   			scenario[count] = ["<?= $buff['command'] ?>","<?= $buff['value'] ?>"];
   			count++;
   			
   		"<?php 
			};
		?>"
		
		//クリックカウントにロード画面から受け取ったシナリオIDを代入（配列用に-1しておく）
		var clickCount = "<?= $scenario_id ?>" - 1;
		//必要な物を取得
		var msg = document.querySelector("#message");
		var char1 = document.querySelector("#char1");
		var audio = document.querySelector("#bgm");
		
		//ロードとして表示したいところまで最初からシナリオを実行していく
		for(var i = 0; i <= clickCount; i++)
		{
			var command = scenario[i][0];
			var value = scenario[i][1];
		
			switch(command)
			{
				case "TXT" : 
					value = value.replace(/##NAME##/g, 
						"<span style = 'color : red'>" + playername + "</span>");
					
					message.innerHTML = value;
					break;
					
				case "CHAR" :
					char1.setAttribute("src", value);
					break;
					
				case "IMAGE" :
					novelwindow.style.backgroundImage = value;
					break;
					
				case "BGM" : 
					audio.setAttribute("src", value);
					break;
			}
		}
		//次のクリックでは次のシナリオを表示したいのでクリックカウントをプラスしておく
		clickCount++;
		
		save.innerHTML = 
			"<input type = 'hidden' name = 'scenario_id' value = " + clickCount + ">" +
			"<input type = 'hidden' name = 'playername' value = " + playername + ">" +
			"<button id = 'saveButton'>セーブ</button>";
		
		//メッセージウィンドウがクリックされた時の処理
		msg.addEventListener("click", function()
		{
			var command = scenario[clickCount][0];
			var value = scenario[clickCount][1];
		
			switch(command)
			{
				case "TXT" : 
					value = value.replace(/##NAME##/g, 
						"<span style = 'color : red'>" + playername + "</span>");
					
					this.innerHTML = value;
					break;
					
				case "CHAR" :
					char1.setAttribute("src", value);
					break;
					
				case "IMAGE" :
					novelwindow.style.backgroundImage = value;
					break;
					
				case "BGM" : 
					audio.setAttribute("src", value);
					break;
					
				case "END" :
					location.href = value;
					break;	
			}
			
			clickCount++;
			
			save.innerHTML = 
				"<input type = 'hidden' name = 'scenario_id' value = " + clickCount + ">" +
				"<input type = 'hidden' name = 'playername' value = " + playername + ">" +
				"<button id = 'saveButton'>セーブ</button>";
		});
			
	</script>
	
</body>

</html>
