<?php



$db = mysql_connect("��� MySQL ������","����� � ����� �������","������ � ����� �������") or die ("��� �������� � ����."); 
mysql_select_db("��� ����, � ������� ������������",$db);


	$query2 = mysql_query("SELECT * FROM `russian_table` ORDER BY `score` DESC LIMIT 10"); //�� ������� russian_table
	$count = 1;
	while($line = mysql_fetch_array($query2))
	{
		print $count." ".$line['name']." ".$line['city']." ".$line['score']."<br>";

		$count=$count+1;
	}


?>
