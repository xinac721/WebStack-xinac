<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->options->title(); ?></title>
    <meta name="keywords" content="<?php $this->options->title(); ?>">
    <meta name="description" content="WebStack,<?php $this->options->title(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/fonts/linecons/css/linecons.css'); ?>">
    <link rel="stylesheet" href="//s.xinac.net/static/font-awesome/v4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/xenon-core.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/xenon-components.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/xenon-skins.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/nav.css'); ?>">
    <script src="//s.xinac.net/static/jquery/v1.12.4/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//s.xinac.net/static/html5shiv/v3.7.3/html5shiv.min.js"></script>
    <script src="//s.xinac.net/static/respond/v1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->options->xinac_head(); ?>

    <?php $this->header(); ?>

</head>

<body class="page-body">
<div class="page-container">