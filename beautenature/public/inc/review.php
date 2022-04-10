<?php

class Review
{

    public $message;
    public $rating;


    public function __construct($message, $rating)
    {
        $this->message = $message;
        $this->rating = $rating;

    }
}