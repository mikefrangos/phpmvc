<?php
/**
 * Presentation page.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningstexted";
$data['meta_description'] = "Alla redovisningstexter samlade på en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<h2>Kmom01: En boilerplate</h2>
<p>Redovisningstext enligt instruktionen...</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");
