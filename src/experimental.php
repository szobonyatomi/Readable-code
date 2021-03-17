<?php

function orderPizza($type, $client) {
        //$type = $pizzaType;
        echo 'Creating new order...<br> ';

        //$toPrint = 'A ';
        //$toPrint = $type;
        $price = totalCost($type);
        $address = 'unknown';
    
        if($client == 'koen'){
            $address = 'a peniche in Liège';
        } 
        elseif ($client == 'nico'){
            $address = 'somewhere in Belgium';
        } 
        elseif ($client == 'students'){
            $address = 'BeCode office';
        }

        $toPrint = "A $type pizza should be sent to $client .<br> The address: $address. <br>";
    
        echo $toPrint; 
        echo "The bill is €$price <br>";
        echo "==================<br>";
    }

// function total_price($price) {
//         return $price;
//     }

// function test($pizzaType) {
//         echo "Test: type is {$pizzaType}. <br>";
// }

function totalCost($pizzaType){
        $cost = 'unknown';

        if ($pizzaType == 'marguerita') {
            $cost = 5;
        }if ($pizzaType == 'golden'){
            $cost = 75;
        }if ($pizzaType == 'calzone'){
                $cost = 10;
        }if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }


        return $cost;
    }

function orderAllPizza(){
        //$test= 0;
        orderPizza('calzone', 'nico');
        orderPizza('marguerita', 'nick');
        orderPizza('golden', 'students');
    }

    orderAllPizza();

// function makeAllHappy($doIt) {
//     if ($doIt) {
//             orderAllPizza();
//         } else {
//             // Should not do anything when false
//         }
//     }

// makeAllHappy(true);