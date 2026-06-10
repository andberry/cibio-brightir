<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
$tvars['content'] = $page->content;
$tvars['partners'] = getPartners($pages);