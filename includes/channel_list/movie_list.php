<table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#002137">
<tr>
                    <td width="207" height="29" bgcolor="#002F4E"><div align="center" class="left_menuheading">Select Movies</div></td>
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
                                <li><a onclick="song();return true;" href="/includes/player/Ublq_MoviePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEACTION['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEACTION['ChannelName']; ?></a></li>
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
                            <td width="190" height="18" class="headeringlist">CHILDREN</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_MoviePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATECHILDREN['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATECHILDREN['ChannelName']; ?></a></li>
                                <?php } while ($row_CATECHILDREN = mysql_fetch_assoc($CATECHILDREN)); ?></td>
                              </tr>
                            </table>
                          </div>
                      </div></td>
                    </tr>
                  </table><table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                        <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                          <tr>
                            <td width="190" height="18" class="headeringlist">COMEDY</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_MoviePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATECOMEDY['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATECOMEDY['ChannelName']; ?></a></li>
                                <?php } while ($row_CATECOMEDY = mysql_fetch_assoc($CATECOMEDY)); ?></td>
                              </tr>
                          </table>
                          </div>
                      </div></td>
                    </tr>
                  </table><table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                        <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                          <tr>
                            <td width="190" height="18" class="headeringlist">DOCUMENTARY</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_MoviePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEDOCUMENTARY['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEDOCUMENTARY['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEDOCUMENTARY = mysql_fetch_assoc($CATEDOCUMENTARY)); ?></td>
                              </tr>
                          </table>
                          </div>
                      </div></td>
                    </tr>
                  </table><table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                        <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                          <tr>
                            <td width="190" height="18" class="headeringlist">DRAMA</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                  <li><a onclick="song();return true;" href="/includes/player/Ublq_MoviePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEDRAMA['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEDRAMA['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEDRAMA = mysql_fetch_assoc($CATEDRAMA)); ?></td>
                              </tr>
                          </table>
                          </div>
                      </div></td>
                    </tr>
                  </table><table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                        <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                          <tr>
                            <td width="190" height="18" class="headeringlist">FANTASY</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                  <li><a onclick="song();return true;" href="/includes/player/Ublq_MoviePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEFANTASY['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEFANTASY['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEFANTASY = mysql_fetch_assoc($CATEFANTASY)); ?></td>
                              </tr>
                          </table>
                          </div>
                      </div></td>
                    </tr>
                  </table><table width="207" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="207" valign="top" bgcolor="#002F4E"><div class="ublq_upper">
                        <table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#003E66">
                          <tr>
                            <td width="190" height="18" class="headeringlist">HORROR</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_MoviePlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEHORROR['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEHORROR['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEHORROR = mysql_fetch_assoc($CATEHORROR)); ?></td>
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
