<?php
    $rootDocument = $this->document->getRoot();
?>
<ul class="nav navbar-nav">

    <?php
        $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $rootDocument);
    
        foreach ($navigation as $page) {
            $document = $page->getDocument();
            $isVisible = $page->isVisible(true);
            $active = $document->getId() == $this->document->getId() || strpos($this->document->getFullPath(), $document->getFullPath()) === 0;
            
            if ($isVisible) {
                ?>
                <li class="<?=$active ? "active" : ""?> <?=$document->hasChilds() ? "dropdown" : ""?>">
                    <?php
                        echo $this->partial("helper/navigation/helper/link.php", array("page" => $page));
                ?>
                    
                    <?php if ($document->hasChilds()) {
    echo $this->template("helper/navigation/document-sub.php", array("navigation_document" => $document, "content" => ''));
}
                ?>
                </li>
            <?php

            }
        }
    ?>
</ul>
