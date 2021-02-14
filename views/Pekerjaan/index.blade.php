
@extends('template.admin_3')

@section('content')

 	<section class="content-header">
      <section class="content-header">
      <h1 style="text-align: center; color: white;">
        Master Data Penduduk Dusun Sawah Rendam
      </h1>
  	</section>
    <br><br>
    <div class="charts-area mg-b-15" style="width: 500px; height: 500px; margin-left: 450px;">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-lg-8">
                    <div class="charts-single-pro shadow-reset nt-mg-b-30">
                        <div class="alert-title">
                            <h2>Grafik Data Demografi Berdasar Pekerjaan</h2><br>
                                <p></p>
                        </div>
                        <div id="pie-chart">
                            <canvas id="piechart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
