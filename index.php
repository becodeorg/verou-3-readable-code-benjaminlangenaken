<?php

function calculatePrice($pizzaType)
{
    $price = 0;

    if ($pizzaType === 'marguerita') {
        $price = 5;
    } else if ($pizzaType === 'golden') {
        $price = 100;
    } else if ($pizzaType === 'calzone') {
        $price = 10;
    } else if ($pizzaType === 'hawaii') {
        echo 'Computer says no';
    }

    return $price;
}

function getAddress($person)
{
    if ($person === 'Koen') {
        return 'A yacht in Antwerp';
    } elseif ($person === 'Manuele') {
        return 'Somewhere in Belgium';
    } elseif ($person === 'all students') {
        return 'BeCode office';
    } else {
        return '';
    }
}

function orderPizza($pizzaType, $person)
{
    $price = calculatePrice($pizzaType);
    $address = getAddress($person);

    $toPrint = "Creating new order...

                A {$pizzaType} pizza should be sent to {$person}.
                The address: {$address}.
                The bill is €{$price}.
                
                Order finished.
                --------------------------------------------------
                
                
                ";

    echo nl2br($toPrint);
}

orderPizza('calzone', 'Koen');
orderPizza('marguerita', 'Manuele');
orderPizza('golden', 'all students');
