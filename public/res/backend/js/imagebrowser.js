

$('#lunch_from_image_browser').click(function(){
    var link='';
    loadImages(link);
    $('.upload-image').modal('hide');
  $('#image_browser').modal({show:true,backdrop: 'static',keyboard: false});
});

$(document).on("click",".folderselect",function(){
   var targ = $(this).attr('targ');
   loadImages(targ);
});

$(document).on("click","#nav_btn",function(){
    var targ = $(this).attr('target');
    loadImages(targ);
});

// image selection
$(document).on("click",".img_select",function(){
     $('.img_select').removeClass('active_select'); // clear all existing selections
     $(this).addClass('active_select'); // make a new selection
     var src = $(this).attr('src');
     var fname = $(this).attr('fname');
     $('#selected_value').html(fname);
     $('#selected_val').attr('return_value',src);
});

//apply image
$('#selected_val').click(function(){

    // check what called the image broswer and apply the return value to it
    $('#sldiepreview').attr('src',$(this).attr('return_value'));
    $('#imageurl').val($(this).attr('return_value'));
    $('#image_browser').modal('hide');

});

// load images
function loadImages(targ)
{
    $.ajax({
        url:'http://localhost/antrasoft-cms/public/admin/readimages',
        type: 'GET',
        data:{targ:targ},
        success: function (data) {
            $('#img_brower').html(data);
            var nav = $('#navigation').val();
            if(nav=="" || nav=='/public')
            {
                $('#nav_btn').css({"display":"none"});
            }
            else
            {
                $('#nav_btn').show(function(){
                    $(this).attr("target",nav);
                    $('#nav_btn').show();
                })
            }
        },
        error:function(data)
        {
            alert('oops. something went wrong please reload the page');
        },
        cache: false
    });
}