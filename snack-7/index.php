<?php
/* 
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$studenti = [
    [
        "nome" => "Alessandro",
        "cognome" => "Saba",
        "voti" => 
        [
            7, 6, 5, 4, 8
        ]
    ],
    [
        "nome" => "Giovanni",
        "cognome" => "Sbola",
        "voti" => 
        [
            7,7,8,5,2
        ]
    ],
    [
        "nome" => "Francesco",
        "cognome" => "Gaio",
        "voti" => 
        [
            10,5,7
        ]
    ],
    [
        "nome" => "Giuseppe",
        "cognome" => "Chela",
        "voti" =>
        [
            9,5,8,8,8
        ]
    ],
    [
        "nome" => "Antonio",
        "cognome" => "Sbagliato",
        "voti" =>
        [
            7, 6, 5, 4, 8
        ]
    ],
];

for($i = 0;$i<count($studenti);$i++){
   $studente=$studenti[$i];
   $media=number_format(array_sum($studente['voti']) / count($studente['voti']),2,'.','') ;
    echo "<h2> $studente[nome] $studente[cognome] </h2> <p>Media voti: $media </p>";
}