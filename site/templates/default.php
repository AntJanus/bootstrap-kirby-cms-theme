<?php snippet('header') ?>
<div class="jumbotron masthead text-center">
<div class="container">
<h1><?= kirbytext($page->title()) ?></h1>
</div>
</div>
<div class="container">
<section class="row" id="main-content">
<section id="content-area" class="span8">
<?= kirbytext($page->text()) ?>
</section>
<aside class="span4" id="sidebar">
<?= snippet('sidebar') ?>
</aside>
</section>
</div>
<?php snippet('footer') ?>