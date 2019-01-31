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
$query_Utaggery = "SELECT * FROM utaggers WHERE parts = 'ptags'";
$Utaggery = mysql_query($query_Utaggery, $Ublq) or die(mysql_error());
$row_Utaggery = mysql_fetch_assoc($Utaggery);
$totalRows_Utaggery = mysql_num_rows($Utaggery);
?>
<div class="ublq_upper"><table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#002137">
<tr>
                        <td width="207" height="29" bgcolor="#002F4E"><div align="center" class="left_menuheading">Tags</div></td>
    </tr>
                  </table></div>
                  <div class="ublq_lower">
                    <div><table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td bgcolor="#003E66"><table width="198" border="0" cellpadding="3" cellspacing="1" bgcolor="#002F4E">
                        <tr>
                          <td width="190" height="70" valign="top" bgcolor="#003E66"><span class="tags">
                            <?php if ($totalRows_Utaggery > 0) { // Show if recordset not empty ?>
                            </MM:DECORATION>
                      </MM_HIDDENREGION>
                            </span>
                              <MM_HIDDENREGION><MM:DECORATION OUTLINE="Show%20If..." OUTLINEID=1><span class="stats"><?php echo $row_Utaggery['taggers']; ?></span></MM:DECORATION></MM_HIDDENREGION>
                              <span class="tags">
                              <MM_HIDDENREGION>
                            <MM:DECORATION OUTLINE="Show%20If..." OUTLINEID=1>
                              <?php } // Show if recordset not empty ?>
                              </span><span class="stats">
                              <?php if ($totalRows_Utaggery == 0) { // Show if recordset empty ?>
                                No Tags
                                <?php } // Show if recordset empty ?>
                              </span>
                              <table width="188" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="3"></td>
                                </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>
                      <table width="207" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="2" bgcolor="#002F4E"></td>
                        </tr>
                      </table>
              <table width="200" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="1" bgcolor="#003E66"></td>
                    </tr>
                      </table>
                  </div>
                  </div>
                  

                  <?php
mysql_free_result($Utaggery);
?>
