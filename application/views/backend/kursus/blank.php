<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">

                <a href="<?= base_url(); ?>admin/kursus/tambah_kursus" class="btn btn-info" type="submit" name="tambah">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Tambah Kursus
                </a>

                <div class="hr hr-18 dotted hr-double"></div>

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
                                <a href="#">ace.com</a>
                            </td>
                            <td>$45</td>

                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="blue" href="#">
                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                    </a>

                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a class="red" href="#">
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
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                    <span class="blue">
                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="green">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
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


                                                            <span class="white">Alex M.</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Section Kursus</h4>

                                            <div class="space-6"></div>

                                            <div id="accordion" class="accordion-style1 panel-group">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                                <i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                                &nbsp;Group Item #1
                                                            </a>
                                                        </h4>
                                                    </div>

                                                    <div class="panel-collapse collapse" id="collapseOne">
                                                        <div class="panel-body">




                                                            <table id="simple-table" class="table  table-bordered table-hover">
                                                                <thead>

                                                                    <tr>
                                                                        <th>Nama Video</th>
                                                                        <th></th>
                                                                    </tr>

                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td>
                                                                            <i class="ace-icon fa fa-video-camera"></i> &nbsp; <a href="">Patience</a>
                                                                        </td>
                                                                        <td>
                                                                            <div class="hidden-sm hidden-xs action-buttons">

                                                                                <a class="green" href="#">
                                                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                                </a>

                                                                                <a class="red" href="#">
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
                                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
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

                                                                </tbody>
                                                            </table>



                                                            <div class="space-6"></div>


                                                            <button style="margin-left: 2px" class="pull-right btn btn-sm btn-primary btn-white btn-round" name="tambah_section" type="submit">
                                                                hapus section
                                                            </button>

                                                            <button style="margin-left: 2px" class="pull-left btn btn-sm btn-primary btn-white btn-round" name="tambah_section" type="submit">
                                                                tambah video
                                                            </button>




                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>

                                        <div class="col-xs-12 col-sm-4">
                                            <div class="space visible-xs"></div>
                                            <h4 class="header blue lighter less-margin">Tambahkan Section</h4>

                                            <div class="space-6"></div>

                                            <form action="" method="post">

                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Section">
                                                </div>

                                                <div class="hr hr-dotted"></div>

                                                <div class="clearfix">
                                                    <button class="pull-right btn btn-sm btn-primary btn-white btn-round" name="tambah_section" type="submit">
                                                        Submit
                                                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                    </button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- /.span -->
        </div><!-- /.row -->

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
