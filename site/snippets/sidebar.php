<div class="widget first-widget"><p><img src="http://antjan.us/kirby-boot/assets/images/author.jpg" class="author-image" width="50px" height="50px" alt="Author Image"> <?= $site->biography ?></p>
<p>Be sure to subscribe to my <a href="<?php echo url('/rss') ?>">RSS feed</a>!</p></div>
<hr />
<div class="widget">
  <h5>Subscribe To My Newsletter</h5>
  <form>
  	<div class="input-append">
        <input class="span7" type="text">
        <input type="submit" class="span5 btn" value="Subscribe">
        </div>
  </form>
</div>
<hr />
<div class="width">
<h5>Ad</h5>
<div class="text-center"><a href="https://wrapbootstrap.com/?ref=antjanus"><img src="/kirby-boot/assets/images/wrap-bootstrap.png" class="img-rounded"></a></div>
</div>
<hr />
<div class="widget">
<h5>Recent Articles</h5>
<ul class="list-unstyled">
 <?php foreach($pages->find('blog')->children()->visible()->flip()->limit(5) as $article): ?>
<li><h6><a href="<?= $article->url() ?>"><?= html($article->title()) ?></a></h6></li>
<?php endforeach ?>
</ul>
</div>
<hr />