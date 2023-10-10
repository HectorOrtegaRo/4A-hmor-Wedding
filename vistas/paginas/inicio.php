<?php 
    if (!isset($_SESSION["validarIngreso"])){
        echo '<script>window.location="index.php?pagina=ingreso";</script>';
        return;
    } else {
        if ($_SESSION["validarIngreso"] != "ok"){
            echo '<script>window.location="index.php?pagina=ingreso";</script>';
            return;
        }
    }
    $usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
    // echo '<pre>'; print_r($usuarios); echo '</pre>';
?>

<div class="container-fluid">
        <h3 class="text-center py-3">LOGO-4A</h3>
</div>

<table class="table table-striped">
<thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($usuarios as $key => $value): ?>
        <tr>
            <td><?php echo ($key+1); ?></td>
            <td><?php echo $value["nombre"]; ?></td>
            <td><?php echo $value["email"]; ?></td>
            <td><?php echo $value["fecha"]; ?></td>
            <td>
                <div class="btn-group">
                    <div class="px-1">
                        <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                    <form method="post">
                        <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        
                    </form>
                </div>
            </td>
        </tr>
    <?php endforeach ?>
</tbody>
</table>
