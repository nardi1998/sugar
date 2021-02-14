@extends('template.admin_3')

@section('content')

				<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                       <div id="pekerjaan"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                       <div id="pendidikan"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                       <div id="jenis_kelamin"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                       <div id="agama"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
	
<script>
    
    Highcharts.chart('pekerjaan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Berdasarkan Pekerjaan'
    },
    subtitle: {
       
    },
    xAxis: {
        categories: [
            'Pegawai Negeri Sipil',
            'Pegawai Swasta',
            'Wiraswasta',
            'Swasta',
            'Ibu Rumah Tangga',
            'Pelajar'
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Banyak ()'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Jiwa</b></td></tr>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Jiwa</b></td></tr>',
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: '',
        data: [{{$PNS}}, {{$PS}}, {{$Wiraswasta}}, {{$Swasta}}, {{$IBR}}, {{$Pelajar}}]
    }]
    });
</script>

<script>
	
	Highcharts.chart('pendidikan', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Berdasarkan Pendidikan'
    },
    subtitle: {
       
    },
    xAxis: {
        categories: [
            'S1',
            'DIII',
            'SMA',
            'SMP',
            'SD',
            'TK',
            'Belum Sekolah'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Banyak ()'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Jiwa</b></td></tr>',
       
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: '',
        data: [{{$S1}}, {{$DIII}}, {{$SMA}}, {{$SMP}}, {{$SD}}, {{$TK}}, {{$Belum_Sekolah}}]

    }]
	});
</script>

<script>
	
	Highcharts.chart('jenis_kelamin', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Berdasarkan Jenis Kelamin'
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Jiwa</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:f} Jiwa',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: '',
        colorByPoint: true,
        data: [{
            name: 'Laki-Laki',
            y: {{$Laki_Laki}},
            sliced: true,
            selected: true
        }, {
            name: 'Perempuan',
            y: {{$Perempuan}}
        }]
    }]
});
</script>

<script>
	
	Highcharts.chart('agama', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Berdasarkan Agama'
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Jiwa</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                 format: '<b>{point.name}</b>: {point.y:f} Jiwa',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: '',
        colorByPoint: true,
        data: [{
            name: 'Islam',
            y: {{$Islam}},
            sliced: true,
            selected: true
        }, {
            name: 'Kristen',
            y: {{$Kristen}}
        }, {
            name: 'Khatolik',
            y: {{$Khatolik}}
        }, {
            name: 'Hindu',
            y: {{$Hindu}}
        }, {
            name: 'Budha',
            y: {{$Budha}}
        }, {
            name: 'Kong Hu Chu',
            y: {{$KongHuChu}}
        }]
    }]
});
</script>

@endsection