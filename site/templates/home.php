<?php snippet('header') ?>
<div class="jumbotron masthead text-center">
<div class="container">
<?= kirbytext($page->jumbotron()) ?>
</div>
</div>
<div class="container">
<section class="row" id="main-content">
<div id="content-area">
<div class="row">
	<div class="span4">
	<?= kirbytext($page->col1()) ?>
	</div>
		<div class="span4">
	<?= kirbytext($page->col2()) ?>

	</div>
		<div class="span4">
	<?= kirbytext($page->col3()) ?>
	</div>
</div>
<hr />
<div class="row">
<div class="span12">
<?= kirbytext($page->text()) ?>
</div>
</div>
	
</div>
</section>
</div>
<?php snippet('footer') ?>