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
                <button type="button" class="btn btn-outline-brand simpan" data-act='simpan-new'>
                    <i class="la la-check"></i> 
                    <span class="kt-hidden-mobile text-simpan">Save Content</span>
                </button>
                <button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link simpan" data-act='simpan-new'>
                                <i class="kt-nav__link-icon flaticon-add-circular-button"></i>
                                <span class="kt-nav__link-text">Save & add new</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link simpan" data-act='simpan-exit'>
                                <i class="kt-nav__link-icon flaticon-close"></i>
                                <span class="kt-nav__link-text">Save & exit</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link simpan" data-act='simpan-edit'>
                                <i class="kt-nav__link-icon flaticon-list"></i>
                                <span class="kt-nav__link-text">Save & edit</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link simpan" data-act='simpan-view'>
                                <i class="kt-nav__link-icon flaticon-list"></i>
                                <span class="kt-nav__link-text">Save & view</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <form class='kt-form kt-form--label-right' id='form-vidio'>
    <input type="hidden" name='url' id='linkvidio' value='<?= @$row['url_contents']?>'>
    <input type="hidden" name='jenis' value='0'>
    <input type="hidden" name='id' value='<?= @$row['id']?>'>
    <div class="kt-portlet__body">
        <div class="row">
            <div class="col-md-7">
                <a href='<?= site_url('filemanager/explore/dialog.php?type=1&field_id=linkvidio&fldr=vidio&type=3')?>' class='filemanager uploadarea'>
                    <div class="dropzone dropzone-default dropzone-brand dz-clickable" style='min-height:300px'>
                        <div class="dropzone-msg dz-message needsclick">
                            <h3 class="dropzone-msg-title">Click to upload or select vidio here.</h3>
                            <span class="dropzone-msg-desc">upload or select vidio from filemanager</span>
                        </div>
                    </div>
                </a>
                <div id="priview_vidio" class="kt-hidden">
                    <div id="jp_container_1" class="jp-video jp-video-360p" role="application" aria-label="media player">
                        <div class="jp-type-single">
                            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                            <div class="jp-gui">
                                <div class="jp-video-play">
                                    <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
                                </div>
                                <div class="jp-interface">
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar"></div>
                                        </div>
                                    </div>
                                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                    <div class="jp-controls-holder">
                                        <div class="jp-controls">
                                            <button class="jp-play" role="button" tabindex="0">play</button>
                                            <button class="jp-stop" role="button" tabindex="0">stop</button>
                                        </div>
                                        <div class="jp-volume-controls">
                                            <button class="jp-mute" role="button" tabindex="0">mute</button>
                                            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                            <div class="jp-volume-bar">
                                                <div class="jp-volume-bar-value"></div>
                                            </div>
                                        </div>
                                        <div class="jp-toggles">
                                            <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                                            <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
                                        </div>
                                    </div>
                                    <div class="jp-details">
                                        <div class="jp-title" aria-label="title">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-no-solution">
                                <span>Update Required</span>
                                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                            </div>
                        </div>
                    </div>
                    <a href='<?= site_url('filemanager/explore/dialog.php?type=1&field_id=linkvidio&fldr=vidio&type=3')?>'  class=" kt-font-danger btn-square filemanager mt-1">Change Vidio</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group row mb-2">
                    <label for="example-text-input" class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id='title' placeholder='Enter title...' name='title' value='<?= @$row['title']?>'>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="example-text-input" class="col-2 col-form-label">Category</label>
                    <div class="col-10">
                        <select name="category" class='form-control'>
                            <option value="">Select Category</option>
                            <?= opt_category(@$row['id_category'])?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="example-text-input" class="col-2 col-form-label">Description</label>
                    <div class="col-10">
                        <textarea class="form-control" placeholder='Write description...' rows='20' name='description'><?= @$row['deskripsi']?></textarea>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </form>
</div>	