<?php
/*
	Template Name: 插件
*/ 
get_header(); ?>
	<div id="genContent">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1" id="subNav">
                    <span>当前位置：</span>
                    <a href="">首页</a>
                    <span class="sep">></span>
                    <span class="title">FreeNAS插件 - <?php the_title(); ?></span>
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
                                    background-image: url('<?php the_field('pluginBanner'); ?>');
                                }
                            </style>
                        </div>
                        <div id="pluginDescription">
                            <div class="uk-grid">
                                <div class="uk-width-3-4 uk-flex uk-flex-middle">
                                    <p class="shortDesc"><?php the_field('pluginDescription'); ?></p>
                                </div>
                                <div class="uk-width-1-4 uk-flex uk-flex-middle uk-flex-center">
                                    <a href="<?php the_field('pluginURL') ?>" class="uk-button uk-button-large uk-button-danger" target="_blank">下载插件</a>
                                </div>
                            </div>
                            <div class="uk-grid" id="pluginMenu">
                                <div class="uk-width-1-1">
                                    <ul class="uk-tab" data-uk-tab="{connect:'#pluginTab'}">
                                        <li class="uk-active"><a href="">插件介绍</a></li>
                                        <li><a href="">安装</a></li>
                                        <li><a href="">FAQ</a></li>
                                        <li><a href="">截图</a></li>
                                        <li><a href="">官网</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul id="pluginTab" class="uk-switcher">
                            <li>
                                <?php the_field('pluginIntro'); ?>
                            </li>
                            <li>
                                <?php while ( have_posts() ) : the_post(); ?>
                                <?php the_content(); // 显示正文 ?>
                                <?php endwhile; // end of the loop. ?>
                            </li>
                            <li>
                                <?php the_field('pluginFAQ'); ?>
                            </li>
                            <li>
                                <ol id="screenShot">
                                    <?php the_field('pluginScreenShot'); ?>
                                </ol>
                            </li>
                            <li>
                                <p><b>插件官网</b>：<a href="<?php the_field('pluginWebsite'); ?>" target="_blank"><?php the_field('pluginWebsite'); ?></a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-4" id="right">
                    <div class="uk-grid">
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <h3>其他插件</h3>
                            <div class="uk-panel uk-panel-box pluginRelate">
                                <ul>
                                    <li class="myBadge myBadge-red"><a href="/freenas-bacula">Bacula</a></li>
                                    <li class="myBadge myBadge-yellow"><a href="freenas-btsync">BTSync</a></li>
                                    <li class="myBadge myBadge-green"><a href="freenas-owncloud">OwnCloud</a></li>
                                    <li class="myBadge myBadge-cyan"><a href="/freenas-transmission">Transmission</a></li>
                                    <li class="myBadge myBadge-blue"><a href="/freenas-syncthing">Syncthing</a></li>
                                    <li class="myBadge myBadge-purple"><a href="/freenas-crashplan">CrashPlan</a></li>
                                    <li class="myBadge myBadge-red"><a href="/freenas-plex">PlexMediaServer</a></li>
                                    <li class="myBadge myBadge-yellow"><a href="/freenas-subsonic">SubSonic</a></li>
                                    <li class="myBadge myBadge-green"><a href="/freenas-emby">EMBY</a></li>
                                    <li class="myBadge myBadge-cyan"><a href="/freenas-sickbeard">SickBeard</a></li>
                                    <li class="myBadge myBadge-blue"><a href="/freenas-wds">CrucibleWDS</a></li>
                                    <li class="myBadge myBadge-purple"><a href="/freenas-couchpotato">CouchPotato </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <?php get_template_part('hotTopic'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>