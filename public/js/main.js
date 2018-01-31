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

    /*$('.site-header-collapsed .dropdown').each(function() {
        $('.dropdown-toggle').hover(
            function () {
                setTimeout(function () {
                    $('.dropdown-menu').addClass('display-block')
                }, 3000);
            },
            function () {
                setTimeout(function () {
                    $('.dropdown-menu').removeClass('display-block')
                }, 3000);
            }
        )
    });*/


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

// $.getJSON('http://192.168.0.5:5005/tree.php', function (data) {
//     $.each(data, function (key, value) {
//         if (data[key]['parent']=='g_') data[key]['parent']='#';
//     });
//     $('#tree-container')
//         .jstree({
//             "core" : {
//                 "data" : data
//                 /*"themes": {
//                     "url": true,
//                     "icons": true,
//                     "dots": true
//                 },
//                 "check_callback": true*/
//             },
//             "plugins": [ "dnd","search" ]
//         });
//
// });


setInterval(function(){

},1000);




/*$('body').on('mouseenter mouseleave','.dropdown',function(e){
    var _d=$(e.target).closest('.dropdown-menu');_d.addClass('display-block');
    setTimeout(function(){
        _d[_d.is(':hover')?'addClass':'removeClass']('display-block');
    },800);
});*/

// $('body').on('mouseenter mouseleave', '.dropdown', function (e) {
//     var _d = $(e.target).close('.dropdown'); _d.addClass('show');
//     setTimeout(function () {
//         _d[_d.is(':hover')] ? 'addClass':'removeClass']('show');
//     },100);
// });
(function ($, window, document, undefined) {
    var jstree = {
        init: function () {
            $.getJSON('http://192.168.0.5:5005/tree.php', function (data) {
                $.each(data, function (key, value) {
                    if (data[key]['parent']=='g_') data[key]['parent']='#';
                });
                $('#tree-container').jstree({
                        "core": {
                            "data":data
                        },
                        "checkbox": {
                            "keep_selected_style": false
                        },
                        "plugins": ["dnd","search" ]
                    }
                );
            });
        }
    };
    $(document).ready(function () {
        jstree.init();

        setInterval(function(){
            jstree.init();
        },5000);

        // setTimeout(function(){
        //     jstree.init();
        // }, 5000);
    });
})(jQuery, window, document);