<?php
$str = "<br> Па васька слушает да ест. а воз и ныне там.
а вы друзья как ни садитесь, все в музыканты не годитесь.
а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.<br>";

echo preg_replace('/(^|[.!?]\s+)([a-zа-я])/ieu',"'$1'.mb_strtoupper('$2')",$str);