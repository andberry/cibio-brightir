<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
// $tvars['content'] = $page->content;
$tvars['goals'] = getGoals($pages);
$tvars['partners']['title'] = 'Partners';
$tvars['partners']['items'] = getPartners($pages);
$tvars['highlights'] = getHighlightsFeatured($pages);
$tvars['imagetextsections'] = $page->imagetext;
$tvars['packages'] = getPackages($pages);
