<script  type="text/javascript" src="<?php print base_url('assets/js/bootstrap.js') ?>"></script>
<script  type="text/javascript" src="<?php print base_url('assets/js/jquery-1.9.1.js') ?>"></script>
<nav class="navbar navbar-default navbar-fixed-top" style="box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">SI Seminar Unwaha</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>seminar">Cari Seminar</a></li>
                <li><a class="btn" data-toggle="modal" data-target=".bs-example-modal-lg">Daftar</a></li>
                <li><a class="btn" data-toggle="modal" data-target=".bs-example-modal-sm">Masuk</a></li>
                <li><a href="#">Buat Seminar</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Form Pendaftaran</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Nim">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Fakultas">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="#" class="form-control" required="" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Form Pendaftaran</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Nim</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Nim">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Fakultas</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Fakultas">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="#" class="form-control" required="" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="#" class="form-control" required="" placeholder="Masukan Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>