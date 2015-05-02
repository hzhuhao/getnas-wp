    <div id="cover">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-3">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/freenas-feture.png" alt="What is FreeNAS?" />
                </div>
                <div class="uk-width-1-3">
                    <h3>FreeNAS 是什么？</h3>
                    <p>FreeNAS 是一款广受赞誉的开源免费 NAS 操作系统。它能把普通台式机瞬间变成一台多功能 NAS 服务器。不但适用于企业文件共享，同样适用于打造家庭媒体中心。</p>
                    <p>FreeNAS 支持多种共享协议，包括 SMB/CIFS、NFS、AFP、WebDAV、iSCSI、FTP/TFTP、RSync等。</p>
                    <div class="uk-float-right uk-margin-top">
                        <a href="/what-is-freenas" class="uk-button uk-button-danger"><i class="uk-icon-spinner uk-icon-spin"></i> 详细介绍</a>
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <h3>GetNAS 动态</h3>
                    <ul>
                        <?php query_posts( 'showposts=5 & cat=49' ); ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <li><a href="<?php the_permalink();?>" target="_blank"><?php the_title();?></a></li>
                    <?php endwhile; wp_reset_query();// end of the loop. ?>
                    </ul>
                    <div class="uk-float-right">
                        <a href="/category/news" class="uk-button uk-button-small"><i class="uk-icon-angle-double-right"></i> More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>