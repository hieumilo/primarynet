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
                    {{--<div id="tree-container"></div>--}}
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

                                        <div id="tree-container"></div>
                                    </div>
                                </section>
                            </li>
                            <li data-row="1" data-col="1"
                                data-id="1"
                                data-sizex="5" data-sizey="6">
                                <section class="card card-blue-fill border-all-content">
                                    <header class="card-header">
                                        {{trans('auth.panel-title')}}
                                    </header>
                                    <div id="table-tree">
                                    </div>
                                    <div class="card-block " style="margin-top: 50px">

                                        <section class="tabs-section">
                                            <div class="tabs-section-nav">
                                                <div class="tbl">
                                                    <ul class="nav" role="tablist">
                                                        <ol class="nav-item">
                                                            <a class="nav-link active" href="#tabs-3-tab-1" role="tab" data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    Interface
                                                                    <span class="label label-pill label-danger">4</span>
                                                                </span>
                                                            </a>
                                                        </ol>
                                                        <ol class="nav-item">
                                                            <a class="nav-link" href="#tabs-3-tab-2" role="tab" data-toggle="tab" aria-expanded="false">
                                                                <span class="nav-link-in">
                                                                    Power
                                                                </span>
                                                            </a>
                                                        </ol>
                                                        <ol class="nav-item">
                                                            <a class="nav-link" href="#tabs-3-tab-3" role="tab" data-toggle="tab" aria-expanded="false">
                                                                <span class="nav-link-in">
                                                                    SNMP Status
                                                                </span>
                                                            </a>
                                                        </ol>
                                                    </ul>
                                                </div>
                                            </div><!--.tabs-section-nav-->

                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade" id="tabs-3-tab-2" aria-expanded="false">
                                                    <table id="table-sm" class="table table-bordered table-hover table-sm">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                            <th width="120">Date Created</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013</td>
                                                            <td>6 minutes ago</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Copyright (c) 1986-2007 by Cisco Systems, Inc.</td>
                                                            <td>25 minutes ago</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013</td>
                                                            <td>6 minutes ago</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Last quarter revene</td>
                                                            <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013</td>
                                                            <td>6 minutes ago</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!--.tab-pane-->
                                                <div role="tabpanel" class="tab-pane fade" id="tabs-3-tab-3" aria-expanded="false">
                                                    <table id="table-sm" class="table table-bordered table-hover table-sm">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Description</th>
                                                            <th width="120">Date Created</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Last quarter revene</td>
                                                                <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013</td>
                                                                <td>6 minutes ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last quarter revene</td>
                                                                <td class="color-blue-grey-lighter">Copyright (c) 1986-2007 by Cisco Systems, Inc.</td>
                                                                <td>25 minutes ago</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last quarter revene</td>
                                                                <td class="color-blue-grey-lighter">Revene for last quarter in state America for year 2013</td>
                                                                <td>6 minutes ago</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!--.tab-pane-->
                                            </div><!--.tab-content-->
                                        </section>
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
    </script>
@endsection
