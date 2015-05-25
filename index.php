<?php get_header();?>
    <div class="uk-container uk-container-center uk-margin-top" id="mainContent">
        <div class="uk-grid">
            <div class="uk-width-2-3">
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/install" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-wrench"></i> 安装升级</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=install&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/seting" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-gear"></i> 系统设置</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=seting&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/storage" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-server"></i> 存储管理</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=storage&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/cifs" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-windows"></i> CIFS共享</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=cifs&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/afp" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-apple"></i> AFP共享</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=afp&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/nfs" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-linux"></i> NFS共享</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=nfs&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-share-alt"></i> 服务管理</h3>
                            
                            <div class="uk-grid">
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-ssh" id="ssh" class="sMan" target="_blank">SSH</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-ftp" id="ftp" class="sMan" target="_blank">FTP</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-rsync" id="rsync" class="sMan" target="_blank">Rsync</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-iscsi" id="iscsi" class="sMan" target="_blank">iSCSI</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-webdav" id="webdav" class="sMan" target="_blank">WebDAV</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-ddns" id="ddns" class="sMan" target="_blank">DDNS</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-tftp" id="tftp" class="sMan" target="_blank">TFTP</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-4">
                                    <div class="sManB">
                                        <a href="/freenas-ups" id="ups" class="sMan" target="_blank">UPS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/ds" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-users"></i> 目录服务</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=ds&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-2">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="/category/jails" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-cloud"></i> Jails虚拟化</h3>
                            <ul class="boxList">
                                <?php query_posts('category_name=jails&showposts=6'); ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                <?php endwhile; wp_reset_query();// end of the loop. ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-panel uk-panel-header">
                            <div class="more"><a href="" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                            <h3 class="uk-panel-title"><i class="uk-icon-plug"></i> FreeNAS插件</h3>
                            <div class="uk-grid">
                                <div class="uk-width-1-3">
                                    <a href="/freenas-bacula" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bacula.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                Bacula - 企业级备份方案
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-owncloud" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/owncloud.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                OwnCloud - 私有的DropBox
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-btsync" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/btsync.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                BTSync - 数据同步利器
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-1-3">
                                    <a href="/freenas-transmission" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/transmission.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                Transmission - BT下载必备
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-syncthing" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Syncthing.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                Syncthing - 同步一切
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-crashplan" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/crashplan.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                CrashPlan - 跨平台备份
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-1-3">
                                    <a href="/freenas-plex" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/plex.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                PlexMediaServer - 媒体服务器
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-subsonic" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/subsonic.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                <p>SubSonic - 音乐管理</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-emby" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/emby.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                EMBY - 媒体管理
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-1-3">
                                    <a href="/freenas-sickbeard" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sickbeard.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                SickBeard - 你的网络PVR
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-wds" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/CrucibleWDS.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                CrucibleWDS - 无盘服务器
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="uk-width-1-3">
                                    <a href="/freenas-couchpotato" target="_blank">
                                        <div class="uk-overlay uk-overlay-hover">
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/CouchPotato.jpg" class="uk-thumbnail" width="220" height="120" alt="">
                                            <div class="uk-overlay-panel uk-overlay-background  uk-overlay-bottom uk-overlay-slide-bottom">
                                                CouchPotato
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="uk-width-1-3">
                <h3>最新教程</h3>
                <div class="uk-panel uk-panel-box" id="latestList">
                    <ol>
                        <?php query_posts( array('showposts' => '10','category__not_in' => array('2','8','49','51','52','53','54','55','56','57','58','59')) ); // 调用除下载外全部分类文章?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <li><a href="<?php the_permalink();?>" target="_blank"><?php the_title();?></a></li>
                        <?php endwhile; wp_reset_query();// end of the loop. ?>
                    </ol>
                </div>
                <h3>硬件指南</h3>
                <div class="uk-grid uk-margin-top" id="hardware">
                    <div class="uk-width-1-3">
                        <ul class="uk-tab uk-tab-left" data-uk-tab="{connect:'#hdList'}" id="hdTitle">
                            <li><a href="">经验</a></li>
                            <li class="uk-active"><a href="">CPU</a></li>
                            <li><a href="">主板</a></li>
                            <li><a href="">内存</a></li>
                            <li><a href="">硬盘</a></li>
                            <li><a href="">机箱</a></li>
                            <li><a href="">电源</a></li>
                            <li><a href="">网络</a></li>
                            <li><a href="">扩展卡</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-2-3" id="hdContent">
                        <ul class="uk-switcher" id="hdList">
                            <li>
                                <ol>
                                    <?php query_posts('category_name=advice&showposts=8'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>
                                    <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a> <!-- <span class="uk-badge uk-badge-danger">HOT</span> --></li>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <div><a href="/category/advice" target="_blank">查看全部</a></div>
                                </ol>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=cpu&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/cpu" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=motherboard&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/motherboard" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=memory&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/memory" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=harddrive&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/harddrive" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=case&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/case" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=power&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/power" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=network&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/network" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                            <li>
                                <ul class="pShow">
                                    <?php query_posts('category_name=extend&showposts=4'); ?>
                                    <?php while ( have_posts() ) : the_post(); ?>                                    
                                    <a href="<?php the_permalink(); ?>" target="_blank">
                                        <li>
                                            <img src="<?php the_field('hdPic') ?>" width="80" alt="">
                                            <p><?php the_field('hdShort'); ?></p>
                                            <p class="hdPrice"><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></p>
                                        </li>
                                    </a>
                                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                                    <a href="/category/extend" target="_blank">
                                        <li>
                                            <p>查看全部</p>
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>