<?php

function fetch_row($quary){
    while ($a = $quary->fetch_row()) {
        $list[] = $a;
    } 
    return $list;
}

?> 