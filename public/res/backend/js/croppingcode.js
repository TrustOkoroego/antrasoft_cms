/**
 * Created by trust.okoroego on 9/22/15.
 */
var $image = $('#cropper-slide > img');

$('#addnewslide').click(function(){
    $('.upload-image').modal({show:true,backdrop: 'static',keyboard: false});
})


//upload image code goes here

$('#select-image').change(function(){
    $('#file-s').html($('#select-image').val());
});


$('#upload-btn').click(function(){
    var formData = new FormData($('form')[0]);
    $('.inner-circles-loader').show();
    $.ajax({
        url:'http://localhost/antrasoft-cms/public/admin/uploadimage/1',
        type: 'POST',
        data: formData,
        success: function (data) {
            $('.inner-circles-loader').fadeOut();
            // call the main modal with images.
            $('#cropper-slide-image').attr('src',data);
            loadCropper(data);
        },
        error:function(data)
        {
          alert('oops. something went wrong please try again');
        },
        cache: false,
        contentType: false,
        processData: false
    });

    return false;
});



// cropping codes for each page

function loadCropper(data){

    $('.upload-image').modal('hide');
    $image.cropper('destroy');
    $image.cropper({
        aspectRatio: 16 / 9,
        autoCropArea: 0.8,
        strict: false,
        guides: false,
        highlight: false,
        dragCrop: false,
        cropBoxMovable: false,
        cropBoxResizable: false,
        crop: function(e) {
            // Output the result data for cropping image.
            $('#_x').val(e.x);
            $('#_y').val(e.y);
            $('#_W').val(e.width);
            $('#_H').val(e.height);
        }
    });
    $('.cropper-slide').modal({show:true,backdrop: 'static',keyboard: false});
}

