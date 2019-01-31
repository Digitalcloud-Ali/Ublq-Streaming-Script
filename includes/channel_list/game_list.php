
<table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#002137">
<tr>
                    <td width="207" height="29" bgcolor="#002F4E"><div align="center" class="left_menuheading">Select Games</div></td>
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
                          <td width="190" height="18" class="headeringlist">ACTION</td>
                        </tr>
                      </table></div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                        <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                          <tr>
                            <td width="190" bgcolor="#002F4E" class="text">
                              
                              <?php do { ?>
                              <li><a onclick="song();return true;" href="/includes/player/Ublq_GamePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEACTION['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEACTION['ChannelName']; ?></a></li>
                            <?php } while ($row_CATEACTION = mysql_fetch_assoc($CATEACTION)); ?></td>
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
                              <td width="190" height="18" class="headeringlist">ARCADE</td>
                            </tr>
                          </table>
                      </div>
                          <div class="ublq_lower">
                            <div style="height:190px;">
                              <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                                <tr>
                                  <td width="190" bgcolor="#002F4E" class="text"><?php do { ?>
                                  <li><a onclick="song();return true;" href="/includes/player/Ublq_GamePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEARCADE['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEARCADE['ChannelName']; ?></a></li>
                                  <?php } while ($row_CATEARCADE = mysql_fetch_assoc($CATEARCADE)); ?></td>
                                </tr>
                              </table>
                            </div>
                          </div></td>
                    </tr>
                  </table>
                  <table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                          <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                            <tr>
                              <td width="190" height="18" class="headeringlist">PUZZLE</td>
                            </tr>
                          </table>
                      </div>
                          <div class="ublq_lower">
                            <div style="height:190px;">
                              <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                                <tr>
                                  <td width="190" bgcolor="#002F4E" class="text"><?php do { ?>
                                      <li><a onclick="song();return true;" href="/includes/player/Ublq_GamePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEPUZZLE['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEPUZZLE['ChannelName']; ?></a></li>
                                    <?php } while ($row_CATEPUZZLE = mysql_fetch_assoc($CATEPUZZLE)); ?></td>
                                </tr>
                              </table>
                            </div>
                          </div></td>
                    </tr>
                  </table>
                  <table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                        <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                          <tr>
                            <td width="190" height="18" class="headeringlist">SPORTS</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                  <li><a onclick="song();return true;" href="/includes/player/Ublq_GamePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATESPORTS['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATESPORTS['ChannelName']; ?></a></li>
                                <?php } while ($row_CATESPORTS = mysql_fetch_assoc($CATESPORTS)); ?></td>
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
