<?php
session_start();
if ($_SESSION['us_tipo'] == 1) {
    include_once 'layouts/header.php';
?>

    <title>Adm | Editar datos</title>
    <?php
    include_once 'layouts/nav.php';
    ?>
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
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img src="../img/avatar.png" class="profile-user-img img-fluid img-circle">
                                        <h3 class="profile-username text-center text-success">Nombre</h3>
                                        <p class="text-muted text-center">Apellidos</p>
                                    </div>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Edad</b>
                                            <a href="" class="float-right">12</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">DNI</b>
                                            <a href="" class="float-right">12345678</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#0B7300">Tipo de usuario</b>
                                            <span class="float-right badge badge-primary">Jodido</span>
                                        </li>
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
                                    <p class="text-muted">999 98 78 77</p>

                                    <strong style="color:#0B7300">
                                    <i class="fas fa-map-marker-alt mr-1"> Residencia</i>
                                    </strong>
                                    <p class="text-muted">Av zarzuela</p>

                                    <strong style="color:#0B7300">
                                        <i class="fas fa-at mr-1"> Correo</i>
                                    </strong>
                                    <p class="text-muted">gggg@gmail.com</p>

                                    <strong style="color:#0B7300">
                                        <i class="fas fa-user mr-1"> Sexo</i>
                                    </strong>
                                    <p class="text-muted">Bisexual</p>
                                    
                                    <strong style="color:#0B7300">
                                        <i class="fas fa-pencil-alt mr-1"> Adicional</i>
                                    </strong>
                                    <p class="text-muted">Bisexual</p>

                                    <button class="btn btn-block bg-gradient-danger">Editar</button>

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
                                    <form class="form-horizontal">
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