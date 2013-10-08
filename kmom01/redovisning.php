<?php
/**
 * Presentation page.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningstexten";
$data['meta_description'] = "Alla redovisningstexter samlade på en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<h2>Kmom01: En boilerplate</h2>

<p>Jag måste säga att det var ganska svårt att komma igång med phpmvc-kursen!
Jag satt med git manualen och lästa hjälpsidorna på github jättelänge innan jag
förstod hur man skulle göra. Jag hoppas verkligen att mos hinner göra en mer
övergripande lektion om hur man kommer igång med git och github. Efter jag
skapade mitt git-repo som en clone av HTML5Boilerplate, kom jag på att jag
skulle behöva olika mappar till kmom01, kmom02, osv. Och då blev det lite
klurigt att skapa om min mappstruktur. Jag vet inte riktigt om jag gjorde det på
bästa sätt, men nu iallafall finns filarna till min me-sida på github här:
<a href="https://github.com/mikefrangos/phpmvc">https://github.com/mikefrangos/phpmvc</a>. </p>

<p>Det tog även tid att förstå hur jag skulle göra med boilerplate. Jag kan inte säga att jag helt förstår allt som finns i H5BP men jag har nu läst genom det ganska mycket iallafall. Det som känns bäst med boilerplate är att det ger en känsla av trygghet att man skriver sin kod på en stabil grund. Jag kopierade mycket av instruktörens kod för att bygga min me-sida med PHP. Jag tyckte det var smart hur han använde PHP för att skicka sidans metadata och innehåll, osv, till template filarna, så jag gjorde samma sak i min kod. Och sen tog jag lite tid för att fresha upp min CSS-kunskap och skapade en enkel och ren stil för me-sidan. </p>

<p>I nuläget utvecklar jag på min MacBook Pro med jEdit och Terminal. Jag använder Chromes developer tools för att redigera CSS men även testar sidan på Firefox. </p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");
