<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Mpfreebies = "localhost";
$database_Ublq = "ublq2";
$username_Ublq = "root";
$password_Ublq = "raza";
$Ublq = mysql_pconnect($hostname_Ublq, $username_Ublq, $password_Ublq) or trigger_error(mysql_error(),E_USER_ERROR); 
?>