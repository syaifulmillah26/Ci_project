<div class="row">
    <!-- row -->
    <div class="col-xs-12">
        <!-- col -->

        <div class="col-md-8">
            <?= $this->session->flashdata('message') ?>
        </div>


        <!-- PAGE CONTENT BEGINS -->
        <button id="btn-sweetalert">test sweetalert</button>

        <div class="hr hr-18 dotted hr-double"></div>
        <?= form_open_multipart('admin/dashboard/do_upload'); ?>

        <input id="drop_file" type="file" name="userfile" />
        <input type="button" class="btn" value="upload" />

        <div id="modal-table" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            Results for "Latest Registered Domains
                        </div>
                    </div>

                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <div class="modal-footer no-margin-top">
                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Close
                        </button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <h4 class="pink">
            <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
            <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
        </h4>






        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<script>
    $('#btn-sweetalert').on('click', function() {

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Signed in successfully'
        })


    })
</script>