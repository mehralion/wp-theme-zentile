<?php

function zentile_cmp_sidebar() { ?>
    <aside id="site-sidebar" role="complementary" <?php if (!zentile_show_sidebar()) echo 'class="--hidden"' ?>>
        <div class="sidebar__widgets h-hide-scrollbar">
            <div class="sidebar__close js-mobile-nav-close">
                <?php zentile_the_theme_svg('cross'); ?>
            </div>

            <?php if (zentile_show_primary_nav()) { ?>
                <div class="widget zentile-widget-mobile-nav">
                    <div class="widget-content">
                        <h2 class="widget-title"><?php _e('Primary Menu', 'zentile'); ?></h2>

                        <ul class="menu">
                            <?php zentile_primary_nav(); ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <?php dynamic_sidebar('sidebar'); ?>
        </div>
    </aside>
    <?php
}