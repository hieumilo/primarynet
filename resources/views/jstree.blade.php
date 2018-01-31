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
                                        <div class="tabs-section">
                                            <div class="tabs-section-nav">
                                                <div class="tbl">
                                                    <ul class="nav" role="tablist">
                                                        <ol class="nav-item">
                                                            <a class="nav-link" href="#tabs-2-tab-1" role="tab"
                                                               data-toggle="tab" aria-expanded="false">
                                                                <span class="nav-link-in">
                                                                    SNMP Status
                                                                </span>
                                                            </a>
                                                        </ol>
                                                        <ol class="nav-item">
                                                            <a class="nav-link active" href="#tabs-2-tab-2" role="tab"
                                                               data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    Temperature/Fan/Power/Session
                                                                    <span class="label label-pill label-danger">2</span>
                                                                </span>
                                                            </a>
                                                        </ol>
                                                        <ol class="nav-item">
                                                            <a class="nav-link" href="#tabs-2-tab-3" role="tab" data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    ICMP/CPU/Memory
                                                                </span>
                                                            </a>
                                                        </ol>
                                                        <ol class="nav-item">
                                                            <a class="nav-link" href="#tabs-2-tab-4" role="tab" data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    Map Icon
                                                                </span>
                                                            </a>
                                                        </ol>
                                                    </ul>
                                                </div>
                                            </div><!--.tabs-section-nav-->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in" id="tabs-2-tab-1" aria-expanded="true">
                                                    {{--Talbe JS--}}
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade active show" id="tabs-2-tab-2" aria-expanded="false">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <table class="table-showInf" id="tab2-Info">
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> Affiliated Group</th>
                                                                    <td>
                                                                        <select class="form-control" id="sel1">
                                                                            <option>Promise</option>
                                                                            <option>Collection</option>
                                                                            <option>Synchronous</option>
                                                                            <option>Asynchronous</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> Ip Address</th>
                                                                    <td>
                                                                        <input type="text" class="form-control" id="ip-address-mask-input" placeholder="192.168.2.5">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> SNMP Comunity</th>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> SNMP Timeout (Sec)</th>
                                                                    <td>
                                                                        <input type="email" class="form-control" id="time-mask-input" placeholder="12:00:25">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> System Type</th>
                                                                    <td>
                                                                        <select class="form-control" id="sel1">
                                                                            <option>NAN</option>
                                                                            <option>NULL</option>
                                                                            <option>UNDEFINED</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> System Name</th>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> Explanation</th>
                                                                    <td>
                                                                        <textarea class="form-control" rows="5">
                                                                            The Cisco Designated VIP program recognizes the top external individual contributors in Cisco's online communities, including the Cisco Support Community (CSC) and the Cisco Learning Network (CLN). Cisco Designated VIPs are recognized by their peers for their expertise and tireless contributions
                                                                        </textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> System History</th>
                                                                    <td>
                                                                        <textarea class="form-control" rows="5">Designated VIPs will have a "badge" placed next to their user name on the communities to announce their achievement. The badge will indicate their Designated VIP status and display the category in which they earned their status</textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> SNMP V3 Option</th>
                                                                    <td>
                                                                        <div class="checkbox-bird">
                                                                            <input type="checkbox" id="check-v2">
                                                                            <label for="check-v2">V2</label>
                                                                        </div>
                                                                        <div class="checkbox-bird">
                                                                            <input type="checkbox" id="check-v5">
                                                                            <label for="check-v5">V5</label>
                                                                        </div>
                                                                        <div class="checkbox-bird">
                                                                            <input type="checkbox" id="check-l7" >
                                                                            <label for="check-l7">L7</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-7">
                                                        <table class="table-showInf" id="tab2-Info">
                                                            <tr>
                                                                <th><i class="fa fa-arrow-circle-right fa-1"></i> Affiliated Group</th>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="1">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><i class="fa fa-arrow-circle-right fa-1"></i> Data</th>
                                                                <td>
                                                                    <select class="form-control" id="sel1">
                                                                        <option>Asynchronous</option>
                                                                        <option>Collection</option>
                                                                        <option>Synchronous</option>
                                                                        <option>Promise</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><i class="fa fa-arrow-circle-right fa-1"></i> SNMP Timeout (Sec)</th>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="3600">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><i class="fa fa-arrow-circle-right fa-1"></i> STMTP Timeout (Sec)</th>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="2500">
                                                                </td>
                                                            </tr><tr>
                                                                <th><i class="fa fa-arrow-circle-right fa-1"></i> HKT Timeout (Sec)</th>
                                                                <td>
                                                                    <input type="text" class="form-control" placeholder="1400">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><i class="fa fa-arrow-circle-right fa-1"></i> SNMP Comunity</th>
                                                                <td>
                                                                    <div class="checkbox-bird">
                                                                        <input type="checkbox" id="check-bird-9">
                                                                        <label for="check-bird-9">Visa</label>
                                                                    </div>
                                                                    <div class="checkbox-bird">
                                                                        <input type="checkbox" id="check-bird-7">
                                                                        <label for="check-bird-7">Master</label>
                                                                    </div>
                                                                    <div class="checkbox-bird">
                                                                        <input type="checkbox" id="check-bird-8" >
                                                                        <label for="check-bird-8">Union</label>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                    </div>
                                                </div><!--.tab-pane-->
                                                <div role="tabpanel" class="tab-pane fade active" id="tabs-2-tab-3" aria-expanded="false">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <table class="table-showInf" id="tab2-Info">
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> Affiliated Group</th>
                                                                    <td>
                                                                        <input type="text" class="form-control" placeholder="1">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> Data</th>
                                                                    <td>
                                                                        <select class="form-control" id="sel1">
                                                                            <option>Asynchronous</option>
                                                                            <option>Collection</option>
                                                                            <option>Synchronous</option>
                                                                            <option>Promise</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> SNMP Timeout (Sec)</th>
                                                                    <td>
                                                                        <input type="text" class="form-control" placeholder="3600">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> STMTP Timeout (Sec)</th>
                                                                    <td>
                                                                        <input type="text" class="form-control" placeholder="2500">
                                                                    </td>
                                                                </tr><tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> HKT Timeout (Sec)</th>
                                                                    <td>
                                                                        <input type="text" class="form-control" placeholder="1400">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th><i class="fa fa-arrow-circle-right fa-1"></i> SNMP Comunity</th>
                                                                    <td>
                                                                        <div class="checkbox-bird">
                                                                            <input type="checkbox" id="check-bird-9">
                                                                            <label for="check-bird-9">Visa</label>
                                                                        </div>
                                                                        <div class="checkbox-bird">
                                                                            <input type="checkbox" id="check-bird-7">
                                                                            <label for="check-bird-7">Master</label>
                                                                        </div>
                                                                        <div class="checkbox-bird">
                                                                            <input type="checkbox" id="check-bird-8" >
                                                                            <label for="check-bird-8">Union</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div><!--.tab-pane-->
                                                <div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-4" aria-expanded="false">Tab 4</div><!--.tab-pane-->
                                            </div>
                                        </div>
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
