<!-- Exercice 1 : trier un tableau avec foreach -->

<?php
$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
sort($prenoms);
foreach($prenoms as $prenom)
    {
    echo $prenom . '<br />'; 
}
?> 
