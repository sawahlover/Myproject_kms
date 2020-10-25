<div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Upload <small>upload contents vidio</small></h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <a href="<?= site_url('dashboard')?>" class="btn btn-outline-danger kt-margin-r-10" >
                <i class="la la-arrow-left"></i>
                <span class="kt-hidden-mobile">Back</span>
            </a>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-brand">
                    <i class="la la-check"></i> 
                    <span class="kt-hidden-mobile">Save Content</span>
                </button>
                <button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon-add-circular-button"></i>
                                <span class="kt-nav__link-text">Save & add new</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon-close"></i>
                                <span class="kt-nav__link-text">Save & exit</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon-list"></i>
                                <span class="kt-nav__link-text">Save & edit</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <form class='kt-form kt-form--label-right'>
    <div class="kt-portlet__body">
        <div class="row">
            
            <div class="col-md-7">
                <div class="dropzone dropzone-default dropzone-brand dz-clickable" id="kt_dropzone_2">
                    <div class="dropzone-msg dz-message needsclick">
                        <h3 class="dropzone-msg-title">Click to upload or select vidio here.</h3>
                        <span class="dropzone-msg-desc">upload or select vidio from filemanager</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group row mb-2">
                    <label for="example-text-input" class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder='Enter title../'>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="example-text-input" class="col-2 col-form-label">Description</label>
                    <div class="col-10">
                        <textarea class="form-control" placeholder='Write description...' rows='5'></textarea>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="example-text-input" class="col-2 col-form-label">Category</label>
                    <div class="col-10">
                        <select name="kategori" id="kategori" class='form-control'>
                            <option value="">Select Category</option>
                            <?= opt_category()?>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </form>
</div>	