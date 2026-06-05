<?php namespace ProcessWire;

function getHeroFieldset ($page) {
  return [
    'title' => $page->hero_fieldset->c_title,
    'subtitle' => $page->hero_fieldset->c_subtitle,
    'image' => $page->hero_fieldset->c_image,
  ];
}


function getPartners($pages) {
  $partners = $pages->find('template=partner, sort=sort');
  $partners_data = [];
  foreach($partners as $item) {
    $partners_data[] = [
      'title' => $item->title,
      'logo' => $item->logo,
      'url' => $item->link_url,
      'page_url' => $item->url
    ];
  }
  return $partners_data;
}


function getPartnersPins($pages) {
  $partners = $pages->find('template=partner, sort=sort');
  $partners_map_pins = [];
  foreach($partners as $item) {
    $partners_map_pins[] = [
      'title' => $item->title,
      'content' => $item->c_text,
      'lat' => $item->latitude,
      'lng' => $item->longitude,
      'color' => $item->color,
      'url' => $item->url,
    ];
  }
  return $partners_map_pins;
}


function getPackages($pages) {
  $packages = $pages->find('template=package, sort=sort');
  $packages_data = [];
  foreach($packages as $item) {
    $packages_data[] = [
      'title' => $item->title,
      'url' => $item->link_url,
      'teaser' => $item->c_text
    ];
  }
  return $packages_data;
}

function getGoals($pages) {
  $goals = $pages->find('template=Goal, sort=sort');
  $goals_data = [];
  foreach($goals as $item) {
    $goals_data[] = [
      'pretitle' => $item->c_subtitle,
      'title' => $item->title,
      'number' => $item->c_title,
      'text' => $item->c_text,
      'featured' => $item->featured,
      'abstract' => $item->content
    ];
  }

  
  return $goals_data;
}

function getHighlights($pages) {
  $items = $pages->find('template=Highlight, sort=sort');
  $data = [];
  foreach($items as $item) {
    $data[] = [
      'title' => $item->title,
      'subtitle' => $item->c_subtitle,
      'featured' => $item->featured,
      'image' => $item->c_image,
      'content' => $item->content,
      'gallery' => $item->image_gallery,
      'url' => $item->url,
    ];
  }

  
  return $data;
}

function getHighlightsFeatured($pages) {
  $items = $pages->find('template=Highlight, featured=1, sort=sort');
  $data = [];
  foreach($items as $item) {
    $data[] = [
      'title' => $item->title,
      'subtitle' => $item->c_subtitle,
      'featured' => $item->featured,
      'image' => $item->c_image,
      'content' => $item->content,
      'gallery' => $item->image_gallery,
      'url' => $item->url,
    ];
  }

  
  return $data;
}