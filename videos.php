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
$query_CATEACTION = "SELECT * FROM mov25ublq WHERE cates = 'action'";
$CATEACTION = mysql_query($query_CATEACTION, $Ublq) or die(mysql_error());
$row_CATEACTION = mysql_fetch_assoc($CATEACTION);
$totalRows_CATEACTION = mysql_num_rows($CATEACTION);

mysql_select_db($database_Ublq, $Ublq);
$query_CATECHILDREN = "SELECT * FROM mov25ublq WHERE cates = 'children'";
$CATECHILDREN = mysql_query($query_CATECHILDREN, $Ublq) or die(mysql_error());
$row_CATECHILDREN = mysql_fetch_assoc($CATECHILDREN);
$totalRows_CATECHILDREN = mysql_num_rows($CATECHILDREN);

mysql_select_db($database_Ublq, $Ublq);
$query_CATECOMEDY = "SELECT * FROM mov25ublq WHERE cates = 'comedy'";
$CATECOMEDY = mysql_query($query_CATECOMEDY, $Ublq) or die(mysql_error());
$row_CATECOMEDY = mysql_fetch_assoc($CATECOMEDY);
$totalRows_CATECOMEDY = mysql_num_rows($CATECOMEDY);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEDOCUMENTARY = "SELECT * FROM mov25ublq WHERE cates = 'documentary'";
$CATEDOCUMENTARY = mysql_query($query_CATEDOCUMENTARY, $Ublq) or die(mysql_error());
$row_CATEDOCUMENTARY = mysql_fetch_assoc($CATEDOCUMENTARY);
$totalRows_CATEDOCUMENTARY = mysql_num_rows($CATEDOCUMENTARY);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEDRAMA = "SELECT * FROM mov25ublq WHERE cates = 'drama'";
$CATEDRAMA = mysql_query($query_CATEDRAMA, $Ublq) or die(mysql_error());
$row_CATEDRAMA = mysql_fetch_assoc($CATEDRAMA);
$totalRows_CATEDRAMA = mysql_num_rows($CATEDRAMA);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEFANTASY = "SELECT * FROM mov25ublq WHERE cates = 'fantasy'";
$CATEFANTASY = mysql_query($query_CATEFANTASY, $Ublq) or die(mysql_error());
$row_CATEFANTASY = mysql_fetch_assoc($CATEFANTASY);
$totalRows_CATEFANTASY = mysql_num_rows($CATEFANTASY);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEHORROR = "SELECT * FROM mov25ublq WHERE cates = 'horror'";
$CATEHORROR = mysql_query($query_CATEHORROR, $Ublq) or die(mysql_error());
$row_CATEHORROR = mysql_fetch_assoc($CATEHORROR);
$totalRows_CATEHORROR = mysql_num_rows($CATEHORROR);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mpfreebies - A Quality Streaming Tv - Radio - video Media Site</title>
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />
<link href="/includes/expand_script/ublq_expanded.css" rel="stylesheet" type="text/css" />
<style>#socialinks td { padding-left:2px; padding-right:2px;}</style>
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
                <td width="210" valign="top">
                <?php include('includes/channel_list/video_list.php'); ?>
                  <?php include('includes/ublq_parts/searchbox.php'); ?>
                   <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="10">&nbsp;</td>
                <td width="689" valign="top"><table width="687" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="631" height="28" class="headering_black">videos :</td>
                    <td width="59" valign="top">&nbsp;</td>
                  </tr>
                  
                </table>
                  <table width="682" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="314" valign="top"><table width="683" border="0" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                        <tr>
                          <td bgcolor="#002F4E"><table width="673" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="480"><div id="videolist">
                                <script type="text/javascript">
			  startajaxtabs("Player") </script>
                                <div align="center"><a href="http://www.dpbolvw.net/click-2977065-10530224" target="_blank" onmouseover="window.status='http://www.cyberlink.com';return true;" onmouseout="window.status=' ';return true;">
<img src="http://www.lduhtrp.net/image-2977065-10530224" width="300" height="250" alt="CyberLink PowerDirector 6" border="0"/></a></div>
                              </div>
                                </td>
                            </tr>
                            
                          </table></td>
                        </tr>
                      </table></td>
                  </tr>
                    <tr>
                      <td valign="top"><img src="/imagine/Scissor Cut.gif" width="682" height="20" />
                        <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="480"><table width="480" border="0" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                              <tr>
                                <td width="470" valign="top" bgcolor="#002F4E"><table width="468" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="278" valign="top"><table width="468" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="487"><script type="text/javascript" language="JavaScript" src="http://www.dpbolvw.net/r1101nzvkmoryvno09CJEHHJE?target=_blank&amp;mouseover=Y"></script></td>
                                        </tr>
                                    </table></td>
                                    </tr>
                                </table></td>
                              </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>                  
                  <img src="/imagine/Scissor Cut.gif" width="682" height="20" /></td>
                <td width="49">&nbsp;</td>
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
              <table width="911" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="605" valign="top"><?php include('includes/ublq_parts/about_ublq.php'); ?></td>
                <td width="302" valign="top"><?php include('includes/ublq_parts/ads_bottom.php'); ?></td>
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
mysql_free_result($CATEACTION);

mysql_free_result($CATECHILDREN);

mysql_free_result($CATECOMEDY);

mysql_free_result($CATEDOCUMENTARY);

mysql_free_result($CATEDRAMA);

mysql_free_result($CATEFANTASY);

mysql_free_result($CATEHORROR);
?>