<ul class="dropdown-menu">
<?php
    $navigation = $this->pimcoreNavigation()->getNavigation($this->document, $this->navigation_document);

    foreach ($navigation as $page) {
        $document = $page->getDocument();
        $isVisible = $page->isVisible(true);
        $active = $document->getId() == $this->document->getId() || strpos($this->document->getFullPath(), $document->getFullPath()) === 0;
        $href = $document->getFullPath();
        $isActive = $page->isActive(true);
        $hasChilds = $document->hasChilds();
        
        if ($isVisible) {
            ?>
            <li class="<?=$active ? "active" : ""?>">
                <?php
                    echo $this->partial("helper/navigation/helper/link.php", array("page" => $page));
            ?>
            </li>
        <?php

        }
    }
?>
</ul>
