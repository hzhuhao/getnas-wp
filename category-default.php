<?php get_header(); ?>
	<div id="genContent">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1" id="subNav">
                    <span>当前位置：</span>
                    <a href="/">首页</a>
                    <span class="sep">></span>
                    <a href=""><a href="<?php echo get_category_link($category->cat_ID); ?>" title=""><?php single_cat_title(); // 调用分类标题?></a></a>
                </div>
            </div>
            <div class="uk-grid" id="left">
                <div class="uk-width-3-4">
                    <div class="uk-panel uk-panel-header">
                        <h3 class="uk-panel-title"><i class="uk-icon-folder-open-o"></i> <?php single_cat_title(); // 调用分类标题?></h3>
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
                        <!-- 相关主题导航 -->
                        <?php get_template_part('relateTopic'); ?>
                        <!-- 热门教程 -->
                        <?php get_template_part('hotTopic'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>