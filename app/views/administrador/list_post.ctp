<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tabla.
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Publicaciones</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($publicaciones as $publicacion): ?>
                                    <tr>
                                        <td><?php echo $publicacion['Publicacion']['id'] ?></td>
                                        <td><?php echo $publicacion['Publicacion']['titulo'] ?></td>
                                        <td><?php echo $publicacion['Autor']['alias'] ?></td>
                                        <td><?php echo $publicacion['Publicacion']['created'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>