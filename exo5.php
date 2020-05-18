<!-- Exercice 5 : array_map() et strlen() - Afficher la
longueur de l'élément le plus petit et le plus grand du
tableau suivant :
array("Le","Chat","Botté","de","Charles","Perrault")  -->
  
<?php
$phrase= ["Le","Chat","Botté","de","Charles","Perrault"];

    function petitEtGrand($mots)
{
    return strlen($mots) ;
}
$result = array_map('petitEtGrand', $phrase);
print_r($result);
?>