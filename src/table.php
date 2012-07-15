<?php



$db = mysql_connect("ваш MySQL сервер","логин к этому серверу","пароль к этому серверу") or die ("Ќет коннекта к базе."); 
mysql_select_db("им€ базы, к которой подключаемс€",$db);


	$query2 = mysql_query("SELECT * FROM `russian_table` ORDER BY `score` DESC LIMIT 10"); //»з таблицы russian_table
	$count = 1;
	while($line = mysql_fetch_array($query2))
	{
		print $count." ".$line['name']." ".$line['city']." ".$line['score']."<br>";

		$count=$count+1;
	}


?>
