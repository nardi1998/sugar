
@extends('template.admin_3')

@section('content')

 <section class="content-header">
      
    </section>
     <div class="charts-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-lg-6">
                    <div class="charts-single-pro shadow-reset nt-mg-b-15">
                        <div class="alert-title">
                            <h2>Grafik Data Demografi Berdasar Pekerjaan</h2><br><p></p>
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
