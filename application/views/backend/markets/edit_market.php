<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="col-md-8">
            <div class="hr dotted"></div>
            <?= $this->session->flashdata('message') ?>
        </div>
        <div class="hr dotted"></div>

        <div class="space"></div>
        <div>
            <div class="row search-page" id="search-page-1">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="search-area well well-sm">
                                <div class="search-filter-header bg-primary">
                                    <h5 class="smaller no-margin-bottom">
                                        <i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; Ubah data market
                                    </h5>
                                </div>
                                <div class="hr hr-dotted"></div>
                                <form action="<?= base_url() ?>markets/edit_market/<?= $markets['id'] ?>" method="post">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="<?= $markets['title'] ?>">
                                        <small id="title" class="form-text text-danger"><?= form_error('title') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $markets['deskripsi'] ?></textarea>
                                    </div>
                                    <button type="submit" name="ubah_market" class="btn btn-primary">Ubah data</button>
                                    <a href="<?= base_url() ?>markets" class="btn">Batalkan</a>
                                </form>

                                <div class="space-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->