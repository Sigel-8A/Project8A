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
                                <i class="fa fa-table"></i> Autores
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Autores</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Alias</th>
                                        <th>Publicacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($autores as $autor): ?>
                                	<?php $Publicaiones = $autor['Publicacion']?>
                                    <tr>
                                        <td><?php echo $autor['Autor']['id'] ?></td>
                                        <td><?php echo $autor['Autor']['nombre'] ?></td>
                                        <td><?php echo $autor['Autor']['apellidos'] ?></td>
                                        <td><?php echo $autor['Autor']['alias'] ?></td>
                                        
                                        <td><?php foreach($Publicaiones as $publicacion): ?>
											<?php echo $publicacion['id']; ?>
                                    		<?php endforeach; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>