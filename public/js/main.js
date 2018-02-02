var gridster = null;
$(document).ready(function () {
    gridster = $(".gridster ul").gridster({
        widget_base_dimensions: ['auto', 140],
        autogenerate_stylesheet: true,
        min_cols: 1,
        max_cols: 6,
        widget_margins: [5, 5],
        serialize_params: function($w, wgd) {
            return {
                id: $w.attr('data-id'),
                col: wgd.col,
                row: wgd.row,
                size_x: wgd.size_x,
                size_y: wgd.size_y
            };
        },
        resize: {
            enabled: true,
            stop: function (e, ui, $widget) {
                console.log(gridster.serialize());
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post( "/config", {data: gridster.serialize()})
                    .done(function( data ) {
                        console.log( data );
                    });
            }
        },
        draggable: {
            stop: function (e, ui, $widget) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post( "/config", {data: gridster.serialize()})
                    .done(function( data ) {
                        console.log( data );
                    });
            }
        }

    }).data('gridster');
    $('.gridster  ul').css({'padding': '0'});

    $('.dropdown-toggle').prop('disabled', true);



});

function setLocate(data) {
    window.location.href=('/'+data+window.location.pathname.slice(3));
}

$(document).ready(function() {

    setTimeout(function(){
        $('body').addClass('loaded');
        $('h1').css('color','#222222');
    }, 500);

    $('td.change-link a').click(function (e) {
        e.preventDefault();
        window.location.href= 'http://www.infra911.com/'+$(this).attr('href');
    });

});



(function ($, window, document, undefined) {
    var jstree = {
        init: function () {
            $.getJSON('http://192.168.0.5:5005/tree.php', function (data) {
                $.each(data, function (key, value) {
                    if (data[key]['parent']=='g_') data[key]['parent']='#';
                    //add a properies
                    data[key]["a_attr"]=({
                        "gid":data[key]['gid'],
                        "nodeid":data[key]['nodeid']
                    });
                });
                datanew=JSON.parse(localStorage.getItem('data')).concat(data);
                $('#tree-container').jstree({

                        "core": {
                            "data":datanew,
                            "check_callback" : true,
                            "multiple" : false,
                            'themes' : {
                                'responsive' : false,
                                "dots" : false
                            }
                        },
                        "checkbox": {
                            "keep_selected_style": false
                        },

                        "plugins": ["state","contextmenu"]
                        //"dnd","search" ,
                })
                    .on('create_node.jstree', function (e, data) {
                    if (localStorage.getItem('data')===null) {
                        localStorage.setItem('data', JSON.stringify([{
                            "id": guid(),
                            'parent': data.node.parent,
                            'position': data.position,
                            'text': data.node.text,
                            'a_attr': {'gid': "1", 'nodeid': "1"},
                        }]));

                    }else {
                        localStorage.setItem('data', JSON.stringify(JSON.parse(localStorage.getItem('data')).concat(
                            {
                                "id": guid(),
                                'parent': data.node.parent,
                                'position': data.position,
                                'text': data.node.text,
                                'a_attr': {'gid': "1", 'nodeid': "1"},
                            }
                        )));
                    }
                    console.log(JSON.parse(localStorage.getItem('data')));
                }).on('rename_node.jstree', function (e, data) {

                    // console.log( [{
                    //     "id": guid(),
                    //     'parent': data.node.parent,
                    //     'position': data.position,
                    //     'text': data.node.text,
                    //     'a_attr': {'gid': "1", 'nodeid': "1"},
                    //     'state': {'opened': "false", 'disabled': "false", 'selected': "false"}
                    // }]);
                }).on('delete_node.jstree', function (e, data) {
                    /*$.get('response.php?operation=delete_node', {'id': data.node.id})
                        .fail(function () {
                            data.instance.refresh();
                        });*/
                });



            });
        }
    };
    $(document).ready(function () {
        $('#g_0').removeClass('jstree-open');
        $('#g_0').attr("aria-expanded", "false");
        jstree.init();

        setInterval(function(){
            $('#tree-container').removeAttr('aria-multiselectable','aria-activedescendant','aria-busy','tabindex','role');
            $('#tree-container').removeClass('jstree','jstree-1','jstree-default');
            jstree.init();
        },60000);

    });
})(jQuery, window, document);

function guid() {
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
    }
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
        s4() + '-' + s4() + s4() + s4();
}