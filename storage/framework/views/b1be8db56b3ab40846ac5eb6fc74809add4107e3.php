<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin News game</title>
    <?php echo Html::style('css/bootstrap.min.css'); ?>

    <?php echo Html::style('css/metisMenu.min.css'); ?>

    <?php echo Html::style('css/sb-admin-2.css'); ?>

    <?php echo Html::style('css/font-awesome.min.css'); ?>

    

</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">NewsGame Admin</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL('/admin/create'); ?>"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL('/admin'); ?>"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Entradas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL('post/create'); ?>"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href=""><i class='fa fa-list-ol fa-fw'></i> Entradas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Categorias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo URL('/categorias/create'); ?>"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL('/categorias'); ?>"><i class='fa fa-list-ol fa-fw'></i> Categorias</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            <?php echo $__env->yieldContent('contenido'); ?>
        </div>

    </div>
    

    <?php echo Html::script('js/jquery.min.js'); ?>

    <?php echo Html::script('js/bootstrap.min.js'); ?>

    <?php echo Html::script('js/metisMenu.min.js'); ?>

    <?php echo Html::script('js/sb-admin-2.js'); ?>

</body>

</html>