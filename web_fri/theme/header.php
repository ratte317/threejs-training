<!DOCTYPE html>
<html lang="ja">
  <head>
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="future,research,takuyaonishi,masatoashida,norikoshimuta,">
    <meta name="description" content="Future Research Institute">
    <meta name="author" content="tamami">
    
    <meta property="og:title" content="Future Research Institute">
    <meta property="og:description" content=".">
    <meta property="og:site_name" content="futureresearchinstitute.tokyo">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./img/logo/fri_logo-05.svg">
    <meta property="og:url" content="https://futureresearchinstitute.tokyo">
    <meta property="og:locale" content="ja_JP">

    <link rel="shortcut icon" href="./img/fri_favicon.png" type="./img/fri_favicon.png">

    <!--do not touch-->
    <link rel="stylesheet/less" type="text/css" href="./less/index.less">
    <link rel="stylesheet/less" type="text/css" href="./less/meltline.less">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">

   
    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/less.js/2.2.0/less.min.js'></script>
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js'></script>    

    <script type="text/javascript" src='./js/index.js'></script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <div id='allWrapper'>

    <div class="header">

    <?php if(is_home()): // ホームが表示されている場合、ブログタイトルを H1 で表示 ?>
                         <h1><a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a></h1>
                    <?php else: // ホーム以外のページが表示されている場合は H1 を削除。各記事やページのタイトルに H1 を使用 ?>
                         <a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                    
                    <p><?php bloginfo('description'); ?></p>


        <div class="header_logo">
            <a href="./index.html" class="overlay">
                <img class="logo" src="./img/logo/fri_logo-11.svg"/>
            </a>
                <img class="logo" src="./img/logo/fri_logo-12.svg"/>
         </div>
    </div>


    <div class="sp-header">
        <div class="sp-header-logo">
            <a href="./index.html" class="overlay">
                <img class="logo" src="./img/logo/fri_logo-09.svg"/>
            </a>
            <a class="sp-logo-after">
                <img class="logo" src="./img/logo/fri_logo-04.svg"/>
            </a>
         </div>
    </div>