
//^ TRACCIA 1

<?php
$variabile_uno = 2;
$variabile_due = 3.5;
$variabile_tre = 'Ciao sono una stringa!';
$variabile_quattro = true;


var_dump($variabile_uno, $variabile_due, $variabile_tre, $variabile_quattro);


//^ TRACCIA 2

$text = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè"; 
$text6 = 'hai'; 
$text7 = 'bevuto'; 
$text8 = "tutto";

echo ($text). " ". ($text2). " ". ($text3),($text4). " ".($text5). " ".($text6). " ".($text7). " ".($text8) . "\n";

//^ TRACCIA 3


$words1 = [ 
    'una', 
    67, 
    'vita', 
    'colle',
    'mi', 
    'rosso', 
    [ 
      'oscura', 
      'era', 
      89, 
      [ 
        'mezzo',
        [ 
          'cammin', 
          'Nel', 
          [ 
            'selva', 
            'la', 
            [ 
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', 
    'per' 
    ], 
    'diritta' 
  ]; 
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      'smarrita', 
                      'ché' 
                    ] 
  ];

     $missing_words= ['di', 'era'];
   $results=  $words1[6][3][1][1]. " ". $words1[6][3][0]. " ". $missing_words[0]. " ". $words1[6][3][1][0]." ". $missing_words[0]. " ". $words2['elemento2']." ". $words1[2]
    ." ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." ".$words1[6][3][1][2][2][1]." ".$words1[6][3][1][2][0]." ".$words1[6][0].", ".$words2['elemento3'][2]." ".
    $words1[6][3][1][2][1]. " ".$words1[7]. " ".$words1[6][3][1][2][2][0]. " ".$missing_words[1]." ".$words2['elemento3'][1];

 echo $results;

 //^ TRACCIA 4

 $x = 10; 
 $y = 20; 
 $z = "20"; 
 $w = 10;

 var_dump($x < $y);
 var_dump($z <= $w);
 var_dump($w == $z);
 var_dump($y === $y);
 var_dump($y !== $z);
 var_dump($x != $z);


 //^ TRACCIA 5;

 $corsoHackademy = [ "docenti" => ["daniele", "emanuele"], "studenti" => ["pippo", "franco", "coppola"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];

$nomi= $corsoHackademy['studenti'];
$argomenti = $corsoHackademy['argomenti'];
$docenti = $corsoHackademy['docenti'];

$frasePresentazione = "Ciao sono $nomi[0], e con il mio docente $docenti[0] stiamo affrontanto i seguenti argomenti: $argomenti[0], $argomenti[1], $argomenti[2], $argomenti[3]";

echo $frasePresentazione;