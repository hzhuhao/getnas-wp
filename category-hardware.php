<?php get_header(); ?>
	<div id="genContent">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1" id="subNav">
                    <span>当前位置：</span>
                    <a href="/">首页</a>
                    <span class="sep">></span>
                    <?php if(is_category('hardware')): ?>
                    <a href="/category/hardware"><?php single_cat_title(); // 调用分类标题?></a>
                	<?php else: ?>
                	<a href="/category/hardware">硬件指南</a>
                    <span class="sep">></span>
                    <a href=""><?php single_cat_title(); // 调用分类标题?></a>
                	<?php endif; ?>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-3-4"  id="left">
                    <div class="uk-panel uk-panel-header">
                        <h3 class="uk-panel-title"><i class="uk-icon-laptop"></i> <?php single_cat_title(); // 调用分类标题?></h3>
                        <div id="hwList">
                            <ul>
                            	<?php while ( have_posts() ) : the_post(); ?>
                                <li>
                                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?> <span><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></span></a></h3>
                                    <div class="uk-grid">
                                        <div class="uk-width-1-5">
                                            <a href="<?php the_permalink();?>" class="uk-overlay">
                                                <img width="160" src="<?php the_field('hdPic'); ?>" alt="">
                                                <div class="uk-overlay-area"></div>
                                            </a>
                                        </div>
                                        <div class="uk-width-3-5">
                                            <div class="listMate">
                                                <span><i class="uk-icon-clock-o"></i> <?php the_time('Y-n-j G:i'); ?></span>
                                                <?php foreach((get_the_category()) as $category): ?>
						                        <span><i class="uk-icon-tag"></i> <a href="<?php echo get_category_link($category->cat_ID) ?>"><?php echo $category->cat_name; // 调用文章所属分类 ?></a></span>
						                        <?php endforeach; ?>
                                                <p><?php the_excerpt(); // 调用文章摘要 ?><a href="<?php the_permalink();?>">阅读全文</a> </p>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-5 uk-flex uk-flex-middle">
                                            <a rel="nofollow" class="uk-button uk-button-danger" href="<?php the_field('hdURL'); ?>" target="_blank">电商直达 <i class="uk-icon-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            	<?php endwhile; // end of the loop. ?>
                            </ul>
                        </div>
                        <div id="pages">
                            <!-- 分页 -->
							<?php wp_pagenavi(); ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-4" id="right">
                    <div class="uk-grid">
                        <?php get_template_part('hardwareNav'); ?>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <div class="uk-panel uk-panel-header hotList">
                                <h3 class="uk-panel-title">热门硬件</h3>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>