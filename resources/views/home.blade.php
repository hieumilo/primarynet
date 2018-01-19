@extends('layouts.app')

@section('content')

    <div class="mobile-menu-left-overlay"></div>



    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <!-- HUY  TABLE -->
                <div class="col-xl-6 dahsboard-column">
                    <div class="container-fluid">
                        <section class="box-typical">
                            <div id="toolbar">
                                <div class="bootstrap-table-header">Table header</div>
                                <button id="remove" class="btn btn-danger remove" disabled>
                                    <i class="font-icon font-icon-close-2"></i> Delete
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table id="table"
                                       class="table table-striped"
                                       data-toolbar="#toolbar"
                                       data-search="true"
                                       data-show-refresh="true"
                                       data-show-toggle="true"
                                       data-show-columns="true"
                                       data-show-export="true"
                                       data-detail-view="true"
                                       data-detail-formatter="detailFormatter"
                                       data-minimum-count-columns="2"
                                       data-show-pagination-switch="true"
                                       data-pagination="true"
                                       data-id-field="id"
                                       data-page-list="[10, 25, 50, 100, ALL]"
                                       data-show-footer="false"
                                       data-response-handler="responseHandler">
                                </table>
                            </div>
                        </section><!--.box-typical-->

                    </div><!--.box-typical-dashboard-->
                </div>
            </div>
                <!-- HUY  TABLE -->

                {{--Son layout--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="gridster">
                            <ul>
                                @if(isset($settings))
                                    @foreach($settings as $setting)
                                        <li data-row="{{$setting->row}}" data-col="{{$setting->col}}"
                                            data-id="{{$setting->id}}"
                                            data-sizex="{{$setting->sizex}}" data-sizey="{{$setting->sizey}}"></li>
                                    @endforeach
                                @else
                                    @foreach($itemSetrings as $itemSetring)
                                        <li data-row="1" data-col="1"
                                            data-sizex="1" data-sizey="1"></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div><!--.col-->
            </div>
        </div>
    </div><!--.container-fluid-->
@endsection
