<?php


/*funzione con argomenti anche quando richiamo la funzione devo inserire i valori che sono stati ammessi */
function calcolo($valore,$valore2,$valore3) {
   $somma = $valore + $valore2 + $valore3;

         function poster() {
            return 5+6;
          }
/* all'interno della funzione possiamo inserire anche delle condizioni che devono verificarsi per essere applicata */
             if ($somma>0) { 

   echo "<p align='center' style='font-size:40pt;color:orange'> " . $somma + poster() ." €" . "</p>";
                           } 
             else { 
                    function prima() {
                    return 5+5; }
   echo "<p align='center' style='font-size:40pt;color:orange'> ti do il risultato solo se mi va ora ti restituisco:" . prima(). "</p>";
                  }
}

calcolo($_POST["a"],$_POST["b"],$_POST["c"]);


?>