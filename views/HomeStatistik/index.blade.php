@extends('template.base')

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
            text: 'Banyak (Jiwa)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Orang</b></td></tr>',
    },
    plotOptions: {
        column: {
            
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
            text: 'Banyak (Jiwa)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            
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
        type: 'column'
    },
    title: {
        text: 'Berdasarkan Jenis Kelamin'
    },
    subtitle: {
       
    },
    xAxis: {
        categories: [
            'Laki Laki',
            'Perempuan',
            'Total'
           
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Banyak (Jiwa)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            
        }
    },
    series: [{
        name: '',
        data: [{{$Laki_Laki}}, {{$Perempuan}}, {{$Total}}]

    }]
	});
</script>

<script>
	
	Highcharts.chart('agama', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Berdasarkan Agama'
    },
    subtitle: {
       
    },
    xAxis: {
        categories: [
            'Islam',
            'Kristen',
            'Khatolik',
            'Hindu',
            'Budha',
            'Kong Hu Chu'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Banyak (Jiwa)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} Orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            
        }
    },
    series: [{
        name: '',
        data: [{{$Islam}}, {{$Kristen}}, {{$Khatolik}}, {{$Hindu}}, {{$Budha}}, {{$KongHuChu}}]

    }]
	});
</script>

@endsection