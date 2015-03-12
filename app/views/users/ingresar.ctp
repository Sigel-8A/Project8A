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

                        <form id="frmPublicacion" action="http://localhost/cakephp-1.3.20/users/ingresar" role="form" method="POST">

                            <div class="form-group">
                                <label>Nombre de Usuario</label>
                                <input name="data[user]" class="form-control">
                                <p class="help-block">Elija un nombre de usuario.</p>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input name="data[password]" type="password" class="form-control">
                                <p class="help-block">Ingresa una contraseña.</p>
                            </div>

                            <button onclick="Publicacion.guardar()" class="btn btn-default">Guardar</button>
                        </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->