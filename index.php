<?php 
        require_once "./clases/conexion.php";
        require_once "./clases/crud.php";
        $crud= new Crud();
        $datos = $crud->mostrarDatos();
?>


<?php include "./header.php" ?>
    <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-4">
                        <div class="car-body">
                            <h2>CRUD con Mongodb y php</h2>
                            <a href="./agregar.php" class="btn btn-primary">
                            <i class="fa-solid fa-user-plus"></i> Agregar registro
                            </a>
                            <hr>
                            <table class="table table-small table-hover table-bordered">
                                <thead>
                                    <th>Apellido paterno</th>
                                    <th>Apellido materno</th>
                                    <th>Nombre</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                
                                </thead>
                                <tbody>

                                <?php foreach($datos as $item){ ?>

                                    <tr>
                                        <td> <?php  echo $item->paterno; ?></td>
                                        <td><?php  echo $item->materno; ?></td>
                                        <td><?php  echo $item->nombre; ?></td>
                                        <td><?php  echo $item->fecha_nacimiento; ?></td>
                                        <td class="text-center">
                                            <form action="" method="post">
                                                <button class="btn btn-warning">
                                                <i class="fa-solid fa-user-pen"></i> 
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="" >
                                                <button class="btn btn-danger">
                                                <i class="fa-solid fa-user-xmark"></i>
                                                </button>
                                            </form>
                                        </td>
                            </tr>
                            <?php  }  ?>   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "./scripts.php"
?>