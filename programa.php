<?php
     date_default_timezone_set('America/Sao_Paulo');
     echo "Hoje é dia " . date('d/m/y l') . "<br />";
     echo "Agora são " . date('H:i:s A') . "<br />";
     echo "Faltam " . (6 - date('w')) . " para o próximo sábado."


?>
