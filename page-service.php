<?php /*
	Template Name: 服务
*/get_header(); ?>
	<div id="genContent">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1" id="subNav">
                    <span>当前位置：</span>
                    <a href="">首页</a>
                    <span class="sep">></span>
                    <span class="title">FreeNAS服务管理 - <?php the_title(); ?></span>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-3-4" id="left">
                    <div id="pluginPage">
                        <div id="pluginTitle" class="withBanner">
                            <div class="vignette">
                                <h3 id="pluginName"><?php the_title(); ?></h3>
                            </div>
                            <style type="text/css">
                                #pluginTitle{
                                    background-image: url(<?php the_field('servBanner'); ?>);
                                }
                            </style>
                        </div>
                        <div id="pluginDescription">
                            <div class="uk-grid" id="pluginMenu">
                                <div class="uk-width-1-1">
                                    <ul class="uk-tab" data-uk-tab="{connect:'#pluginTab'}">
                                        <li class="uk-active"><a href="">服务介绍</a></li>
                                        <li><a href="">配置</a></li>
                                        <li><a href="">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul id="pluginTab" class="uk-switcher">
                            <li>
                                <?php the_field('servIntro'); ?>
                            </li>
                            <li>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <?php the_content(); // 显示正文 ?>
                                <?php endwhile; // end of the loop. ?>
                            </li>
                            <li>
                                <?php the_field('servFAQ'); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-4" id="right">
                    <div class="uk-grid">
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <h3>其他服务</h3>
                            <div class="uk-panel uk-panel-box pluginRelate">
                                <ul>
                                    <li class="myBadge myBadge-red"><a href="/freenas-webdav">WebDAV</a></li>
                                    <li class="myBadge myBadge-yellow"><a href="/freenas-ssh">SSH</a></li>
                                    <li class="myBadge myBadge-green"><a href="/freenas-ftp">FTP</a></li>
                                    <li class="myBadge myBadge-cyan"><a href="/freenas-rsync">Rsync</a></li>
                                    <li class="myBadge myBadge-blue"><a href="/freenas-ddns">DDNS</a></li>
                                    <li class="myBadge myBadge-purple"><a href="/freenas-iscsi">iSCSI</a></li>
                                    <li class="myBadge myBadge-red"><a href="/freenas-tftp">TFTP</a></li>
                                    <li class="myBadge myBadge-yellow"><a href="/freenas-ups">UPS</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php get_template_part('hotTopic'); ?>
                        <!-- <div class="uk-width-1-1 uk-margin-top">
                            <div class="uk-panel uk-panel-header hotList">
                                <div class="more"><a href="" target="_blank" title="查看全部"><i class="uk-icon-angle-double-right"> </i></a></div>
                                <h3 class="uk-panel-title">相关教程</h3>
                                <ol>
                                    <li><a href="">FreeNAS 系统安装图文教程</a></li>
                                    <li><a href="">常用共享介绍：CIFS、AFP、NFS、WebDAV</a></li>
                                    <li><a href="">DIY NAS 如何选择机箱？</a></li>
                                    <li><a href="">为 FreeNAS ZFS RAIDZ 增加扩展容量</a></li>
                                    <li><a href="">如何为 FreeNAS 9.2.x 制作U盘镜像？</a></li>
                                    <li><a href="">在 VirtualBox 中安装 FreeNAS 9.3</a></li>
                                    <li><a href="">组装 FreeNAS 系统应该如何选择搭配内存？</a></li>
                                    <li><a href="">FreeNAS插件打造ownCloud私有云网盘</a></li>
                                </ol>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>