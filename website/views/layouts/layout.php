<!DOCTYPE html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="de"><!--<![endif]-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="de"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="de"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="de"><![endif]-->
<!--[if gt IE 8]><html class="no-js" lang="de"> <![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="true" >
    <meta name="MobileOptimized" content="320" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" >

    <meta name="geo.region" content="" >
    <meta name="geo.placename" content="" >
    <meta name="geo.position" content="" >
    <meta name="ICBM" content="" >


    <meta name="og:title" content="<?=strip_tags($this->headTitle())?>" >
    <meta name="og:url" content="<?=$this->url()?>" >

    <?= $this->headLink()?>
    <?= $this->headMeta()?>
    <?= $this->headTitle(); ?>
    <?= $this->headStyle()?>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/plugins/Bootstrap/static/js/jquery-1.11.0.js"><\/script>')</script>
</head>
<body>
    <?= $this->layout()->content ?>

    <?= $this->headScript()?>
</body>
</html>
