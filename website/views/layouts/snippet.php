<!DOCTYPE HTML>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="/static/js/html5shiv.js"></script>
            <script src="/static/js/respond.min.js"></script>
        <![endif]-->
        
        <?= $this->headLink()?>
        <?= $this->headMeta()?>
        <?= $this->headTitle($this->translate($this->document->getProperty("title"))); ?>
        <?= $this->headStyle()?>
    </head>
    <body class="wide">
        <?= $this->layout()->content ?>

    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/static/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    
        <?= $this->headScript()?>
    </body>
</html>
