<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nuevo Autor.
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

                        <form id="frmAutor" action="http://localhost/cakephp-1.3.20/administrador/save_post_autor" role="form" method="POST">

                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="data[nombre]" class="form-control">
                                <p class="help-block">Nombre del autor.</p>
                            </div>

                            <div class="form-group">
                                <label>Apellidos</label>
                                <input name="data[apellidos]" class="form-control">
                                <p class="help-block">Apellidos del autor.</p>
                            </div>

                            <div class="form-group">
                                <label>Alias</label>
                                <input name="data[alias]" class="form-control">
                                <p class="help-block">Sobrenombre del autor.</p>
                            </div>

                            <a onclick="Autor.guardar()" class="btn btn-default">Guardar</a>
                        </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->