<?php
// just some gems to rotate
$vibeQuotes = [
    "Be yourself; everyone else is already taken. - Oscar Wilde",
    "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe. - Albert Einstein",
    "In three words I can sum up everything I've learned about life: it goes on. - Robert Frost",
    "The only way to do great work is to love what you do. - Steve Jobs",
    "Life is what happens when you're busy making other plans. - John Lennon",
];

// pick one at random
$pickOne = $vibeQuotes[rand(0, count($vibeQuotes) - 1)];

// spit it out
echo $pickOne;
?>