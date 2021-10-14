<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


$vettore = [];
while(count($vettore) < 15){
    $numeroCasuale = rand(1,100);
    if(!in_array($numeroCasuale, $vettore) && $numeroCasuale%$_GET['numero'] != 0){
        $vettore[] = $numeroCasuale;
    }
}

 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
 
$students = [
    [
        "nome" => 'mana',
        "cognome" => 'viola',
        "voti" =>[1,2,9,8,5]
    ],
    [
        "nome" => 'asas',
        "cognome" => 'vio2la',
        "voti" =>[1,2,3,3,5]
    ],
    [
        "nome" => 'mana',
        "cognome" => '3viola',
        "voti" =>[1,9,3,4,5]
    ],
    [
        "nome" => 'mana',
        "cognome" => '4viola',
        "voti" =>[1,7,3,4,5]
    ],

];

$poderosoParagrafodelSium = ' A number of high-powered lawyers who have represented Donald Trump in the past are sitting out his latest legal battle, as the former President prepares to assert executive privilege to block congressional investigators from getting information on the January 6 insurrection.
That\'s left Trump with a relatively small legal team without a lot of experience litigating issues of executive privilege as he readies for a court fight that could test major issues of presidential authority.
Some go-to attorneys have been spooked by Trump\'s reputation for sometimes not paying as a client, according to several people familiar with conservative legal circles. Others watched closely as lawyers fled Trump\'s prior teams, frustrated by him as a client or facing their own ethical predicaments. Others still want themselves and their firms to stay far away from Trump\'s insistence that the election was stolen.A number of high-powered lawyers who have represented Donald Trump in the past are sitting out his latest legal battle, as the former President prepares to assert executive privilege to block congressional investigators from getting information on the January 6 insurrection.
That\'s left Trump with a relatively small legal team without a lot of experience litigating issues of executive privilege as he readies for a court fight that could test major issues of presidential authority.
Some go-to attorneys have been spooked by Trump\'s reputation for sometimes not paying as a client, according to several people familiar with conservative legal circles. Others watched closely as lawyers fled Trump\'s prior teams, frustrated by him as a client or facing their own ethical predicaments. Others still want themselves and their firms to stay far away from Trump\'s insistence that the election was stolen.';

$parts = explode('.', $poderosoParagrafodelSium);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

    <?php foreach($posts as $data => $post){ ?>
        <h1>Lista dei post del giorno<?php echo ' ' . $data?>:</h1>
        <ul>
            <?php foreach($post as $singlePost){ ?>
            <li> 
                <h2><?php echo $singlePost['title']?></h2>
                <h4><?php echo $singlePost['author']?></h4>
                <h3><?php echo $singlePost['text']?></h3>
            </li>
            <?php } ?>
        </ul>
    <?php }?>
    

    <!-- Creare un array con 15 numeri casuali, 
    tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
    <h2>NUMERI RANDOMICI:</h2>
    <ul>
    <?php foreach($vettore as $numero){?>
        <li><?php echo $numero ?></li>
    <?php }?>
    </ul>


    <!-- Utilizzare questo array: https://pastebin.com/CkX3680A
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
    
    <?php foreach($db as $key => $persona){?>
        <?php if($key == 'teachers'){
            $classe = 'teacher';
        }else{
            $classe = 'pm';
        }
        ?>
        <?php foreach($persona as $nome){?>
            <div class=<?php echo$classe ?>><?php echo $nome['name']; echo ' ' . $nome['lastname'];?></div>
        <?php } ?>
    <?php } ?>
    

    <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


    <ul>
        <?php foreach($students as  $studente){?>
            <li><?php echo  $studente['nome']. ' ' .$studente['cognome'] . ' Media voti: ' . array_sum($studente['voti']) / count('voti') ?></li>
    
        <?php } ?>
    </ul>
    

    <!--  
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    -->
    
    <?php foreach($parts as $paragraph){?>
        <p><?php echo $paragraph ?></p>
    <?php } ?>

</body>
</html>