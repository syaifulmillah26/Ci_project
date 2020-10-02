<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <small><?= $this->session->flashdata('message'); ?></small>
            <h4 class="header blue lighter bigger">
                <i class="ace-icon fa fa-coffee green"></i>
                Please Enter Your Information
            </h4>

            <div class="space-6"></div>

            <form action="" method="post" action="<?= base_url('auth') ?>">
                <fieldset>
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="text" class="form-control" value="<?= set_value('email') ?>" autocomplete="off" placeholder="Enter your email" id="email" name="email" />
                            <i class="ace-icon fa fa-user"></i>
                            <small class="form-text text-danger"><?= form_error('email') ?></small>
                        </span>
                    </label>

                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
                            <i class="ace-icon fa fa-lock"></i>
                            <small class="form-text text-danger"><?= form_error('password') ?></small>
                        </span>
                    </label>

                    <div class="space"></div>

                    <div class="clearfix">
                        <label class="inline">
                            <input type="checkbox" class="ace" disabled />
                            <span class="lbl"> Remember Me</span>
                        </label>

                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Login</span>
                        </button>
                    </div>

                    <div class="space-4"></div>
                </fieldset>
            </form>
        </div><!-- /.widget-main -->

        <div class="toolbar clearfix">
            <div>
                <a href="#" data-target="#forgot-box" class="forgot-password-link">
                    <i class="ace-icon fa fa-arrow-left"></i>
                    I forgot my password
                </a>
            </div>

            <div>
                <a href="<?= base_url('auth/registration') ?>" class="user-signup-link">
                    I want to register
                    <i class="ace-icon fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div><!-- /.widget-body -->
</div><!-- /.login-box -->

<div id="forgot-box" class="forgot-box widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header red lighter bigger">
                <i class="ace-icon fa fa-key"></i>
                Retrieve Password
            </h4>

            <div class="space-6"></div>
            <p>
                Enter your email and to receive instructions
            </p>

            <form>
                <fieldset>
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="email" class="form-control" placeholder="Email" />
                            <i class="ace-icon fa fa-envelope"></i>
                        </span>
                    </label>

                    <div class="clearfix">
                        <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                            <i class="ace-icon fa fa-lightbulb-o"></i>
                            <span class="bigger-110">Send Me!</span>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div><!-- /.widget-main -->

        <div class="toolbar center">
            <a href="#" data-target="#login-box" class="back-to-login-link">
                Back to login
                <i class="ace-icon fa fa-arrow-right"></i>
            </a>
        </div>
    </div><!-- /.widget-body -->
</div><!-- /.forgot-box -->