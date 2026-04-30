<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
$tvars['imagetextsections'] = $page->imagetext;
$tvars['content'] = $page->content;