<?php
$server_link = mysql_connect("localhost", "root", "")//$server_link 是资源型变量
	or die("Can not connect: to server" . mysql_error());
print ("Connected successfully");
mysql_close($server_link);
?>