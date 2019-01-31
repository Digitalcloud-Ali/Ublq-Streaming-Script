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

$maxRows_ArticlesPlayer = 10;
$pageNum_ArticlesPlayer = 0;
if (isset($_GET['pageNum_ArticlesPlayer'])) {
  $pageNum_ArticlesPlayer = $_GET['pageNum_ArticlesPlayer'];
}
$startRow_ArticlesPlayer = $pageNum_ArticlesPlayer * $maxRows_ArticlesPlayer;

$colname_ArticlesPlayer = "-1";
if (isset($_GET['cates'])) {
  $colname_ArticlesPlayer = $_GET['cates'];
}
mysql_select_db($database_Ublq, $Ublq);
$query_ArticlesPlayer = sprintf("SELECT * FROM arti100blqs WHERE cates = %s", GetSQLValueString($colname_ArticlesPlayer, "text"));
$query_limit_ArticlesPlayer = sprintf("%s LIMIT %d, %d", $query_ArticlesPlayer, $startRow_ArticlesPlayer, $maxRows_ArticlesPlayer);
$ArticlesPlayer = mysql_query($query_limit_ArticlesPlayer, $Ublq) or die(mysql_error());
$row_ArticlesPlayer = mysql_fetch_assoc($ArticlesPlayer);

if (isset($_GET['totalRows_ArticlesPlayer'])) {
  $totalRows_ArticlesPlayer = $_GET['totalRows_ArticlesPlayer'];
} else {
  $all_ArticlesPlayer = mysql_query($query_ArticlesPlayer);
  $totalRows_ArticlesPlayer = mysql_num_rows($all_ArticlesPlayer);
}
$totalPages_ArticlesPlayer = ceil($totalRows_ArticlesPlayer/$maxRows_ArticlesPlayer)-1;
?>
<?php do { ?>
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="16" class="headering_Blue">&nbsp;</td>
    </tr>
      </table>
  <table width="672" border="0" cellpadding="0" cellspacing="0" class="backgroundarticleimage1">
    <tr>
      <td width="658"><table width="641" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="82" rowspan="4" valign="top"><table width="77" border="0" cellpadding="1" cellspacing="1" bgcolor="#43464B">
            <tr>
              <td bgcolor="#002F4E"><img src="/imagine/artisthimself.jpg" width="78" height="69" /></td>
            </tr>
            </table></td>
          <td width="559"><table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="13" height="18"></td>
              <td><span class="Article_Title1"><a href="/articles.php?Title=<?php echo $string = str_replace(' ', '+', $row_ArticlesPlayer['Title']); ?>" class="Article_Title1"><?php echo $row_ArticlesPlayer['Title']; ?></a></span></td>
            </tr>
            </table></td>
        </tr>
        <tr>
          <td><table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="10">&nbsp;</td>
              <td><table border="0" cellpadding="3" cellspacing="1">
                <tr>
                  <td class="Article_Text1">Submitted by</td>
                  <td class="Article_Detaillink1"><span class="Article_Text">Moderator</span></td>
                  <td class="Article_Text1">on</td>
                  <td><div align="center" class="Article_Detaillink1"><span class="Article_Text"><?php echo $row_ArticlesPlayer['daters']; ?></span></div></td>
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
                  <td class="Article_Text1">Category :</td>
                  <td class="Article_Detaillink1"><span class="Article_Text"><?php echo $row_ArticlesPlayer['cates']; ?></span></td>
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
  <?php } while ($row_ArticlesPlayer = mysql_fetch_assoc($ArticlesPlayer)); ?><?php
mysql_free_result($ArticlesPlayer);
?>
