<!DOCTYPE html>
<html lang="en">
<head>

    <title><?= html($page->title()) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?= css('/assets/stylesheets/bootstrap.css') ?>
    <?= css('/assets/stylesheets/app.css') ?>
    <?= js('/assets/javascripts/jquery.js') ?>
    <?= js('/assets/javascripts/bootstrap-affix.js') ?>
    <?= js('/assets/javascripts/bootstrap-alert.js') ?>
    <?= js('/assets/javascripts/bootstrap-button.js') ?>
    <?= js('/assets/javascripts/bootstrap-carousel.js') ?>
    <?= js('/assets/javascripts/bootstrap-collapse.js') ?>
    <?= js('/assets/javascripts/bootstrap-dropdown.js') ?>
    <?= js('/assets/javascripts/bootstrap-modal.js') ?>
    <?= js('/assets/javascripts/bootstrap-scrollspy.js') ?>
    <?= js('/assets/javascripts/bootstrap-tab.js') ?>
    <?= js('/assets/javascripts/bootstrap-tooltip.js') ?>
    <?= js('/assets/javascripts/bootstrap-popover.js') ?>
    <?= js('/assets/javascripts/bootstrap-transition.js') ?>
    <?= js('/assets/javascripts/bootstrap-typeahead.js') ?>
    <link rel="alternate" type="application/rss+xml" href="<?php echo url('rss') ?>" title="Blog Feed" />
    <meta content="width=device-width" name="viewport">
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/kirby-boot"><?= html($site->title()) ?></a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href="/kirby-boot"><span class="glyphicon glyphicon-home"></span></a></li>
                        <?php foreach($pages->visible() AS $p): ?>

                        <?php if ($p->hasChildren() && $p->template() != 'blog'){ ?>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo html($p->title()); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php foreach($p->children() AS $c): ?>
                                <li><a href="<?php echo $c->url(); ?>"><?php echo html($c->title()); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php } else{ ?>
                    <li><a href="<?php echo $p->url() ?>"><?php echo html($p->title()); ?></a></li>
                    <?php } ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
</div>