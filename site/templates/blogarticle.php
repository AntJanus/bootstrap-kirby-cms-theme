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
<!-- START: Livefyre Embed -->
<div id="livefyre-comments"></div>
<script type="text/javascript" src="http://zor.livefyre.com/wjs/v3.0/javascripts/livefyre.js"></script>
<script type="text/javascript">
(function () {
    var articleId = fyre.conv.load.makeArticleId(null);
    fyre.conv.load({}, [{
        el: 'livefyre-comments',
        network: "livefyre.com",
        siteId: "322452",
        articleId: articleId,
        signed: false,
        collectionMeta: {
            articleId: articleId,
            url: fyre.conv.load.makeCollectionUrl(),
        }
    }], function() {});
}());
</script>
<!-- END: Livefyre Embed -->
</section>
<aside class="span4" id="sidebar">
<?= snippet('sidebar') ?>
</aside>
</section>
</div>
<?php snippet('footer') ?>