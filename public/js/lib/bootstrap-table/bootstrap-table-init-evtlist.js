$(document).ready(function(){

    /* ==========================================================================
        Tables
        ========================================================================== */

    var $table = $('#table'),
        $remove = $('#remove'),
        $edit = $('#edit'),
        selections = [];

    function totalTextFormatter(data) {
        return 'Total';
    }

    function totalNameFormatter(data) {
        return data.length;
    }

    function totalPriceFormatter(data) {
        var total = 0;
        $.each(data, function (i, row) {
            total += +(row.price.substring(1));
        });
        return '$' + total;
    }

    function statusFormatter(data, rowData, index) {
        var classBtn = '',
            classDropup = '',
            pageSize = 10;

        if (data === 'Draft') classBtn = 'btn-danger';
        if (data === 'Pending') classBtn = 'btn-primary';
        if (data === 'Moderation') classBtn = 'btn-warning';
        if (data === 'Published') classBtn = 'btn-success';

        if (index >= pageSize / 2) {
            classDropup = 'dropup';
        }

        return	'<div class="dropdown dropdown-status ' +
            classDropup +
            ' ">' +
            '<button class="btn ' +
            classBtn +
            ' dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
            data +
            '</button>' +
            '<div class="dropdown-menu">' +
            '<a class="dropdown-item" href="#">Draft</a>' +
            '<a class="dropdown-item" href="#">Pending</a>' +
            '<a class="dropdown-item" href="#">Moderation</a>' +
            '<a class="dropdown-item" href="#">Published</a>' +
            '<div class="dropdown-divider"></div>' +
            '<a class="dropdown-item" href="#">Move to Trash</a>' +
            '</div></div>';
    }

    window.operateEvents = {
        'click .like': function (e, value, row, index) {
            alert('You click like action, row: ' + JSON.stringify(row));
        },
        'click .remove': function (e, value, row, index) {
            $table.bootstrapTable('remove', {
                field: 'id',
                values: [row.id]
            });
        }
    };

    function operateFormatter(value, row, index) {
        return [
            '<a class="like" href="javascript:void(0)" title="Like">',
            '<i class="glyphicon glyphicon-heart"></i>',
            '</a>  ',
            '<a class="remove" href="javascript:void(0)" title="Remove">',
            '<i class="glyphicon glyphicon-remove"></i>',
            '</a>',
        ].join('');
    }

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.NODEID
        });
    }

    $.getJSON('/evt', function (data) {
        $table.bootstrapTable({
            iconsPrefix: 'font-icon',
            icons: {
                paginationSwitchDown:'font-icon-arrow-square-down',
                paginationSwitchUp: 'font-icon-arrow-square-down up',
                refresh: 'font-icon-refresh',
                toggle: 'font-icon-list-square',
                columns: 'font-icon-list-rotate',
                export: 'font-icon-download',
                detailOpen: 'font-icon-plus',
                detailClose: 'font-icon-minus-1'
            },
            paginationPreText: '<i class="font-icon font-icon-arrow-left"></i>',
            paginationNextText: '<i class="font-icon font-icon-arrow-right"></i>',
            data: data,
            columns: [
                [
                    {
                        field: 'state',
                        checkbox: true,
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle'
                    },
                    {
                        title: 'Node ID',
                        field: 'NODEID',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    },
                    {
                        title: 'Node IP',
                        field: 'NODEIP',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    },
                    {
                        title: 'Node Name',
                        field: 'NODENAME',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    },
                    {
                        title: 'EVTSTART',
                        field: 'EVTSTART',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    },
                    {
                        title: 'EVTEND',
                        field: 'EVTEND',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    },
                    {
                        title: 'EVTGROUP',
                        field: 'EVTGROUP',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    },
                    {
                        title: 'EVTITEM',
                        field: 'EVTITEM',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                    },
                ],
            ]
        });

    })




    $table.on('check.bs.table uncheck.bs.table ' +
        'check-all.bs.table uncheck-all.bs.table', function () {
        $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
        //$edit.prop('disabled', !$table.bootstrapTable('getSelections').length);
        // save your data, here just save the current page
        selections = getIdSelections();
        //console.log(selections);
        // push or splice the selections if you want to save all data selections
    });

    $table.on('check.bs.table uncheck.bs.table ' , function () {
        $edit.prop('disabled', !$table.bootstrapTable('getSelections').length);
        selections = getIdSelections();
        //console.log(selections);
        // push or splice the selections if you want to save all data selections
    });

    $remove.click(function () {
        var ids = getIdSelections();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.post( "/removeEvt", {data: ids})
        .done(function( data ) {
            //console.log( data );
        });
        $table.bootstrapTable('remove', {
            field: 'NODEID',
            values: ids
        });
        $remove.prop('disabled', true);
    });

    $('#edit').click(function () {
        var ids = getIdSelections();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            dataType: 'json',
            type: 'get',
            url: '/evtitems/' + ids,
        }).done(function (data) {
            console.log(data);
            $('#edit-item').find("input[name='GID']").val(data[0].GID);
            $('#edit-item').find("input[name='NODEID']").val(data[0].NODEID);
            $('#edit-item').find("input[name='NODEIP']").val(data[0].NODEIP);
            $('#edit-item').find("input[name='NODENAME']").val(data[0].NODENAME);
            $('#edit-item').find("input[name='EVTSTART']").val(data[0].EVTSTART);
            $('#edit-item').find("input[name='EVTEND']").val(data[0].EVTEND);
            $('#edit-item').find("input[name='EVTOPEN']").val(data[0].EVTOPEN);
            $('#edit-item').find("input[name='NODESTAT']").val(data[0].NODESTAT);
            $('#edit-item').find("input[name='EVTDESCR']").val(data[0].EVTDESCR);
            $('#edit-item').find("input[name='EVTCOMMENT']").val(data[0].EVTCOMMENT);
            $('#edit-item').find("input[name='EVTID']").val(data[0].EVTID);
            $('#edit-item').find("input[name='EVTIGNORE']").val(data[0].EVTIGNORE);
            $('#edit-item').find("input[name='EVTNOTIFY']").val(data[0].EVTNOTIFY);
            $('#edit-item').find("input[name='CLSNOTIFY']").val(data[0].CLSNOTIFY);
            $('#edit-item').find("input[name='EVTGROUP']").val(data[0].EVTGROUP);
            $('#edit-item').find("input[name='WCHK']").val(data[0].WCHK);
            $('#edit-item').find("input[name='CURWEIGHT']").val(data[0].CURWEIGHT);
            $('#edit-item').find("input[name='EVTITEM']").val(data[0].EVTITEM);
            $('#edit-item').find("input[name='CHKDATE']").val(data[0].CHKDATE);
            $('#edit-item').modal('show');
        })
    });


    function getIdEdit() {
        return $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.ID;
        });
    }
    $(".crud-submit-edit").click(function (e) {
        e.preventDefault();
        var ids = getIdEdit();
        var form_action = $('#edit-item').find("form").attr("action");
        var GID = $('#edit-item').find("input[name='GID']").val();
        var NODEID = $('#edit-item').find("input[name='NODEID']").val();
        var NODEIP = $('#edit-item').find("input[name='NODEIP']").val();
        var NODENAME = $('#edit-item').find("input[name='NODENAME']").val();
        var EVTSTART = $('#edit-item').find("input[name='EVTSTART']").val();
        var EVTEND = $('#edit-item').find("input[name='EVTEND']").val();
        var EVTOPEN = $('#edit-item').find("input[name='EVTOPEN']").val();
        var NODESTAT = $('#edit-item').find("input[name='NODESTAT']").val();
        var EVTDESCR = $('#edit-item').find("input[name='EVTDESCR']").val();
        var EVTCOMMENT = $('#edit-item').find("input[name='EVTCOMMENT']").val();
        var EVTID = $('#edit-item').find("input[name='EVTID']").val();
        var EVTIGNORE = $('#edit-item').find("input[name='EVTIGNORE']").val();
        var EVTNOTIFY = $('#edit-item').find("input[name='EVTNOTIFY']").val();
        var CLSNOTIFY = $('#edit-item').find("input[name='CLSNOTIFY']").val();
        var EVTGROUP = $('#edit-item').find("input[name='EVTGROUP']").val();
        var WCHK = $('#edit-item').find("input[name='WCHK']").val();
        var CURWEIGHT = $('#edit-item').find("input[name='CURWEIGHT']").val();
        var EVTITEM = $('#edit-item').find("input[name='EVTITEM']").val();
        var CHKDATE = $('#edit-item').find("input[name='CHKDATE']").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            dataType: 'json',
            type: 'PUT',
            url: '/evtitems/' + ids,
            data:{
                GID: GID, NODEID: NODEID, NODEIP: NODEIP, NODENAME: NODENAME,
                EVTSTART: EVTSTART, EVTEND: EVTEND, EVTOPEN: EVTOPEN, NODESTAT: NODESTAT,
                EVTDESCR: EVTDESCR, EVTCOMMENT: EVTCOMMENT, EVTID: EVTID, EVTIGNORE: EVTIGNORE,
                EVTNOTIFY: EVTNOTIFY, CLSNOTIFY: CLSNOTIFY, EVTGROUP: EVTGROUP, WCHK: WCHK,
                CURWEIGHT: CURWEIGHT, EVTITEM: EVTITEM, CHKDATE: CHKDATE
            }
        }).done(function () {
            $(".modal").modal('hide');
            //location.reload();
        })
    });



    $('#toolbar').find('select').change(function () {
        $table.bootstrapTable('refreshOptions', {
            exportDataType: $(this).val()
        });
    });

    /* ========================================================================== */
});

