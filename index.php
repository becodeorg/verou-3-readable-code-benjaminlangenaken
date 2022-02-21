<?php

function orderPizza($pizzaType, $person) {

    $price = calcPrice($pizzaType);

    $address = "";
    if($person === 'Koen') {
        $address = 'A yacht in Antwerp';
    } elseif ($person === 'Manuele') {
        $address = 'Somewhere in Belgium';
    } elseif ($person === 'all students') {
        $address = 'BeCode office';
    }

    $toPrint = "Creating new order...<br><br>
                A {$pizzaType} pizza should be sent to {$person}.<br>
                The address: {$address}.<br>
                The bill is €{$price}.<br><br>
                Order finished.<br><br><br>";

    echo $toPrint;
}

function totalPrice($price) {
    return $price;
}

function calcPrice($pizzaType)
{
    $price = 0;

    if ($pizzaType === 'marguerita') {
        $price = 5;
    } else if ($pizzaType === 'golden') {
        $price = 100;
    } else if ($pizzaType === 'calzone') {
        $price = 10;
    } else if ($pizzaType === 'hawaii') {
        echo "Computer says no";
    }
    return $price;
}

function orderPizzaAll()
{
    orderPizza('calzone', 'Koen');
    orderPizza('marguerita', 'Manuele');
    orderPizza('golden', 'all students');
}

orderPizzaAll();
