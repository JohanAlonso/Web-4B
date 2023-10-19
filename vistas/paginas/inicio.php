`<?php 
    if (!isset($_SESSION["validarIngreso"])) {
        echo '<script>window.location="index.php?pagina=ingreso";</script>';
        return;
    } else {
        if ($_SESSION["validarIngreso"] != "ok"){
            echo '<script>window.location="index.php?pagina=ingreso";</script>';
            return;
        }
    }
    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
    // echo '<prev>'; print_r($usuarios); echo '</prev>';
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $key => $value): ?>
        <tr>
            <td><?php echo ($key+1); ?></td>
            <td><?php echo $value["nombre"] ?></td>
            <td><?php echo $value["email"] ?></td>
            <td><?php echo $value["fecha2"] ?></td>
            <td>
                <div class="btn-group">
                    <div class="px-1">
                        <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                    <form method="post">
                        <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        <?php 
                            $eliminar = new ControladorFormularios();
                            $eliminar -> ctrEliminarRegistro();
                        ?>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>