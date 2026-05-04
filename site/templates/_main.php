<?php namespace ProcessWire;
/**
 * This file is automatically appended (executed at the end) to any rendered template files
 */

$templateFileName = "templates/" . $page->template->name . ".twig";
$templateFile = file_exists($config->twigDir . $templateFileName) ? $templateFileName : 'templates/page.twig';
echo $twig->render($templateFile, $tvars);

