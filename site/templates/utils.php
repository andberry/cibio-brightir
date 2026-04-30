<?php namespace ProcessWire;

function getHeroFieldset ($page) {
  return [
    'title' => $page->hero_fieldset->c_title,
    'subtitle' => $page->hero_fieldset->c_subtitle,
    'image' => $page->hero_fieldset->c_image
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