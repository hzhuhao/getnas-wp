<?php get_header(); ?>
	<div id="genContent">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-1" id="subNav">
                    <span>当前位置：</span>
                    <a href="/">首页</a>
                    <span class="sep">></span>
                    <a href="/hardware">硬件指南</a>
                    <span class="sep">></span>
                    <?php foreach((get_the_category()) as $category): ?>
						<a href="<?php echo get_category_link($category->cat_ID) ?>"><?php echo $category->cat_name; // 调用文章所属分类 ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-3-4" id="left">
                    <h1 id="hwTitle"><?php the_title(); ?><span><i class="uk-icon-cny"></i> <?php the_field('hdPrice'); ?></span></h1>
                    <div id="myMate">
                        <span><i class="uk-icon-clock-o"></i> <?php the_time('Y-n-j G:i'); ?></span>
                        <?php foreach((get_the_category()) as $category): ?>
                        <span><i class="uk-icon-tag"></i> <a href="<?php echo get_category_link($category->cat_ID) ?>"><?php echo $category->cat_name; // 调用文章所属分类 ?></a></span>
                        <?php endforeach; ?>
                        <span><i class="uk-icon-eye"></i> <?php if(function_exists('the_views')) { the_views(); } ?></span>
                        <span><i class="uk-icon-comment-o"></i> <span class="ds-thread-count" data-thread-key="<?php the_ID(); ?>" data-count-type="comments"></span></span>
                    </div>
                    <div id="mainText">
                        <div id="hwLink">
                            <p><a rel="nofollow" href="<?php the_field('hdURL'); ?>" target="_blank"><img width="180" src="<?php the_field('hdPic'); ?>" alt=""></a></p>
                            <p><a rel="nofollow" class="uk-button uk-button-large uk-button-danger" href="<?php the_field('hdURL'); ?>" target="_blank">电商直达 <i class="uk-icon-angle-right"></i></a></p>
                        </div>
                        <!-- 调用正文 -->
						<?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); // 显示正文 ?>
                        <?php endwhile; // end of the loop. ?>

                        <?php related_posts(); // 相关内容推荐?>
                        
                        <div id="comment" class="uk-margin-top">
                            <!-- 多说评论框 start -->
                            <div class="ds-thread" data-thread-key="" data-title="" data-url=""></div>
                        <!-- 多说评论框 end -->
                        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
                        <script type="text/javascript">
                        var duoshuoQuery = {short_name:"getnas"};
                            (function() {
                                var ds = document.createElement('script');
                                ds.type = 'text/javascript';ds.async = true;
                                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                                ds.charset = 'UTF-8';
                                (document.getElementsByTagName('head')[0] 
                                 || document.getElementsByTagName('body')[0]).appendChild(ds);
                            })();
                            </script>
                        <!-- 多说公共JS代码 end -->
                        </div>
                        <a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=4&amp;fs=4&amp;bgcolor=LightBlue"></script>
                    </div>
                </div>
                <div class="uk-width-1-4" id="right">
                    <div class="uk-grid">
                        <?php get_template_part('hardwareNav'); ?>
                        <!-- 热门教程 -->
                        <?php get_template_part('hotTopic'); ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>