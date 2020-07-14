<?php
/**
 * WebStack Xinac
 *
 * @package WebStack Xinac
 * @author xinac
 * @version 1.0
 * @link https://www.xinac.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<?php $this->need('sidebar.php'); ?>
<div class="main-content">
    <nav class="navbar user-info-navbar" role="navigation">
        <!-- User Info, Notifications and Menu Bar -->
        <!-- Left links for user info navbar -->
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
            <li class="hover-line">
                <a href="/" title="首页">
                    <i class="fa fa-home"></i> 首页
                </a>
            </li>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while ($pages->next()): ?>
                <li class="hover-line">
                    <?php if (!empty($pages->fields->url)): ?>
                    <a href="<?php echo $pages->fields->url; ?>" title="<?php echo $pages->fields->text; ?>"
                       target="_blank">
                        <?php else: ?>
                        <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                            <?php endif; ?>
                            <i class="<?php echo $pages->fields->menu_logo; ?>"
                               aria-hidden="true"></i> <?php $pages->title(); ?>
                        </a>
                </li>
            <?php endwhile; ?>
        </ul>
        <ul class="user-info-menu right-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="<?php $this->options->xinac_github(); ?>" target="_blank" title="GitHub">
                    <i class="fa-github"></i> GitHub
                </a>
            </li>
        </ul>
    </nav>

    <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
    <?php while ($categories->next()): ?>
        <?php if (count($categories->children) === 0): ?>
            <?php $this->widget('Widget_Archive@category-' . $categories->mid, 'order=order&pageSize=10000&type=category', 'mid=' . $categories->mid)->to($posts); ?>
            <h4 class="text-gray">
                <i class="linecons-tag" style="margin-right: 7px;"
                   id="<?php $categories->name(); ?>"></i><?php $categories->name(); ?>
            </h4>
            <div class="row">
            <?php $count = 1; ?>
            <?php while ($posts->next()): ?>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info"
                         onclick="window.open('<?php echo $posts->fields->url; ?>', '_blank')" data-toggle="tooltip"
                         data-placement="bottom" title="" data-original-title="<?php echo $posts->fields->url; ?>">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <?php if (!empty($posts->fields->logo)): ?>
                                <img data-src="<?php echo $posts->fields->logo; ?>" class="lozad img-circle" width="40">
                                <?php else: ?>
                                <img data-src="<?php $this->options->themeUrl('assets/images/website.png'); ?>" class="lozad img-circle" width="40">
                                <?php endif; ?>
                            </a>
                            <div class="xe-comment">
                                <a href="<?php echo $posts->fields->url; ?>" class="xe-user-name overflowClip_1">
                                    <strong><?php $posts->title(); ?></strong>
                                </a>
                                <p class="overflowClip_2">
                                    <?php echo $posts->fields->text; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($count % 4 == 0): ?>
                    </div>
                    <div class="row">
                <?php endif; ?>
                <?php $count++; ?>
            <?php endwhile; ?>
            </div>
            <br/>
        <?php else: ?>
        <?php endif; ?>
    <?php endwhile; ?>

    <?php $this->need('footer.php'); ?>
