<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <title><?php if ( is_home() ) {
    bloginfo('description'); echo " - "; bloginfo('name');
} elseif ( is_category() ) {
    single_cat_title(); echo " - "; bloginfo('name');
} elseif (is_single() || is_page() ) {
    single_post_title(); echo " - "; bloginfo('name');
} elseif (is_search() ) {
    the_search_query(); echo " 的搜索结果"; echo " - "; bloginfo('name');
} elseif (is_tag()) {
    wp_title('',true); echo " - "; bloginfo('name');
} elseif (is_404() ) {
    echo '页面未找到!';
} elseif (is_author()) {
    the_author();  echo " 的专栏 - "; bloginfo('name');
} else {
    wp_title('',true);
} ?></title>

    <?php if( is_home() ): ?>
    <meta name="description" content="GetNAS中文网，为您提供FreeNAS中文版安装使用教程以及最新版本分流下载，为 DIY NAS 的网友提供丰富的硬件指南和组装方案，帮助构建适用于中小企业和家庭环境的NAS存储服务器。">
    <meta name="keywords" content="FreeNAS、FreeNAS中文、FreeNAS下载、FreeNAS教程、FreeNAS共享、FreeNAS硬件">
    <?php elseif( is_category() ): ?>
    <meta name="description" content="GetNAS中文网，为您提供<?php single_cat_title(); ?>以及与NAS存储服务器相关的软件、硬件以及DIY NAS等精品中文教程。">
    <?php elseif( is_search() ): ?>
    <meta name="description" content="GetNAS中文网，为您提供<?php the_search_query(); ?>以及与NAS存储服务器相关的软件、硬件以及DIY NAS等精品中文教程。">
    <?php elseif( is_author() ): ?>
    <meta name="description" content="<?php the_author(); ?> 是GetNAS中文网的主要维护人员之一，参与创作了与NAS存储服务器相关的软件、硬件以及DIY NAS等大量精品中文教程。">
    <?php elseif( is_single() ): ?>
    <meta name="description" content="<?php the_field('single_description'); ?>">
    <meta name="keywords" content="<?php the_field('single_keywords'); ?>">
    <?php else: ?>
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/uikit.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/uikit.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/components/tooltip.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv-printshiv.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <link rel="shortcut icon" href="http://www.getnas.com/favicon.ico" />

    <script type="text/javascript">
        $(document).ready(function(){
            // tooltips
            $("div#mainText span").attr("data-uk-tooltip","");
            $("table").addClass('uk-table uk-table-striped uk-table-condensed');
        });
    </script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?bbd31a2e32854120f98d5881253c8f7e";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <link rel="shortcut icon" href="http://www.getnas.com/favicon.ico" />
    <script type="text/javascript" src="http://cbjs.baidu.com/js/m.js"></script>
</head>
<body>
    <div class="uk-container uk-container-center">
        <div class="uk-grid" id="top">
            <div class="uk-width-1-4 uk-flex uk-flex-middle">
                <a href="/" title="GetNAS中文网"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="GetNAS Logo"></a>
            </div>
            <div class="uk-width-3-4 uk-flex uk-flex-middle uk-flex-right">
                <?php get_template_part('navbar') ?>
            </div>
        </div>
    </div>
    <?php if(is_home()): ?>
    <?php get_template_part('cover'); ?>
    <?php else: ?>
    <?php endif; ?>
    <div id="searchBar">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-1-3">
                    <form class="uk-form" name="formsearch" action="<?php echo esc_url( home_url() ); ?>">
                        <div class="uk-form-icon">
                            <i class="uk-icon-search"></i>
                            <input name="s" id="s" type="text" placeholder="Search..." type="text" value="" autocomplete="off">
                            <button class="uk-button uk-button-success">站内搜索</button>
                        </div>
                    </form>
                </div>
                <div class="uk-flex uk-flex-middle uk-width-2-3">
                    <span><a href="/?s=cifs">CIFS共享设置</a></span>
                    <span><a href="/?s=rsync">FreeNAS Rsync同步</a></span>
                    <span><a href="/?s=aria2">Jail Aria2</a></span>
                    <span><a href="/?s=替换硬盘">ZFS 替换硬盘</a></span>
                    <span><a href="/?s=raid">RAID-Z配置</a></span>
                </div>
            </div>
        </div>
    </div>