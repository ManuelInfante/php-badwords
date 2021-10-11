<?php 
    
    $text = "Ciao sono un esercizio php, se inserisci un parametro get(?name=parolaDaCensurare) con una di queste parole ti restituirò lo stesso testo ma con la parola sostituita da asterischi, provar per credere!";
    
    $badWord = $_GET["word"]; 
    
?>

<h2><?php echo $text?></h2>
<h2><?php echo strlen($text) ?></h2>


<h2><?php echo $textReplaced = str_replace($badWord, "***", $text)?></h2>
<h2><?php echo strlen($textReplaced) ?></h2>