<?php
function d($data){  //debug function, режим дебага - все ошибки выводятся. На этой строке data - параметр функции - принимает данные
    echo "<pre>";
    var_dump($data); //На этой строке data - аргумент функции - передает аргумент (данные)
    echo "</pre>";
}
