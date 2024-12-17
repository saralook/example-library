<?php
/*//esempio alternativo verifica file
$valore = 2;
$pasta = 4;
$condizione = 1;*/

/*
$valore = 5;
$condizione = 1;
*/

//alternativa 2
$valore = 2;
$pasta = 2;
$condizione = 1;

/* $valore deve essere un numero maggiore di 3 */

/*
if ($valore <= 3){
    $condizione = 0;
} else {
    $condizione = 1;
}
    */

//l'ultimo if condiziona l'interruttore e se non c'è coerenza anche l'ultimo else condizionera il primo

/* if ($valore <= 3 && $pasta <= 3){
    $condizione = 0;
} else {
    $condizione = 1;
} */

//invertire valori
if ($valore <= 3 && $pasta <= 3){
    $condizione = 1;
} else {
    $condizione = 0;
}

/* if per l'accensione e lo spegnimento dell'interruttore 1 corrisponde ad acceso */
if ($condizione == 1){
    echo "ACCESO Complimenti valore ha una variabile coerente al problema ovvero è maggiore di 3";

} /* else condizioni diverse dall'acceso */ else {
    echo "SPENTO Non va bene valore non ha uan variabile coerente in quanto non sembra una o entrambe maggiore di 3";
}

?>