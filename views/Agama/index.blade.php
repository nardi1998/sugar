
@extends('template.admin_3')

@section('content')

 <section class="content-header">
      
    </section>

    <div class="pie-bar-line-area mg-tb-15">
        <div class="container-fluid">
            <div class="row" style="margin-left: 250px;">
            	<div class="col-lg-6">
                    <div class="sparkline10-list shadow-reset">
                        <div class="sparkline10-hd">
                            <div class="main-sparkline10-hd">
                                <h1>Grafik Data Demografi<span class="c3-ds-n"> Berdasarkan Agama</span></h1>
                                        
                            </div>
                        </div>
                            <div class="sparkline10-graph">
                            <div id="pie"></div>
                    </div>
                    <br>
                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                    <tr>
                        <td>Islam</td>
                        <td>1.250 Jiwa</td>
                    </tr>
                    <tr>
                        <td>Kristen</td>
                        <td>50 Jiwa</td>
                    </tr>
                    <tr>
                        <td>Khatolik</td>
                        <td>10 Jiwa</td>
                    </tr>
                    <tr>
                        <td>Hindu</td>
                        <td>20 Jiwa</td>
                    </tr>
                    <tr>
                        <td>Budha</td>
                        <td>250 Jiwa</td>
                    </tr>
                    <tr>
                        <td>Kong Hu Chu</td>
                        <td>150 Jiwa</td>
                    </tr>
                    
                </table>
                </div>
            </div>  
        </div>
    </div>

@endsection
 