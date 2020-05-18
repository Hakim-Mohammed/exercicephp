<!-- Exercice 7 : boucle for - créer les tables de
multiplication [1..10] x [1..10] -->

<?php


echo "Table de multiplication de"." ".$nbr."\n";
for($nbr=0 ; $nbr <=10 ; $nbr++ ){
    for ($fois = 1; $fois <= 10; $fois++) {
        echo "$nbr x $fois ="." ".$nbr*$fois."\n";
}}
?>