<?php namespace ProcessWire;
/**
 * This file is automatically prepended (executed at the beginning) to any rendered template files
 */

// Twig setup
$config->twigDir = $config->path('site') . 'twigTemplates/';
$twigLoader = new \Twig\Loader\FilesystemLoader($config->twigDir);
$twig = new \Twig\Environment(
    $twigLoader,
    [
        'cache' => $config->paths->cache . 'twig',
        'debug' => true,
        'auto_reload' => $config->debug,
        'strict_variables' => false,
        // comment the following for compatibility with PHP 8.1
        'autoescape' => false,
    ]
);
if ($config->debug) {
    $twig->addExtension(new \Twig\Extension\DebugExtension());
}

// add PW API variables as globals to Twig environment
$twig->addGlobal('page', wire('page'));
$twig->addGlobal('pages', wire('pages'));
$twig->addGlobal('config', wire('config'));

$twig->addGlobal('urls', wire('urls'));
$urls->set('img', 'site/img/'); // relative to site root
// $urls->set('video', 'site/video/'); // relative to site root
// $twig->addGlobal('user', wire('user'));
// $twig->addGlobal('languages', wire('languages'));
// $twig->addGlobal('sanitizer', wire('sanitizer'));

$twig->addGlobal('settings', $pages->get('/site-settings'));
$twig->addGlobal('mainMenu', $pages->get('/mainmenu')->children());
// $twig->addGlobal('footerMenu', $pages->get('/footermenu')->children());


// template vars here
$tvars = [];