@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div></div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="info-box bg-dark">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-archive"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Paket</span>
                        <h5 class="info-box-number">
                            {{ $dataPaket }}

                        </h5>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="info-box bg-dark">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-building"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Bangunan</span>
                        <h5 class="info-box-number">
                            {{ $dataBangunan }}

                        </h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop