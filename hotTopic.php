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