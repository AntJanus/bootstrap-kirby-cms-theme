<?php snippet('header') ?>
<div class="jumbotron masthead text-center">
<div class="container">
<h1><?= kirbytext($page->title()) ?></h1>
	<?= kirbytext($page->text()) ?>
</div>
</div>
<div class="container">
<section class="row" id="main-content">
<section id="content-area" class="span8">
	<?php
	$articles = $page->children()->visible()->flip()->paginate(10);
	$pagination = $articles->pagination;
	$range = 10;
	?>
 <?php foreach($articles as $article): ?>
  
  <article>
    <h3><a href="<?= $article->url() ?>"><?= html($article->title()) ?></a></h3>
    <span class="label"><?= $article->date('Y-m-d') ?></span>

    <p><?= excerpt($article->text(), 200) ?></p>
    <a href="<?= $article->url() ?>">Read more…</a>
  </article>
<hr />
  <?php endforeach ?>
  <div class="pagination-centered">
<ul class="pagination">
  <?php if($pagination->hasPrevPage()): ?>
  <li><a class="prev" href="<?php echo $pagination->prevPageURL() ?>">&laquo;</a></li>
  <?php else: ?>
  <li class="disabled"><a class="prev" href="<?php echo $pagination->prevPageURL() ?>">&laquo;</a></li>
  <?php endif ?>
  
  <?php if(isset($range) && $pagination->countPages() > 1): ?> 
    <?php foreach($pagination->range($range) as $r): ?>
    <li class="<?php echo ($pagination->page() == $r) ? 'disabled' :  '' ?>" ><a class="range" href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a></li>
    <?php endforeach ?>
  <?php endif ?>
  
  <?php if($pagination->hasNextPage()): ?>
  <li><a class="next" href="<?php echo $pagination->nextPageURL() ?>">&raquo;</a></li>
  <?php else: ?>
  <li class="disabled"><a class="next" href="<?php echo $pagination->nextPageURL() ?>">&raquo;</a></li>
  <?php endif ?>
</ul>
</div>
</section>
<aside class="span4" id="sidebar">
<?= snippet('sidebar') ?>
</aside>
</section>
</div>
<?php snippet('footer') ?>