$(function() {
    var category_table = $("#category_table");
    category_table.DataTable({
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
            url: "/admin/categorydata",
            type: 'GET',
        },
        columns: [{
                data: 'id'
            },
            {
                data: 'name',
                orderable: true
            },
            {
                data: 'description',
                orderable: true
            },
            {
                data: 'slug',
                orderable: true
            },
            {
                data: 'count',
                orderable: true
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
                className: "relative",
                targets: 1
            }

        ],
    });
    category_table.on('mouseover', 'tr', function() {
        $(this).find('.actions').removeClass('hide');
    });
    category_table.on('mouseleave', 'tr', function() {
        $(this).find('.actions').addClass('hide');
    });
    category_table.on('click', '.m-group-checkable', function(e) {
        $(".m-checkable").parents('tr').toggleClass('selected');
        if ($(this).is(':checked')) {
            $(".m-checkable").prop('checked', true)
        } else {
            $(".m-checkable").prop('checked', false)
        }
    })
});

function deleteCategory(e, id) {
    e.preventDefault();
    const con = confirm('are you sure?');
    if (con) {
        var ajax_url=e.target.getAttribute('data-href');
        $.ajax({
            url: ajax_url + "/admin/category/" + id,
            method: 'POST',
            dataType: 'json',
            data: $('#deletecategory' + id).serialize(),
            success: function(data, status, xhr) {
                var table = $('#category_table');
                table.DataTable().draw(true);
                if(data.success){
                    toastr.success(data.message);
                }else{
                    toastr.error(data.message);
                }
               
                

            }
        });
    } else {
        return false;
    }

}