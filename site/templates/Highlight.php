<?php namespace ProcessWire;
include './utils.php';

$tvars['title'] = $page->title;
$tvars['subtitle'] = $page->c_subtitle;
$tvars['featured'] = $page->featured;
$tvars['hero_image'] = $page->c_image;
$tvars['content'] = $page->content;
$tvars['image_gallery'] = $page->image_gallery;