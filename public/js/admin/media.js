// jquery toggle whole attribute
$.fn.toggleAttr = function(attr, val) {
    var test = $(this).attr(attr);
    if (test) {
        // if attrib exists with ANY value, still remove it
        $(this).removeAttr(attr);
    } else {
        $(this).attr(attr, val);
    }
    return this;
};
var KTDatatablesDataSourceAjaxServer = function() {
    var initTable1 = function() {
        var table = $('#media_table');
        table.DataTable({
            select: {
                style: 'multi',
                selector: 'td:first-child .kt-checkable',
            },
            headerCallback: function(thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">
                         # <input type="checkbox" value="" class="m-group-checkable">
                        <span></span>
                    </label>`;
            },
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            orderable: true,
            ajax: {
                url: "media/data",
                type: 'GET',
                data: getUrlVars()
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'file',
                    orderable: true
                },
                {
                    data: 'author',
                    orderable: true
                },
                {
                    data: 'posts',
                    orderable: true
                },
                {
                    data: 'created_at'
                },
                {
                    data: 'type'
                },
                {
                    data: 'action',
                    responsivePriority: -1
                },
            ],
            columnDefs: [{
                    targets: 0,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return '<label class="kt-checkbox kt-checkbox--single kt-checkbox--solid kt-checkbox--brand">' +
                            '<input type="checkbox" value="' + data + '" class="m-checkable">' +
                            '<span></span></label>';
                    },
                },
                {
                    targets: -1,
                    title: 'action',
                    orderable: false,
                }
            ],
        });
        table.on('click', '.confirmation', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var tr = $(this).parents('tr').addClass('active');
            if (!$(e.target).hasClass('exclude')) {
                $(this).parents('tr').find('.m-checkable').attr('checked', false);
                $.ajax({
                    url: ajaxurl + "/admin/media/delete/" + id,
                    method: 'GET',
                    dataType: 'json',
                    success: function(data, status, xhr) {
                        var table = $('#media_table');

                        table.DataTable().rows(tr).remove().draw(true);
                        toastr.success(data.success);
                    }
                });
            }

        });
        table.on('click', 'tr', function() {
            $(this).toggleClass('selected');
            $(this).find('.m-checkable').toggleAttr('checked', true);
        });
        table.on('click', '.m-group-checkable', function(e) {
            $(".m-checkable").parents('tr').toggleClass('selected');
            if ($(this).is(':checked')) {
                $(".m-checkable").prop('checked', true)
            } else {
                $(".m-checkable").prop('checked', false)
            }
        })
    };
    var getUrlVars = function() {
        var vars = [],
            hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    return {
        //main function to initiate the module
        init: function() {
            initTable1();
        },
    };
}();
jQuery(document).ready(function() {
    KTDatatablesDataSourceAjaxServer.init();
    $('#destory').on('click', function(e) {
        e.preventDefault();
        var checkedVals = $('.m-checkable:checkbox:checked').map(function() {
            return this.value;
        }).get();
        ids = checkedVals.join("-");
        if (ids.length > 0) {
            $.ajax({
                url: ajaxurl + "/admin/media/destoryMedia",
                method: 'POST',
                dataType: 'json',
                data: {
                    id: ids
                },
                success: function(data, status, xhr) {
                    var table = $('#media_table');
                    table.DataTable().draw(true);
                    toastr.success(data.success);
                }
            });
        }
    })
});