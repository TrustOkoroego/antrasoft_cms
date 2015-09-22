

<div  class="modal fade bs-example-modal-lg cropper-slide" id="cropper-example-2-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div id="cropper-slide" style="width:650px;height:300px; margin: 0 auto">
                    <img id="cropper-slide-image" src="{{$res_bknd}}/images/picture2.jpg"  alt="Picture">
                </div>
                <div>
                    <label for="message"><br></label>
                    <textarea cols="1" data-parsley-id="4251" id="message"
                              required="required" class="form-control" name="message"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>

            <!-- Crop details -->
            <input type="hidden" id="_x" name="x" />
            <input type="hidden" id="_y" name="y" />
            <input type="hidden" id="_H" name="h" />
            <input type="hidden" id="_W" name="w" />


        </div>
    </div>
</div>






<div class="modal fade upload-image" id="cropper-example-2-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Select File</h4>
            </div>
            <div class="modal-body" style="text-align: center">
                <div class="alert alert-error alert-dismissible fade in" role="alert" style="display: none">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button><strong></strong>
                    Error uploading file. please try again.
                </div>

                <form method="post" id="imageupload" action="" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p class="btn btn-default">Select from computer</p>
                    <p class="btn btn-default" style="margin-top: -60px;opacity: 0">
                        <input style="cursor: pointer" id="select-image"  type="file" name="image" />
                    </p>
                    <p id="file-s"></p>
                    <p>- OR -</p>
                    </p>
                    <p class="btn btn-default">Select from Image Resources</p>
                    <p><div class="inner-circles-loader" style="display: none">
                        Loading…
                    </div>
                </form>

            </div>
            <div class="modal-footer" style="text-align: center">
                <button type="button" id="upload-btn" class="btn btn-success"><i class="fa fa-upload"></i> Upload </button>
            </div>

        </div>
    </div>
</div>

