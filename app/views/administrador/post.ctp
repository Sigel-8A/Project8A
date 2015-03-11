<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nueva Publicacion.
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
                                <label>Titulo</label>
                                <input name="data[titulo]" class="form-control">
                                <p class="help-block">Titulo de la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Imagen</label>
                                <input name="data[imagen]" class="form-control">
                                <p class="help-block">Portada de la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Contenido</label>
                                <textarea name="data[contenido]" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Autor</label>
                                <input name="data[autor]" class="form-control">
                                <p class="help-block">Autor de la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Catgoria</label>
                                <input name="data[categoria]" class="form-control">
                                <p class="help-block">Clasifica la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Fecha</label>
                                <input name="data[created]" type="date" class="form-control">
                                <p class="help-block">Fecha de publicación</p>
                            </div>

                            <a onclick="Publicacion.guardar()" class="btn btn-default">Guardar</a>
                        </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->