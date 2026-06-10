<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
$tvars['logo'] = $page->logo;
$tvars['content'] = $page->content;
$tvars['imagetext'] = $page->imagetext;