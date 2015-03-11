<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Daily News
            <small>SuperMagicAwesomeFantasticBlog</small>
        </h1>

        <?php 
            foreach($publicaciones as $publicacion):
                /*pr($publicacion);*/
         ?>

        <!-- First Blog Post -->
        <h2>
            <a href="#"><?php echo $publicacion['Publicacion']['titulo'] ?></a>
        </h2>
        <p class="lead">
            by <a href="index.php"><?php echo $publicacion['Publicacion']['autor'] ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo $publicacion['Publicacion']['created'] ?></p>
        <hr>
        <img class="img-responsive" src="http://static.tumblr.com/ac0bee259ebcafbcf877e7a952ffc0f1/0v5njyy/MQ2mslyvc/tumblr_static_header2.png" alt="">
        <hr>
        <p><?php echo $publicacion['Publicacion']['contenido'] ?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php endforeach; ?>
        <!-- Second Blog Post -->

        <hr>

        <!-- Third Blog Post -->

        <hr>

        <!-- Pager -->
        <ul class="pager">
            <li class="previous">
                <a href="#">&larr; Older</a>
            </li>
            <li class="next">
                <a href="#">Newer &rarr;</a>
            </li>
        </ul>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Blog Search Well -->
        <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
            <!-- /.input-group -->
        </div>

        <!-- Blog Categories Well -->
        <div class="well">
            <h4>Blog Categories</h4>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <ul class="list-unstyled">
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                        <li><a href="#">Category Name</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>

        <!-- Side Widget Well -->
        <div class="well">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>

    </div>

</div>