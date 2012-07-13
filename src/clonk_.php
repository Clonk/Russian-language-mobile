<?php



$db = mysql_connect("localhost","clonk_musix","123123") or die ("Нет коннекта к базе."); 
mysql_select_db("clonk_board",$db);

if($_REQUEST['action'] == "get")
{
	$query2 = mysql_query("SELECT * FROM `russian_table` ORDER BY `score` DESC LIMIT 10");
	$count = 1;
	while($line = mysql_fetch_array($query2))
	{
		echo "name".$count."=".$line['name'];
		echo "&score".$count."=".$line['score']."&";
		echo "city".$count."=".$line['city'];
		$count=$count+1;
	}
}

?>