<?php
    $document = $this->page->getDocument();
    $isVisible = $this->page->isVisible(true);
    $target = $document->getProperty("navigation_target");
    $isActive = $this->page->isActive(true);
    $href = $document->getFullPath();
    $hasChilds = $document->hasChilds();
    
    if ($document instanceof Document_Link) {
        $href = $document->getHref();
        $target = $document->getTarget();
    }
    
    $this->html = is_array($this->html) ? $this->html : array();
    
    $this->html['href'] = $href;
    
    if ($target) {
        $this->html['target'] = $target;
    }
    
    if ($isActive) {
        $this->html['class'] = $this->html['class'] ? $this->html['class'] . " active" : "active";
    }
    
    if ($hasChilds) {
        $this->html['class'] = $this->html['class'] ? $this->html['class'] . " dropdown-toggle" : "dropdown-toggle";
        $this->html['data-toggle'] = "dropdown";
        $this->html['href'] = '#';
    }
    
    $content = $this->content;
?>

<?php if ($isVisible) {
    ?>
    <a <?foreach ($this->html as $key=>$value) {
    echo $key . '="' . $value . '"';
}
    ?>>
        <?php
        
        if ($document->getProperty("navigationIcon") instanceof Asset_Image) {
            ?>
            <img src="<?=$document->getProperty("navigationIcon")?>" />
            <?php

        } else {
            echo $document->getProperty("navigation_name");
        }
        
    if ($hasChilds) {
        ?>
            <b class="caret"></b>
            <?php

    }
        
    ?>
        
        <?=$content?>
    </a>
<?php 
} ?>
