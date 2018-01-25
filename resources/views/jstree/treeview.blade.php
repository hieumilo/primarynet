@extends('layouts.master')
<div id="tree-container"></div>
@section('scripts')
    <script>
        $('#tree-container').jstree({
            'plugins': ['state','contextmenu','wholerow'],
            'core' : {
                'data' : {
                    "url" : "/jstree",
                    "plugins" : [ "wholerow", "checkbox" ],
                    "dataType" : "json" // needed only if you do not supply JSON headers
                }
            }
        })


    </script>
@endsection
