<div class="row">
    <!-- row -->
    <div class="col-xs-12">
        <!-- col -->
        <!-- PAGE CONTENT BEGINS -->
        <div class="col-md-4">
            <?= $this->session->flashdata('message') ?>
        </div>


        <div class="show">
            <div id="user-profile-1" class="user-profile row">
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
                                    Pratinjau
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content profile-edit-tab-content">

                            <div id="user-profile" class="tab-pane in active">

                                <div id="home" class="tab-pane in active">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <div class="space space-4"></div>
                                            <span class="profile-picture">
                                                <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?= base_url(); ?>uploads/<?= $kursus['image']  ?>" />
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

                                        <div class="col-xs-12 col-sm-9">
                                            <h4 class="blue">
                                                <span class="middle"><?= $kursus['title']  ?></span>
                                            </h4>

                                            <div class="profile-user-info">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Title Kursus </div>

                                                    <div class="profile-info-value">
                                                        <span><?= $kursus['title']  ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Harga </div>

                                                    <div class="profile-info-value">
                                                        <span>$<?= $kursus['harga']  ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Image </div>

                                                    <div class="profile-info-value">
                                                        <span><?= $kursus['image']  ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span>2010/06/20</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                </div>
                                            </div>

                                            <div class="hr hr-8 dotted"></div>

                                            <a href="<?= base_url();  ?>admin/kursus" class="btn">
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
                                                        Deskripsi
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
                                <h4 class="header blue bolder smaller"> On kan jika kursus ini layak di publish </h4>


                                <form action="<?= base_url(); ?>admin/kursus/ubah_kursus/<?= $kursus['id']; ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>
                                            <?php if ($kursus['publish'] == 'On') : ?>
                                                <input name="publish" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" checked />
                                            <?php else : ?>
                                                <input name="publish" value="On" class="ace ace-switch ace-switch-4 btn-empty" type="checkbox" />
                                            <?php endif; ?>


                                            <span class="lbl"></span>
                                        </label>
                                        <span class="lbl"></span> <br>
                                        <small class="form-text text-danger">* Pastikan sebelum di publish, video sudah di tinjau terlebih dahulu.</small>

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