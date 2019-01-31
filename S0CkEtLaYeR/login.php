<?php require_once('../Connections/Ublq.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Usercode'])) {
  $loginUsername=$_POST['Usercode'];
  $password=$_POST['Passcode'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "/S0CkEtLaYeR/main.php";
  $MM_redirectLoginFailed = "/S0CkEtLaYeR/error.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_Ublq, $Ublq);
  
  $LoginRS__query=sprintf("SELECT Usercode, Passcode FROM s3curela3yers WHERE Usercode=%s AND Passcode=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $Ublq) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Secure Socket Layer Trip System</title>
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />
<link href="/S0CkEtLaYeR/includes/expand_script/ublq_expanded.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div>
      <table width="285" border="0" cellpadding="0" cellspacing="1" bgcolor="#002F4E">
        <tr>
          <td width="285" height="29" bgcolor="#002F4E">&nbsp;</td>
        </tr>
      </table>
    </div>
      <div align="center"><div>
  <table width="285" height="130" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#002F4E">
    <tr>
      <td width="281" height="4" valign="top" bgcolor="#002F4E"><form style="margin-bottom: 0" id="form1" name="SocketSecureForm" method="POST" action="<?php echo $loginFormAction; ?>">
        <table width="279" height="118" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="78" height="42" class="headering">Username :</td>
            <td width="201"><table width="200" border="0" cellpadding="0" cellspacing="1" bgcolor="#4BA7D7">
                <tr>
                  <td bgcolor="#4BA7D7"><input name="Usercode" type="text" class="searchbar" id="Usercode" value="Usercode" size="33" onclick="if(this.value == 'Usercode') {this.value = '';}" onblur="if(this.value == '') {this.value = 'Usercode';}"/></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="47" class="headering">Password :</td>
            <td><table width="200" border="0" cellpadding="0" cellspacing="1" bgcolor="#4BA7D7">
                <tr>
                  <td bgcolor="#4BA7D7"><input name="Passcode" type="password" class="searchbar" id="Passcode" value="Passcode" size="33" onclick="if(this.value == 'Passcode') {this.value = '';}" onblur="if(this.value == '') {this.value = 'Passcode';}"/></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="29">&nbsp;</td>
            <td><table border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#4BA7D7">
                <tr>
                  <td bgcolor="#4BA7D7"><input name="button" type="submit" class="searchbutton" id="button" value="Login" /></td>
                </tr>
              </table>
                <label></label></td>
          </tr>
        </table>
            </form>
      </td>
    </tr>
  </table>
</div></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center" class="text1">Error Page</p>
</body>
</html>