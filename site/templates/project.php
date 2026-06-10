<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
$tvars['intro'] = $page->content;
$tvars['goals_title'] = $page->goals_title;
$tvars['goals_pretitle'] = $page->goals_pretitle;
$tvars['goals'] = getGoals($pages);