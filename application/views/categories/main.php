<h2>Categorias</h2>

<?php echo anchor('categories/create', 'Agregar') ?>
<!-- <a href="/categories/create">Agregar</a> -->

<?php if(empty($categories)): ?>
    <p>No existen categorias creadas previamente</p>

<?php else: ?>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
               <tr>
                    <td><?= $category->title ?></td>
                    <td><?= ($category->description == "") ? '<i>(Vacio)</i>': $category->description ?></td>
                    <td></td>
               </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

