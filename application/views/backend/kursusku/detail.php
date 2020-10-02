<div class="row">
    <!-- row -->
    <div class="col-xs-12">
        <!-- col -->
        <!-- PAGE CONTENT BEGINS -->

        <div class="show">

            <div id="user-profile-1" class="user-profile row">
                <div class="col-md-4">
                    <?= $this->session->flashdata('message') ?>
                </div>
                <div class="col-md-12">

                    <div class="space"></div>

                    <div class="tabbable">

                        <ul class="nav nav-tabs padding-16">

                            <li class="active">
                                <a data-toggle="tab" href="#user-profile">
                                    <i class="green ace-icon fa fa-book bigger-125"></i>
                                    Detail Kursus
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#edit-basic">
                                    <i class="purple ace-icon fa fa-edit bigger-125"></i>
                                    Ubah
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content profile-edit-tab-content">

                            <div id="user-profile" class="tab-pane in active">

                                <div id="home" class="tab-pane in active">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 center">
                                            <div class="space space-4"></div>
                                            <span class="profile-picture">
                                                <a href="" class="tombolUbah" data-toggle="modal" data-target="#modalUbahGambar"> <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?= base_url(); ?>uploads/thumbnails/<?= $kursus['image']  ?>" /></a>
                                            </span>

                                            <div class="space space-4"></div>
                                            <!-- 
                                            
                                            <button id="button" class="btn btn-sm btn-block btn-success">
                                                <i class="ace-icon fa fa-edit bigger-120"></i>
                                                <span class="bigger-110">Ubah Thumbnail</span>
                                            </button>
                                            <input id="upload_trigger_btn" class="btn btn-sm btn-block btn-success" type="file" name="image">
                                            <span id="val"></span>

                                            <style type="text/css">
                                                input[type='file'] {
                                                  opacity:1
                                                }
                                            </style>

                                            <script type="text/javascript">

                                                document.getElementById("button").onclick = displayFile;

                                                function displayFile() {
                                                  document.getElementById("upload_trigger_btn").click();
                                                }
                                            </script> -->


                                        </div><!-- /.col -->

                                        <div class="col-xs-12 col-sm-8">
                                            <h4 class="blue">
                                                <span class="middle"><?= ucwords($kursus['title'])  ?></span>
                                            </h4>

                                            <div class="profile-user-info">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Author </div>

                                                    <div class="profile-info-value">
                                                        <span><?= ucwords($kursus['author'])  ?></span>
                                                    </div>
                                                </div>
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Title Kursus </div>

                                                    <div class="profile-info-value">
                                                        <span><?= $kursus['title']  ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Harga </div>

                                                    <div class="profile-info-value">
                                                        <span>IDR <?= $kursus['harga']  ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Dibuat </div>

                                                    <div class="profile-info-value">
                                                        <span><?= $kursus['date_created']  ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                </div>
                                            </div>

                                            <div class="hr hr-8 dotted"></div>

                                            <a href="<?= base_url();  ?>kursusku" class="btn pull-right">
                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                Kembali
                                            </a>

                                            <div class="profile-user-info">



                                            </div>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                    <div class="space-20"></div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h4 class="widget-title smaller">
                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                        Deskripsi Kursus
                                                    </h4>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <?= $kursus['deskripsi']  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /#home -->
                            </div>

                            <div id="edit-basic" class="tab-pane in">
                                <h4 class="header blue bolder smaller">Udah data kursus</h4>


                                <form action="<?= base_url(); ?>kursusku/ubah_kursus/<?= $kursus['id']; ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama">Title Kursus</label>
                                        <input type="text" class="form-control" id="title" name="title" value="<?= $kursus['title']; ?>">
                                        <!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>

                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga" value="<?= $kursus['harga']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <textarea name="deskripsi" id="deskripsi" class="form-control no-resize">

                                    	<?= $kursus['deskripsi']; ?>

                                    </textarea>
                                    </div>

                                    <button class="btn btn-info " type="submit" name="ubah_kursus">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Simpan Perubahan
                                    </button>

                                    &nbsp; &nbsp;

                                </form>


                            </div>

                        </div>
                    </div>
                </div><!-- /.span -->
            </div><!-- /.user-profile -->
        </div>


        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->


<!-- modal ubah gambar -->
<div id="modalUbahGambar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue" id="changeAvatar">Change Avatar</h4>
            </div>

            <form action="<?= base_url(); ?>kursusku/ubah_gambar/<?= $kursus['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="space-4"></div>
                    <div style="width:75%;margin-left:12%;"><input type="file" name="image" /></div>
                </div>

                <div class="modal-footer center">
                    <button type="submit" name="ubah_gambar" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>
                    <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>