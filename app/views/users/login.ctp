<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Registro de Usuarios.
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form id="frmPublicacion" action="http://localhost/cakephp-1.3.20/administrador/save_post" role="form" method="POST">

                            <div class="form-group">
                                <label>Nombre de Usuario</label>
                                <input name="data[titulo]" class="form-control">
                                <p class="help-block">Elija un nombre de usuario.</p>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="data[categoria]" class="form-control">
                                <p class="help-block">Ingresa una contraseña.</p>
                            </div>

                            <div class="form-group">
                                <label>Confirme su password</label>
                                <input type="password" name="data[categoria]" class="form-control">
                                <p class="help-block">Ingresa la contraseña nuevamente.</p>
                            </div>

                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="data[imagen]" class="form-control">
                                <p class="help-block">Ingresa tu nombre.</p>
                            </div>

                            <div class="form-group">
                                <label>Apellidos</label>
                                <input name="data[autor]" class="form-control">
                                <p class="help-block">Ingresa tus apellidos.</p>
                            </div>

                            <div class="form-group">
                                <label>E-Mail</label>
                                <input name="data[categoria]" class="form-control">
                                <p class="help-block">Ingresa tu correo electronico.</p>
                            </div>  

                            <a onclick="Publicacion.guardar()" class="btn btn-default">Guardar</a>
                        </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->