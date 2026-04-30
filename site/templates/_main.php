<?php namespace ProcessWire;
$templateFileName = "templates/" . $page->template->name . ".twig";
$templateFile = file_exists($config->twigDir . $templateFileName) ? $templateFileName : 'templates/page.twig';
echo $twig->render($templateFile, $tvars);

