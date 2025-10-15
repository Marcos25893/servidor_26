<?php

function addElement(&$cola, $elemento)
{
    array_push($cola, $elemento);
}

function delElement(&$cola)
{
    array_shift($cola);
}

$cola = array();

addElement($cola, 1);
addElement($cola, 2);
addElement($cola, 3);
addElement($cola, 4);
addElement($cola, 5);

print_r($cola);

delElement($cola);
delElement($cola);

print_r($cola);