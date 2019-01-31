
<table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#002137">
<tr>
                    <td width="207" height="29" bgcolor="#002F4E"><div align="center" class="left_menuheading">Select Radio Channels</div></td>
  </tr>
                </table>
<table width="200" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="2"></td>
                    </tr>
                  </table>
                  <div id="Player">
                  <table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper"><table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                        <tr>
                          <td width="190" height="18" class="headeringlist">NEWS</td>
                        </tr>
                      </table></div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                        <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                          <tr>
                            <td width="190" bgcolor="#002F4E" class="text">
                              
                              <?php do { ?>
                                <li><a onclick="song();return true;" href="/includes/player/Ublq_RadioPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATENEWS['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATENEWS['ChannelName']; ?></a></li>
                            <?php } while ($row_CATENEWS = mysql_fetch_assoc($CATENEWS)); ?></td>
                          </tr>
                        </table>
                        </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                  <table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                        <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                          <tr>
                            <td width="190" height="18" class="headeringlist">MUSIC</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_RadioPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEMUSIC['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEMUSIC['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEMUSIC = mysql_fetch_assoc($CATEMUSIC)); ?></td>
                              </tr>
                            </table>
                          </div>
                      </div></td>
                    </tr>
                  </table>
                  </div>
                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="2"></td>
                    </tr>
</table>
