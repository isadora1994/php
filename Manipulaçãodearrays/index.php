<?php 
     $bandas=array("Pearl Jam","Metallica","Nirvana","New Order", "Angra","Faith No More");
     asort($bandas);
     foreach($bandas as $x=>$x_value){
          echo "Banda[" . $x . "]: " .  $x_value . "<br>";
     }
?>