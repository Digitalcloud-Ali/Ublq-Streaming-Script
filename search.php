<?php require_once('Connections/Ublq.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mpfreebies - A Quality Streaming Tv - Radio - Movie Media Site</title>
<link href="/ublqstyle.css" rel="stylesheet" type="text/css" />
<link href="/includes/expand_script/ublq_expanded.css" rel="stylesheet" type="text/css" />
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
          <td height="11"></td>
        </tr>
      </table>
      <table width="1003" border="0" cellpadding="0" cellspacing="0" class="center">
        <tr>
          <td valign="top"><table width="1002" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="39" height="148">&nbsp;</td>
                <td width="209" valign="top">
                <?php include('includes/channel_list/tv_list.php'); ?>
                  <?php include('includes/ublq_parts/searchbox.php'); ?>
                   <?php include('includes/ublq_parts/tags.php'); ?>
                  <?php include('includes/ublq_parts/statistics.php'); ?>
                  <?php include('includes/ublq_parts/donate.php'); ?></td>
                <td width="12">&nbsp;</td>
                <td width="689" valign="top"><table width="687" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="631" height="28" class="headering_black">Search :</td>
                    <td width="59" valign="top"><table width="59" border="0" align="right" cellpadding="0" cellspacing="0" class="fold">
                      <tr>
                        <td height="23">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  
                </table>
                  <?
//connect to mysql
//change user and password to your mySQL name and password
mysql_connect("localhost","globaliz_21jks9","215dfgsdgGE245"); 
	
//select which database you want to edit
mysql_select_db("globaliz_2kkfas"); 

$search=$_POST["search"];

//get the mysql and store them in $result
//change whatevertable to the mysql table you're using
//change whatevercolumn to the column in the table you want to search
$result = mysql_query("SELECT * FROM ublq24tv WHERE ChannelName LIKE '%$search%'");

//grab all the content
while($r=mysql_fetch_array($result))
{	
   //the format is $variable = $r["nameofmysqlcolumn"];
   //modify these to match your mysql table columns
  
   $ChannelName=$r["ChannelName"];
   $codes=$r["codes"];
   $daters=$r["daters"];
   $cates=$r["cates"];
   $keywds=$r["keywds"];
   $ids=$r["ids"];
   
   //display the row
   echo "$ChannelName <br> $codes <br> $daters <br> $cates | $keywds <br>";
}
?>
<img src="/imagine/Scissor Cut.gif" width="682" height="20" /></td>
                <td width="48">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="1003" border="0" cellpadding="0" cellspacing="0" class="centerbot">
        <tr>
          <td height="12"></td>
        </tr>
      </table>
      <table width="1003" border="0" cellpadding="0" cellspacing="0" class="bot">
        <tr>
          <td valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="8"></td>
              </tr>
            </table>
              <table width="918" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="605" valign="top"><?php include('includes/ublq_parts/about_ublq.php'); ?></td>
                <td width="306" valign="top"><?php include('includes/ublq_parts/ads_bottom.php'); ?></td>
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
