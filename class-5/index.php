<?php

$jasondata = file_get_contents("data.json");

$mainData=[ 
    'alamStore'=>[
         'breakFast'=>[ 
             'ruti'=>10, 'vagitable'=>15, 'khichuri'=>80, 'chirota'=>20 ], 
             'lanch'=>[ 'vat'=>20, 'chicken'=>50, 'beef'=>80, 'dal'=>20 ], 
             'dinner'=>[ 'kabab'=>110, 'nan'=>25, 'kacchi'=>80, 'ice-cream'=>20 ] 
             
             ]
];
var_dump($jasondata);

