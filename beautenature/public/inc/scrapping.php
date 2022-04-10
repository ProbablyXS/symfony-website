<?php
libxml_use_internal_errors(true);
$html=file_get_contents('https://www.wecasa.fr/estheticienne/brignoles/isabelle');
$dom = new DOMDocument;
$dom->loadHTML($html);
foreach($dom->getElementsByTagName('span') as $ptag)
{
    if($ptag->getAttribute('data-max-characters')== "150")
    {
        echo "<h1>".$ptag->nodeValue."</h1>";
    }
}