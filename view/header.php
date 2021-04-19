<?php

$header[] = '<!DOCTYPE html>';
$header[] = '<html>';
$header[] = ' <head>';
$header[] = '   <title>Benutzerverwaltung</title>';
$header[] = '   <meta http-equiv="content-type" content="text/html; charset=utf-8" />';
$header[] = '   <link rel="stylesheet" href="view/css/main.css" type="text/css" />';
$header[] = '   <script type="text/javascript" src="view/js/jquery.min.js"></script>';
$header[] = '   <script type="text/javascript" src="view/js/jquery.tabledit.js"></script>';
$header[] = '   <script type="text/javascript" src="view/js/custom_table_edit.js"></script>';
$header[] = ' </head>';
$header[] = ' <body>';

echo implode("\n", $header);

?>