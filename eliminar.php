<?php include "./header.php"
?>

<div class="container">
 <div class="row">
    <div class="col">
         <div class="card mt-4">
            <div class="car-body">
                <a href="./index.php" class="btn btn-outline-info">
                <i class="fa-solid fa-arrow-left"></i>  Regresar</a>
                 <h2>Eliminar registro</h2>
                
                 <table class="table table-bordered">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                 </table>
                 <hr>
                 <div>
                    <p>¿Esta seguro de eliminar este registro?</p>
                    <p>Una vez eliminado no podra ser recuperado !!!</p>
                 </div>
                 <form action="" method="post">
                    <button class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i> Eliminar
                    </button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"
?>