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
$query_CATEACTION = "SELECT * FROM nlq21gam WHERE cates = 'action'";
$CATEACTION = mysql_query($query_CATEACTION, $Ublq) or die(mysql_error());
$row_CATEACTION = mysql_fetch_assoc($CATEACTION);
$totalRows_CATEACTION = mysql_num_rows($CATEACTION);

mysql_select_db($database_Ublq, $Ublq);
$query_CATESPORTS = "SELECT * FROM nlq21gam WHERE cates = 'sports'";
$CATESPORTS = mysql_query($query_CATESPORTS, $Ublq) or die(mysql_error());
$row_CATESPORTS = mysql_fetch_assoc($CATESPORTS);
$totalRows_CATESPORTS = mysql_num_rows($CATESPORTS);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEPUZZLE = "SELECT * FROM nlq21gam WHERE cates = 'puzzle'";
$CATEPUZZLE = mysql_query($query_CATEPUZZLE, $Ublq) or die(mysql_error());
$row_CATEPUZZLE = mysql_fetch_assoc($CATEPUZZLE);
$totalRows_CATEPUZZLE = mysql_num_rows($CATEPUZZLE);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEARCADE = "SELECT * FROM nlq21gam WHERE cates = 'arcade'";
$CATEARCADE = mysql_query($query_CATEARCADE, $Ublq) or die(mysql_error());
$row_CATEARCADE = mysql_fetch_assoc($CATEARCADE);
$totalRows_CATEARCADE = mysql_num_rows($CATEARCADE);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mpfreebies - A Quality Streaming Tv - Radio - Movie Media Site</title>
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />
<link href="/includes/expand_script/ublq_expanded.css" rel="stylesheet" type="text/css" />
<style>#socialinks td { padding-left:2px; padding-right:2px;}</style>
<script type="text/javascript" src="/includes/expand_script/ublq_expanded.js"></script>
<script type="text/javascript" src="/includes/player/t_r_m_g_player.js"></script>
<script type="text/javascript" src="/includes/disable_rightclick.js"></script>
</head>
<body onLoad="initShowHideDivs();">
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
                <?php include('includes/channel_list/game_list.php'); ?>
                  <?php include('includes/ublq_parts/searchbox.php'); ?>
                   <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="10">&nbsp;</td>
                <td width="689" valign="top"><table width="687" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="631" height="28" class="headering_black">Games :</td>
                    <td width="59" valign="top">&nbsp;</td>
                  </tr>
                  
                </table>
                  <table width="682" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="314" valign="top"><table width="683" border="0" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                        <tr>
                          <td bgcolor="#002F4E"><table width="673" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="480"><div id="Movielist">
                                <script type="text/javascript">
			  startajaxtabs("Player") </script>
                                <div align="center">
                                  <script type="text/javascript" language="javascript" src="http://www.dpbolvw.net/dl104f51rtvy41uv7GJQLOOPJ?target=_blank&mouseover=Y"></script>
                                </div>
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
                                          <td width="487"><script type="text/javascript" language="javascript" src="http://www.jdoqocy.com/sq112nzvkmoryvno09CJEHHHJ?target=_blank&mouseover=Y"></script></td>
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
          <td height="6"></td>
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

mysql_free_result($CATESPORTS);

mysql_free_result($CATEPUZZLE);

mysql_free_result($CATEARCADE);
?>