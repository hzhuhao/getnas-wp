<?php get_header(); ?>
	<div id="genContent">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-margin-top" id="left">
                <div class="uk-width-3-4">
                    <div class="uk-panel uk-panel-header">
                        <h3 class="uk-panel-title"><i class="uk-icon-search"></i> 搜索结果：<?php the_search_query() ?></h3>
                        <ul id="list">
                        	<?php while ( have_posts() ) : the_post(); ?>
                            <li>
                                <div class="uk-grid">
                                    <div class="uk-width-1-3">
                                        <a href="<?php the_permalink();?>" class="uk-overlay">
                                        	<?php if(has_post_thumbnail()): ?>
											<div class="uk-thumbnail">
												<?php the_post_thumbnail(); ?>
												<div class="uk-overlay-area"></div>
											</div>								
											<?php else: ?>
                                            <img class="uk-thumbnail" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nopic.jpg" width="255" alt="">
                                            <div class="uk-overlay-area"></div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="uk-width-2-3 uk-margin-top">
                                        <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                                        <div>
                                            <span class="author"><i class="uk-icon-user"></i> <a href="<?php the_author_link() ?>"><?php the_author(); ?></a></span>
                                            <span class="time"><i class="uk-icon-clock-o"></i> <?php the_time('Y-n-j G:i'); ?></span>
                                        </div>
                                        <p><?php the_excerpt(); // 调用文章摘要 ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php endwhile; // end of the loop. ?>
                        </ul>
                        <div id="pages">
                            <!-- 分页 -->
							<?php wp_pagenavi(); ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-4" id="right">
                    <div class="uk-grid">
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <h3>相关主题</h3>
                            <div class="uk-panel uk-panel-box relate">
                                <ul>
                                    <li class="myBadge myBadge-red"><a href="">账户管理</a></li>
                                    <li class="myBadge myBadge-yellow"><a href="">常规设置</a></li>
                                    <li class="myBadge myBadge-green"><a href="">高级选项</a></li>
                                    <li class="myBadge myBadge-cyan"><a href="">网络设置</a></li>
                                    <li class="myBadge myBadge-blue"><a href="">计划任务</a></li>
                                    <li class="myBadge myBadge-purple"><a href="">证书管理</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <div class="uk-panel uk-panel-header hotList">
                                <h3 class="uk-panel-title">热门教程</h3>
                                <ol>
                                    <?php if (function_exists('get_most_viewed')): ?>
									<?php get_most_viewed('post',8); ?>
									<?php endif; ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>