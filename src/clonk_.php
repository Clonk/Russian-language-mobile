<?php



$db = mysql_connect("localhost","clonk_musix","123123") or die ("Нет коннекта к базе."); 
mysql_select_db("clonk_board",$db);


	$query2 = mysql_query("SELECT * FROM `russian_table` ORDER BY `score` DESC LIMIT 10");
	$count = 1;
	while($line = mysql_fetch_array($query2))
	{
		print $count." ".$line['name']." ".$line['city']." ".$line['score']."<br>";

		$count=$count+1;
	}


?>
