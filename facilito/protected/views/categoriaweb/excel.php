<table>
    <tr>
        <th>ID</th>
        <th>nombre</th>
        <th>Descripcion</th>
        <th>Padre</th>
        <th>Estado</th>
    </tr>
    <?php

foreach($model as $categoria )
{
    ?><tr><td><?php echo $categoria->id_ca; ?></td><?php
    ?><td><?php echo $categoria->nombre; ?></td><?php
    ?><td><?php echo $categoria->descripcion; ?></td><?php
    ?><td><?php echo $categoria->categoria_padre; ?></td><?php
    ?><td><?php echo $categoria->status; ?></td></tr><?php    
}
?>
</table>