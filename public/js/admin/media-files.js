$(document).ready(function() {
    $(".image-checkbox").each(function() {
        if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
            $(this).addClass('image-checkbox-checked');
        } else {
            $(this).removeClass('image-checkbox-checked');
        }
    });
    // sync the state to the input
    $(document).on('click', ".image-checkbox", function(e) {
        $(this).toggleClass('image-checkbox-checked');
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked", !$checkbox.prop("checked"))
        e.preventDefault();
    });
    $(document).on('change', ".single-checkbox", function(e) {
        $(".single-checkbox").removeClass('image-checkbox-checked')
        $(this).addClass('image-checkbox-checked');
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked", true).addClass('active')
        e.preventDefault();
    });
    $(document).on('change', '.single-checkbox input[type="checkbox"]', function() {
            $('.single-checkbox input[type="checkbox"]').not(this).prop('checked', false).removeClass('active');
        })
        /* For product gallery */
    $("body").on('click', '#add_to_gallery', function() {
        var _this = $(this);
        var files = [];
        var imgs = [];
        $('.image-block > input[type="checkbox"]').each(function(i, item) {
            if ($(this).is(":checked")) {
                if (imgs.indexOf($(this).siblings('img').attr('src')) === -1) {
                    imgs.push($(this).siblings('img').attr('src'))
                }
                if (files.indexOf($(this).val()) === -1) {
                    if ($.isNumeric($(this).val())) {
                        files.push($(this).val())
                    }
                }
            } else {
                if (files.indexOf($(this).val()) !== -1) {
                    var index = files.indexOf($(this).val());
                    files.splice(index, 1);
                }
            }
        });
        var out = "";
        $(imgs).each(function(i, img) {
            if (typeof img != "undefined") {
                out += '<div class="col-md-4 gal-images"><img src=' + img + ' class="img-responsive" width="80" height="90" >';
                out += '<a href="javascript:void(0)" id=' + files[i] + ' class="img_delete"><i class="fa fa-times"></i></a>';
                out += '</div>';
            }
        });
        $('.product_images').html(out);
        $("#product_image_gallery").val(files);
        $('#sam_modal_fetch_id_files').modal('hide');
        $('#sam_modal_fetch_id_files input[type="checkbox"]').prop('checked', false);
        $(".image-checkbox").each(function() {
            $(this).removeClass('image-checkbox-checked');
        })
    });
    /* for single Product Image */
    $("#feature_image").on('click', function() {
        localStorage.removeItem('gallery');
        localStorage.setItem('single_image', 'yes');
        $("#sam_modal_fetch_id_files .button").text('Set Product Image');
        $("#sam_modal_fetch_id_files .button").attr('id', 'single_image');
        $(".media-files label").removeClass('image-checkbox').addClass('single-checkbox');
    });
    $("#gallery").on('click', function() {
        localStorage.removeItem('single_image');
        localStorage.setItem('gallery', 'yes');
        $("#sam_modal_fetch_id_files .bigger").text('Add Images to Product Gallery');
        $("#sam_modal_fetch_id_files .button").text('Add to gallery');
        $("#sam_modal_fetch_id_files .button").attr('id', 'add_to_gallery');
        $(".media-files label").removeClass('single-checkbox').addClass('image-checkbox');
    })
    $(document).on('click', '#single_image', function() {
        var _this = $(this);
        var img = $(".active").siblings('.image-block').find('img').attr('src');
        var id = $(".active:checkbox:checked").val();
        console.log(id);
        var outs = '<div class="p-image"><img src=' + img + ' class="img-fluid"><a href="" class="removepic"><i class="fa fa-times"></i></a></div>';
        $('.product_image').html(outs);
        $("#product_image").val(id);
        $('#sam_modal_fetch_id_files').modal('hide');
        $('#sam_modal_fetch_id_files input[type="checkbox"]').prop('checked', false).removeClass('active');
        $(".single-checkbox").each(function() {
            $(this).removeClass('image-checkbox-checked');
        })
    });
    $(document).on('click', '.img_delete', function(e) {
        e.preventDefault();
        var gal = $('#product_image_gallery').val().split(",");
        if (gal.indexOf($(this).attr('id')) !== -1) {
            var index = gal.indexOf($(this).attr('id'));
            gal.splice(index, 1);
        }
        $('#product_image_gallery').val(gal);
        $(this).closest('.gal-images').remove();
    });
    $(document).on('click', '.removepic', function(e) {
        e.preventDefault();
        $('#product_image').val('');
        $(this).closest('.p-image').remove();
    });
});