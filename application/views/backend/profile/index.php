<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="clearfix">
            <?= $this->session->flashdata('message'); ?>
        </div>


        <div class="show">
            <div id="user-profile-1" class="user-profile row">
                <div class="col-md-12">

                    <div class="space"></div>

                    <div class="tabbable">

                        <ul class="nav nav-tabs padding-16">

                            <li class="active">
                                <a data-toggle="tab" href="#user-profile">
                                    <i class="green ace-icon fa fa-user bigger-125"></i>
                                    User Profile
                                </a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#edit-basic">
                                    <i class="purple ace-icon fa fa-cog bigger-125"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content profile-edit-tab-content">

                            <div id="user-profile" class="tab-pane in active">

                                <div id="home" class="tab-pane in active">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3 center">
                                            <span class="profile-picture">
                                                <a href="" class="tombolUbah" data-toggle="modal" data-target="#modalUbahGambar"> <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="<?= base_url(); ?>assets/images/avatars/<?= $user['image'] ?>" /></a>
                                            </span>
                                        </div>

                                        <div class="col-xs-12 col-sm-9">
                                            <h4 class="blue">
                                                <span class="middle"><?= $user['name'] ?></span>

                                                <span class="label label-purple arrowed-in-right">
                                                    <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                    online
                                                </span>
                                            </h4>

                                            <div class="profile-user-info">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Email </div>

                                                    <div class="profile-info-value">
                                                        <span><?= $user['email'] ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Location </div>

                                                    <div class="profile-info-value">
                                                        <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                        <span>Netherlands</span>
                                                        <span>Amsterdam</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Age </div>

                                                    <div class="profile-info-value">
                                                        <span>-</span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Joined </div>

                                                    <div class="profile-info-value">
                                                        <span><?= $user['date_created'] ?></span>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Last Online </div>

                                                    <div class="profile-info-value">
                                                        <span>-</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hr hr-8 dotted"></div>

                                            <!-- <div class="profile-user-info">
                                                <div class="profile-info-row">
                                                    <div class="profile-info-name"> Website </div>

                                                    <div class="profile-info-value">
                                                        <a href="#" target="_blank">www.alexdoe.com</a>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name">
                                                        <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                    </div>

                                                    <div class="profile-info-value">
                                                        <a href="#">Find me on Facebook</a>
                                                    </div>
                                                </div>

                                                <div class="profile-info-row">
                                                    <div class="profile-info-name">
                                                        <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                    </div>

                                                    <div class="profile-info-value">
                                                        <a href="#">Follow me on Twitter</a>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->

                                    <div class="space-20"></div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h4 class="widget-title smaller">
                                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                        Little About Me
                                                    </h4>
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <p>
                                                            My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                                        </p>
                                                        <p>
                                                            Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                                        </p>
                                                        <p>
                                                            The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                                        </p>
                                                        <p>
                                                            Thanks for visiting my profile.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /#home -->
                            </div>

                            <div id="edit-basic" class="tab-pane in">
                                <h4 class="header blue bolder smaller">Change Password</h4>


                                <form action="<?= base_url() ?>profile/ubah_profile/<?= $user['id'] ?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="<?= $user['password'] ?>">
                                        <small class="form-text text-danger"> <?= form_error('password'); ?></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="password2">Confirm Password</label>
                                        <input type="password" class="form-control" id="password2" name="password2" value="<?= $user['password'] ?>">
                                    </div>

                                    <button class="btn btn-info" type="submit" name="ubah_profile">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Save
                                    </button>

                                    &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="ace-icon fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>
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

<div id="modalUbahGambar" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="blue" id="changeAvatar">Ubah Gambar Profile</h4>
            </div>

            <form action="<?= base_url(); ?>profile/ubah_gambar/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="space-4"></div>
                    <div style="width:75%;margin-left:12%;"><input type="file" name="image" id="image" accept="image/*" /></div>
                </div>

                <div class="modal-footer center">
                    <button type="submit" name="ubah_gambar" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>
                    <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>