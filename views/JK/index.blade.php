
@extends('template.dasboard')

@section('content')

 <section class="content-header">
      
    </section>

    <div class="pie-bar-line-area mg-tb-30">
        <div class="container-fluid">
            <div class="row" style="margin-left: 250px;">
                <div class="col-lg-8">
                    <div class="sparkline10-list shadow-reset">
                        <div class="sparkline10-hd">
                            <div class="main-sparkline10-hd">
                                <h1>Grafik Data Demografi<span class="c3-ds-n"> Berdasarkan Agama</span></h1>
                                        
                            </div>
                        </div>
                            <div class="sparkline10-graph">
                            <div id="pie_1"></div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

@endsection
