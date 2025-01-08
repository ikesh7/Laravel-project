$(function() {
    var i;
    var $media_files = $(document.createElement("div")).attr('class', 'media-files');
    $media_files.attr('id', 'media_list');
    var $processData = $(document.createElement("div")).attr("id", 'progressbar');
    var $row = $(document.createElement("div")).attr("id", 'medai_gallery');
    $media_files.after().append($processData);
    $media_files.after().append($row);
    $.ajax({
        url: laravel_ajaxurl,
        type: 'get',
        dataType: 'json',
        cache: true,
        success: function(data) {
            var array_html = [];
            var imageclass = localStorage.getItem('myCat');
            if (localStorage.getItem('single_image')) {
                var imgClass = "single-checkbox";
            } else {
                var imgClass = "image-checkbox";
            }
            var html = `<div class='row'>`;
            $.map(data.res, function(item, i) {
                html += '<div class="col-md-2 col-sm-2 col-2"><label class="' + imgClass + '">' +
                    '<div class="image-block media-files-block">' + item.image + '</div>' +
                    '<input type="checkbox" name="image[]"  value="' + item.media_id + '" />' +
                    '<i class="fa fa-check"></i></label></div>';
            });
            html += `</div>`;
            $row.after().append(html);
            $("#media_library").html($media_files);
            var element = document.getElementById('scrollable');
            start = 1;
            if (element) {
                element.addEventListener('scroll', function(event) {
                    var element = event.target;
                    if (element.scrollHeight - element.scrollTop === element.clientHeight) {
                        start++;
                        $.ajax({
                            url: laravel_ajaxurl + "?page=" + start,
                            type: 'get',
                            dataType: 'json',
                            cache: true,
                            success: function(data) {
                                var imageclass = localStorage.getItem('myCat');
                                if (localStorage.getItem('single_image')) {
                                    var imgClass = "single-checkbox";
                                } else {
                                    var imgClass = "image-checkbox";
                                }
                                var html = `<div class='row'>`;
                                $.map(data.res, function(item, i) {
                                    html += '<div class="col-md-2 col-sm-2 col-2"><label class="' + imgClass + '">' +
                                        '<div class="image-block media-files-block">' + item.image + '</div>' +
                                        '<input type="checkbox" name="image[]" value="' + item.media_id + '" />' +
                                        '<i class="fa fa-check"></i></label></div> ';

                                });
                                html += `</div>`
                                $row.after().append(html);

                            }
                        });
                    }
                });
            }


        }
    });
    $('#ajaxfileupload').on('submit', (function(e) {
        e.preventDefault();
        var form = $(this);
        var formdata = false;
        if (window.FormData) {
            formdata = new FormData(form[0]);
        }
        var formAction = form.attr('action');
        $.ajax({
            type: 'POST',
            url: formAction,
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = evt.loaded / evt.total;
                        percentComplete = parseInt(percentComplete * 100);
                        $(".processing").html("<b>Upload Processing Completed </b> <strong>" + percentComplete + "%</strong>");
                    }
                }, false);

                return xhr;
            },
            beforeSend: function() {
                $("ul li a[href='#media_library']").trigger('click');
            },
            success: function(data) {
                if (localStorage.getItem('single_image')) {
                    var imgClass = "single-checkbox";
                } else {
                    var imgClass = "image-checkbox";
                }
                setTimeout(function() {
                    var html = `<div class='row'>`;
                    $.map(data.res, function(item, i) {
                        html += '<div class="col-md-2 col-sm-2 col-2"><label class="' + imgClass + '">' +
                            '<div class="image-block media-files-block">' + item.image + '<input type="checkbox" name="image[]" value="' + item.media_id + '" />' +
                            '<i class="fa fa-check"></i></div></label></div>';
                    });
                    html += `</div>`;
                    $row.after().prepend(html);
                    $(".processing").hide();
                    if (!$.isEmptyObject(data.info)) {
                        alert(data.info);
                    }
                }, 500);
            },
            error: function(data) {
                alert(data.info)
            }
        });
    }));




})