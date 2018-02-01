$.get('http://www.infra911.com/data.php?Act=data1_6&paramGID=0&GidList=', function () {

}).done(function(data){
    var result = $.parseJSON(data.replace(/'/g, '"'));
    // var polltime = result[1].polltime;
    // var warning = result[1].warning;
    // var alarm = result[1].alarm;
    // var critical = result[1].critical;
    // var down = result[1].down;
    // $('#tab-2-polltime').empty().append(polltime);
    // $('#tab-2-warning').empty().append(warning);
    // $('#tab-2-alarm').empty().append(alarm);
    // $('#tab-2-critical').empty().append(critical);
    // $('#tab-2-down').empty().append(down);
    var html = '<table class="table-showInf">' +
                    '<tr>' +
                        '<th>' +
                        '<i class="fa fa-arrow-circle-right fa-1"></i>'+ 'Polltime' +
                        '</th>' +
                        '<td>' + result[1].polltime +
                        '</td> '+
                    '</tr>' +
                    '<tr>' +
                        '<th>' +
                        '<i class="fa fa-arrow-circle-right fa-1"></i>'+ 'Warning' +
                        '</th>' +
                        '<td>' + result[1].warning +
                        '</td> '+
                    '</tr>' +'<tr>' +
                        '<th>' +
                        '<i class="fa fa-arrow-circle-right fa-1"></i>'+ 'Alarm' +
                        '</th>' +
                        '<td>' + result[1].alarm +
                        '</td> '+
                    '</tr>' +'<tr>' +
                        '<th>' +
                        '<i class="fa fa-arrow-circle-right fa-1"></i>'+ 'Critical' +
                        '</th>' +
                        '<td>' + result[1].critical +
                        '</td> '+
                    '</tr>' +'<tr>' +
                        '<th>' +
                        '<i class="fa fa-arrow-circle-right fa-1"></i>'+ 'Down' +
                        '</th>' +
                        '<td>' + result[1].down +
                        '</td> '+
                    '</tr>' +
                '</table>'
    $('#tabs-2-tab-1').empty().append(html);
});
$(document).ready(function() {
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