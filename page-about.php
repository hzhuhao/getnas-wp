<?php 
/*
	Template Name: 关于我们
*/
get_header(); ?>
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
                    	<!-- 调用正文 -->
						<?php while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div id="mainText">
                        	<?php the_content(); // 显示正文 ?>
                        	<?php endwhile; // end of the loop. ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>