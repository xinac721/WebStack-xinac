<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form)
{
    // 网站logo
    $logo_small = new Typecho_Widget_Helper_Form_Element_Text('logo_small', NULL, '/usr/themes/WebStack-xinac/assets/images/logo-collapsed@2x.png', _t('logo地址'), _t('80x80'));
    $form->addInput($logo_small);

    // 大号logo
    $logo_large = new Typecho_Widget_Helper_Form_Element_Text('logo_large', NULL, '/usr/themes/WebStack-xinac/assets/images/logo@2x.png', _t('大号logo地址'), _t('178x40'));
    $form->addInput($logo_large);

    // github网址
    $xinac_github = new Typecho_Widget_Helper_Form_Element_Text('xinac_github', NULL, '', _t('GitHub网址'), _t('自定义GitHub地址'));
    $form->addInput($xinac_github);

    // 备案
    $xinac_beian = new Typecho_Widget_Helper_Form_Element_Text('xinac_beian', NULL, 'ICP备123456号', _t('备案号'), _t('备案号'));
    $form->addInput($xinac_beian);

    // 版权
    $xinac_copy = new Typecho_Widget_Helper_Form_Element_Text('xinac_copy', NULL, 'WebStack', _t('网站版权'), _t(''));
    $form->addInput($xinac_copy);

    // 自定义 head 代码
    $xinac_head = new Typecho_Widget_Helper_Form_Element_Textarea('xinac_head', NULL, ' ', _t('head代码'), _t('自定义head代码'));
    $form->addInput($xinac_head);

    // 自定义页脚代码
    $xinac_foot = new Typecho_Widget_Helper_Form_Element_Textarea('xinac_foot', NULL, ' ', _t('页脚代码'), _t('自定义页脚代码'));
    $form->addInput($xinac_foot);
}

// 文章页面自定义字段
function themeFields($layout)
{
    $url = new Typecho_Widget_Helper_Form_Element_Text('url', NULL, NULL, _t('跳转链接（*）'), _t('跳转链接URL（*）'));
    $text = new Typecho_Widget_Helper_Form_Element_Text('text', NULL, NULL, _t('链接描述'), _t('链接描述内容'));
    $logo = new Typecho_Widget_Helper_Form_Element_Text('logo', NULL, NULL, _t('链接logo'), _t('链接logo地址'));
    $menu_logo = new Typecho_Widget_Helper_Form_Element_Text('menu_logo', NULL, NULL, _t('链接图标'), _t('仅独立页面设置有效，示例：fa fa-home'));
    $layout->addItem($url);
    $layout->addItem($text);
    $layout->addItem($logo);
    $layout->addItem($menu_logo);
}
