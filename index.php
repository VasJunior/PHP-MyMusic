<html>
<head>
    <title>Bem vindo a MyMusic</title>
    <link rel="stylesheet" type="text/css" href="estilo/main.css">
</head>
<body>

<?php 
require_once 'classes.php';
$navBar = new NavBar();
$navBar->gerarNav();
    ?>
    
<br>
    
<?php
require_once 'classes.php';

$musica = new Audio();
$musica->listarMusicas();
?>
    
</body>

</html>