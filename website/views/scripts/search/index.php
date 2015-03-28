<div id="contentcontainer" class="<?=$this->contentContainerClass?>">
	<?php if ($this->showBreadcrumps) : ?>
		<?php $breacrumpAppend = array("name" => $this->translate("Suchergebnisse"), "url" => $this->url(), "active" => true);?>
		<?= $this->partial("partials/breadcrumps.php", array("language" => $this->language, "setActiveByDocument" => false, "document" => $this->document, "append" => $breacrumpAppend)); ?>
	<?php endif; ?>

	<div id="contentbox">
		<div class="container">
			<h1><?=$this->translate("Suchergebnisse");?></h1>
			<?= $this->action("find", "frontend", "SearchPhp", array("viewscript" => "search/searchresults.php", "query" => $this->query, "page" => $this->page))?>
		</div>
	</div>

</div>
