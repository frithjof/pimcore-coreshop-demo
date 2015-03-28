
<div id="searchresult">
<?php if (!$this->isFormOnly) : ?>
		<div id="search_info">
	<?php
    if (count($this->searchResults)>=1) {
        $start = $this->perPage*($this->page-1);
        $end = $start + $this->perPage;
        if ($end>$this->total) {
            $end = $this->total;
        }
        ?>
		<?=$this->translate('search_showing_results')?> <?php echo  $start+1 ?> - <?php echo  $end ?> <?php echo  $this->translate('search_results_of')?> <?php echo  $this->total ?><br/>
	<?php

    } else {
        echo $this->translate('no_search_results_found');
    }
    ?>

	</div>

	<?php if (!empty($this->suggestions)) {
    ?>
		<?=$this->translate('search_suggestions') ?>
		<?php for ($i=0;$i<5;$i++) {
    ?>
			<?php  $suggestion = $this->suggestions[$i];
    ?>
			<a href="?cat=<?php echo  $this->category ?>&query=<?php echo  $suggestion ?>"><?php echo  $suggestion ?></a>&nbsp;
		<?php 
}
    ?>

		<?php if (count($this->suggestions)>5) {
    ?>
			<span id="search_result_additional_suggestions" style="display:none;">
			<?php for ($i=5;$i<count($this->suggestions);$i++) : ?>
				<?php  $suggestion = $this->suggestions[$i];
    ?>
				<a href="?cat=<?php echo  $this->category ?>&query=<?php echo  $suggestion ?>"><?php echo  $suggestion ?></a>&nbsp;
			<?php endfor;
    ?>
			</span>
			<a style="cursor:pointer;" id="search_result_additional_suggestions_hint" onclick="$('search_result_additional_suggestions_hint').style.display='none';$('search_result_additional_suggestions').style.display=''"><?php echo(count($this->suggestions)-5).' '.$this->translate('more_search_suggestions')?></a>
		<?php 
}
    ?>
	<?php 
} ?>

		<?php $counter = 1;?>


	<?php /* --------- Display grouped by category --------------*/ ?>


		<?php foreach ($this->searchResults as $searchResult) {
    ?>

			<div class="search_result <?php if (is_array($searchResult['categories'])) {
    echo implode(" ", $searchResult['categories']);
}
    ?>">
				<a href="<?php echo  $searchResult['url']?>">
					<h2>
						<?php if (!empty($searchResult['title']) and trim($searchResult['title'])!="") {
    echo trim($searchResult['title']);
} else {
    echo $searchResult['url'];
}
    ?>
					</h2>
				</a>
				<div id="resultSumary_<?php echo  $counter ?>">
					... <?php echo  $searchResult['sumary']?> ...
				</div>
				<?php $counter++;
    ?>
			</div>
		<?php 
} ?>

		<?php /* --------- /Display not grouped --------------*/ ?>


	<?php if (count($this->searchResults)>0) {
    ?>
		<div id="search_paging">
			<?php
                if ($this->page>3) {
                    $pageStart = $this->page-2;
                } else {
                    $pageStart=1;
                }

    $pageEnd = $pageStart+5;

    if ($pageEnd>$this->pages) {
        $pageEnd = $this->pages;
    }
    ?>

			<?php if ($this->pages>0) {
    ?>
				<?php echo  $this->translate("page") ?>
			<?php 
}
    ?>
			<?php if ($this->page>1) {
    ?>
				<a href="?search=true&query=<?php echo  $this->query?>&cat=<?php echo  $this->category ?>&page=<?php echo  $this->page-1 ?>">&lt;</a>
			<?php 
}
    ?>
			<?php for ($i=$pageStart;$i<=$pageEnd;$i++) {
    ?>
				<a <?php if ($this->page == $i) {
    ?>class="active"<?php 
}
    ?> href="?search=true&query=<?php echo  $this->query?>&cat=<?php echo  $this->category ?>&page=<?php echo  $i ?>"><?php echo  $i ?></a>
			<?php 
}
    ?>

			<?php if ($this->pages > $this->page) {
    ?>
				<a href="?search=true&query=<?php echo  $this->query?>&cat=<?php echo  $this->category ?>&page=<?php echo  $this->page+1 ?>">&gt;</a>
			<?php 
}
    ?>
		</div>
	<?php 
} ?>
<?php endif; ?>
</div>
