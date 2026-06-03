<?php namespace ProcessWire;
include './utils.php';

$tvars['pageTitle'] = $page->title;
$tvars['hero'] = getHeroFieldset($page);
$tvars['intro'] = $page->content;
$tvars['goals'] = getGoals($pages);