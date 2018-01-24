@extends('layouts.app')

@section('content')
    <div class="mobile-menu-left-overlay"></div>

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
                                                <div id="chart2" class="chartdiv"></div>
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
                                                <div id="tree-container" >

                                                </div>
                                            </div>
                                        </section>
                                    @elseif($key==5)
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <section class="box-typical" id="datatable-session">
                                                    <div id="toolbar">
                                                        <div class="bootstrap-table-header">{{trans('auth.table-header')}}</div>
                                                        <button id="add" class="btn btn-success remove" data-toggle="modal" data-target="#add-item">
                                                            Add
                                                        </button>
                                                        <div class="modal fade" id="add-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Item</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form data-toggle="validator" id="addForm">
                                                                        {{ csrf_field() }}
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="GID" class="form-control" placeholder="GID"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="GID-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEID" class="form-control" placeholder="Node ID"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="NODEID-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEIP" class="form-control" placeholder="Node IP"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="NODEIP-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODENAME" class="form-control" placeholder="Node Name"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="NODENAME-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTSTART" class="form-control" placeholder="Node EVTSTART YYYY/MM/DD"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTSTART-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTEND" class="form-control" placeholder="Node EVTEND YYYY/MM/DD"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTEND-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTOPEN" class="form-control" placeholder="EVTOPEN"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTOPEN-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODESTAT" class="form-control" placeholder="NODESTAT"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="NODESTAT-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTDESCR" class="form-control" placeholder="EVTDESCR"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTDESCR-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTCOMMENT" class="form-control" placeholder="EVTCOMMENT"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTCOMMENT-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTID" class="form-control" placeholder="EVTID"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTID-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTIGNORE" class="form-control" placeholder="EVTIGNORE"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTIGNORE-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTNOTIFY" class="form-control" placeholder="EVTNOTIFY"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTNOTIFY-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CLSNOTIFY" class="form-control" placeholder="CLSNOTIFY"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="CLSNOTIFY-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTGROUP" class="form-control" placeholder="EVTGROUP"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTGROUP-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="WCHK" class="form-control" placeholder="WCHK"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="WCHK-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CURWEIGHT" class="form-control" placeholder="CURWEIGHT"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="CURWEIGHT-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTITEM" class="form-control" placeholder="EVTITEM"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="EVTITEM-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CHKDATE" class="form-control" placeholder="CHKDATE"  />
                                                                                        <span class="text-danger">
                                                                                            <strong id="CHKDATE-error"></strong>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" id="submitForm" class="btn btn-primary crud-submit-add">Save changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button id="remove" class="btn btn-danger remove" disabled>
                                                            <i class="font-icon font-icon-close-2"></i> Delete
                                                        </button>

                                                        <button id="edit" class="btn btn-default remove">
                                                            Edit
                                                        </button>

                                                        <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Item</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form>
                                                                        {{ csrf_field() }}
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="GID" class="form-control" placeholder="GID"  />
                                                                                        <span class="text-danger" id="GIDe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEID" class="form-control" placeholder="Node ID" />
                                                                                         <span class="text-danger" id="NODEIDe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODEIP" class="form-control" placeholder="Node IP"  />
                                                                                         <span class="text-danger" id="NODEIPe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODENAME" class="form-control" placeholder="Node Name"  />
                                                                                         <span class="text-danger" id="NODENAMEe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTSTART" class="form-control" placeholder="Node EVTSTART YYYY/MM/DD"  />
                                                                                         <span class="text-danger" id="EVTSTARTe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTEND" class="form-control" placeholder="Node EVTEND YYYY/MM/DD"  />
                                                                                         <span class="text-danger" id="EVTENDe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTOPEN" class="form-control" placeholder="EVTOPEN"  />
                                                                                         <span class="text-danger" id="EVTOPENe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="NODESTAT" class="form-control" placeholder="NODESTAT"  />
                                                                                         <span class="text-danger" id="NODESTATe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTDESCR" class="form-control" placeholder="EVTDESCR"  />
                                                                                         <span class="text-danger" id="EVTDESCRe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTCOMMENT" class="form-control" placeholder="EVTCOMMENT"  />
                                                                                         <span class="text-danger" id="EVTCOMMENTe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTID" class="form-control" placeholder="EVTID"  />
                                                                                         <span class="text-danger" id="EVTIDe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTIGNORE" class="form-control" placeholder="EVTIGNORE"  />
                                                                                         <span class="text-danger" id="EVTIGNOREe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTNOTIFY" class="form-control" placeholder="EVTNOTIFY"  />
                                                                                         <span class="text-danger" id="EVTNOTIFYe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CLSNOTIFY" class="form-control" placeholder="CLSNOTIFY"  />
                                                                                         <span class="text-danger" id="CLSNOTIFYe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTGROUP" class="form-control" placeholder="EVTGROUP"  />
                                                                                         <span class="text-danger" id="EVTGROUPe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="WCHK" class="form-control" placeholder="WCHK"  />
                                                                                         <span class="text-danger" id="WCHKe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CURWEIGHT" class="form-control" placeholder="CURWEIGHT"  />
                                                                                         <span class="text-danger" id="CURWEIGHTe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="EVTITEM" class="form-control" placeholder="EVTITEM"  />
                                                                                         <span class="text-danger" id="EVTITEMe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" name="CHKDATE" class="form-control" placeholder="CHKDATE"  />
                                                                                         <span class="text-danger" id="CHKDATEe-error">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary crud-submit-edit">Edit changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                </section><!--.box-typical-dashboard-->
                                            </div>
                                        </section>

                                    @else
                                        <section class="card card-blue-fill">
                                            <header class="card-header">
                                                {{trans('auth.panel-title')}}
                                            </header>
                                            <div class="card-block">
                                                <div id="chart5" class="chartdiv"></div>
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

@endsection
@section('scripts')
    <script>
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
    </script>
@endsection
