<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

<p>Jag heter Mike och den här är min me-sida till phpmvc-kursen. Du kan hitta
me-sidan från htmlphp-kursen <a href="../../../htmlphp/me/kmom10/me.php">här</a>
och från oophp-kursen <a href="../../../oophp/me/hem.php">här</a>.</p>

<p>Jag kommer ursprungligen ifrån Kalifornien men bor nu i Stockholm där jag jobbar som engelska lärare bl.a.</p>

<p>Jag är student i kurspaketet Databaser, HTML, CSS, JavaScript och PHP hos BTH, och har redan ganska mycket erfarenhet med HTML/CSS och PHP (mest genom Wordpress) så den här kursen är mitt tillfälle att uppgradera alla mina skills.</p>



EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
