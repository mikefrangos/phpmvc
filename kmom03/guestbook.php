<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Gästböcker med MVC ramverk";
$data['meta_description'] = "Resultatet av detta moment blev en gästbök.";
$data['main'] = <<<EOD
<h1>Gästböcker</h1>

<p>Här kan jag ge länkerna till: 

<ul><li>Min gästbok i CodeIgniter: 
<a href="http://www.student.bth.se/~mifb12/phpmvc/codeigniter/index.php/guestbook">
http://www.student.bth.se/~mifb12/phpmvc/codeigniter/index.php/guestbook</a>
</li><li>Min gästbok i mitt eget ramverk: <a href="http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.1.9/guestbook">
http://www.student.bth.se/~mifb12/phpmvc/mmvc/tags/v0.1.9/guestbook</a>
</li><li>
Min kod på Github: <a href="https://github.com/mikefrangos/mmvc/tree/v0.1.9">
https://github.com/mikefrangos/mmvc/tree/v0.1.9</a>
</li></ul>

</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 
