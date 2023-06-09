<?php
session_start();
if ($_SESSION['us_tipo'] == 1) {
    include_once 'layouts/header.php';
?>

    <title>Adm | Editar datos</title>
    <?php
    include_once 'layouts/nav.php';
    ?>

    <!-- Modal -->
    <div class="modal fade" id="cambioContra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
                    </div>
                    <div class="text-center">
                        <b>
                            <?php
                                echo $_SESSION['nombre_us']
                            ?>                         
                        </b>
                    </div>
                    <form id="form-pass">
                        <div class="input-group mb-3">   
                            <div class="input-group-prepend">
                                <spam class="input-group-text">
                                    <i class="fas fa-unlock"></i>
                                </spam>    
                            </div>
                            <input id="oldpass" type="password" class="form-control" placeholder="Ingrese password actual">
                        </div>
                        <div class="input-group mb-3">   
                            <div class="input-group-prepend">
                                <spam class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </spam>    
                            </div>
                            <input id="newpass" type="text" class="form-control" placeholder="Ingrese nueva contraseña">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn bg-gradient-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editar datos personales</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="adm_catalogo.php">Home</a></li>
                            <li class="breadcrumb-item active">Datos personales</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-success card-outline">
                                <!--En la sgte linea se recupera el usuario en una variable para el javascrip-->
                                <input id="id_usuario" type="hidden" value="<?php echo $_SESSION['usuario'] ?>">
                                <div class="card-body box-profile">
                                    <!-- Estos datos se podrian sacar directamente de php y no javacript-->
                                    <div class="text-center">
                                        <img src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
                                        <h3 id="nombre_us" class="profile-username text-center text-success">Nombre xx</h3>
                                        <p id="apellidos_us" class="text-muted text-center">Apellidos xx</p>
                                    </div>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Edad</b>
                                            <a id="edad" href="" class="float-right">xx</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">DNI</b>
                                            <a id="dni_us" href="" class="float-right">xxxxxxxx</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Tipo de usuario</b>
                                            <span id="us_tipo" class="float-right badge badge-primary">xxxxxx</span>
                                        </li>
                                        <button data-toggle="modal" data-target="#cambioContra" type="button" class="btn btn-block btn-outline-warning btn-sm">Cambiar contraseña</button>
                                    </ul>
                                </div>
                            </div>
                            <div class="card card-success ">
                                <div class="card-header">
                                    <h3 class="card-title">Sobre mi</h3>
                                </div>
                                <div class="card-body">
                                    <strong style="color:#0B7300">
                                        <i class="fas fa-phone mr-1"> Telefono</i>
                                    </strong>
                                    <p id="telefono_us" class="text-muted">xxx xx xx xx</p>

                                    <strong style="color:#0B7300">
                                        <i class="fas fa-map-marker-alt mr-1"> Residencia</i>
                                    </strong>
                                    <p id="residencia_us" class="text-muted">Av xxxxxxx</p>

                                    <strong style="color:#0B7300">
                                        <i class="fas fa-at mr-1"> Correo</i>
                                    </strong>
                                    <p id="correo_us" class="text-muted">xxxx@gmail.com</p>

                                    <strong style="color:#0B7300">
                                        <i class="fas fa-user mr-1"> Sexo</i>
                                    </strong>
                                    <p id="sexo_us" class="text-muted">xxxxx</p>

                                    <strong style="color:#0B7300">
                                        <i class="fas fa-pencil-alt mr-1"> Adicional</i>
                                    </strong>
                                    <p id="adicional_us" class="text-muted">xxxxxxxxxxxxxxxxxxxxx</p>

                                    <button class="edit btn btn-block bg-gradient-danger">Editar</button>

                                </div>
                                <div class="card-footer">
                                    <p class="text-muted">Click en boton para editar datos personales</p>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="card card-success ">
                                <div class="card-header">
                                    <h3 class="card-title">Editar datos personales</h3>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-success text-center" id="editado" style='display:none;'>
                                        <span><i class="fas fa-check m-1">Editado</i></span>
                                    </div>
                                    <div class="alert alert-danger text-center" id="no_editado" style='display:none;'>
                                        <span><i class="fas fa-times m-1">Edicion deshabilitada</i></span>
                                    </div>
                                    <form id="form-usuario" class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                                            <div class="col-sm-10">
                                                <input type="number" id="telefono" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="residencia" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="correo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="sexo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="adicional" class="col-sm-2 col-form-label">Inf adicional</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="adicional" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button class="btn btn-block btn-outline-success">Guardar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <card class="card-footer">
                                    <p class="text-muted">Cuidado con ingresar datos erroneos</p>
                                </card>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php
    include_once 'layouts/footer.php';
} else {
    header('Location: ../index.php');
}
?>

<script src="../js/Usuario.js"></script>