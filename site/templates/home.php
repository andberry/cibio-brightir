<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
$tvars['intro'] = $page->content;
$tvars['goals']['title'] = $page->c_title;
$tvars['goals']['items'] = $page->goals_cards;
$tvars['partners']['title'] = 'Partners';
$tvars['partners']['items'] = getPartners($pages);
$tvars['imagetextsections'] = $page->imagetext;
$tvars['packages'] = getPackages($pages);
