<?php
// Соединяемся, выбираем базу данных
$connection = mysql_connect('mysql_host', 'mysql_user', 'mysql_password');
mysql_select_db('is8106'); 
mysql_set_chareset("utf-8");
if (!$connection || !$db)
{
    exit(mysql_error());
}
?>