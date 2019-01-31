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

$colname_MoviePlayer = "-1";
if (isset($_GET['ChannelName'])) {
  $colname_MoviePlayer = $_GET['ChannelName'];
}
mysql_select_db($database_Ublq, $Ublq);
$query_MoviePlayer = sprintf("SELECT * FROM mov25ublq WHERE ChannelName = %s", GetSQLValueString($colname_MoviePlayer, "text"));
$MoviePlayer = mysql_query($query_MoviePlayer, $Ublq) or die(mysql_error());
$row_MoviePlayer = mysql_fetch_assoc($MoviePlayer);
$totalRows_MoviePlayer = mysql_num_rows($MoviePlayer);
?>
<div>
  <?php echo $row_MoviePlayer['codes']; ?><input name="ChannelName" type="hidden" id="ChannelName" value="<?php echo $row_MoviePlayer['ChannelName']; ?>" /></div>

<?php
mysql_free_result($MoviePlayer);
?>
