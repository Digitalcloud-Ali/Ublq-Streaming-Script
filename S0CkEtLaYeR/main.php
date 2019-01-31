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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Ublq 2.0 Administrator</title>
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />
<link href="/S0CkEtLaYeR/includes/expand_script/ublq_expanded.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/S0CkEtLaYeR/includes/expand_script/ublq_expanded.js"></script>
<script type="text/javascript" src="/S0CkEtLaYeR/includes/tools/switch.js"></script>

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
            <td width="840" height="28" class="headering_black" style="padding-left:6px;">Ublq 2.0 Administrator :</td>
            <td width="64" valign="top">&nbsp;</td>
          </tr>
        </table>
    <table width="897" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
                  <td width="901" height="219" valign="top"><table width="896" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="886"><div align="center"><img src="../imagine/Puma.png" width="256" height="256" /></div></td>
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
</table>
</body>
</html>
