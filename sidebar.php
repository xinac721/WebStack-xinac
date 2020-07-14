<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="sidebar-menu toggle-others fixed">
    <div class="sidebar-menu-inner">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="<?php $this->options->siteUrl(); ?>" class="logo-expanded">
                    <img src="<?php $this->options->logo_large(); ?>" style="width: 100%; max-height: 60px;"
                         alt="<?php $this->options->title(); ?>"/>
                </a>
                <a href="<?php $this->options->siteUrl(); ?>" class="logo-collapsed">
                    <img src="<?php $this->options->logo_small(); ?>" style="max-width: 40px; max-height: 40px;"
                         alt="<?php $this->options->title(); ?>"/>
                </a>
            </div>
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="linecons-cog"></i>
                </a>
                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
            <?php while ($categorys->next()): ?>
                <?php if ($categorys->levels === 0): ?>
                    <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                    <?php if (empty($children)) { ?>
                        <li>
                            <a href="<?php if ($this->is('index')): ?><?php else: ?>/<?php endif; ?>#<?php $categorys->name(); ?>"
                               class="smooth">
                                <i class="fa fa-<?php $categorys->slug(); ?>"></i>
                                <span class="title"><?php $categorys->name(); ?></span>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a>
                                <i class="fa fa-<?php $categorys->slug(); ?>"></i>
                                <span class="title"><?php $categorys->name(); ?></span>
                            </a>
                            <ul>
                                <?php foreach ($children as $mid) { ?>
                                    <?php $child = $categorys->getCategory($mid); ?>
                                    <li>
                                        <a href="<?php if ($this->is('index')): ?><?php else: ?>/<?php endif; ?>#<?php echo $child['name']; ?>"
                                           class="smooth"><?php echo $child['name']; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
