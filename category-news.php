<?php get_header(); ?>
	<div id="us">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-margin-top">
                <div class="uk-width-1-4">
                    <div id="left">
                        <?php get_template_part('aboutNav'); ?>
                    </div>
                </div>
                <div class="uk-width-3-4">
                    <div id="right">
                        <h1>站内动态</h1>
                        <div id="newsList">
                            <ul>
                            	<?php while ( have_posts() ) : the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a><span class="publicTime"><?php the_time('Y-n-j G:i'); ?></span></li>
                                <?php endwhile; // end of the loop. ?>
                            </ul>
                        </div>
                        <div id="pages">
                            <!-- 分页 -->
							<?php wp_pagenavi(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>