<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Seminar Unwaha</title>
        <link rel="stylesheet" type="text/css" href="<?php print ('assets/css/bootstrap.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php print ('assets/js/bootstrap.js') ?>">
        <link rel="stylesheet" type="text/css" href="<?php print ('assets/css/bootstrap.css') ?>">
    </head>
    <body>


        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="row">	
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="http://material-design.storage.googleapis.com/publish/v_2/material_ext_publish/0Bx4BSt6jniD7TDlCYzRROE84YWM/materialdesign_introduction.png">
                            <span class="card-title">Material Cards</span>
                        </div>
                        <div class="card-content">
                            <p>Cards for display in portfolio style material design by Google.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="http://material-design.storage.googleapis.com/publish/v_2/material_ext_publish/0Bx4BSt6jniD7TDlCYzRROE84YWM/materialdesign_introduction.png">
                            <span class="card-title">Material Cards</span>
                        </div>
                        <div class="card-content">
                            <p>Cards for display in portfolio style material design by Google.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                            <a href="#" target="new_blank">Link</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="http://material-design.storage.googleapis.com/publish/v_2/material_ext_publish/0Bx4BSt6jniD7TDlCYzRROE84YWM/materialdesign_introduction.png">
                            <span class="card-title">Material Cards</span>
                        </div>

                        <div class="card-content">
                            <p>Cards for display in portfolio style material design by Google.</p>
                        </div>

                        <div class="card-action">
                            <a href="#" target="new_blank">Ikuti</a>
                            <a href="<?php base_url(); ?>detailseminar" target="new_blank">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </body>
</html>