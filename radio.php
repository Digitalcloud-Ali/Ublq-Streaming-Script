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
$query_CATENEWS = "SELECT * FROM rad24ublq WHERE cates = 'news'";
$CATENEWS = mysql_query($query_CATENEWS, $Ublq) or die(mysql_error());
$row_CATENEWS = mysql_fetch_assoc($CATENEWS);
$totalRows_CATENEWS = mysql_num_rows($CATENEWS);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEMUSIC = "SELECT * FROM rad24ublq WHERE cates = 'music'";
$CATEMUSIC = mysql_query($query_CATEMUSIC, $Ublq) or die(mysql_error());
$row_CATEMUSIC = mysql_fetch_assoc($CATEMUSIC);
$totalRows_CATEMUSIC = mysql_num_rows($CATEMUSIC);

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
                <?php include('includes/channel_list/radio_list.php'); ?>
                  <?php include('includes/ublq_parts/searchbox.php'); ?>
                   <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="10">&nbsp;</td>
                <td width="689" valign="top"><table width="687" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="631" height="28" class="headering_black">Radio :</td>
                    <td width="59" valign="top">&nbsp;</td>
                  </tr>
                  
                </table>
                  <table width="682" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="314" valign="top"><table width="683" border="0" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                        <tr>
                          <td height="400" bgcolor="#002F4E"><div align="center">
                            <script type="text/javascript" language="javascript" src="http://www.dpbolvw.net/qa115u0xmoqt-xpq2BELGJJLL?target=_blank&mouseover=Y"></script>
                          </div></td>
                        </tr>
                      </table>
                      <table width="683" border="0" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                        <tr>
                          <td bgcolor="#002F4E"><table width="673" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="50"><div id="Movielist">
                                <script type="text/javascript">
			  startajaxtabs("Player") </script>
                                <div align="center">
                                  <object id="MediaPlayer" width="673" height="52" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95"codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" standby="Loading Microsoft Windows Media Player components..."type="application/x-oleobject">
                                    <param name="FileName" value="<?php echo $row_RadioPlayers['codes']; ?>" />
                                    <param name="ShowControls" value="1" />
                                    <param name="ShowAudioControls" value="1" />
                                    <param name="ShowPositionControls" value="0" />
                                    <param name="ShowTracker" value="0" />
                                    <param name="ShowStatusBar" value="1" />
                                    <param name="ShowDisplay" value="0" />
                                    <param name="DefaultFrame" value="Slide" />
                                    <param name="Autostart" value="1" />
                                    <param name="EnableContextMenu" value="false" />
                                    <embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/" src="<?php echo $row_RadioPlayers['codes']; ?>" showcontrols="1" showaudiocontrols="1" showpositioncontrols="0" showtracker="0" showstatusbar="1" showdisplay="0" defaultframe="" slideautostart="1" enablecontextmenu="false" width="673" height="52" ></embed>
                                  </object>
                                </div>
                              </div>                                </td>
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
                                          <td width="487"><script type="text/javascript" language="JavaScript" src="http://www.dpbolvw.net/q879z84uwy074xyAJMTORSKK?target=_blank&amp;mouseover=Y"></script></td>
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
mysql_free_result($CATENEWS);

mysql_free_result($CATEMUSIC);
?>