<?php
include 'vypocet.html';
// Zpracování vstupu po odeslání formuláře
if(isset($_POST['submit'])) {
    // Získání hodnot z formuláře
    $cislo1 = $_POST['cislo1'];
    $cislo2 = $_POST['cislo2'];
    $operace = $_POST['operace'];
    
    // Provádění vybrané operace
    switch($operace) {
        case 'plus':
            $vysledek = $cislo1 + $cislo2;
            break;
        case 'minus':
            $vysledek = $cislo1 - $cislo2;
            break;
        case 'krat':
            $vysledek = $cislo1 * $cislo2;
            break;
        case 'deleno':
            // Ošetření dělení nulou
            if($cislo2 != 0) {
                $vysledek = $cislo1 / $cislo2;
            } else {
                $vysledek = "Nelze dělit nulou!";
            }
            break;
        default:
            $vysledek = "Chyba";
    }
    
    // Výstup výsledku
    echo "Výsledek: " . $vysledek;
}
?>  

</body>
</html>