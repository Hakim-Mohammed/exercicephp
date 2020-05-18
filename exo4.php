<!-- Exercice 4 : insérer 'Leeloo' comme étant le
5ème élément du tableau suivant :
array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît')  -->


<?php
$prenoms = ["François", "Michel", "Nicole", "Véronique", "Benoît"];
$newprenom = "Leeloo";    

$prenoms[4] = $newprenom;

foreach ($prenoms as $prenom) {
    print_r($prenoms);
}
?>