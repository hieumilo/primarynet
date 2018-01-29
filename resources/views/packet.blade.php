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
                    <div class="gridster">
                        <ul>
                            @foreach($settings as $key=>$setting)
                                <li data-row="{{$setting->ROW}}" data-col="{{$setting->COL}}"
                                    data-id="{{$setting->ID}}"
                                    data-sizex="{{$setting->SIZEX}}" data-sizey="{{$setting->SIZEY}}">
                                    @if($key==0)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart1" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==1)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart2" style="width: 640px; height: 400px;" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==2)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart3" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==3)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart4" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==4)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart5" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==5)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart6" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==6)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart7" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==7)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart8" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @elseif($key==8)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart8" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @else
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart10" class="chartdiv"></div>
                                            </div>
                                        </section>
                                    @endif
                                </li>
                            @endforeach

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
        $('#tree-container').jstree({
            'plugins': ["wholerow", "checkbox"],
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
