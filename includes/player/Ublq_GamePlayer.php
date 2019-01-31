  <link href="../../ublqstyle.css" rel="stylesheet" type="text/css" />
  <?php require_once('../../Connections/Ublq.php'); ?>
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

$colname_GamePlayers = "-1";
if (isset($_GET['ChannelName'])) {
  $colname_GamePlayers = $_GET['ChannelName'];
}
mysql_select_db($database_Ublq, $Ublq);
$query_GamePlayers = sprintf("SELECT * FROM nlq21gam WHERE ChannelName = %s", GetSQLValueString($colname_GamePlayers, "text"));
$GamePlayers = mysql_query($query_GamePlayers, $Ublq) or die(mysql_error());
$row_GamePlayers = mysql_fetch_assoc($GamePlayers);
$totalRows_GamePlayers = mysql_num_rows($GamePlayers);

mysql_free_result($GamePlayers);
?>
<?php if ($totalRows_GamePlayers > 0) { // Show if recordset not empty ?>
  
    <input name="ChannelName" type="hidden" id="ChannelName" value="<?php echo $row_GamePlayers['ChannelName']; ?>" />
    <table width="673" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="480"><div class="Player_Ublq"><?php echo $row_GamePlayers['codes']; ?></div></td>
      </tr>
    </table>
  
  <div class="Player_Ublq">
    <table width="673" border="0" cellpadding="0" cellspacing="0" bgcolor="#343C43">
      <tr>
        <td width="668" height="31" bgcolor="#002F4E"><table width="250" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td width="5">&nbsp;</td>
              <td width="239" height="25" class="headering"><div align="left">Channel Information :</div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top" bgcolor="#002F4E"><table width="660" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="298" height="32" class="normal_textlinkbold"><table width="278" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="110"><table width="104" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#002137">
                  <tr>
                    <td width="102" height="23" bgcolor="#002137"><div align="left" class="left_menuheading">Name   : </div></td>
                        </tr>
                  </table></td>
                    <td width="172"><table width="171" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#003E66">
                        <tr>
                          <td width="163" height="20" bgcolor="#002137"><div align="left"><span class="text"><?php echo $row_GamePlayers['ChannelName']; ?></span></div></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
              <td width="362" height="32" class="normal_textlinkbold"><table width="362" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="107"><table width="104" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#002137">
                          <tr>
                            <td width="102" height="23" bgcolor="#002137"><div align="left" class="left_menuheading">Added   : </div></td>
                          </tr>
                    </table></td>
                    <td width="255"><table border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#003E66">
                        <tr>
                          <td height="20" bgcolor="#002137"><div align="left" class="text"><?php echo $row_GamePlayers['daters']; ?></div></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
                                            </tr>
          <tr>
            <td height="32" class="normal_textlinkbold"><table width="278" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="110"><table width="104" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#002137">
                  <tr>
                    <td width="102" height="23" bgcolor="#002137"><div align="left" class="left_menuheading">Catergory    : </div></td>
                          </tr>
                  </table></td>
                    <td width="172"><table width="171" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#003E66">
                        <tr>
                          <td height="20" bgcolor="#002137"><div align="left"><span class="text"><?php echo $row_GamePlayers['cates']; ?></span></div></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
              <td height="32" class="normal_textlinkbold"><table width="357" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="107"><table width="104" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#002137">
                          <tr>
                            <td width="102" height="23" bgcolor="#002137"><div align="left" class="left_menuheading">Keywords   : </div></td>
                          </tr>
                    </table></td>
                    <td width="250"><table border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#003E66">
                      <tr>
                        <td height="20" bgcolor="#002137"><div align="left"><span><a href="http://technorati.com/tags/<?php echo $string = str_replace(' ', '+', $row_GamePlayers['keywds']); ?>" target="_blank" class="textkey"><?php echo $row_GamePlayers['keywds']; ?></a></span></div></td>
                      </tr>
                    </table></td>
                  </tr>
              </table></td>
                                            </tr>
          <tr>
            <td height="32" class="normal_textlinkbold"><table width="278" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                <td width="107"><table width="104" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#002137">
                  <tr>
                    <td height="23" bgcolor="#002137"><div align="left" class="left_menuheading">Bookmark us  :</div></td>
                        </tr>
                  </table></td>
                  <td width="171"><table width="171" border="0" align="left" cellpadding="1" cellspacing="1" bgcolor="#003E66">
      <tr>
                            <td width="166" height="24" bgcolor="#002137">
<div  id='socialinks'>
<table border='0' cellpadding='0' cellspacing='0'>
	<tr>
		<td width="26"><a href="http://digg.com/submit?phase=2&url=http%3A//www.ublq.com&title=A%20Quality%20Streaming%20Tv%20-%20Radio%20-%20Movie%20Media%20Site" target="_blank">
		  <div class="div_link"><img border="0" src="/imagine/digg.png" alt="Digg This" title="Digg This" /></div>
		</a></td>
		<td width="26"><a href="http://del.icio.us/post?url=http%3A//www.ublq.com&title=A%20Quality%20Streaming%20Tv%20-%20Radio%20-%20Movie%20Media%20Site" target="_blank">
		  <div class="div_link"><img border="0" src="/imagine/delicious.png" alt="del.icio.us" title="del.icio.us" /></div></a></td>
		<td width="26"><a href="http://technorati.com/faves?add=http%3A//www.ublq.com" target="_blank">
		  <div class="div_link"><img border="0" src="/imagine/technorati.png" alt="Technorati" title="Technorati" /></div>
		</a></td>
		<td width="26"><a href="http://reddit.com/submit?url=http%3A//www.ublq.com&title=A%20Quality%20Streaming%20Tv%20-%20Radio%20-%20Movie%20Media%20Site" target="_blank">
		  <div class="div_link"><img border="0" src="/imagine/reddit.png" alt="Reddit" title="Reddit" /></div>
		</a></td>
		<td width="26"><a href="http://myweb2.search.yahoo.com/myresults/bookmarklet?u=http%3A//www.ublq.com&=A%20Quality%20Streaming%20Tv%20-%20Radio%20-%20Movie%20Media%20Site" target="_blank">
		  <div class="div_link"><img border="0" src="/imagine/yahoomyweb.png" alt="YahooMyWeb" title="YahooMyWeb" /></div>
		</a></td>
		<td width="26"><a href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&Description=&Url=http%3A//www.ublq.com&Title=A%20Quality%20Streaming%20Tv%20-%20Radio%20-%20Movie%20Media%20Site" target="_blank">
		  <div class="div_link"><img border="0" src="/imagine/blinklist.png" alt="BlinkList" title="BlinkList" /></div>
		</a></td>
	</tr>
</table>
</div></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
              <td height="32" class="normal_textlinkbold"><strong>
                    <label></label>
                  </strong>
                <table width="362" border="0" align="left" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="107"><table width="104" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#002137">
                          <tr>
                            <td height="23" bgcolor="#002137"><div align="left" class="left_menuheading">Embed Code    : </div></td>
                          </tr>
                    </table></td>
                    <td width="255"><table width="100" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                        <tr>
                          <td bgcolor="#002F4E"><strong>
                            <input name="EmbedCode" type="text" class="embedbar" id="EmbedCode" value="&lt;object classid=&quot;clsid:d27cdb6e-ae6d-11cf-96b8-444553540000&quot; codebase=&quot;http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0&quot; width=&quot;600&quot; height=&quot;450&quot; id=&quot;flvplayer&quot; align=&quot;middle&quot;&gt;&lt;param name=&quot;allowScriptAccess&quot; value=&quot;sameDomain&quot; /&gt;&lt;param name=&quot;allowFullScreen&quot; value=&quot;true&quot; /&gt;&lt;param name=&quot;movie&quot; value=&quot;http://www.ublq.com/includes/player/Mpfreebies_GamePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_GamePlayers['ChannelName']); ?>&quot; /&gt;&lt;param name=&quot;loop&quot; value=&quot;true&quot; /&gt;&lt;param name=&quot;quality&quot; value=&quot;high&quot; /&gt;&lt;param name=&quot;bgcolor&quot; value=&quot;#000000&quot; /&gt;&lt;embed src=&quot;http://www.ublq.com/includes/player/Ublq_GamePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_GamePlayers['ChannelName']); ?>&quot; loop=&quot;true&quot; quality=&quot;high&quot; bgcolor=&quot;#000000&quot; width=&quot;600&quot; height=&quot;450&quot; name=&quot;flvplayer&quot; align=&quot;middle&quot; allowScriptAccess=&quot;sameDomain&quot; allowFullScreen=&quot;true&quot; type=&quot;application/x-shockwave-flash&quot; pluginspage=&quot;http://www.macromedia.com/go/getflashplayer&quot;&gt;&lt;/embed&gt;&lt;/object&gt;" size="42" />
                          </strong></td>
                        </tr>
                    </table></td>
                  </tr>
                </table>                                                </td>
            </tr>
          </table></td>
      </tr>
    </table>
   </div>
  <?php } // Show if recordset not empty ?>
