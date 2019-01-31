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

$maxRows_Tvlist = 3;
$pageNum_Tvlist = 0;
if (isset($_GET['pageNum_Tvlist'])) {
  $pageNum_Tvlist = $_GET['pageNum_Tvlist'];
}
$startRow_Tvlist = $pageNum_Tvlist * $maxRows_Tvlist;

mysql_select_db($database_Ublq, $Ublq);
$query_Tvlist = "SELECT * FROM ublq24tv ORDER BY ublq24tv . ids DESC";
$query_limit_Tvlist = sprintf("%s LIMIT %d, %d", $query_Tvlist, $startRow_Tvlist, $maxRows_Tvlist);
$Tvlist = mysql_query($query_limit_Tvlist, $Ublq) or die(mysql_error());
$row_Tvlist = mysql_fetch_assoc($Tvlist);

if (isset($_GET['totalRows_Tvlist'])) {
  $totalRows_Tvlist = $_GET['totalRows_Tvlist'];
} else {
  $all_Tvlist = mysql_query($query_Tvlist);
  $totalRows_Tvlist = mysql_num_rows($all_Tvlist);
}
$totalPages_Tvlist = ceil($totalRows_Tvlist/$maxRows_Tvlist)-1;

$maxRows_Radlist = 3;
$pageNum_Radlist = 0;
if (isset($_GET['pageNum_Radlist'])) {
  $pageNum_Radlist = $_GET['pageNum_Radlist'];
}
$startRow_Radlist = $pageNum_Radlist * $maxRows_Radlist;

mysql_select_db($database_Ublq, $Ublq);
$query_Radlist = "SELECT * FROM rad24ublq ORDER BY rad24ublq . ids DESC";
$query_limit_Radlist = sprintf("%s LIMIT %d, %d", $query_Radlist, $startRow_Radlist, $maxRows_Radlist);
$Radlist = mysql_query($query_limit_Radlist, $Ublq) or die(mysql_error());
$row_Radlist = mysql_fetch_assoc($Radlist);

if (isset($_GET['totalRows_Radlist'])) {
  $totalRows_Radlist = $_GET['totalRows_Radlist'];
} else {
  $all_Radlist = mysql_query($query_Radlist);
  $totalRows_Radlist = mysql_num_rows($all_Radlist);
}
$totalPages_Radlist = ceil($totalRows_Radlist/$maxRows_Radlist)-1;

$maxRows_Movlist = 3;
$pageNum_Movlist = 0;
if (isset($_GET['pageNum_Movlist'])) {
  $pageNum_Movlist = $_GET['pageNum_Movlist'];
}
$startRow_Movlist = $pageNum_Movlist * $maxRows_Movlist;

mysql_select_db($database_Ublq, $Ublq);
$query_Movlist = "SELECT * FROM mov25ublq ORDER BY mov25ublq . ids DESC";
$query_limit_Movlist = sprintf("%s LIMIT %d, %d", $query_Movlist, $startRow_Movlist, $maxRows_Movlist);
$Movlist = mysql_query($query_limit_Movlist, $Ublq) or die(mysql_error());
$row_Movlist = mysql_fetch_assoc($Movlist);

if (isset($_GET['totalRows_Movlist'])) {
  $totalRows_Movlist = $_GET['totalRows_Movlist'];
} else {
  $all_Movlist = mysql_query($query_Movlist);
  $totalRows_Movlist = mysql_num_rows($all_Movlist);
}
$totalPages_Movlist = ceil($totalRows_Movlist/$maxRows_Movlist)-1;

$maxRows_Artlist = 5;
$pageNum_Artlist = 0;
if (isset($_GET['pageNum_Artlist'])) {
  $pageNum_Artlist = $_GET['pageNum_Artlist'];
}
$startRow_Artlist = $pageNum_Artlist * $maxRows_Artlist;

mysql_select_db($database_Ublq, $Ublq);
$query_Artlist = "SELECT * FROM arti100blqs ORDER BY arti100blqs . ids DESC";
$query_limit_Artlist = sprintf("%s LIMIT %d, %d", $query_Artlist, $startRow_Artlist, $maxRows_Artlist);
$Artlist = mysql_query($query_limit_Artlist, $Ublq) or die(mysql_error());
$row_Artlist = mysql_fetch_assoc($Artlist);

if (isset($_GET['totalRows_Artlist'])) {
  $totalRows_Artlist = $_GET['totalRows_Artlist'];
} else {
  $all_Artlist = mysql_query($query_Artlist);
  $totalRows_Artlist = mysql_num_rows($all_Artlist);
}
$totalPages_Artlist = ceil($totalRows_Artlist/$maxRows_Artlist)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mpfreebies 2.0 - Live Online Tv Channels & Radio - Movies & Games</title>
<meta name="description" content="Mpfreebies 2.0 - Watch Free Live Online Tv Channels and Listen Free Radio Channels related to music , life style , fashion , news , sports and more free - Watch Free Movies And Play Free Games Online. " />
<meta name="keywords" content="Mpfreebies , Live Online Tv Channels , Radio Channels , Watch Free Movies , Play Free Games" />
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />
<link href="/includes/expand_script/ublq_expanded.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/includes/expand_script/ublq_expanded.js"></script>
<script type="text/javascript" src="/includes/player/index_player.js"></script>
<script type="text/javascript" src="/includes/disable_rightclick.js"></script>
</head>
<body onload="initShowHideDivs();">
<table width="1003" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#000000">
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
                <td width="46">&nbsp;</td>
                <td valign="top"><?php include('includes/ublq_parts/searchbox.php'); ?>
                  <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="10">&nbsp;</td>
                <td width="690" valign="top"><table width="688" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="631" height="28" class="headering_black">Welcome To Mpfreebies.Com</td>
                    <td width="59" valign="top"><table width="59" border="0" align="right" cellpadding="0" cellspacing="0" class="fold">
                        <tr>
                          <td height="23">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                </table>
                  <table width="682" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="365" valign="top"><table width="276" border="0" cellpadding="4" cellspacing="0" bgcolor="#21262B">
                          <tr>
                            <td height="20" bgcolor="#002F4D" class="left_menuheading">Newest Added</td>
                          </tr>
                        </table>
                         <div id="Player"><table width="276" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="30" bgcolor="#F0F0F0"><table width="276" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="243" height="20" bgcolor="#EDEFF1"><table width="250" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="8">&nbsp;</td>
                                          <td width="240" height="25" class="headering_black">Tv Channels</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="#FFFFFF"><table width="269" border="0" cellpadding="0" cellspacing="0" class="backgroundwhiteimage">
                                        <tr>
                                          <td width="18" height="81" class="arrow"></td>
                                          <td width="241"><table width="241" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td><?php do { ?>
                                              <li><a onclick="song();return true;" target="/includes/player/index_tv.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_Tvlist['ChannelName']); ?>" class="listlink1" rel="Movielist"><?php echo $row_Tvlist['ChannelName']; ?></a></li>
                                              <?php } while ($row_Tvlist = mysql_fetch_assoc($Tvlist)); ?></td>
                                            </tr>
                                            <tr>
                                              <td height="22"><a href="television.php" class="more">more</a></td>
                                            </tr>
                                          </table></td>
                                          <td width="10" class="text">&nbsp;</td>
                                        </tr>
                                        
                                      </table>
                                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="4"></td>
                                          </tr>
                                      </table></td>
                                  </tr>
                                </table>
                                  <table width="276" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="243" height="20" bgcolor="#EDEFF1"><table width="250" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="8">&nbsp;</td>
                                            <td width="240" height="25" class="headering_black">Radio Channels</td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF"><table width="269" border="0" cellpadding="0" cellspacing="0" class="backgroundwhiteimage">
                                        <tr>
                                          <td width="18" height="81" class="arrow"></td>
                                          <td width="241"><table width="241" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td><?php do { ?>
                                                  <li><a onclick="song();return true;" target="/includes/player/index_radio.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_Radlist['ChannelName']); ?>" class="listlink1" rel="Movielist"><?php echo $row_Radlist['ChannelName']; ?></a></li>
                                                  <?php } while ($row_Radlist = mysql_fetch_assoc($Radlist)); ?></td>
                                            </tr>
                                            <tr>
                                              <td height="22"><a href="radio.php" class="more">more</a></td>
                                            </tr>
                                          </table></td>
                                          <td width="10" class="text">&nbsp;</td>
                                        </tr>
                                        
                                      </table>
                                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td height="4"></td>
                                            </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                <table width="276" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td width="243" height="20" bgcolor="#EDEFF1"><table width="250" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="8">&nbsp;</td>
                                            <td width="240" height="25" class="headering_black">Movies</td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF"><table width="269" border="0" cellpadding="0" cellspacing="0" class="backgroundwhiteimage">
                                        <tr>
                                          <td width="18" height="81" class="arrow"></td>
                                          <td width="241"><table width="241" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td><?php do { ?>
                                                  <li><a onclick="song();return true;" target="/includes/player/index_movie.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_Movlist['ChannelName']); ?>" class="listlink1" rel="Movielist"><?php echo $row_Movlist['ChannelName']; ?></a></li>
                                                  <?php } while ($row_Movlist = mysql_fetch_assoc($Movlist)); ?></td>
                                            </tr>
                                            <tr>
                                              <td height="22"><a href="movies.php" class="more">more</a></td>
                                            </tr>
                                          </table></td>
                                          <td width="10" class="text">&nbsp;</td>
                                        </tr>
                                        
                                      </table>
                                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td height="4"></td>
                                            </tr>
                                        </table></td>
                                    </tr>
                                </table></td>
                            </tr>
                        </table></div></td>
                      <td width="314" valign="top"><table width="400" border="0" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                          <tr>
                            <td height="333" bgcolor="#002F4E"><div id="Movielist">
        <script type="text/javascript">
			  startajaxtabs("Player") </script><div align="center">
                                <a href="http://www.kqzyfj.com/click-2977065-10534966" target="_blank" onmouseover="window.status='http://info.mypengo.com/';return true;" onmouseout="window.status=' ';return true;">
<img src="http://www.lduhtrp.net/image-2977065-10534966" width="300" height="250" alt="Win an iphone+Music centre" border="0"/></a>
                          </div>
                            </div></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="5"><img src="/imagine/Scissor Cut.gif" width="682" height="20" /></td>
                    </tr>
                  </table>
                  <table width="681" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="20" class="headering_green">Recent Posts</td>
                    </tr>
                    <tr>
                      <td bgcolor="#FFFFFF"><table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="685" valign="top" bgcolor="#01304F"><?php do { ?>
                                  <?php if ($totalRows_Artlist > 0) { // Show if recordset not empty ?>
                                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td height="9"></td>
                                    </tr>
                                  </table>
                                  <table width="658" border="0" align="center" cellpadding="0" cellspacing="0" class="article_backgroundimage">
                                    <tr>
                                      <td width="658"><table width="641" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="82" rowspan="4" valign="top"><table width="77" border="0" cellpadding="1" cellspacing="1" bgcolor="#003E66">
                                              <tr>
                                                <td bgcolor="#21262B"><img src="/imagine/artisthimself.jpg" width="78" height="69" /></td>
                                                </tr>
                                            </table></td>
                                            <td width="559"><table border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                  <td width="13" height="18"></td>
                                                  <td><span class="Article_Title"><a href="articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Artlist['Title']); ?>" class="Article_Title"><?php echo $row_Artlist['Title']; ?></a></span></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="10">&nbsp;</td>
                                                  <td><table border="0" cellpadding="3" cellspacing="1">
                                                      <tr>
                                                        <td class="Article_Text">Submitted by</td>
                                                        <td class="Article_Detaillink">Moderator</td>
                                                        <td class="Article_Text">on</td>
                                                        <td><div align="center" class="Article_Detaillink"><?php echo $row_Artlist['daters']; ?></div></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td><table border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="12">&nbsp;</td>
                                                  <td><table border="0" cellpadding="1" cellspacing="1">
                                                      <tr>
                                                        <td class="Article_Text">Category :</td>
                                                        <td class="Article_Detaillink"><?php echo $row_Artlist['cates']; ?></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td height="22"></td>
                                          </tr>
                                      </table></td>
                                    </tr>
                                  </table>
                                    <?php } // Show if recordset not empty ?>
<table width="200" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="9"></td>
                                  </tr>
                                </table>
                                <?php } while ($row_Artlist = mysql_fetch_assoc($Artlist)); ?><table width="658" border="0" align="center" cellpadding="0" cellspacing="0" class="article_backgroundimage">
                                  <tr>
                                    <td width="658"><table width="641" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="82" rowspan="4" valign="top"><table width="77" border="0" cellpadding="1" cellspacing="1" bgcolor="#003E66">
                                            <tr>
                                              <td bgcolor="#21262B"><img src="/imagine/artisthimself1.jpg" width="78" height="69" /></td>
                                            </tr>
                                        </table></td>
                                        <td width="559"><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="13" height="18"></td>
                                              <td width="259"><a href="http://www.jdoqocy.com/click-2977065-8175893" target="_blank" onmouseover="window.status='http://www.hollywoodmegastore.com';return true;" onmouseout="window.status=' ';return true;" class="Article_Title">Hollywood Mega Store</a></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="10">&nbsp;</td>
                                              <td><table border="0" cellpadding="3" cellspacing="1">
                                                  <tr>
                                                    <td class="Article_Text">Submitted by</td>
                                                    <td class="Article_Detaillink">Moderator</td>
                                                    <td class="Article_Text">on</td>
                                                    <td><div align="center" class="Article_Detaillink">
                                                      <table cellspacing="1" cellpadding="3" border="0">
                                                        <tbody>
                                                          <tr>
                                                            <td><div align="center">17th / February /   2008</div></td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </div></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="12">&nbsp;</td>
                                              <td><table border="0" cellpadding="1" cellspacing="1">
                                                  <tr>
                                                    <td class="Article_Text">Category :</td>
                                                    <td class="Article_Detaillink">Ads</td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td height="22"></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table>
                                <table width="200" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td height="9"></td>
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
                  <td width="609" valign="top"><?php include('includes/ublq_parts/about_ublq.php'); ?></td>
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
mysql_free_result($Tvlist);

mysql_free_result($Radlist);

mysql_free_result($Movlist);

mysql_free_result($Artlist);
?>