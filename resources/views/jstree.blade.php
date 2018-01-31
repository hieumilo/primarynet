@extends('layouts.app')

@section('content')
    @role('Admin')
    <div class="mobile-menu-left-overlay"></div>

    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <div class="page-content">
        <div class="container-fluid">
            {{--Son layout--}}
            <div class="row">
                <div class="col-md-12">
                    <div id="tree-container"></div>
                    <div class="gridster">
                        <ul>
                            {{--@foreach($settings as $key=>$setting)--}}
                            <li data-row="1" data-col="1"
                                data-id="1"
                                data-sizex="1" data-sizey="6">
                                <section class="card card-blue-fill">
                                    <header class="card-header">
                                        {{trans('auth.panel-title')}}
                                    </header>
                                    <div class="card-block jstree-main">

                                    </div>
                                </section>
                            </li>
                            <li data-row="1" data-col="1"
                                data-id="1"
                                data-sizex="5" data-sizey="6">
                                <section class="card card-blue-fill">
                                    <header class="card-header">
                                        {{trans('auth.panel-title')}}
                                    </header>
                                    <div class="card-block">
                                        á
                                    </div>
                                </section>
                            </li>


                        </ul>
                    </div>
                </div><!--.col-->
            </div>
        </div>
    </div><!--.container-fluid-->
    @endrole
    @role('User')
    <p style="text-align: center; margin-top: 500px;font-size: 60px">Welcome User</p>
    @endrole
@endsection
@section('scripts')
    <script>

        /*$.getJSON('http://192.168.0.5:5005/tree.php', function (data) {
            $.each(data, function (key, value) {
                if (data[key]['parent']=='g_') data[key]['parent']='#';
            });
            $('#tree-container')
                    .jstree({
                        "core" : {
                            "data" : data,
                            "themes": {
                                "url": true,
                                "icons": true,
                                "dots": true
                            },
                            "check_callback": true
                        },
                        "plugins": [ "dnd" ]
                    });

        });*/

    </script>
@endsection
