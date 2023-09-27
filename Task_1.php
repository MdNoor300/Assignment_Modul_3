
<?php
$text = "The quick brown fox jumps over the lazy dog.";

function modified_String($text){
    $lowercaseText = strtolower($text);

    $modifiedText = str_replace("brown", "red", $lowercaseText);

    echo $modifiedText;

}
modified_String($text);

?> 
