<html>
    <head>
    <title>�����������</title>
    </head>
    <body>
    <h2>�����������</h2>
    <form action="save_user.php" method="post">
    <!--**** save_user.php - ��� ����� �����������.  �� ����, ����� ������� �� ������ "������������������", ������ �� �����  ���������� �� ��������� save_user.php ������� "post" ***** -->
<p>
    <label>��� �����:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<!--**** � ��������� ���� (name="login" type="text") ������������ ������ ���� ����� ***** -->
<p>
    <label>��� ������:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<!--**** � ���� ��� ������� (name="password" type="password") ������������ ������ ���� ������ ***** --> 
<p>
    <input type="submit" name="submit" value="������������������">
<!--**** �������� (type="submit") ���������� ������ �� ��������� save_user.php ***** --> 
</p></form>
    </body>
    </html>