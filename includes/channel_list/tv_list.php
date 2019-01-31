
<table width="207" border="0" cellpadding="0" cellspacing="1" bgcolor="#002137">
<tr>
                    <td width="207" height="29" bgcolor="#002F4E"><div align="center" class="left_menuheading">Select Tv Channels</div></td>
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
                                <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATENEWS['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATENEWS['ChannelName']; ?></a></li>
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
                            <td width="190" height="18" class="headeringlist">INFORMATION</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEINFORMATION['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEINFORMATION['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEINFORMATION = mysql_fetch_assoc($CATEINFORMATION)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">ENTERTAINMENT</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEENTERTAINMENT['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEENTERTAINMENT['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEENTERTAINMENT = mysql_fetch_assoc($CATEENTERTAINMENT)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">MOVIES</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEMOVIES['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEMOVIES['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEMOVIES = mysql_fetch_assoc($CATEMOVIES)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">REALITY</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEREALITY['ChannelName']); ?>
" class="listlink" rel="Movielist"> <?php echo $row_CATEREALITY['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEREALITY = mysql_fetch_assoc($CATEREALITY)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">LIFESTYLE</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATELIFESTYLE['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATELIFESTYLE['ChannelName']; ?></a></li>
                                <?php } while ($row_CATELIFESTYLE = mysql_fetch_assoc($CATELIFESTYLE)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">FASHION</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEFASHION['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEFASHION['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEFASHION = mysql_fetch_assoc($CATEFASHION)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">SHOPPING</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATESHOPPING['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATESHOPPING['ChannelName']; ?></a></li>
                                <?php } while ($row_CATESHOPPING = mysql_fetch_assoc($CATESHOPPING)); ?></td>
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
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEMUSIC['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEMUSIC['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEMUSIC = mysql_fetch_assoc($CATEMUSIC)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">YOUTH</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEYOUTH['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEYOUTH['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEYOUTH = mysql_fetch_assoc($CATEYOUTH)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">KIDS</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEKIDS['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEKIDS['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEKIDS = mysql_fetch_assoc($CATEKIDS)); ?></td>
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
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATESPORTS['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATESPORTS['ChannelName']; ?></a></li>
                                <?php } while ($row_CATESPORTS = mysql_fetch_assoc($CATESPORTS)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">GAMES</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEGAMES['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEGAMES['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEGAMES = mysql_fetch_assoc($CATEGAMES)); ?></td>
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
                            <td width="190" height="18" class="headeringlist">RELIGION</td>
                          </tr>
                        </table>
                      </div>
                        <div class="ublq_lower">
                        <div style="height:190px;">
                            <table width="207" border="0" cellpadding="5" cellspacing="1" bgcolor="#002F4E">
                              <tr>
                                <td width="190" bgcolor="#002F4E" class="text">
                                  <?php do { ?>
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATERELIGION['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATERELIGION['ChannelName']; ?></a></li>
                                <?php } while ($row_CATERELIGION = mysql_fetch_assoc($CATERELIGION)); ?></td>
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
                                    <li><a onclick="song();return true;" href="/includes/player/Ublq_TvPlayer.php?ChannelName=<?php echo $string = str_replace(' ', '+', $row_CATEDOCUMENTARY['ChannelName']); ?>" class="listlink" rel="Movielist"> <?php echo $row_CATEDOCUMENTARY['ChannelName']; ?></a></li>
                                <?php } while ($row_CATEDOCUMENTARY = mysql_fetch_assoc($CATEDOCUMENTARY)); ?></td>
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
