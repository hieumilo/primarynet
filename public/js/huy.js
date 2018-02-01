//get data serve
function dataGrid(gid, nodeid) {
    $.get('http://www.infra911.com/data.php?Act=data1_6&paramGID='+gid+'&GidList='+nodeid, function (data) {
        var result = $.parseJSON(data.replace(/'/g, '"'));
        var table = ` <div class="card-block" >
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <table class="table-showInf" id="table-head-1">
                                                        <tr>
                                                            <th><i class="fa fa-arrow-circle-right fa-1"></i> Group Name
                                                            </th>
                                                            <td>
                                                                Head Office
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-arrow-circle-right fa-1"></i> Ip Adress
                                                            </th>
                                                            <td>
                                                                160.154.0.87
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-arrow-circle-right fa-1"></i> System
                                                                Description
                                                            </th>
                                                            <td>
                                                                Cisco IOS Software, C3560 Software
                                                                (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE
                                                                SOFTWARE (fc1)
                                                                Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-5">
                                                    <table class="table-showInf" id="table-head-2">
                                                        <tr>
                                                            <th><i class="fa fa-arrow-circle-right fa-1"></i> Host Name
                                                            </th>
                                                            <td>
                                                                http://www.infra911.com
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-arrow-circle-right fa-1"></i> System
                                                                Name
                                                            </th>
                                                            <td>
                                                                http://www.infra911.com
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="tabs-section">
                                                <div class="tabs-section-nav">
                                                    <div class="tbl">
                                                        <ul class="nav" role="tablist">
                                                            <ol class="nav-item">
                                                                <a class="nav-link active" href="#tabs-2-tab-2"
                                                                   role="tab"
                                                                   data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    Temperature/Fan/Power/Session
                                                                    <span class="label label-pill label-danger">2</span>
                                                                </span>
                                                                </a>
                                                            </ol>
                                                            <ol class="nav-item">
                                                                <a class="nav-link" href="#tabs-2-tab-3" role="tab"
                                                                   data-toggle="tab" aria-expanded="true">
                                                                <span class="nav-link-in">
                                                                    ICMP/CPU/Memory
                                                                </span>
                                                                </a>
                                                            </ol>
                                                        </ul>
                                                    </div>
                                                </div><!--.tabs-section-nav-->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane fade active show"
                                                         id="tabs-2-tab-2" aria-expanded="false">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <table class="table-editInf" id="table-body-1">
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            Affiliated Group
                                                                        </th>
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
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            Ip Address
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   id="ip-address-mask-input"
                                                                                   placeholder="192.168.2.5">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            SNMP Comunity
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="1400">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            SNMP Timeout
                                                                        </th>
                                                                        <td>
                                                                            <input type="email" class="form-control"
                                                                                   id="time-mask-input"
                                                                                   placeholder="12:00:25">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            System Type
                                                                        </th>
                                                                        <td>
                                                                            <select class="form-control" id="sel1">
                                                                                <option>NAN</option>
                                                                                <option>NULL</option>
                                                                                <option>UNDEFINED</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            System Name
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="1400">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            Explanation
                                                                        </th>
                                                                        <td>
                                                                        <textarea class="form-control" rows="5">
                                                                            Cisco IOS Software, C3560 Software (C3560-ADVIPSERVICESK9-M), Version 12.2(35)SE5, RELEASE SOFTWARE (fc1)
                                                                            Copyright (c) 1986-2007 by Cisco Systems, Inc.
                                                                            Compiled Fri 20-Jul-07 01:44 by nachen
                                                                        </textarea>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            SNMP V3 Option
                                                                        </th>
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
                                                                                <input type="checkbox" id="check-l7">
                                                                                <label for="check-l7">L7</label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <table class="table-editInf" id="tab2-Info">
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            Display Rank
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="1">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            Equipment Group
                                                                        </th>
                                                                        <td>
                                                                            <select class="form-control" id="sel1">
                                                                                <option>Switch</option>
                                                                                <option>Router</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            SNMP Port
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="161">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            STMTP Retry
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="1">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            System Options
                                                                        </th>
                                                                        <td>
                                                                            <div class="checkbox-bird">
                                                                                <input type="checkbox" id="check-snmp-v1">
                                                                                <label for="check-snmp-v1">SNMP V1</label>
                                                                            </div>
                                                                            <div class="checkbox-bird">
                                                                                <input type="checkbox" id="check-snmp-v3">
                                                                                <label for="check-snmp-v3">SNMP V3</label>
                                                                            </div>
                                                                            <div class="checkbox-bird">
                                                                                <input type="checkbox" id="check-rescource">
                                                                                <label for="check-rescource">Host Rescource</label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                </table>
                                                                <div class="style-btnSave">
                                                                    <button type="submit" class="btn btn-inline btn-primary-outline">Save</button>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div><!--.tab-pane-->
                                                    <div role="tabpanel" class="tab-pane fade active" id="tabs-2-tab-3"
                                                         aria-expanded="false">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <table class="table-showInf" id="tab2-Info">
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            Affiliated Group
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="1">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            Data
                                                                        </th>
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
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            SNMP Timeout (Sec)
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="3600">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-arrow-circle-right fa-1"></i>
                                                                            STMTP Timeout (Sec)
                                                                        </th>
                                                                        <td>
                                                                            <input type="text" class="form-control"
                                                                                   placeholder="2500">
                                                                        </td>
                                                                    </tr>
                                                                 
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div><!--.tab-pane-->
                                                </div>

                                            </div>
                                            
                                        </div>
                                        
        `;

        $('#table-tree').empty().append(table).hide().fadeIn('slow');
    });
}




$(document).ready(function() {
    //load default data
    dataGrid(0,6);
    //click tree event
    $(document).on('click', '.jstree-anchor', function(e) {
        e.preventDefault();
        //get data Grid
        dataGrid($(this).attr('gid'),$(this).attr('nodeid'));
    });

    $('#date-mask-input').mask("00/00/0000", {placeholder: "__/__/____"});
    $('#time-mask-input').mask('00:00:00');
    $('#date-and-time-mask-input').mask('00/00/0000 00:00:00', {placeholder: "__/__/____ __:__:__"});
    $('#zip-code-mask-input').mask('00000-000', {placeholder: "_____-___"});
    $('#money-mask-input').mask('000.000.000.000.000,00', {reverse: true});
    $('#phone-mask-input').mask('0000-0000', {placeholder: "____-____"});
    $('#phone-with-code-area-mask-input').mask('(00) 0000-0000', {placeholder: "(__) ____-____"});
    $('#us-phone-mask-input').mask('(000) 000-0000', {placeholder: "(___) ___-____"});
    $('#ip-address-mask-input').mask('099.099.099.099');
    $('#mixed-mask-input').mask('AAA 000-S0S');
});