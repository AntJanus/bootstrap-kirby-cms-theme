<?php 

$articles = $pages->find('blog')->children()->visible()->flip()->limit(10);

snippet('feed', array(
  'title' => $site->title(),
  'description' => $site->description,
  'link'  => url('blog'),
  'items' => $articles,
  'descriptionField'  => 'text', 
  'descriptionLength' => 300
));

?>