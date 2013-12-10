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

<h2>Kmom04: Modeller för login, användare och grupper</h2>

<p>Det känns som varje moment i MVC-kursen blir bara svårare och svårare. Jag har blivit jättebra på att använda github för att kolla igenom instruktörens kod och hitta det som förändrats i varje uppdatering. Det är ganska pedagogiskt så eftersom det innebär att man får verkligen fundera över varför vissa förändringar behövdes. Ju mer komplicerat blir ramverket desto svårare är det att hålla koll på alla dess små bitar. Varför t.ex. finns det en funktion i <code>CObject</code> som är bara en "wrapper" kring samma funktion i CRequest? Är det bara estetiskt? På ett sätt känner jag att jag bara måste ta det för givet att det är bättre så, men jag önskar att jag kunde förstå varför!</p>

<p>Däremot kan jag också säga att jag kan verkligen förstå poängen med att ha ett ramverk när det gäller just att hantera formulär, lösenord, användarprofil, osv, osv. Jag förstår att det underlättar jättemycket när man slipper skriva egna metoder bara för att filtrera alla input från användaren. Jag skulle vilja läsa vidare om hur man hanterar lösenord på bästa sätt eftersom jag tänker mig att det finns många möjliga metoder och att de kan alla ha sina nackdelar. Jag kan förstå varför många appar vill att man ska bara logga in med Google eller Facebook för att slippa hantera lösenord. </p>

<p>Det mest utmannande i det här momentet har varit som sagt att fixa till så att alla funktioner från instruktörens kod fungerar som de ska. Det svåraste var att hitta felstävningen i ordet "acronym" som gjorde att man inte kunde ändra lösenordet och sen logga in med det nya lösenordet. Det fungerar inte i Lydia v0.2.10 men det fungerar ju i mitt!</p>

<p>Jag följde instruktören återigen
och taggade denna version av ramverket till v0.2.10, och den finns på github <a
href="https://github.com/mikefrangos/mmvc/tree/v0.2.10">här</a>. Själva ramverket
kan testas <a
href="http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.2.10/">här</a>.

<h2>Kmom03: En gästbok i ditt MVC-ramverk</h2>

<p>Jag tror faktiskt det bästa vi gjorde under detta moment var att först skapa
guestbooken med CodeIgniter. Mitt eget exampel finns <a
href="http://www.student.bth.se/~mifb12/phpmvc/codeigniter/index.php/guestbook">här</a>.
Då blev det lätt att förstå varför man ska använda ett ramverk och varför MVC är
en bra sak att kunna förstå. Jag tänkte det var så skönt att ha färdiggjorda
funktioner för att nå databasen, hantera formulär, osv. Det gjorde även att jag
förstår och uppskattar alla jobbet som ingår i att skapa ett eget ramverk som vi
håller på att göra. </p>

<p>Som med allt i den här kursen känner jag att man har gjort med tusen sidor det som kunde ha gjorts med en, om jag ska vara lite cynisk. Men, jag förstår verkligen poängen med MVC-ramverket när man bygger större webbapplikationer. Det skulle vara enkelt om man kunde säga att modellen var databasen, kontrollern var PHP, och vyn var HTML. Men så är det inte riktigt. Om jag skulle förklara MVC strukturen skulle jag säga något så här: vyn är där man skapar HTML sidan utifrån variablerna som skickas ifrån kontrollern. Och kontrollern är där man hanterar förfrågan från användaren, vare sig från URLn eller från det som händer på själva sidan. Kontrollern hämtar variablerna från modellen och sen skickar dem till vyn. Och så är det modellen som laddar och/eller sparar variablerna i databasen, sessionen, osv. Det är iallafall min uppfattning om MVC hittils. </p>

<p>Överlag var det här momentet ganska svårt. Jag behövde läsa lektionen flera gånger och kika noggrant in i källkoden för att förstå hur allt hängde ihop. Som vanligt i våra lektioner tycktes instruktören lämna ut några viktiga detaljer från tutorialen så att koden inte fungerade om man inte löste vissa problem. Jag behövde hitta t.ex. där man först skulle initialisera sessionen. Det tog mig ganska lång tid att förstå att man behövde anropa <code>StoreInSession</code> funktionen i <code>ThemeEngineRender</code>. Om man inte gör det så verkar det som meddelanden aldriga rensas bort av någon anledning. Det finns vissa saker jag inte förstår fortfarande, såsom varför man sätter vissa funktioner i vissa filer, såsom varför ligger <code>RedirectTo</code> funktionen i <code>CObject</code>.  Men jag skulle tror att vissa sådana val är egentligen lite godtyckliga.</p>

<p>Det var intressant att se hur den senaste versionen av Lydia hanterar vyer. Om jag förstår rätt så verkar det som om det är ganska nära hur vi redan har gjort. Vyer får en egen mapp, och det finns möjlighet för användaren att skapa egna vyer. Det finns även möjlighet att ladda en vy i en specifik del av sidan såsom i en sidebar, vilket verkar som en ganska bra att ha egenskap. </p>

<p>Jag tror jag lyckades med spam-uppgiften. Jag la till koden
<code>if(empty(&#36;_POST['email'])</code> i <code>Handler</code> funktionen så att
det skulle låta bli att lägga till nya meddelanden om det dolta fältet var
ifyllt. </p>

<p>Jag känner inte direkt att jag är någon expert på Github. Min kod finns här
men när jag tog bort databasfilen så försvann också data mappen. Så om man tar
en clone av koden måste man skapa om den mappen tyvärr. Jag följde instruktören
och taggade denna version av ramverket till v0.1.9, och den finns på github <a
href="https://github.com/mikefrangos/mmvc/tree/v0.1.9">här</a>. Själva ramverket
kan testas <a
href="http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.1.9/guestbook">här</a>. </p>


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
