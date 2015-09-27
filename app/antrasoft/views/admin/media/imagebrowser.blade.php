<style>
.imageselect:hover
{
    opacity: 0.5;
}
.active_select
{
    opacity: 0.3;
}
</style>

<div  class="modal fade bs-example-modal-lg " id="image_browser" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title"  id="myModalLabel"><button id="nav_btn" target="" class="btn btn-primary" >..Back</button></h4>
            </div>
            <div class="modal-body">
                <div id="img_brower" class="row" style="max-height: 400px;overflow: scroll;border: thin solid #DDDDDD;padding: 5px;">

                </div>
            </div>
            <div class="modal-footer">
                <span id="selected_value" ></span>
                <button return_value="" request_target="" type="button" class="btn btn-primary " id="selected_val">Select</button>
            </div>
        </div>
    </div>
</div>


