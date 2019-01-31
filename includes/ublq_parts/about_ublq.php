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
$query_Utaggery = "SELECT * FROM utaggers WHERE parts = 'pabout'";
$Utaggery = mysql_query($query_Utaggery, $Ublq) or die(mysql_error());
$row_Utaggery = mysql_fetch_assoc($Utaggery);
$totalRows_Utaggery = mysql_num_rows($Utaggery);
?>
<table width="602" border="0" cellpadding="0" cellspacing="1" bgcolor="#002137">
<tr>
                        <td width="619" height="30" bgcolor="#002F4E" class="headering"><table width="200" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="7">&nbsp;</td>
                              <td width="189">About Us</td>
                            </tr>
                        </table></td>
  </tr>
                    </table>
<table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="2"></td>
  </tr>
</table>
<table width="602" border="0" cellpadding="0" cellspacing="1" bgcolor="#002F4E">
<tr>
                          <td height="176" valign="top" bgcolor="#003E66" class="text"><table width="598" border="0" align="center" cellpadding="5" cellspacing="0">
<tr>
                                <td width="600"><div align="justify"><?php if ($totalRows_Utaggery > 0) { // Show if recordset not empty ?>
                          </MM:DECORATION></MM_HIDDENREGION>
                          </span>
                            <MM_HIDDENREGION><MM:DECORATION OUTLINE="Show%20If..." OUTLINEID=1><span><?php echo $row_Utaggery['taggers']; ?></span></MM:DECORATION></MM_HIDDENREGION>
                            <span>
<MM_HIDDENREGION><MM:DECORATION OUTLINE="Show%20If..." OUTLINEID=1>
                            <?php } // Show if recordset not empty ?>
                            </span>
                          <?php if ($totalRows_Utaggery == 0) { // Show if recordset empty ?>
                            No Tags
  <?php } // Show if recordset empty ?></div></td>
                            </tr>
    </table></td>
  </tr>
                        <tr>
                          <td height="2" valign="top" bgcolor="#002F4E" class="text"></td>
  </tr>
                    </table>
<?php
mysql_free_result($Utaggery);
?>