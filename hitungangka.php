<?php

$text="12aap33";
print count(array_filter(str_split($text),'is_numeric'));
?>
