<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������
	if (isset($_POST['city'])) { $city=$_POST['city']; if ($city =='') { unset($city);} }
	if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
 if (empty($login) or empty($password)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
    {
    exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
    }
    //������ �� "��������" ����� � ��
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
	 $city = stripslashes($city);
    $city = htmlspecialchars($city);
	 $name = stripslashes($name);
    $name = htmlspecialchars($name);
 //������� ������ �������
    $login = trim($login);
    $password = trim($password);
	$city = trim($city);
	$name = trim($name);
 // ������������ � ����
    include ("bd.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
 // �������� �� ������������� ������������ � ����� �� �������
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    echo ("<script>location.href='alert2.html'</script>"); 
    }
 // ���� ������ ���, �� ��������� ������
    $result2 = mysql_query ("INSERT INTO users (login,password,city,name) VALUES('$login','$password','$city','$name')");
    // ���������, ���� �� ������
    if ($result2=='TRUE')
    {
    echo ("<script>location.href='alert4.html'</script>"); 
    }
 else {
    echo "������! �� �� ����������������.";
    }
    ?>