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
                                    <a href="#"><?= ucwords($k['title']);  ?></a>
                                </td>
                                <td>$<?= $k['harga'];  ?></td>

                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">

                                        <a class="blue" href="<?= base_url(); ?>admin/kursus/detail/<?= $k['id'];  ?>">
                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                        </a>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">

                                                <li>
                                                    <a href="<?= base_url(); ?>admin/kursus/detail/<?= $k['id'];  ?>" class="tooltip-info" data-rel="tooltip" title="View">
                                                        <span class="blue">
                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
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
                                            <div class="col-xs-12 col-sm-3">
                                                <div class="text-center">
                                                    <img height="150" class="thumbnail inline no-margin-bottom" alt="Kursus Owner Avatar" src="<?= base_url(); ?>assets/images/avatars/<?= trim($k['author_image']); ?>" />
                                                    <br />
                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                        <div class="inline position-relative">
                                                            <a class="user-title-label" href="#">


                                                                <span class="white"><?= $k['author']; ?></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-xs-12 col-sm-9">
                                                <div class="space visible-xs"></div>
                                                <h4 class="header blue lighter less-margin text-center">Section Kursus</h4>
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
                                                                                    <th></th>
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


                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        <?php endforeach; ?>



                    </tbody>
                </table>
            </div><!-- /.span -->
        </div><!-- /.row -->

        <div class="hr hr-18 dotted hr-double"></div>

        <div class="row">
            <div class="col-xs-12">
                <h3 class="header smaller lighter blue">jQuery dataTables</h3>

                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div class="table-header">
                    Data Penjualan Semua Kursus
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