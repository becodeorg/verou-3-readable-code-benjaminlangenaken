<?php

function orderPizza($pizzaType, $person) {

    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calcPrice($type);

    $address = 'unknown';
    if($person === 'koen')
    {
        $address = 'a yacht in Antwerp';
    } elseif ($person === 'manuele')
    {
        $address = 'somewhere in Belgium';
    } elseif ($person === 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $person . ". <br>The address: {$address}.";
    echo $toPrint.'<br>';
    echo'The bill is €'.$price.'.<br>';

    echo "Order finished.<br><br>";
}

function totalPrice($price) {
    return $price;
}

function test($pizzaType) {
    echo "Test: type is {$pizzaType}.<br>";
}

function calcPrice($pizzaType)
{
    $price = 'unknown';

    if ($pizzaType === 'marguerita') {
        $price = 5;
    }
    else
    {
        if ($pizzaType === 'golden')
        {
            $price = 100;
        }

        if ($pizzaType === 'calzone')
        {
            $price = 10;
        }

        if ($pizzaType === 'hawaii') {
            throw new Exception('Computer says no');
        }
    }

    return $price;
}

function orderPizzaAll()
{
    $test= 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function makeAllHappy() {
        orderPizzaAll();
}

makeAllHappy();
