@extends('adminlte::page')

@section('title', 'PELAYANAN KELURAHAN')

@section('content_header')
<h4>Dashboard</h4>
@stop

@section('content')
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-info"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
@stop

@section('js')
<script src="https://adminlte.io/themes/AdminLTE/bower_components/chart.js/Chart.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/pages/dashboard2.js"></script>
@endsection
