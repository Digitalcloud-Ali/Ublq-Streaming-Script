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

$colname_TvPlayers = "-1";
if (isset($_GET['ChannelName'])) {
  $colname_TvPlayers = $_GET['ChannelName'];
}
mysql_select_db($database_Ublq, $Ublq);
$query_TvPlayers = sprintf("SELECT * FROM ublq24tv WHERE ChannelName = %s", GetSQLValueString($colname_TvPlayers, "text"));
$TvPlayers = mysql_query($query_TvPlayers, $Ublq) or die(mysql_error());
$row_TvPlayers = mysql_fetch_assoc($TvPlayers);
$totalRows_TvPlayers = mysql_num_rows($TvPlayers);

mysql_free_result($TvPlayers);
?>

<div>
  <object id="MediaPlayer" width=390 height=332 classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95"codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701" standby="Loading Microsoft Windows Media Player components..."type="application/x-oleobject">
    <param name="FileName" value="<?php echo $row_TvPlayers['codes']; ?>" />
    <param name="ShowControls" value="1" />
    <param name="ShowAudioControls" value="1" />
    <param name="ShowPositionControls" value="0" />
    <param name="ShowTracker" value="0" />
    <param name="ShowStatusBar" value="1" />
    <param name="ShowDisplay" value="0" />
    <param name="DefaultFrame" value="Slide" />
    <param name="Autostart" value="1" />
    <param name="EnableContextMenu" value="false" />
    <embed type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/" src="<?php echo $row_TvPlayers['codes']; ?>" showcontrols="1" showaudiocontrols="1" showpositioncontrols="0" showtracker="0" showstatusbar="1" showdisplay="0" defaultframe="" slideautostart="1" enablecontextmenu="false" width="390" height="332" ></embed></object><input name="ChannelName" type="hidden" id="ChannelName" value="<?php echo $row_TvPlayers['ChannelName']; ?>" /></div>
