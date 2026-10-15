<style>
    th {
        width: 8rem;
        text-align: left;
        border-bottom: 1px solid black;
    }

    td {
        width: 8rem;
    }
</style>

<h1>Ejemplo 7: Vista de coches por color</h1>

<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Propietario</th>
    </tr>
    <?php 
        /** @var Coche $rowset */
        foreach ($rowset as $row): 
    ?>
        <tr>
            <td><?php echo $row->marca ?></td>
            <td><?php echo $row->modelo ?></td>
            <td><?php echo $row->color ?></td>
            <td><?php echo $row->propietario ?></td>
        </tr>
    <?php endforeach; ?>
</table>