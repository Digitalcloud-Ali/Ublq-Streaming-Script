<?php require_once('../Connections/Ublq.php'); ?>
<?php $request = $_REQUEST['ids']; ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "/S0CkEtLaYeR/index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "/S0CkEtLaYeR/error.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "InsertTvChannels")) {
  $updateSQL = sprintf("UPDATE ublq24tv SET ChannelName=%s, codes=%s, daters=%s, cates=%s, keywds=%s WHERE ids=%s",
                       GetSQLValueString($_POST['ChannelName'], "text"),
                       GetSQLValueString($_POST['codes'], "text"),
                       GetSQLValueString($_POST['daters'], "text"),
                       GetSQLValueString($_POST['cates'], "text"),
                       GetSQLValueString($_POST['keywds'], "text"),
                       GetSQLValueString($_POST['ids'], "int"));

  mysql_select_db($database_Ublq, $Ublq);
  $Result1 = mysql_query($updateSQL, $Ublq) or die(mysql_error());

  $updateGoTo = "tv.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$currentPage = $_SERVER["PHP_SELF"];

$colname_editv = "-1";
if (isset($_GET['ids'])) {
  $colname_editv = $_GET['ids'];
}
mysql_select_db($database_Ublq, $Ublq);
$query_editv = sprintf("SELECT * FROM ublq24tv WHERE ids = %s", GetSQLValueString($colname_editv, "int"));
$editv = mysql_query($query_editv, $Ublq) or die(mysql_error());
$row_editv = mysql_fetch_assoc($editv);
$totalRows_editv = mysql_num_rows($editv);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Tv</title>
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />

</head>

<body>

<table width="1003" border="0" cellpadding="0" cellspacing="0" class="Backgrounding">
  <tr>
    <td width="27" height="110">&nbsp;</td>
    <td width="976"><img src="../imagine/logo.gif" width="136" height="70" /></td>
  </tr>
</table>
<table width="1003" height="199" border="0" cellpadding="0" cellspacing="0" class="Backgrounding_downing">
  <tr>
    <td height="199"><table width="865" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="709" height="114"><div align="center"><a href="tv.php"><img src="../imagine/Pics-Folder.png" alt="Television Management Section" width="100" height="100" border="0" /></a></div></td>
        <td width="709"><div align="center"><a href="rad.php"><img src="../imagine/Music-Folder.png" alt="Radio Management Section" width="100" height="100" border="0" /></a></div></td>
        <td width="709"><div align="center"><a href="mov.php"><img src="../imagine/Movie-Folder.png" alt="Movies Management Section" width="100" height="100" border="0" /></a></div></td>
        <td width="709"><div align="center"><a href="gam.php"><img src="../imagine/Games-folder.png" alt="Games Management Section" width="100" height="100" border="0" /></a></div></td>
        <td width="709"><div align="center"><a href="art.php"><img src="../imagine/Documents-Folder.png" alt="Articles Management Section" width="100" height="100" border="0" /></a></div></td>
        <td width="709"><div align="center"><a href="mob.php"><img src="../imagine/Tentacles-Folder.png" alt="Mobile Management Section" width="100" height="100" border="0" /></a></div></td>
        </tr>
      <tr>
        <td height="19" class="headering_black"><div align="center"><a href="tv.php" class="headering_Bluelink">Television</a></div></td>
        <td class="headering_black"><div align="center"><a href="rad.php" class="headering_Bluelink">Radio</a></div></td>
        <td class="headering_black"><div align="center"><a href="mov.php" class="headering_Bluelink">Movies</a></div></td>
        <td class="headering_black"><div align="center"><a href="gam.php" class="headering_Bluelink">Games</a></div></td>
        <td class="headering_black"><div align="center"><a href="art.php" class="headering_Bluelink">Articles</a></div></td>
        <td class="headering_black"><div align="center"><a href="mob.php" class="headering_Bluelink">Mobile</a></div></td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="1003" border="0" cellpadding="0" cellspacing="0" class="centertop">
  <tr>
    <td height="28" valign="bottom"><table width="263" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="45"></td>
        <td width="211" valign="top"><table width="210" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="210" height="1" bgcolor="#FFFFFF"></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<table width="1003" border="0" cellpadding="0" cellspacing="0" class="center">
  <tr>
    <td valign="top"><table width="1003" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="46" height="148">&nbsp;</td>
        <td width="689" valign="top" bgcolor="#FFFFFF"><table width="888" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="840" height="28" class="headering_black" style="padding-left:6px;">Edit Tv :</td>
            <td width="64" valign="top">&nbsp;</td>
          </tr>
        </table>
    <table width="897" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
                  <td width="901" height="219" valign="top"><table width="896" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="886"><div align="center"><form action="<?php echo $editFormAction; ?>" id="InsertTvChannels" name="InsertTvChannels" method="POST">
                    <table border="0" cellpadding="4" cellspacing="0">
                      <tr>
                        <td width="76" bgcolor="#FFFFFF" class="graytext">Preview :</td>
                        <td width="303" bgcolor="#FFFFFF"><table width="416" border="0" cellpadding="0" cellspacing="1" bgcolor="#D4D0C8">
                            <tr>
                                <td bgcolor="#21262B"><?php echo $row_editv['codes']; ?></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td height="33" bgcolor="#FFFFFF" class="graytext">Channel Name :</td>
                        <td bgcolor="#FFFFFF"><input name="ChannelName" type="text" class="editbar" id="ChannelName3" value="<?php echo $row_editv['ChannelName']; ?>" /></td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF" class="graytext">CodeLink :</td>
                        <td bgcolor="#FFFFFF"><textarea name="codes" cols="80" rows="15" class="editbar" id="codes"><?php echo $row_editv['codes']; ?></textarea></td>
                      </tr>
                      <tr>
                        <td height="33" bgcolor="#FFFFFF" class="graytext">Date :</td>
                        <td bgcolor="#FFFFFF"><input name="daters" type="text" class="editbar" id="daters" value="<?php echo $row_editv['daters']; ?>"/></td>
                      </tr>
                      <tr>
                        <td height="33" bgcolor="#FFFFFF" class="graytext">Category :</td>
                        <td bgcolor="#FFFFFF"><select name="cates" class="editbar" id="cates">
                          <option selected="selected" value="" <?php if (!(strcmp("", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Select Here</option>
                          <option value="news" <?php if (!(strcmp("news", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>News</option>
                          <option value="information" <?php if (!(strcmp("information", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Information</option>
                          <option value="entertainment" <?php if (!(strcmp("entertainment", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Entertainment</option>
                          <option value="movies" <?php if (!(strcmp("movies", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Movies</option>
                          <option value="reality" <?php if (!(strcmp("reality", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Reality</option>
                          <option value="lifestyle" <?php if (!(strcmp("lifestyle", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Lifestyle</option>
                          <option value="fashion" <?php if (!(strcmp("fashion", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Fashion</option>
                          <option value="shopping" <?php if (!(strcmp("shopping", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Shopping</option>
                          <option value="music" <?php if (!(strcmp("music", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Music</option>
                          <option value="youth" <?php if (!(strcmp("youth", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Youth</option>
                          <option value="kids" <?php if (!(strcmp("kids", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Kids</option>
                          <option value="sports" <?php if (!(strcmp("sports", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Sports</option>
                          <option value="games" <?php if (!(strcmp("games", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Games</option>
                          <option value="religion" <?php if (!(strcmp("religion", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Religion</option>
                          <option value="documentary" <?php if (!(strcmp("documentary", $row_editv['cates']))) {echo "selected=\"selected\"";} ?>>Documentary</option>
                        </select></td>
                      </tr>
                      <tr>
                        <td height="33" bgcolor="#FFFFFF" class="graytext">Keywords :</td>
                        <td bgcolor="#FFFFFF"><input name="keywds" type="text" class="editbar" id="keywds" value="<?php echo $row_editv['keywds']; ?>" size="78" maxlength="40" /></td>
                      </tr>
                      <tr>
                        <td bgcolor="#FFFFFF">&nbsp;</td>
                        <td bgcolor="#FFFFFF"><input name="button" type="submit" class="searchbutton" id="button" value="Update" /></td>
                      </tr>
                    </table>
                                    
                    
                    
                    
                    <input name="ids" type="hidden" id="ids" value="<?php echo $row_editv['ids']; ?>" />
                    <input type="hidden" name="MM_update" value="InsertTvChannels" />
                  </form></div></td>
                      </tr>
                    
                  </table></td>
              </tr>
                <tr>
                  <td valign="top"><div align="center"><img src="../imagine/Scissor Cut.gif" width="682" height="20" /></div></td>
                </tr>
            </table>
          </td>
        <td width="48">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1003" border="0" cellpadding="0" cellspacing="0" class="centerbot">
  <tr>
    <td height="7" valign="top"><table width="263" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="45"></td>
        <td width="211" valign="top"><table width="210" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="210" height="4" bgcolor="#FFFFFF"></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1003" border="0" cellpadding="0" cellspacing="0" class="footer_downing">
  <tr>
    <td height="12"></td>
  </tr>
</table>
<table width="1003" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#000000"><table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="12"></td>
      </tr>
    </table>
      <table width="596" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="22"><div align="center" id="Player2"><a href="main.php" class="footerlink">Home</a><span class="footerlinkline"> ¦ </span><a href="setting.php" class="footerlink">Setting</a><span class="footerlinkline"> ¦ </span><a href="<?php echo $logoutAction ?>" class="footerlink">Logout</a></div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</tabl
</body>
</html>
<?php
mysql_free_result($editv);
?>
