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
	<title>Load</title>
	
	<style>
	#novelwindow {
		border : 1px solid grey;
		width : 790px;
		height : 600px;
		padding : 0px 0px 0px 10px;
	}
	
	#novelwindow > form {
		display : inline;
	}
	
	.Button {
		width : 385px;
		height : 173px;
		margin : 0px 10px 10px 0px;
	}
	
	.hiddenButton {
		width : 385px;
		height : 173px;
		margin : 0px 10px 10px 0px;
		display : none;
	}
	
	.control > button {
		width : 386px;
		height : 30px;
		margin : 10px 0px 10px 0px;
	}
	</style>
</head>

<body>
	
	<div id = "novelwindow">
		<form class = "control">
			<button id="back" type="button">←</button>
		</form>
		
		<form class = "control">
			<button id="next" type="button">→</button>
		</form>
	</div>
	
	<script>
		//シナリオの配列を用意
		var save = [];
		var count = 0
		
		"<?php 
			$sql = 'SELECT * FROM Save';
		
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
   			
   			save[count] = "<?= $buff['scenario_id'] ?>";
   			count++;
   			
   		"<?php 
			};
		?>"
	
		var savecount = "<?= $savecount ?>";
		console.log("<?= $savecount ?>");
	
		for(var i = 1; i <= savecount; i++)
		{
			if(i <= 6)
			{
			novelwindow.innerHTML += 
				"<form id = " + i +" action = 'novel.php' method = 'GET'>" +
					"<input type = 'hidden' name = 'scenario_id' value = " + save[i - 1] + ">" +
					"<button class = 'Button'>セーブ" + i + "</button>" +
				"</form>";
			}
			else
			{
			novelwindow.innerHTML += 
				"<form id = " + i +" action = 'novel.php' method = 'GET'>" +
					"<input type = 'hidden' name = 'scenario_id' value = " + save[i - 1] + ">" +
					"<button class = 'hiddenButton'>セーブ" + i + "</button>" +
				"</form>";
			}
		}
		
		var pageSaveStart = 1;
		
		var back = document.querySelector("#back");
		var next = document.querySelector("#next");
		
		back.setAttribute("disabled", "disabled");
		if(savecount < pageSaveStart + 6)
			next.setAttribute("disabled", "disabled");
		
		back.addEventListener("click", function()
		{
			console.log('back');
			pageSaveStart -= 6
			
			for(var i = 1; i <= savecount; i++)
			{
				if(i >= pageSaveStart && i <= pageSaveStart + 5)
				{
					var elem = document.getElementById(i);
					elem.innerHTML = 
						"<input type = 'hidden' name = 'scenario_id' value = " + save[i - 1] + ">" +
						"<button class = 'Button'>セーブ" + i + "</button>";
				}
				else
				{
					var elem = document.getElementById(i);
					elem.innerHTML = 
						"<input type = 'hidden' name = 'scenario_id' value = " + save[i - 1] + ">" +
						"<button class = 'hiddenButton'>セーブ" + i + "</button>";
				}
			}
			
			if(1 >= pageSaveStart)
				this.setAttribute("disabled", "disabled");
			
			next.removeAttribute("disabled");
		});
		
		next.addEventListener("click", function()
		{
			console.log('next');
			pageSaveStart += 6
			
			for(var i = 1; i <= savecount; i++)
			{
				if(i >= pageSaveStart && i <= pageSaveStart + 5)
				{
					var elem = document.getElementById(i);
					elem.innerHTML = 
						"<input type = 'hidden' name = 'scenario_id' value = " + save[i - 1] + ">" +
						"<button class = 'Button'>セーブ" + i + "</button>";
				}
				else
				{
					var elem = document.getElementById(i);
					elem.innerHTML = 
						"<input type = 'hidden' name = 'scenario_id' value = " + save[i - 1] + ">" +
						"<button class = 'hiddenButton'>セーブ" + i + "</button>";
				}
			}
			
			if(savecount < pageSaveStart + 6)
				this.setAttribute("disabled", "disabled");
			
			back.removeAttribute("disabled");
		});


	</script>
	
</body>

</html>
