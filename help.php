<?php require_once('Connections/Ublq.php'); ?>
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

mysql_select_db($database_Ublq, $Ublq);
$query_Helprecord = "SELECT * FROM utaggers WHERE parts = 'phelp'";
$Helprecord = mysql_query($query_Helprecord, $Ublq) or die(mysql_error());
$row_Helprecord = mysql_fetch_assoc($Helprecord);
$totalRows_Helprecord = mysql_num_rows($Helprecord);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mpfreebies - A Quality Streaming Tv - Radio - Movie Media Site</title>
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />
<link href="/includes/expand_script/ublq_expanded.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/includes/expand_script/ublq_expanded.js"></script>
<script type="text/javascript" src="/includes/player/t_r_m_g_player.js"></script>
<script type="text/javascript" src="/includes/disable_rightclick.js"></script>
</head>
<body onload="initShowHideDivs();">
<table width="1003" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php include('includes/ublq_parts/startup_section.php'); ?>
<table width="1003" border="0" cellpadding="0" cellspacing="0" class="centertop">
  <tr>
    <td height="28"></td>
  </tr>
</table>
<table width="1003" border="0" cellpadding="0" cellspacing="0" class="center">
        <tr>
          <td valign="top"><table width="1002" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="46" height="148">&nbsp;</td>
                <td width="209" valign="top"><?php include('includes/ublq_parts/searchbox.php'); ?>
                   <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="10">&nbsp;</td>
                <td width="689" valign="top"><table width="687" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="631" height="28" class="headering_black">UBlq Help &amp; Support   :</td>
                    <td width="59" valign="top"><table width="59" border="0" align="right" cellpadding="0" cellspacing="0" class="fold">
                      <tr>
                        <td height="23">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  
                </table>
                  <table width="682" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="314" valign="top"><table width="687" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="687" height="480" valign="top" bgcolor="#FFFFFF"><p class="graytext"><?php if ($totalRows_Utaggery > 0) { // Show if recordset not empty ?>
                          </MM:DECORATION></MM_HIDDENREGION>
                          </span>
                            <MM_HIDDENREGION><MM:DECORATION OUTLINE="Show%20If..." OUTLINEID=1><span></span></MM:DECORATION></MM_HIDDENREGION>
                            <?php echo $row_Helprecord['taggers']; ?>
                            <span>
<MM_HIDDENREGION><MM:DECORATION OUTLINE="Show%20If..." OUTLINEID=1>
                            <?php } // Show if recordset not empty ?>
                            </span><span class="stats">
                          <?php if ($totalRows_Utaggery == 0) { // Show if recordset empty ?>
                            No Tags
  <?php } // Show if recordset empty ?></p></td>
                        </tr>
                      </table></td>
                  </tr>
                    <tr>
                      <td valign="top"><img src="/imagine/Scissor Cut.gif" width="682" height="20" /></td>
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
          <td height="7"></td>
        </tr>
      </table>
      <table width="1003" border="0" cellpadding="0" cellspacing="0" class="bot">
        <tr>
          <td valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="8"></td>
              </tr>
            </table>
              <table width="918" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="605" valign="top"><?php include('includes/ublq_parts/about_ublq.php'); ?></td>
                <td width="306" valign="top"><?php include('includes/ublq_parts/ads_bottom.php'); ?></td>
                </tr>
              </table>
            <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="6"></td>
                </tr>
            </table></td>
        </tr>
      </table>
      <?php include('includes/ublq_parts/bottom_links.php'); ?></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Helprecord);
?>