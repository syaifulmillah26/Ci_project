<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-md-8">
                <br>
                <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="col-xs-12">
                <div class="hr hr-18 dotted hr-single"></div>
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th class="detail-col">Details</th>
                            <th>Nama Kursus</th>
                            <th>Harga</th>

                            <th></th>
                        </tr>
                    </thead>

                    <tbody>


                        <?php foreach ($kursus as $k) : ?>
                            <?php if ($k['author_id'] == $user['id']) : ?>

                                <tr>
                                    <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td class="center">
                                        <div class="action-buttons">
                                            <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                <i class="ace-icon fa fa-angle-double-down"></i>
                                                <span class="sr-only">Details</span>
                                            </a>
                                        </div>
                                    </td>

                                    <td>
                                        <a href="#"><?= $k['title'];  ?></a>
                                    </td>
                                    <td>$<?= $k['harga'];  ?></td>

                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">

                                            <a class="blue" href="<?= base_url(); ?>kursusku/detail/<?= $k['id'];  ?>">
                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                            </a>

                                            <a class="red" href="<?= base_url(); ?>kursusku/hapus_kursus/<?= $k['id'];  ?>">
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

                                                    <li>
                                                        <a href="<?= base_url(); ?>kursusku/detail/<?= $k['id'];  ?>" class="tooltip-info" data-rel="tooltip" title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?= base_url(); ?>kursusku/hapus_kursus/<?= $k['id'];  ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="detail-row">
                                    <td colspan="8">
                                        <div class="table-detail">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-2">
                                                    <div class="text-center">
                                                        <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="<?= base_url(); ?>assets/images/avatars/profile-pic.jpg" />
                                                        <br />
                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                            <div class="inline position-relative">
                                                                <a class="user-title-label" href="#">


                                                                    <span class="white">Kursus ku</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="space visible-xs"></div>
                                                    <h4 class="header blue lighter less-margin">Section Kursus</h4>
                                                    <div class="space-6"></div>




                                                    <div id="accordion" class="accordion-style1 panel-group">
                                                        <?php foreach ($section_kursus as $section) : ?>

                                                            <?php if ($section['kursus_id'] == $k['id']) : ?>
                                                                <div class="panel panel-default">


                                                                    <div class="panel-heading">
                                                                        <h4 class="panel-title">
                                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $section['id']  ?>">
                                                                                <i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                                                <?= $section['title'];  ?>
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div class="panel-collapse collapse" id="collapse<?= $section['id']  ?>">
                                                                        <div class="panel-body">
                                                                            <table id="simple-table" class="table  table-bordered table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Title Video</th>
                                                                                        <th>Durasi</th>
                                                                                        <th>Role</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>


                                                                                    <?php foreach ($konten_video as $konten) : ?>
                                                                                        <?php if ($konten['section_id'] == $section['id']) : ?>


                                                                                            <tr>
                                                                                                <td>
                                                                                                    <i class="ace-icon fa fa-video-camera"></i> &nbsp;
                                                                                                    <a href=""><?= $konten['nama_video'] ?></a>
                                                                                                </td>

                                                                                                <td>
                                                                                                    <?= $konten['durasi'] ?> Menit
                                                                                                </td>

                                                                                                <td>
                                                                                                    <?= $konten['role'] ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="hidden-sm hidden-xs action-buttons">

                                                                                                        <a class="green" href="#">
                                                                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                                        </a>

                                                                                                        <a class="red" href="<?= base_url(); ?>kursusku/hapus_video/<?= $konten['id'] ?>">
                                                                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                                                        </a>
                                                                                                    </div>

                                                                                                    <div class="hidden-md hidden-lg">
                                                                                                        <div class="inline pos-rel">
                                                                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                                                            </button>

                                                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                                <li>
                                                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                                                        <span class="green">
                                                                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                                        </span>
                                                                                                                    </a>
                                                                                                                </li>

                                                                                                                <li>
                                                                                                                    <a href="<?= base_url(); ?>kursusku/hapus_video/<?= $konten['id'] ?>" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                                        <span class="red">
                                                                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                                        </span>
                                                                                                                    </a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; ?>



                                                                                </tbody>
                                                                            </table>
                                                                            <div class="space-6"></div>

                                                                            <div class="space visible-xs"></div>
                                                                            <h4 class="header blue lighter less-margin">Tambahkan Video</h4>

                                                                            <div class="space-6"></div>


                                                                            <form action="<?= base_url(); ?>kursusku/tambah_video" method="post">

                                                                                <div class="form-group">
                                                                                    <input type="hidden" class="form-control" id="section_id" name="section_id" value="<?= $section['id']; ?>">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" id="nama_video" name="nama_video" placeholder="Tuliskan Nama Video">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <input type="url" class="form-control" id="link_video" name="link_video" placeholder="https://">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <input type="number" class="form-control" id="durasi" name="durasi" placeholder="Durasi video">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <select class="form-control" id="role" name="role">
                                                                                        <option>Pilih role video nya</option>
                                                                                        <option value="preview">Preview</option>
                                                                                        <option value="locked">Locked</option>
                                                                                    </select>
                                                                                </div>

                                                                                <!-- <div class="form-group">
                                                                                    <select class="form-control" id="visibility" name="visibility">
                                                                                        <option>Pilih visibility video nya</option>
                                                                                        <option value="auto">Bisa di tonton</option>
                                                                                        <option value="none">tidak bisa ditonto</option>
                                                                                    </select>
                                                                                </div> -->

                                                                                <div class="hr hr-dotted"></div>

                                                                                <a href="<?= base_url(); ?>kursusku/hapus_section_kursus/<?= $section['id'] ?>" style="margin-left: 2px" class="pull-right btn btn-sm btn-primary btn-white btn-round" name="tambah_section" type="submit">
                                                                                    hapus section
                                                                                </a>

                                                                                <button style="margin-left: 2px" class="pull-left btn btn-sm btn-primary btn-white btn-round" name="tambah_video" type="submit">
                                                                                    tambah video
                                                                                </button>


                                                                            </form>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            <?php endif; ?>
                                                        <?php endforeach; ?>
                                                    </div>


                                                </div>






                                                <div class="col-xs-12 col-sm-3">
                                                    <div class="space visible-xs"></div>
                                                    <h4 class="header blue lighter less-margin">Tambahkan Section</h4>

                                                    <div class="space-6"></div>

                                                    <form action="<?= base_url(); ?>kursusku/tambah_section" method="post">

                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" id="kursus_id" name="kursus_id" value="<?= $k['id']; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="title" name="title" placeholder="Nama Section">
                                                        </div>

                                                        <div class="hr hr-dotted"></div>

                                                        <div class="clearfix">
                                                            <button class="pull-right btn btn-sm btn-primary btn-white btn-round" name="tambah_section" type="submit">
                                                                Tambah
                                                                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>



                    </tbody>
                </table>
            </div><!-- /.span -->
        </div><!-- /.row -->


        <div class="hr hr-18 dotted hr-single"></div>
        <form class="form-horizontal" action="<?= base_url(); ?>kursusku/tambah_kursus" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
                <div class="widget-box ui-sortable-handle collapsed">
                    <div class="widget-header">
                        <h4 class="pull-left">Tambah kursus</h4>
                        &nbsp; &nbsp;
                        <span class="widget-toolbar pull-left" style="margin-left: 10px;">
                            &nbsp; &nbsp;
                            <a href="#" data-action="collapse" style="margin-left: -10px; ">

                                <i class="ace-icon fa fa-angle-double-down bigger-120 green"></i>
                            </a>


                        </span>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main" style="margin: 10px;">

                            <input type="hidden" name="author_id" value=" <?= $user['id'] ?> ">
                            <input type="hidden" name="author" value=" <?= $user['name'] ?> ">
                            <input type="hidden" name="author_image" value=" <?= $user['image'] ?> ">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="nama">Title Kursus</label>
                                    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Tuliskan title kursus">
                                    <small class="form-text text-danger"><?= form_error('title'); ?></small>
                                </div>
                            </div>

                            <!-- <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="image"> Thumbnail</label>
                                    <input id="drop_file" type="file" name="image">
                                </div>
                            </div> -->

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="hanya digit">
                                    <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="deskripsi" id="deskripsi" class="form-control no-resize"></textarea>
                                </div>
                            </div>


                        </div>
                        <div class="clearfix form-actions">
                            <div class="col-md-12 ">
                                <button class="btn btn-info " type="submit" name="tambah_kursus">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Tambahkan
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- /.span -->
        </form>












        <div class="hr hr-18 dotted hr-double"></div>

        <div class="row">
            <div class="col-xs-12">
                <h3 class="header smaller lighter blue"></h3>

                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header">
                    Data Penjualan kursus saya
                </div>

                <!-- div.table-responsive -->

                <!-- div.dataTables_borderWrap -->
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">


                    </table>
                </div>
            </div>
        </div>


        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->