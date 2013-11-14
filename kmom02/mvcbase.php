<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Basen till MVC-ramverket";
$data['meta_description'] = "Resultatet från kmom02 blev basen till ett MVC-ramverk.";
$data['main'] = <<<EOD
<h1>Basen till MVC-ramverket</h1>

<p>Här skriver man nåt vackert. Bara för att visa hur en tom sida kan se ut. 
<a href="viewsource.php?dir=&file=empty.php#file">Kolla källkoden 
för detaljer</a>.</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
