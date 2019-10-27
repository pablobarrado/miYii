<h1><?php echo "".$twitter?> </h1><br>
<?php 

foreach ($model as $usuario) {
    echo $usuario->username."<br>";     
}

?>