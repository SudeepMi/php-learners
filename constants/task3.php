<?php

// create a constant string for the name of your favroutie song, 
// then print it's reversed string with word count
define( "song", "tadap tadap");
echo strrev(song);
echo "<br>";
echo str_word_count(song);