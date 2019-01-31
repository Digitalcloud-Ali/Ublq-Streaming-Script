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

$colname_TvArticles = "-1";
if (isset($_GET['Title'])) {
  $colname_TvArticles = $_GET['Title'];
}
mysql_select_db($database_Ublq, $Ublq);
$query_TvArticles = sprintf("SELECT * FROM arti100blqs WHERE Title = %s", GetSQLValueString($colname_TvArticles, "text"));
$TvArticles = mysql_query($query_TvArticles, $Ublq) or die(mysql_error());
$row_TvArticles = mysql_fetch_assoc($TvArticles);
$totalRows_TvArticles = mysql_num_rows($TvArticles);

$maxRows_Articletitles = 10;
$pageNum_Articletitles = 0;
if (isset($_GET['pageNum_Articletitles'])) {
  $pageNum_Articletitles = $_GET['pageNum_Articletitles'];
}
$startRow_Articletitles = $pageNum_Articletitles * $maxRows_Articletitles;

mysql_select_db($database_Ublq, $Ublq);
$query_Articletitles = "SELECT * FROM arti100blqs";
$query_limit_Articletitles = sprintf("%s LIMIT %d, %d", $query_Articletitles, $startRow_Articletitles, $maxRows_Articletitles);
$Articletitles = mysql_query($query_limit_Articletitles, $Ublq) or die(mysql_error());
$row_Articletitles = mysql_fetch_assoc($Articletitles);

if (isset($_GET['totalRows_Articletitles'])) {
  $totalRows_Articletitles = $_GET['totalRows_Articletitles'];
} else {
  $all_Articletitles = mysql_query($query_Articletitles);
  $totalRows_Articletitles = mysql_num_rows($all_Articletitles);
}
$totalPages_Articletitles = ceil($totalRows_Articletitles/$maxRows_Articletitles)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <?php include('includes/channel_list/article_list.php'); ?>
                  <?php include('includes/ublq_parts/searchbox.php'); ?>
                   <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="10">&nbsp;</td>
                <td width="689" valign="top"><table width="688" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="314" valign="top"><table width="688" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="688" bgcolor="#FFFFFF"><table width="688" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><div id="Movielist">
                                <script type="text/javascript">
			  startajaxtabs("Player") </script>
                                <?php if ($totalRows_TvArticles > 0) { // Show if recordset not empty ?>
                                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td height="26" class="headering_Blue"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="98%"><?php echo $row_TvArticles['Title']; ?></td>
                                        </tr>
                                      </table></td>
      </tr>
                                  </table>
                                  <table width="688" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                      <td><table width="672" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="82" rowspan="4" valign="top"><table width="77" border="0" cellpadding="1" cellspacing="1" bgcolor="#43464B">
                                            <tr>
                                              <td bgcolor="#21262B"><img src="/imagine/artisthimself.jpg" width="78" height="69" /></td>
                    </tr>
                                            </table></td>
                </tr>
                                        <tr>
                                          <td height="25" valign="top"><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="10">&nbsp;</td>
                      <td><table border="0" cellpadding="3" cellspacing="1">
                        <tr>
                          <td class="Article_Detaillink1">Submitted by</td>
                            <td class="Article_Text">Moderator</td>
                          </tr>
                        </table></td>
                    </tr>
                                            </table></td>
              </tr>
                                        <tr>
                                          <td height="24" valign="top"><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="12">&nbsp;</td>
                      <td><table border="0" cellpadding="1" cellspacing="1">
                        <tr>
                          <td class="Article_Detaillink1">Category :</td>
                            <td><span class="Article_Text"><?php echo $row_TvArticles['cates']; ?></span></td>
                          </tr>
                        </table></td>
                    </tr>
                                            </table></td>
              </tr>
                                        <tr>
                                          <td height="28"><table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td width="10">&nbsp;</td>
                      <td><table border="0" cellpadding="3" cellspacing="1">
                        <tr>
                          <td class="Article_Detaillink1">Submitted On </td>
                            <td class="Article_Text"><div align="center"><?php echo $row_TvArticles['daters']; ?></div></td>
                          </tr>
                        </table></td>
                    </tr>
                                            </table></td>
              </tr>
                                        </table></td>
        </tr>
                                    <tr>
                                      <td bgcolor="#F1F2F3"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                                        <tr>
                                          <td><span class="Article_Text1"><?php echo $row_TvArticles['codes']; ?></span><span class="Player_Ublq">
                                          <input name="Title" type="hidden" id="Title" value="<?php echo $row_TvArticles['Title']; ?>" />
                                          </span></td>
                                        </tr>
                                      </table></td>
        </tr>
                                    <tr>
                                      <td>
                                        <table width="278" border="0" align="left" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="171" height="26"><table width="278" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td width="42" class="headering_black">Tags :</td>
                                                <td width="236"><span class="text"><a href="http://technorati.com/tags/<?php echo $string = str_replace(' ', '+', $row_TvArticles['keywds']); ?>" target="_blank" class="more"><?php echo $row_TvArticles['keywds']; ?></a></span></td>
                                              </tr>
                                              
                                            </table></td>
                </tr>
                                          <tr>
                                            <td><table width="171" border="0" align="left" cellpadding="1" cellspacing="1" bgcolor="#DFE1E3">
                                              <tr>
                                                <td width="166" height="24" bgcolor="#FFFFFF"><div  id='socialinks'>
                                                    <table border='0' cellpadding='0' cellspacing='0'>
                                                      <tr>
                                                        <td width="26"><div class="div_link"><a href="http://digg.com/submit?phase=2&amp;url=http://www.ublq.com/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>&amp;title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" target="_blank"><img border="0" src="/imagine/digg.png" alt="Digg This" title="Digg This" /></a></div></td>
                                                        <td width="26"><div class="div_link"><a href="http://del.icio.us/post?url=http://www.ublq.com/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>&amp;title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" target="_blank"><img border="0" src="/imagine/delicious.png" alt="del.icio.us" title="del.icio.us" /></a></div></td>
                                                        <td width="26"><div class="div_link"><a href="http://technorati.com/faves?add=http://www.ublq.com/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" target="_blank"><img border="0" src="/imagine/technorati.png" alt="Technorati" title="Technorati" /></a></div></td>
                                                        <td width="26"><div class="div_link"><a href="http://reddit.com/submit?url=http://www.ublq.com/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>&amp;title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" target="_blank"><img border="0" src="/imagine/reddit.png" alt="Reddit" title="Reddit" /></a></div></td>
                                                        <td width="26"><div class="div_link"><a href="http://myweb2.search.yahoo.com/myresults/bookmarklet?u=http://www.ublq.com/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>&amp;=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" target="_blank"><img border="0" src="/imagine/yahoomyweb.png" alt="<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" title="<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" /></a></div></td>
                                                        <td width="26"><div class="div_link"><a href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&Description=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>&Url=http://www.ublq.com/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>&Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" target="_blank"><img border="0" src="/imagine/blinklist.png" alt="<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" title="<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" /></a></div></td>
                                                      </tr>
                                                    </table>
                                                </div></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          </table></td>
        </tr>
                                        </table>
                                  <?php } // Show if recordset not empty ?>
</div></td>
                            </tr>
                            
                          </table></td>
                        </tr>
                      </table></td>
                  </tr>
                    <tr>
                      <td valign="top"><img src="/imagine/Scissor Cut.gif" width="682" height="20" />
                        <span class="headering_green">Recent Articles</span> :
                        <table width="676" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="16" class="headering_Blue">&nbsp;</td>
                                </tr>
                              </table>
                                

                                                            <table width="672" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="658"><table width="688" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="559"><?php do { ?>
                                            <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                                              <tr><td width="18" height="22"><span class="text1"><?php echo $row_Articletitles['ids']; ?></span></td>
                                                <td class="Article_Title1"><a href="/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_Articletitles['Title']); ?>" class="Article_Text1"><?php echo $row_Articletitles['Title']; ?></a></td>
                                              </tr>
                                            </table>
                                        <?php } while ($row_Articletitles = mysql_fetch_assoc($Articletitles)); ?></td>
                                      </tr>
                                      <tr></tr>
                                  </table></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                        <img src="/imagine/Scissor Cut.gif" width="682" height="20" />
                        <table width="478" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="478"><table width="470" border="0" cellpadding="0" cellspacing="5" bgcolor="#3B90C4">
                              <tr>
                                <td width="470" valign="top" bgcolor="#002F4E"><table width="468" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td width="278" valign="top"><table width="468" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="487"><a href="http://www.tkqlhce.com/click-2977065-10498645" target="_blank" onmouseover="window.status='http://www.superapprentice.com/premiere.php';return true;" onmouseout="window.status=' ';return true;"> <img src="http://www.ftjcfx.com/image-2977065-10498645" width="468" height="60" alt="Make $1000's A Day From Your Websites!" border="0"/></a></td>
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
mysql_free_result($TvArticles);

mysql_free_result($Articletitles);
?>