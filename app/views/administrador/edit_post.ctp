<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar Publicacion.
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
                                <input type="hidden" name="data[Publicacion][id]" class="form-control" value="<?php echo $publicaciones['Publicacion']['id'] ?>">
                                <input type="hidden" name="data[Autor][id]" class="form-control" value="<?php echo $publicaciones['Autor']['id'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Titulo</label>
                                <input name="data[Publicacion][titulo]" class="form-control" value="<?php echo $publicaciones['Publicacion']['titulo'] ?>">
                                <p class="help-block">Titulo de la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Imagen</label>
                                <input name="data[Publicacion][imagen]" class="form-control" value="<?php echo $publicaciones['Publicacion']['imagen'] ?>">
                                <p class="help-block">Portada de la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Contenido</label>
                                <input type="textarea" name="data[Publicacion][contenido]" class="form-control" value="<?php echo $publicaciones['Publicacion']['contenido'] ?>" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Autor</label>
                                <input name="data['Autor'][alias]" class="form-control" value="<?php echo $publicaciones['Autor']['alias'] ?>">
                                <p class="help-block">Autor de la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Catgoria</label>
                                <input name="data[Publicacion][categoria]" class="form-control" value="<?php echo $publicaciones['Publicacion']['categoria'] ?>">
                                <p class="help-block">Clasifica la publicación.</p>
                            </div>

                            <div class="form-group">
                                <label>Fecha</label>
                                <input name="data[][created]" type="date" class="form-control" value="<?php echo $publicaciones['Publicacion']['created'] ?>">
                                <p class="help-block">Fecha de publicación</p>
                            </div>

                            <a onclick="Publicacion.guardar()" class="btn btn-default">Guardar</a>
                        </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->