/**
 * Created by trust.okoroego on 10/20/15.
 */
'use strict';
$(document).ready(function(){

    var $image = $('#cropper-slide > img');

    $('#addfeaturedimage').click(function(){
        $('.upload-image').modal({show:true,backdrop: 'static',keyboard: false});
    })


//upload image code goes here

    $('#select-image').change(function(){
        $('#file-s').html($('#select-image').val());
    });


    $('#upload-btn').click(function(){
        var formData = new FormData($('form#imageupload')[0]);
        $('.inner-circles-loader').show();
        $.ajax({
            url:'http://localhost/antrasoft-cms/public/admin/uploadimage/1', // 1 signifies the type of method call
            type: 'POST',
            data: formData,
            success: function (data) {
                $('.inner-circles-loader').fadeOut();
                // call the main modal with images.
                $('#sldiepreview').attr('src',data);
                $('#imageurl').val(data);
                $('.upload-image').modal('hide');
                //loadCropper(data);
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


    $('#contenttype').change(function(){
        var id = $(this).val();
        var token = $('#token').val();
        $.ajax({
            url:url+'/admin/setcontenttype',
            type: 'POST',
            data:{ctypeid:id,_token:token},
            success: function (data) {
               location.reload(true);
            },
            error:function(data)
            {
                alert('oops. something went wrong please reload the page');
            },
            cache: false
        });
    })

    $('#contenttypep').change(function(){
        var id = $(this).val();
        var token = $('#token').val();
        $.ajax({
            url:url+'/admin/setcontenttype',
            type: 'POST',
            data:{ctypeid:id,_token:token},
            success: function (data) {

            },
            error:function(data)
            {
                alert('oops. something went wrong please reload the page');
            },
            cache: false
        });
    })

    $('.delete_slide').click(function(){
        var mdl = confirm("Are you sure you want to delete this Slide item?");
        if(!mdl){
            return false;
        }else{
            var slideid = $(this).attr('id');
            var token = $('#token').val();
            $.ajax({
                url:'http://localhost/antrasoft-cms/public/admin/dltsld',
                type: 'POST',
                data:{slideid:slideid,_token:token},
                success: function (data) {
                    location.reload(true);
                },
                error:function(data)
                {
                    alert('oops. something went wrong please reload the page');
                },
                cache: false
            });
        }


    })

    $('.weight_check').change(function(){
        var weight = $(this).val();
        var contentid = $(this).attr('contentid');
        var token = $('#token').val();
        $.ajax({
            url:'http://localhost/antrasoft-cms/public/admin/changecontentweight',
            type: 'POST',
            data:{contentid:contentid,weight:weight,_token:token},
            success: function (data) {
                location.reload(true);
            },
            error:function(data)
            {
                alert('oops. something went wrong please reload the page');
            },
            cache: false
        });

    })



    $('.published_check').click(function(){
        var contentid = $(this).attr('contentid');
        var token = $('#token').val();
        $.ajax({
            url:'http://localhost/antrasoft-cms/public/admin/changecontentpublish',
            type: 'POST',
            data:{contentid:contentid,_token:token},
            success: function (data) {
                if(data==0)
                {
                    alert('unpublished');
                    return false;
                }
                alert('published');
            },
            error:function(data)
            {
                alert('oops. something went wrong please reload the page');
            },
            cache: false
        });

    })

    $('#newcontentform #content_publish').click(function(e){
        e.preventDefault();
        var editor_data = CKEDITOR.instances['editor'].getData();
        var title = $('#title').val();
        var contenttypep = $('#contenttypep').val();
        var valid = true;
        //alert($('#single_cal1').val());
        if(editor_data=="")
        {
            valid = false;
            alert('Content must not be empty');
        }

        if(title=="")
        {
            valid = false;
            alert('Title must not be empty');
        }
        if(contenttypep=="")
        {
            valid = false;
            alert('Please select a valid content type');
        }

        if(valid)
        {
            $('#newcontentform').submit();
        }
        return false;
    });


    $('.delete_content').click(function(){
        var mdl = confirm("Are you sure you want to delete this Content?");
        if(!mdl){
            return false;
        }else{
            var contentid = $(this).attr('id');
            var token = $('#token').val();
            $.ajax({
                url:'http://localhost/antrasoft-cms/public/admin/dltcontent',
                type: 'POST',
                data:{contentid:contentid,_token:token},
                success: function (data) {
                    location.reload(true);
                },
                error:function(data)
                {
                    alert('oops. something went wrong please reload the page');
                },
                cache: false
            });
        }


    })

});