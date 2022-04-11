<?php
libxml_use_internal_errors(true);
$html = file_get_contents('https://www.wecasa.fr/estheticienne/brignoles/isabelle');
$dom = new DOMDocument;
$dom->loadHTML($html);

// Import Car class
require_once 'review.php';

$reviews = [];


foreach ($dom->getElementsByTagName('span') as $span) {

    if ($span->getAttribute('data-max-characters') == "150") {
        $message = $span->nodeValue;
    }

    if ($span->getAttribute("class") == "review__rating-note") {
        $rating = $span->nodeValue;
    }
        if (isset($message) && isset($rating)) {
            $review = new Review($message, $rating);
            array_push($reviews, $review);
        }
}