<?php
if (isset($_POST['score'])) { $score=$_POST['score']; if ($score =='') { unset($score);} }
	if (isset($_SESSION['city'])) { $city=$_SESSION['city']; if ($city =='') { unset($city);} }
	if (isset($_SESSION['name'])) { $name=$_SESSION['name']; if ($name =='') { unset($name);} }
	if (isset($_SESSION['login'])) { $login = $_SESSION['login']; if ($login =='') { unset($login);} }
 // ������������ � ����
    include ("bd.php"); 
 // �������� �� �������������
    $result = mysql_query("SELECT id FROM russian_table WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    echo ("<script>location.href='alert1.html'</script>"); 
    }
 // ���� ������ ���, �� ��������� ������
    $result2 = mysql_query ("INSERT INTO russian_table (login,name,score,city) VALUES('$login','$name','$score','$city')");
    // ���������, ���� �� ������
    if ($result2=='TRUE')
    {
    echo ("<script>location.href='alert5.html'</script>"); 
    }
 else {
    echo ("<script>location.href='index.html'</script>"); 
    }
    ?>