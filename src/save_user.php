<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	if (isset($_POST['city'])) { $city=$_POST['city']; if ($city =='') { unset($city);} }
	if (isset($_POST['name'])) { $name=$_POST['name']; if ($name =='') { unset($name);} }
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //защита от "инъекций" тегов в БД
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
	 $city = stripslashes($city);
    $city = htmlspecialchars($city);
	 $name = stripslashes($name);
    $name = htmlspecialchars($name);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
	$city = trim($city);
	$name = trim($name);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    echo ("<script>location.href='alert2.html'</script>"); 
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (login,password,city,name) VALUES('$login','$password','$city','$name')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo ("<script>location.href='alert4.html'</script>"); 
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>