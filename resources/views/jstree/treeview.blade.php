@extends('layouts.app')
<div id="tree-view">test</div>
@section('scripts')
    <script>
        $('#tree-view').jstree({
            'plugins': ['state','contextmenu','wholerow'],
            'core' : {
                'data' : {
                    "url" : "/jstree",
                    "plugins" : [ "wholerow", "checkbox" ],
                    "dataType" : "json" // needed only if you do not supply JSON headers
                }
            }
        })




        // var url = $.get("http://192.168.0.5:5005/tree.php", function () {
        // }).done(function (data) {
        //     var newdata = $.parseJSON(data);
        //     console.log(newdata);
        //     $('#tree-container')
        //         .jstree({
        //             "core" : {
        //                 "data" : newdata,
        //                 "themes": {
        //                     "url": true,
        //                     "icons": true,
        //                     "dots": true
        //                 },
        //                 "check_callback": true
        //             },
        //             "plugins": [ "dnd" ]
        //         });
        //
        // });


    </script>
@endsection
