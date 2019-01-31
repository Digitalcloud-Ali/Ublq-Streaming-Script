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
$query_Tvstats = "SELECT * FROM ublq24tv";
$Tvstats = mysql_query($query_Tvstats, $Ublq) or die(mysql_error());
$row_Tvstats = mysql_fetch_assoc($Tvstats);
$totalRows_Tvstats = mysql_num_rows($Tvstats);

mysql_select_db($database_Ublq, $Ublq);
$query_Radiostats = "SELECT * FROM rad24ublq";
$Radiostats = mysql_query($query_Radiostats, $Ublq) or die(mysql_error());
$row_Radiostats = mysql_fetch_assoc($Radiostats);
$totalRows_Radiostats = mysql_num_rows($Radiostats);

mysql_select_db($database_Ublq, $Ublq);
$query_Movstats = "SELECT * FROM mov25ublq";
$Movstats = mysql_query($query_Movstats, $Ublq) or die(mysql_error());
$row_Movstats = mysql_fetch_assoc($Movstats);
$totalRows_Movstats = mysql_num_rows($Movstats);

mysql_select_db($database_Ublq, $Ublq);
$query_Artstats = "SELECT * FROM arti100blqs";
$Artstats = mysql_query($query_Artstats, $Ublq) or die(mysql_error());
$row_Artstats = mysql_fetch_assoc($Artstats);
$totalRows_Artstats = mysql_num_rows($Artstats);

mysql_select_db($database_Ublq, $Ublq);
$query_Gamstats = "SELECT * FROM nlq21gam";
$Gamstats = mysql_query($query_Gamstats, $Ublq) or die(mysql_error());
$row_Gamstats = mysql_fetch_assoc($Gamstats);
$totalRows_Gamstats = mysql_num_rows($Gamstats);
?><div class="ublq_upper"><table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#002137">
<tr>
                        <td width="207" height="29" bgcolor="#002F4E"><div align="center" class="left_menuheading">Statistics</div></td>
    </tr>
                  </table></div>
                  <div class="ublq_lower">
                  <div>
                    <table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#002F4E">
<tr>
                            <td width="207" height="68" bgcolor="#003E66"><table width="200" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="3"></td>
                              </tr>
                              
                            </table>
                              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="13" height="16" bgcolor="#003E66" class="stats"><div align="center">▪</div></td>
                                <td width="187" height="16" bgcolor="#003E66" class="stats">Tv Channels : <?php echo $totalRows_Tvstats ?> </td>
                                </tr>
                              <tr>
                                <td height="16" bgcolor="#003E66" class="stats"><div align="center">▪</div></td>
                                <td height="16" bgcolor="#003E66" class="stats">Radio Channels : <?php echo $totalRows_Radiostats ?> </td>
                                </tr>
                              <tr>
                                <td height="16" bgcolor="#003E66" class="stats"><div align="center">▪</div></td>
                                <td height="16" bgcolor="#003E66" class="stats">Movies : <?php echo $totalRows_Movstats ?> </td>
                                </tr>
                              <tr>
                                <td height="16" bgcolor="#003E66" class="stats"><div align="center">▪</div></td>
                                <td height="16" bgcolor="#003E66" class="stats">Articles : <?php echo $totalRows_Artstats ?> </td>
                                </tr>
                              <tr>
                                <td height="16" bgcolor="#003E66" class="stats"><div align="center">▪</div></td>
                                <td height="16" bgcolor="#003E66" class="stats">Games : <?php echo $totalRows_Gamstats ?> </td>
                              </tr>
                            </table>
                              <table width="200" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="3"></td>
                                </tr>
                              </table></td>
                        </tr>
                          <tr>
                            <td height="1" bgcolor="#003E66"></td>
                        </tr>
                      </table>
                      </td>
                    </tr>
</table></div></div>                  <?php
mysql_free_result($Tvstats);

mysql_free_result($Radiostats);

mysql_free_result($Movstats);

mysql_free_result($Artstats);

mysql_free_result($Gamstats);
?>