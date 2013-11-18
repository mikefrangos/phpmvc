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

<h2>Kmom02: Grunden till ett MVC-ramverk</h2>

<p>Jag kände mig lite okreativ med namnet till ramverket så jag kallade det bara
för MMVC (alltså, Mikes MVC) och bytte namnet av <code>&#36;ly</code> till
<code>&#36;mm</code>. Jag kände att det krävde tillräckligt mycket att hänga med
tutorialen som det var så jag gjorde inga avsteg. Men skulle jag ha gjort det
tror jag att jag skulle ha skapat en egen mapp till controller-klassen eftersom
det känns så rörigt att ha alla klass-filar i samma mapp. Man skulle gärna ha
lite mer ordning, särskilt om man skapade en större app med många olika
klass-filar. </p>

<p>Jag behövde läsa igenom lektionen ett par gånger innan jag kände att jag faktiskt hängde med den. Det känns som nyckeln till grundstrukturen är först att använda URL:n att bestämma vilka klass, metod och argument ska åberopas. och sen att använda <code>autoload</code> för att hitta klass-filen i mappen. Sen använder man <code>reflectionclass</code> för att utvinna klassen från filen. Annars verkar det mest handla om stränghantering för att läsa URL:n och bekfräfta att klassen och metoden faktiskt  finns, samt att skapa länkar, osv. Och sen är theme-strukturen ganska liknande instruktörens boilerplate från sista momentet, så åtminstone var den delen lite enklare att förstå.</p>

<p>Jag tittade snabbt genom den senaste versionen av Lydia men det blev lite överväldigande. Det verkade handla om att hantera olika undantags fall så att ramverket skulle vara så pålitligt och stabilt som möjligt. </p>

<p>Även om själva tutorialen under momentet var lite svårt att hänga med, kan
jag ändå säga att jag lyckades utnyttja möjligheten att vänja mig vid github.
Jag följde instruktören och taggade denna version av ramverket till v0.1.1, och
den finns på github här: <a href="https://github.com/mikefrangos/mmvc/tree/v0.1.1">https://github.com/mikefrangos/mmvc/tree/v0.1.1</a>. Själva
ramverket kan testas här: <a href="http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.1.1/">
http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.1.1/</a>.</p>

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
