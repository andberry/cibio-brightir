<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
$tvars['goals_title'] = $page->goals_title;
$tvars['goals_pretitle'] = $page->goals_pretitle;
$tvars['goals'] = getGoals($pages);
$tvars['partners']['title'] = 'Partners';
$tvars['partners']['items'] = getPartners($pages);
$tvars['highlights_title'] = $page->highlights_title;
$tvars['highlights_pretitle'] = $page->highlights_pretitle;
$tvars['highlights'] = getHighlightsFeatured($pages);
$tvars['imagetextsections'] = $page->imagetext;
$tvars['packages'] = getPackages($pages);
