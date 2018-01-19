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

});
$(document).ready(function(){
    //fill data to tree  with AJAX call
    $('#tree-container').jstree({
        'plugins': ["wholerow", "checkbox"],
        'core' : {
            'data' : {
                "url" : "http://localhost:8000/jstree",
                "plugins" : [ "wholerow", "checkbox" ],
                "dataType" : "json" // needed only if you do not supply JSON headers
            }
        }
    })
});