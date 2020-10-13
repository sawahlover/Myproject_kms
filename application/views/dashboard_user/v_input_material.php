<!--begin::Form-->
<form class="kt-form kt-form--label-right" action="<?php echo base_url() . 'root_material/action'; ?>" method="post" enctype="multipart/form-data">

    <div class="kt-portlet__body">
        <div class="form-group row">
            <label class="col-lg-3 col-form-label">title:</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="title" placeholder="Enter title">
                <span class="form-text text-muted">Please enter title</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label">Description:</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" name="deskripsi" placeholder="Enter description">
                <span class="form-text text-muted">Please enter your description</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label">view sumarry:</label>
            <div class="col-lg-7">
                <textarea class="form-control" id="exampleTextarea" name="view" rows="3" placeholder="Please enter your message"></textarea>
                <span class="form-text text-muted">We'll never share your message with anyone else.</span>
            </div>
        </div>

        <div class="form-group form-group-last row">
            <label class="col-lg-3 col-form-label">Upload Files:</label>
            <div class="col-lg-9">
                <div class="dropzone dropzone-multi" id="kt_dropzone_4">
                    <div class="dropzone-panel">

                        <input type="file" name="content">
                        <a class="dropzone-upload btn btn-label-brand btn-bold btn-sm">Upload All</a>
                        <a class="dropzone-remove-all btn btn-label-brand btn-bold btn-sm">Remove All</a>
                    </div>
                    <div class="dropzone-items">
                        <div class="dropzone-item" style="display:none">
                            <div class="dropzone-file">
                                <div class="dropzone-filename" title="some_image_file_name.jpg"><span data-dz-name>some_image_file_name.jpg</span> <strong>(<span data-dz-size>340kb</span>)</strong></div>
                                <div class="dropzone-error" data-dz-errormessage></div>
                            </div>
                            <div class="dropzone-progress">
                                <div class="progress">
                                    <div class="progress-bar kt-bg-brand" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress></div>
                                </div>
                            </div>
                            <div class="dropzone-toolbar">
                                <span class="dropzone-start"><i class="flaticon2-arrow"></i></span>
                                <span class="dropzone-cancel" data-dz-remove style="display: none;"><i class="flaticon2-cross"></i></span>
                                <span class="dropzone-delete" data-dz-remove><i class="flaticon2-cross"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span><br>
            </div>
        </div>
    </div>
    <div class="kt-portlet__foot">
        <div class="kt-form__actions">
            <div class="row">
                <div class="col-lg-3 mb-3"></div>
                <div class="col-lg-6">
                    <button type="submit" class="dropzone-upload btn btn-label-brand btn-bold btn-sm">Simpan</button>
                    <button type="reset" class="dropzone-upload btn btn-label-brand btn-bold btn-sm">Cancel</button>
                    <a href="<?= base_url('root_material/view_insert') ?>" class="dropzone-upload btn btn-label-brand btn-bold btn-sm">view</a>
                </div>
            </div>
        </div>
    </div>
</form>
<!--end::Form-->