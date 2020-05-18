<!-- Exercice 3 : json_decode() et array_walk_recursive() -
Créer une fonction qui décode la chaîne JSON suivante
:
{"Title": "Créer des jeux de A à Z avec Unity", "Author":
"Anthony Cardinale", "Detail": { "Publisher": "D-Booker" } }'  -->

<?php
$json = '{
    "Title": "Créer des jeux de A à Z avec Unity",
    "Author": "Anthony Cardinale", 
    "Detail": { "Publisher": "D-Booker" } }' ;

$dump = json_decode($json, true);

function test_print($item,$key)
{
echo "$item\n";
}
array_walk_recursive($dump,"test_print");

?>