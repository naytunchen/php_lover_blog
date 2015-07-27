<?php

/*
 * Format The Date
 */
function formatDate($date) {
    return date('F j, Y, g:i a', strtotime($date));
}

/*
 * Shorten the Text
 */
function shortenText($text, $chars = 450) {
    $text = $text." ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' ')); // looking for the first space and cut off there
    $text = $text."...";
    return $text;
}
