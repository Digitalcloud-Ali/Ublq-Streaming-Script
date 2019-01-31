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
$query_CATENEWS = "SELECT * FROM ublq24tv WHERE cates = 'news'";
$CATENEWS = mysql_query($query_CATENEWS, $Ublq) or die(mysql_error());
$row_CATENEWS = mysql_fetch_assoc($CATENEWS);
$totalRows_CATENEWS = mysql_num_rows($CATENEWS);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEINFORMATION = "SELECT * FROM ublq24tv WHERE cates = 'information'";
$CATEINFORMATION = mysql_query($query_CATEINFORMATION, $Ublq) or die(mysql_error());
$row_CATEINFORMATION = mysql_fetch_assoc($CATEINFORMATION);
$totalRows_CATEINFORMATION = mysql_num_rows($CATEINFORMATION);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEENTERTAINMENT = "SELECT * FROM ublq24tv WHERE cates = 'entertainment'";
$CATEENTERTAINMENT = mysql_query($query_CATEENTERTAINMENT, $Ublq) or die(mysql_error());
$row_CATEENTERTAINMENT = mysql_fetch_assoc($CATEENTERTAINMENT);
$totalRows_CATEENTERTAINMENT = mysql_num_rows($CATEENTERTAINMENT);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEMOVIES = "SELECT * FROM ublq24tv WHERE cates = 'movies'";
$CATEMOVIES = mysql_query($query_CATEMOVIES, $Ublq) or die(mysql_error());
$row_CATEMOVIES = mysql_fetch_assoc($CATEMOVIES);
$totalRows_CATEMOVIES = mysql_num_rows($CATEMOVIES);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEREALITY = "SELECT * FROM ublq24tv WHERE cates = 'reality'";
$CATEREALITY = mysql_query($query_CATEREALITY, $Ublq) or die(mysql_error());
$row_CATEREALITY = mysql_fetch_assoc($CATEREALITY);
$totalRows_CATEREALITY = mysql_num_rows($CATEREALITY);

mysql_select_db($database_Ublq, $Ublq);
$query_CATELIFESTYLE = "SELECT * FROM ublq24tv WHERE cates = 'lifestyle'";
$CATELIFESTYLE = mysql_query($query_CATELIFESTYLE, $Ublq) or die(mysql_error());
$row_CATELIFESTYLE = mysql_fetch_assoc($CATELIFESTYLE);
$totalRows_CATELIFESTYLE = mysql_num_rows($CATELIFESTYLE);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEFASHION = "SELECT * FROM ublq24tv WHERE cates = 'fashion'";
$CATEFASHION = mysql_query($query_CATEFASHION, $Ublq) or die(mysql_error());
$row_CATEFASHION = mysql_fetch_assoc($CATEFASHION);
$totalRows_CATEFASHION = mysql_num_rows($CATEFASHION);

mysql_select_db($database_Ublq, $Ublq);
$query_CATESHOPPING = "SELECT * FROM ublq24tv WHERE cates = 'shopping'";
$CATESHOPPING = mysql_query($query_CATESHOPPING, $Ublq) or die(mysql_error());
$row_CATESHOPPING = mysql_fetch_assoc($CATESHOPPING);
$totalRows_CATESHOPPING = mysql_num_rows($CATESHOPPING);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEMUSIC = "SELECT * FROM ublq24tv WHERE cates = 'music'";
$CATEMUSIC = mysql_query($query_CATEMUSIC, $Ublq) or die(mysql_error());
$row_CATEMUSIC = mysql_fetch_assoc($CATEMUSIC);
$totalRows_CATEMUSIC = mysql_num_rows($CATEMUSIC);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEYOUTH = "SELECT * FROM ublq24tv WHERE cates = 'youth'";
$CATEYOUTH = mysql_query($query_CATEYOUTH, $Ublq) or die(mysql_error());
$row_CATEYOUTH = mysql_fetch_assoc($CATEYOUTH);
$totalRows_CATEYOUTH = mysql_num_rows($CATEYOUTH);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEKIDS = "SELECT * FROM ublq24tv WHERE cates = 'kids'";
$CATEKIDS = mysql_query($query_CATEKIDS, $Ublq) or die(mysql_error());
$row_CATEKIDS = mysql_fetch_assoc($CATEKIDS);
$totalRows_CATEKIDS = mysql_num_rows($CATEKIDS);

mysql_select_db($database_Ublq, $Ublq);
$query_CATESPORTS = "SELECT * FROM ublq24tv WHERE cates = 'sports'";
$CATESPORTS = mysql_query($query_CATESPORTS, $Ublq) or die(mysql_error());
$row_CATESPORTS = mysql_fetch_assoc($CATESPORTS);
$totalRows_CATESPORTS = mysql_num_rows($CATESPORTS);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEGAMES = "SELECT * FROM ublq24tv WHERE cates = 'games'";
$CATEGAMES = mysql_query($query_CATEGAMES, $Ublq) or die(mysql_error());
$row_CATEGAMES = mysql_fetch_assoc($CATEGAMES);
$totalRows_CATEGAMES = mysql_num_rows($CATEGAMES);

mysql_select_db($database_Ublq, $Ublq);
$query_CATERELIGION = "SELECT * FROM ublq24tv WHERE cates = 'religion'";
$CATERELIGION = mysql_query($query_CATERELIGION, $Ublq) or die(mysql_error());
$row_CATERELIGION = mysql_fetch_assoc($CATERELIGION);
$totalRows_CATERELIGION = mysql_num_rows($CATERELIGION);

mysql_select_db($database_Ublq, $Ublq);
$query_CATEDOCUMENTARY = "SELECT * FROM ublq24tv WHERE cates = 'documentary'";
$CATEDOCUMENTARY = mysql_query($query_CATEDOCUMENTARY, $Ublq) or die(mysql_error());
$row_CATEDOCUMENTARY = mysql_fetch_assoc($CATEDOCUMENTARY);
$totalRows_CATEDOCUMENTARY = mysql_num_rows($CATEDOCUMENTARY);

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
                <?php include('includes/channel_list/tv_list.php'); ?>
                  <?php include('includes/ublq_parts/searchbox.php'); ?>
                   <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="10">&nbsp;</td>
                <td width="689" valign="top"><table width="687" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="631" height="28" class="headering_black">Television :</td>
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
                                  <table width="671" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="429"><div align="center">
                                        <script type="text/javascript" language="javascript" src="http://www.dpbolvw.net/placeholder-2947809?target=_blank&mouseover=Y"></script>
                                      </div></td>
                                      </tr>
                                    <tr>
                                      <td><object id="MediaPlayer" width="673" height="52" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95"codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" standby="Loading Microsoft Windows Media Player components..."type="application/x-oleobject">
                                        <param name="FileName" value="" />
                                        <param name="ShowControls" value="1" />
                                        <param name="ShowAudioControls" value="1" />
                                        <param name="ShowPositionControls" value="0" />
                                        <param name="ShowTracker" value="0" />
                                        <param name="ShowStatusBar" value="1" />
                                        <param name="ShowDisplay" value="0" />
                                        <param name="DefaultFrame" value="Slide" />
                                        <param name="Autostart" value="1" />
                                        <param name="EnableContextMenu" value="false" />
                                        <embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/" src="" showcontrols="1" showaudiocontrols="1" showpositioncontrols="0" showtracker="0" showstatusbar="1" showdisplay="0" defaultframe="" slideautostart="1" enablecontextmenu="false" width="673" height="52" ></embed>
                                      </object></td>
                                      </tr>
                                  </table>
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
                        <table width="478" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="340"><table width="478" border="0" align="center" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                              <tr>
                                <td width="474" valign="top" bgcolor="#002F4E"><table width="468" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="278" valign="top"><table width="468" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="487"><script type="text/javascript" language="JavaScript" src="http://www.kqzyfj.com/dr65hB7xz03A7-0DMPWRUUWS?target=_blank&amp;mouseover=Y"></script></td>
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

mysql_free_result($CATEINFORMATION);

mysql_free_result($CATEENTERTAINMENT);

mysql_free_result($CATEMOVIES);

mysql_free_result($CATEREALITY);

mysql_free_result($CATELIFESTYLE);

mysql_free_result($CATEFASHION);

mysql_free_result($CATESHOPPING);

mysql_free_result($CATEMUSIC);

mysql_free_result($CATEYOUTH);

mysql_free_result($CATEKIDS);

mysql_free_result($CATESPORTS);

mysql_free_result($CATEGAMES);

mysql_free_result($CATERELIGION);

mysql_free_result($CATEDOCUMENTARY);
?>