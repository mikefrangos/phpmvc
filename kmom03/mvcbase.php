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

<p>Här kan du hitta länken till mitt MVC-ramverk, som jag för nuvarande
kallar för MMVC, alltså Mikes MVC. Denna version är taggad 
som v0.1.1 och källkoden ligger på <a href="https://github.com/mikefrangos/mmvc/tree/v0.1.1">
github</a>. Det går även att provköra denna version av ramverket på <a href="http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.1.1/">
http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.1.1/</a>.</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
