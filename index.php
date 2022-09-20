<?php 
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente velit, magni asperiores, sint similique expedita omnis quod corporis at sit fugiat aspernatur explicabo quae dolorem illo tenetur quia eum. Quas.
Qui illum sequi beatae neque esse fuga illo nesciunt quo unde, ullam eligendi aspernatur ratione dignissimos odit sit molestias quia dolorem commodi dolores maiores.';

$badword = $_GET['badword'];
$censored_text = str_replace($badword, '***', $text, $count);

?>

<h1>Il pragrago è:</h1>
<p> <?php echo $text; ?> </p>
<h5>Il testo precedente è lungo: <?php echo strlen($text); ?> lettere </h5>

<h1>Il pragrafo censurato è:</h1>
<p> <?php echo $censored_text; ?> </p>
<p>Badword eliminata N° <?php echo $count; ?> volte </p>
<h5>Adesso Il testo censurato è lungo: <?php echo strlen($censored_text); ?> lettere </h5>